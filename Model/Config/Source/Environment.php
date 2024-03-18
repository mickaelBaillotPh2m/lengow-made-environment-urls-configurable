<?php
namespace PH2M\LengowEnvironmentUrlsConfigurable\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Environment implements OptionSourceInterface
{
    public const PREPROD_ENVIRONMENT = 'preprod';
    public const PROD_ENVIRONMENT = 'prod';

    public function toOptionArray(): array
    {
        return [
            ['value' => static::PREPROD_ENVIRONMENT, 'label' => __('Preprod')],
            ['value' => static::PROD_ENVIRONMENT, 'label' => __('Prod')]
        ];
    }
}
