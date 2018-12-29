<?php
namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use URL;
use Session;
use Redirect;
use Input;

/** All Paypal Details class **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaypalController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /** setup PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    /**
     * Retrieve event
     *
     */
    private function getEvent($kit_slug) {

        $event = DB::table('events')
            ->where('slug', $kit_slug)
            ->select('price', 'type', 'expires_on')
            ->first();

        return $event;
    }

    /**
     * Store a details of payment with paypal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPaymentWithPaypal(Request $request)
    {
        $event = $this->getEvent($request->kit_slug);
        if ($event->type != 'GNK' and $request->number_of_kits > 1) {
            Session::put('error','Unable to order more than 1 kit');
            return redirect()->back();
        }
        if ($event->expires_on < time()) {
            Session::put('error','Kit no longer on sale');
            return redirect()->back();
        }

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $price = max(floatval($event->price), $request->requested_price);

        \Log::debug($price);

        $item = new Item();
        $item->setName($request->kit_name) /** item name **/
            ->setCurrency('USD')
            ->setQuantity(max($request->number_of_kits, 1))
            ->setPrice($price); /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($price * max($request->number_of_kits, 1));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list);

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('status'))
            ->setCancelUrl(URL::route('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error','Connection timeout');
                return redirect()->back();
            } else {
                \Session::put('error','Some error occur, sorry for inconvenient');
                return redirect()->back();
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }

        \Session::put('error','Unknown error occurred');
        return redirect()->back();
    }

    public function getPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error','Payment failed');
            return redirect()->back();
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        /** PaymentExecution object includes information necessary **/
        /** to execute a PayPal account payment. **/
        /** The payer_id is added to the request query parameters **/
        /** when the user is redirected from paypal back to your site **/
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);
        /** dd($result);exit; /** DEBUG RESULT, remove it later **/
        if ($result->getState() == 'approved') {

            /** it's all right **/
            /** Here Write your database logic like that insert record or value in database if you want **/

            \Session::put('success','Payment success');
            return redirect()->back();
        }
        \Session::put('error','Payment failed');

        return redirect()->back();
    }
}
