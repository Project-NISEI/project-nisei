<?php

namespace App\Http\Controllers\Web;

use App\Tournament;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TournamentSetController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    
    public function detail(Request $request, $slug)
    {
        $set = DB::table('tournament_sets')
            ->where('slug', $slug)
	    ->where('display', 1)
            ->select('id', 'title')
	    ->first();
	    
	if (!$set) {
	    return view('errors.404');
	}

        $tournaments = DB::table('tournaments')
            ->where('tournament_set_id', $set->id)
            ->select('region', 'subregion', 'date', 'reg_time', 'start_time', 'venue', 'link', 'address', 'entry_fee', 'contact_email', 'publish_email')
	    ->orderBy('region')
	    ->orderBy('subregion')
	    ->orderBy('date')
	    ->orderBy('venue')
	    ->get();

        if ($tournaments->isEmpty()) {
            return view('errors.404');
        }
	
	$regions = array();
	
	foreach ($tournaments as $tournament) {
	  if (!array_key_exists($tournament->region, $regions)) {
	    $region = new \StdClass;
	    $region->name = Tournament::$enum_region[$tournament->region];
	    $region->subregions = array();
	    $regions[$tournament->region] = $region;
	  }
	  if (!array_key_exists($tournament->subregion, $regions[$tournament->region]->subregions)) {
	    $subregion = new \StdClass;
	    $subregion->name = $tournament->subregion;
	    $subregion->tournaments = array();
	    $regions[$tournament->region]->subregions[$tournament->subregion] = $subregion;
	  }
	  $tournament->address = str_replace("\n",'<br/>',htmlspecialchars($tournament->address));
	  $tournament->reg_time = date_format(date_create_from_format("H:i:s", $tournament->reg_time),"G:i");
	  $tournament->start_time = date_format(date_create_from_format("H:i:s", $tournament->start_time),"G:i");
	  array_push($regions[$tournament->region]->subregions[$tournament->subregion]->tournaments, $tournament);
	}

        return view('pages.op.tournaments', [
	    'set_title' => $set->title,
            'regions' => $regions
        ]);
    }
}
