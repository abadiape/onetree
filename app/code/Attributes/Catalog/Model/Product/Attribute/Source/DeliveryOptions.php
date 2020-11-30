<?php

namespace Attributes\Catalog\Model\Product\Attribute\Source;

class DeliveryOptions extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * {@inheritdoc}
     */
    public function getAllOptions()
    {
        return [
            [
                'value' => '1 Mes',
                'label' => __('Opción 1'),
            ],	        
            [
                'value' => '3 Mes',
                'label' => __('Opción 2'),
            ],
            [
                'value' => '6 Mes',
                'label' => __('Opción 3'),
            ],	       
            [
                'value' => '9 Mes',
                'label' => __('Opción 4'),
            ],
            [
                'value' => '12 Mes',
                'label' => __('Opción 5'),
            ]
        ];
    }
}
