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

namespace Prueba\Persona\Controller\Account\Save;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Prueba\Persona\Model\Account\Form;

/**
 * Class Form
 * @package Prueba\Persona\Controller\Account\Save
 */
class Form extends Action
{
    /**
     * @return ResponseInterface|ResultInterface|void
     */
    public function execute()
    {
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            $nombre   = $post['nombre'];
            $lastname    = $post['edad'];
            $phone       = $post['sexo'];

            // Display the succes saved form message
            $this->messageManager->addSuccessMessage('Form saved!');

            // Redirect to form page
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('/account/show/form');

            return $resultRedirect;
        }
    }
}
