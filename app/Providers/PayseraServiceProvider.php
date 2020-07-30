<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PayseraService;

class PayseraServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PayseraService::class, function ($app) {
            $paysera = new PayseraService([
                'projectid'     => 181601,
                'sign_password' => 'cba43dc5d1fc0796ffd171b784487c37'
                ]
            ); //singleton - vienas vienintelis cart
            return $paysera;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
