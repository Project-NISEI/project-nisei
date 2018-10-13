<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{
    protected $blog;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function index(Request $request)
    {
        $articles = $this->blog::select('title', 'published_at', 'slug')
            ->get();

        \Log::debug($articles);

        return view('pages.blog.listing', [
            'articles' => $articles
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $article = $this->blog::select('title', 'published_at', 'content')
            ->where('slug', $slug)
            ->first();

        if (!$article) {
            return view('errors.404');
        }

        return view('pages.blog.detail', [
            'article' => $article
        ]);
    }
}
