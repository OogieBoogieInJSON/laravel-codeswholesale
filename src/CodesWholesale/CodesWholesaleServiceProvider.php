<?php namespace CodesWholesale;

use Illuminate\Support\ServiceProvider;
use CodesWholesale\Config;
use CodesWholesale\ClientBuilder;

class CodesWholesaleServiceProvider extends ServiceProvider {

    // /**
    //  * Bootstrap the application events.
    //  *
    //  * @return void
    //  */
    // public function boot() {

    // }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
      $this->app->singleton('CodesWholesale\ClientBuilder', function($app) {
        return new \CodesWholesale\ClientBuilder(\CodesWholesale\Config::getConfig())->build();
      });
    }
}
