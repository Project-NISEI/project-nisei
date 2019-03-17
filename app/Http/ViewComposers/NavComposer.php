<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\TournamentSet;
use App\Product;

class NavComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->active_tournament_sets = TournamentSet::getActive();
	$view->available_products = Product::getActive();
    }
}
