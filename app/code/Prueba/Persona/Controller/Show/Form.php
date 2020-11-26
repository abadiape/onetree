<?php
/**
 * Onetree
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the onetree.com license that is
 * available through the world-wide-web at this URL:
 * https://www.onetree.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Prueba
 * @package     Prueba_Persona
 * 
 */

namespace Prueba\Persona\Controller\Show;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;

/**
 * Class Form
 * @package Prueba\Persona\Controller\Show
 */
class Form extends Action
{
    /** @var \Magento\Framework\View\Result\PageFactory  */
    protected $_pageFactory;

    public function __construct(
      Context $context,
      PageFactory $pageFactory
    )
    {
	$this->_pageFactory = $pageFactory;
	parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {        

	return $this->_pageFactory->create();	
    }
}
