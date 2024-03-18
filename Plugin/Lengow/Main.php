<?php
namespace PH2M\LengowEnvironmentUrlsConfigurable\Plugin\Lengow;

use PH2M\LengowEnvironmentUrlsConfigurable\Model\LengowConfig;

class Main
{
    public function __construct(
        protected LengowConfig $lengowConfig,
    ) {}

    public function afterIsPreprodPlugin(\Lengow\Connector\Block\Adminhtml\Main $subject, $result)
    {
        return !$this->lengowConfig->useProdEnvironment();
    }

    public function afterGetLengowSolutionUrl(\Lengow\Connector\Block\Adminhtml\Main $subject, $result)
    {
        return $this->lengowConfig->getLengowSolutionUrl();
    }
}
