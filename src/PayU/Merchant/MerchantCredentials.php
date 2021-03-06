<?php
/**
 * @author Leonardo Thibes <leonardothibes@gmail.com>
 * @copyright Copyright (c) The Authors
 */

namespace PayU\Merchant;

/**
 * Merchant credentials class.
 *
 * @package PayU\Credentials
 * @author Leonardo Thibes <leonardothibes@gmail.com>
 * @copyright Copyright (c) The Authors
 */
class MerchantCredentials
{
    /**
     * Singleton instance.
     * @var MerchantCredentials
     */
    protected static $instance = null;

    /**
     * Account id.
     * @var string
     */
    protected $accountId = null;

    /**
     * Merchant id.
     * @var string
     */
    protected $merchantId = null;

    /**
     * Merchant api login.
     * @var string
     */
    protected $apiLogin = null;

    /**
     * Merchant api key.
     * @var string
     */
    protected $apiKey = null;

    /**
     * Api URL.
     * @var string
     */
    protected $apiUrl = null;

    /**
     * Gets a singleton instance of class.
     * @return MerchantCredentials
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Block non singleton instance by visibility.
     */
    protected function __construct()
    {
        //Do nothing...yet
    }

    /**
     * Reset the singleton instance.
     */
    public function resetInstance()
    {
        self::$instance = null;
    }

    /**
     * Set api url.
     *
     * @param  string $apiUrl
     * @return MerchantCredentials
     */
    public function setApiUrl($apiUrl)
    {
        $this->apiUrl = (string)$apiUrl;
        return $this;
    }

    /**
     * Get api url.
     * @return string
     */
    public function getApiUrl()
    {
        return (string)$this->apiUrl;
    }

    /**
     * Set accountId
     *
     * @param  string $accountId
     * @return MerchantCredentials
     */
    public function setAccountId($accountId)
    {
        $this->accountId = (string)$accountId;
        return $this;
    }

    /**
     * Get accountId
     * @return string
     */
    public function getAccountId()
    {
        return (string)$this->accountId;
    }

    /**
     * Set the merchant id.
     *
     * @param  string $merchantId
     * @return MerchantCredentials
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = (string)$merchantId;
        return $this;
    }

    /**
     * Get the merchant id.
     * @return string
     */
    public function getMerchantId()
    {
        return (string)$this->merchantId;
    }

    /**
     * Set the merchant api login.
     *
     * @param  string $apiLogin
     * @return MerchantCredentials
     */
    public function setApiLogin($apiLogin = null)
    {
        $this->apiLogin = (string)$apiLogin;
        return $this;
    }

    /**
     * Get the merchant api login.
     * @return string
     */
    public function getApiLogin()
    {
        return (string)$this->apiLogin;
    }

    /**
     * Set the merchant api key.
     *
     * @param  string $apiKey
     * @return MerchantCredentials
     */
    public function setApiKey($apiKey = null)
    {
        $this->apiKey = (string)$apiKey;
        return $this;
    }

    /**
     * Get the merchant api key.
     * @return string
     */
    public function getApiKey()
    {
        return (string)$this->apiKey;
    }
}
