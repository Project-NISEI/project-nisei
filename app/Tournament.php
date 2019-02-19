<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
	protected $fillable = ['date','reg_time','start_time','venue','address','link','region','subregion','entry_fee','contact_email','publish_email','tournament_set_id'];

	public function tournamentset() {
		return $this->belongsTo('App\TournamentSet', 'tournament_set_id');
	}

	public static $enum_region = ["NA" => "North America", "Europe" => "Europe", "RoW" => "Rest of World"];
}
