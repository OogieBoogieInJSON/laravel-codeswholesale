<?php namespace CodesWholesale;

use Illuminate\Support\ServiceProvider;

class CodesWholesaleServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
      $this->app->singleton('CodesWholesale', function($app) {
        $instance = CodesWholesale\ClientBuilder(CodesWholesale\Config::getConfig())->build();
        return $instance;
      });
    }
}
