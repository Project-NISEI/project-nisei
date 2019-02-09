<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

use App\TournamentSet;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
	View::share('active_tournament_sets', TournamentSet::getActive());

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
