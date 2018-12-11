<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFAQsRequest;
use App\Http\Requests\Admin\UpdateFAQsRequest;

class FaqsController extends Controller
{
    /**
     * Display a listing of Faqs
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('faqs_access')) {
            return abort(401);
        }

        if (request('show_deleted') == 1) {
            if (! Gate::allows('faqs_delete')) {
                return abort(401);
            }
            $faqs = Faq::onlyTrashed()->get();
        } else {
            $faqs = Faq::orderBy('index', 'asc')->get();
        }

        return view('admin.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating new Faq.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('faqs_create')) {
            return abort(401);
        }

        return view('admin.faqs.create');
    }

    /**
     * Store a newly created Faq in storage.
     *
     * @param  \App\Http\Requests\StoreFAQsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFAQsRequest $request)
    {
        if (! Gate::allows('faqs_create')) {
            return abort(401);
        }
        $faqs = Faq::create($request->all());



        return redirect()->route('admin.faqs.index');
    }


    /**
     * Show the form for editing Faq.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('faqs_edit')) {
            return abort(401);
        }

        $faq = Faq::findOrFail($id);

        return view('admin.faqs.edit', compact('faq'));
    }

    /**
     * Update Faq in storage.
     *
     * @param  \App\Http\Requests\UpdateFAQsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFAQsRequest $request, $id)
    {
        if (! Gate::allows('faqs_edit')) {
            return abort(401);
        }
        $faq = Faq::findOrFail($id);
        $faq->update($request->all());



        return redirect()->route('admin.faqs.index');
    }


    /**
     * Display Faq.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('faqs_view')) {
            return abort(401);
        }
        $faq = Faq::findOrFail($id);

        return view('admin.faqs.show', compact('faq'));
    }


    /**
     * Remove Faq from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('faqs_delete')) {
            return abort(401);
        }
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('admin.faqs.index');
    }

    /**
     * Delete all selected Faqs at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('faqs_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Faq::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Faq from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('faqs_delete')) {
            return abort(401);
        }
        $faq = Faq::onlyTrashed()->findOrFail($id);
        $faq->restore();

        return redirect()->route('admin.faqs.index');
    }

    /**
     * Permanently delete Faq from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('faqs_delete')) {
            return abort(401);
        }
        $faq = Faq::onlyTrashed()->findOrFail($id);
        $faq->forceDelete();

        return redirect()->route('admin.faqs.index');
    }
}
