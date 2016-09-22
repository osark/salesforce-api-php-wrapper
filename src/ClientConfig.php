<?php namespace Crunch\Salesforce;

class ClientConfig implements ClientConfigInterface {

    /**
     * @var
     */
    private $loginUrl;
    /**
     * @var
     */
    private $clientId;
    /**
     * @var
     */
    private $clientSecret;
    /**
     * @var string
     */
    private $apiUrl;

    public function __construct($loginUrl, $clientId, $clientSecret, $apiUrl)
    {
        $this->loginUrl = $loginUrl;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->apiUrl = $apiUrl;
    }

    /**
     * @return string
     */
    public function getLoginUrl()
    {
        return $this->loginUrl;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    public function getApiUrl()
    {
        return $this->apiUrl;
    }

}