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
        $articles = DB::table('blogs')
            ->whereDate('published_at', '<=', Carbon::today()->toDateString())
            ->whereNull('deleted_at')
            ->join('users', 'blogs.author_id', '=', 'users.id')
            ->select('users.name as author_name', 'blogs.title', 'blogs.published_at', 'blogs.slug', 'blogs.listing_image')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('pages.blog.index', [
            'articles' => $articles
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $article = DB::table('blogs')
            ->where('slug', $slug)
            ->whereNull('deleted_at')
            ->join('users', 'blogs.author_id', '=', 'users.id')
            ->select('users.name as author_name', 'blogs.title', 'blogs.published_at', 'blogs.slug', 'blogs.content', 'blogs.listing_image')
            ->first();

        if (!$article) {
            return view('errors.404');
        }

        return view('pages.blog.detail', [
            'article' => $article
        ]);
    }
}
