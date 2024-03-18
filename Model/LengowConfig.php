<?php

namespace PH2M\LengowEnvironmentUrlsConfigurable\Model;
use Magento\Framework\App\Config\ScopeConfigInterface;
use PH2M\LengowEnvironmentUrlsConfigurable\Model\Config\Source\Environment;

class LengowConfig
{

    public const LENGOW_PREPROD_DOMAIN = 'lengow.net';
    public const LENGOW_PROD_DOMAIN = 'lengow.io';

    public function __construct(
        protected ScopeConfigInterface $scopeConfig
    ) {}

    public function useProdEnvironment(): bool
    {
        return $this->scopeConfig->getValue('lengow_global_options/store_credential/global_environment') === Environment::PROD_ENVIRONMENT;
    }

    public function getLengowDomain(): string
    {
        if ($this->useProdEnvironment()) {
            return static::LENGOW_PROD_DOMAIN;
        } else {
            return static::LENGOW_PREPROD_DOMAIN;
        }
    }

    public function getLengowSolutionUrl(): string
    {
        return sprintf('//my.%s', $this->getLengowDomain());
    }

    public function getLengowApiUrl(): string
    {
        return sprintf('https://api.%s', $this->getLengowDomain());
    }
}
