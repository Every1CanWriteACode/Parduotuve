<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Services\CartService;
class CartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CartService::class, function ($app) {
            $cart = new CartService(); //singleton - vienas vienintelis cart
            $cart->request = $this->app->request;
            return $cart;
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