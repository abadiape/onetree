<?php
/**
 * Copyright © 2016 Onetree. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Prueba\Persona\Block\Account\Show;

use Magento\Store\Model\StoreManagerInterface;

/**
 * Persona Form Block
 */
class Form extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Store\Model\StoreManagerInterface $_storeManager
    */
    protected $_storeManager;
	
     /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
	StoreManagerInterface $storeManager,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);

	$this->_storeManager = $storeManager;
    }

    /**
     * Get form action URL for POST form request
     *
     * @return string
     */
    public function getFormAction()
    {
	$baseURL = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
        
	return $baseURL . 'persona/save/form';
    }
}
