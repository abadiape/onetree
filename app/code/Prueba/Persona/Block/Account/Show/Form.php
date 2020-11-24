<?php
/**
 * Copyright © 2016 Onetree. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Prueba\Persona\Block\Account\Show;

use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Persona Form Block
 */
class Form extends \Magento\Framework\View\Element\Template
{
    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
       }

    /**
     * Get form action URL for POST form request
     *
     * @return string
     */
    public function getFormAction()
    {
            // companymodule is given in routes.xml
            // controller_name is folder name inside controller folder
            // action is php file name inside above controller_name folder

        return '/account/show/form';
        // here controller_name is index, action is booking
    }
}
