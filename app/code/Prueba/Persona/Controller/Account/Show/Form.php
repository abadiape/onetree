<?php
/**
 * Onetree
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the mageplaza.com license that is
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

namespace Prueba\Persona\Controller\Account\Show;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;

/**
 * Class Form
 * @package Prueba\Persona\Controller\Account\Show
 */
class Form extends Action
{

    /**
     * @return ResponseInterface|ResultInterface|void
     */
    public function execute()
    {        
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
