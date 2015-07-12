<?php

namespace CodesWholesale;

use CodesWholesale\Client\ProductImpl;
use CodesWholesale\Client\AccountImpl;
use \fkooman\OAuth\Client\Api;
use \fkooman\OAuth\Client\SessionStorage;
use \fkooman\OAuth\Client\Scope;

class ClientBuilder
{
    const CONFIGURATION_ID = "codeswholesale-config-id";

    private $clientConfig;
    private $oauthApi;

    public function __construct(array $params) {
        $this->clientConfig =  new CodesWholesaleClientConfig($params);
        $this->init();
    }

    public function build()
    {
       return new Client($this->oauthApi, ($this->clientConfig->getBaseUrl() . '/' . CodesWholesale::API_VERSION) );
    }

    protected function init() {
        if(!$this->oauthApi) {
            $this->oauthApi = new CodesWholesaleApi(self::CONFIGURATION_ID, $this->clientConfig, $this->clientConfig->getStorage(), new \Guzzle\Http\Client());
        }
    }
}