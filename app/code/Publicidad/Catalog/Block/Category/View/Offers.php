<?php
/**
 * Copyright © 2020 Onetree. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Publicidad\Catalog\Block\Category\View;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Category left sidebar Offers Block
 */
class Offers extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface $_scopeConfig
    */
    protected $_scopeConfig;
	
     /**
     * Construct
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $_scopeConfig
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
	ScopeConfigInterface $scopeConfig,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);

	$this->_scopeConfig = $scopeConfig;
    }

    /**
     * Get admin information about catalog category offers, if this is set for being displayed, and such info is configured.
     *
     * @return string
     */
    public function getOfferInformation()
    {
	$showInformation = $this->_scopeConfig->getValue('publicidad/configuration/active', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

	if ($showInformation) {
	   return $this->_scopeConfig->getValue('publicidad/configuration/information', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
        
	return ' ';
    }
}
