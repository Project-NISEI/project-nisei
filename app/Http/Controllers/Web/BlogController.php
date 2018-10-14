<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        $articles = DB::table('blogs')
            ->join('users', 'blogs.author_id', '=', 'users.id')
            ->select('users.name as author_name', 'blogs.title', 'blogs.published_at', 'blogs.slug')
            ->get();

        return view('pages.blog.index', [
            'articles' => $articles
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $article = DB::table('blogs')
            ->where('slug', $slug)
            ->join('users', 'blogs.author_id', '=', 'users.id')
            ->select('users.name as author_name', 'blogs.title', 'blogs.published_at', 'blogs.slug', 'blogs.content')
            ->first();

        if (!$article) {
            return view('errors.404');
        }

        return view('pages.blog.detail', [
            'article' => $article
        ]);
    }
}
