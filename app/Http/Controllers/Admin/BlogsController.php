<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogsRequest;
use App\Http\Requests\Admin\UpdateBlogsRequest;

class BlogsController extends Controller
{
    /**
     * Display a listing of Blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('blog_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('blog_delete')) {
                return abort(401);
            }
            $blogs = Blog::onlyTrashed()->get();
        } else {
            $blogs = Blog::all();
        }

        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating new Blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('blog_create')) {
            return abort(401);
        }
        
        $authors = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $categories = \App\Category::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.blogs.create', compact('authors', 'categories'));
    }

    /**
     * Store a newly created Blog in storage.
     *
     * @param  \App\Http\Requests\StoreBlogsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogsRequest $request)
    {
        if (! Gate::allows('blog_create')) {
            return abort(401);
        }
        $blog = Blog::create($request->all());



        return redirect()->route('admin.blogs.index');
    }


    /**
     * Show the form for editing Blog.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('blog_edit')) {
            return abort(401);
        }
        
        $authors = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $categories = \App\Category::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $blog = Blog::findOrFail($id);

        return view('admin.blogs.edit', compact('blog', 'authors', 'categories'));
    }

    /**
     * Update Blog in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogsRequest $request, $id)
    {
        if (! Gate::allows('blog_edit')) {
            return abort(401);
        }
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());



        return redirect()->route('admin.blogs.index');
    }


    /**
     * Display Blog.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('blog_view')) {
            return abort(401);
        }
        $blog = Blog::findOrFail($id);

        return view('admin.blogs.show', compact('blog'));
    }


    /**
     * Remove Blog from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('blog_delete')) {
            return abort(401);
        }
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Delete all selected Blog at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('blog_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Blog::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Blog from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('blog_delete')) {
            return abort(401);
        }
        $blog = Blog::onlyTrashed()->findOrFail($id);
        $blog->restore();

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Permanently delete Blog from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('blog_delete')) {
            return abort(401);
        }
        $blog = Blog::onlyTrashed()->findOrFail($id);
        $blog->forceDelete();

        return redirect()->route('admin.blogs.index');
    }
}
