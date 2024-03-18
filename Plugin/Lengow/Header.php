<?php
namespace PH2M\LengowEnvironmentUrlsConfigurable\Plugin\Lengow;
use PH2M\LengowEnvironmentUrlsConfigurable\Model\LengowConfig;

class Header
{
    public function __construct(
        protected LengowConfig $lengowConfig,
    ) {}

    public function afterGetLengowSolutionUrl(\Lengow\Connector\Block\Adminhtml\Header $subject, $result)
    {
        return $this->lengowConfig->getLengowSolutionUrl();
    }
}
