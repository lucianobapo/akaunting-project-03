<?php

namespace App\Providers;

use App\Models\Common\Company;
use App\Models\Setting\Currency;
use App\Models\Module\Module;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Observe company actions
        Company::observe('App\Observers\Company');
        
        Currency::observe('App\Observers\Currency');
        Module::observe('App\Observers\Module');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}