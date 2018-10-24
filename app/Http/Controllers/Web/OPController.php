<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OPController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function indexForStores(Request $request)
    {
        $events = DB::table('events')
            ->where('active', 1)
            ->select('name', 'slug', 'type', 'price', 'listing_image')
            ->get();

        return view('pages.op.stores.index', [
            'events' => $events
        ]);
    }

    public function detailForStores(Request $request, $slug)
    {
        $event = DB::table('events')
            ->where('slug', $slug)
            ->where('active', 1)
            ->select('name', 'slug', 'type', 'price', 'content')
            ->first();

        if (!$event) {
            return view('errors.404');
        }

        return view('pages.op.stores.detail', [
            'event' => $event
        ]);
    }

}
