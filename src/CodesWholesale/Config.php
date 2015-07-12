<?php namespace CodesWholesale;

class Config {
  private static $config = [
    /**
    * API Keys
    */
    'cw.client_id' => '',
    'cw.client_secret' => '',
    /**
     * CodesWholesale ENDPOINT
     */
    'cw.endpoint_uri' => \CodesWholesale\CodesWholesale::LIVE_ENDPOINT,
    /**
    * Due to security reasons you should use SessionStorage only while testing.
    * In order to go live you should change it do database storage.
    */
    'cw.token_storage' => new \fkooman\OAuth\Client\SessionStorage()
  ];

  public static function getConfig() {
    return self::config;
  }
}
