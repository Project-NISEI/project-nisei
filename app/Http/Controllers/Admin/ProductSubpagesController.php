<?php

namespace App\Http\Controllers\Admin;

use App\ProductSubpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductSubpagesRequest;
use App\Http\Requests\Admin\UpdateProductSubpagesRequest;

class ProductSubpagesController extends Controller
{
    /**
     * Display a listing of ProductSubpage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('product_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('product_delete')) {
                return abort(401);
            }
            $subpages = ProductSubpage::onlyTrashed()->get();
        } else {
            $subpages = ProductSubpage::all();
        }

        return view('admin.product_subpages.index', compact('subpages'));
    }

    /**
     * Show the form for creating new Product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('product_create')) {
            return abort(401);
        }
        
        $products = \App\Product::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.product_subpages.create', compact('products'));
    }

    /**
     * Store a newly created ProductSubpage in storage.
     *
     * @param  \App\Http\Requests\StoreProductSubpagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductSubpagesRequest $request)
    {
        if (! Gate::allows('product_edit')) {
            return abort(401);
        }
        $subpage = ProductSubpage::create($request->all());



        return redirect()->route('admin.product_subpages.index');
    }


    /**
     * Show the form for editing Product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('product_edit')) {
            return abort(401);
        }
        
        $products = \App\Product::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $subpage = ProductSubpage::findOrFail($id);

        return view('admin.product_subpages.edit', compact('subpage', 'products'));
    }

    /**
     * Update Product in storage.
     *
     * @param  \App\Http\Requests\UpdateProductSubpagesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductSubpagesRequest $request, $id)
    {
        if (! Gate::allows('product_edit')) {
            return abort(401);
        }

        $subpage = ProductSubpage::findOrFail($id);
        $requestData = $request->all();

        $subpage->update($requestData);

        return redirect()->route('admin.product_subpages.index');
    }


    /**
     * Display ProductSubpage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('product_view')) {
            return abort(401);
        }
        $subpage = ProductSubpage::findOrFail($id);

        return view('admin.product_subpages.show', compact('subpage'));
    }


    /**
     * Remove ProductSubpage from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('product_delete')) {
            return abort(401);
        }
        $subpage = ProductSubpage::findOrFail($id);
        $subpage->delete();

        return redirect()->route('admin.product_subpages.index');
    }

    /**
     * Delete all selected ProductSubpage at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('product_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ProductSubpage::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore ProductSubpage from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('product_delete')) {
            return abort(401);
        }
        $subpage = ProductSubpage::onlyTrashed()->findOrFail($id);
        $subpage->restore();

        return redirect()->route('admin.product_subpages.index');
    }

    /**
     * Permanently delete ProductSubpage from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('blog_delete')) {
            return abort(401);
        }
        $subpage = ProductSubpage::onlyTrashed()->findOrFail($id);
        $subpage->forceDelete();

        return redirect()->route('admin.product_subpages.index');
    }
}
