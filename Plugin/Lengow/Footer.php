<?php
namespace PH2M\LengowEnvironmentUrlsConfigurable\Plugin\Lengow;

use PH2M\LengowEnvironmentUrlsConfigurable\Model\LengowConfig;

class Footer
{
    public function __construct(
        protected LengowConfig $lengowConfig,
    ) {}

    public function afterIsPreprodPlugin(\Lengow\Connector\Block\Adminhtml\Footer $subject, $result)
    {
        return !$this->lengowConfig->useProdEnvironment();
    }
}
