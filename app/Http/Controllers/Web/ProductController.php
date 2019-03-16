<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogController extends Controller
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
            ->where('published')
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
            ->where('published')
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
            ->where('published')
	    ->whereNull('deleted_at')
	    ->join('products', 'product_subpages.product_id', '=', 'products.id')
	    ->where('products.slug', $slug)
	    ->where('product_subpages.slug', $subpage_slug)
	    ->whereNull('products.deleted_at')
            ->first();

        if (!$subpage) {
            return view('errors.404');
        }

        return view('pages.product.subpage', [
            'subpage' => $subpage
        ]);
    }
}
