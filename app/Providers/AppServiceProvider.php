<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Search;
use AlgoliaSearch\Client;
use App\Services\AlgoliaSearch;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
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
