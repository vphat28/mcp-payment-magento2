<?php

namespace MCPIntegration\Payment\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Data
{
    private $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function isActive($store = null)
    {
        return $this->scopeConfig->isSetFlag('payment/mcp_gateway/active', ScopeInterface::SCOPE_STORE, $store);
    }

    public function getCurrencyMultiplier($currencyCode)
    {
        return 100;
    }

    public function isTestMode($store = null)
    {
        return $this->scopeConfig->isSetFlag('payment/mcp_gateway/test_mode', ScopeInterface::SCOPE_STORE, $store);
    }

    public function getAccountNumber($store = null)
    {
        return $this->scopeConfig->getValue('payment/mcp_gateway/account_number', ScopeInterface::SCOPE_STORE, $store);
    }

    public function getPaymentAction($store = null)
    {
        return $this->scopeConfig->getValue('payment/mcp_gateway/payment_action', ScopeInterface::SCOPE_STORE, $store);
    }

    public function getCCTypes($store = null)
    {
        return $this->scopeConfig->getValue('payment/mcp_gateway/cctypes', ScopeInterface::SCOPE_STORE, $store);
    }

    public function getAPIUsername($store = null)
    {
        return $this->scopeConfig->getValue('payment/mcp_gateway/api_username', ScopeInterface::SCOPE_STORE, $store);
    }

    public function getAPIPassword($store = null)
    {
        return $this->scopeConfig->getValue('payment/mcp_gateway/api_password', ScopeInterface::SCOPE_STORE, $store);
    }
}