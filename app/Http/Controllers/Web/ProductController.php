<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $products = DB::table('products')
            ->where('published', 1)
	    ->whereNull('deleted_at')
            ->orderBy('id', 'desc')
            ->get();

        return view('pages.product.index', [
            'products' => $products
        ]);
    }

    public function main(Request $request, $slug)
    {
        $product = DB::table('products')
            ->where('published', 1)
	    ->whereNull('deleted_at')
            ->where('slug', $slug)
            ->first();

        if (!$product) {
            return view('errors.404');
        }

        return view('pages.product.main', [
            'product' => $product
        ]);
    }

    public function subpage(Request $request, $slug, $subpage_slug)
    {
        $subpage = DB::table('product_subpages')
	    ->join('products', 'product_subpages.product_id', '=', 'products.id')
	    ->where('products.slug', $slug)
	    ->where('product_subpages.slug', $subpage_slug)
            ->where('product_subpages.published', 1)
	    ->whereNull('product_subpages.deleted_at')
	    ->where('products.published', 1)
	    ->whereNull('products.deleted_at')
	    ->select('product_subpages.title as title',
		     'product_subpages.content as content',
		     'products.title as product_title',
		     'products.slug as product_slug')
            ->first();

        if (!$subpage) {
            return view('errors.404');
        }

        return view('pages.product.subpage', [
            'subpage' => $subpage
        ]);
    }
}
