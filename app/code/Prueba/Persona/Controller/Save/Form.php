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
namespace Prueba\Persona\Controller\Save;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Prueba\Persona\Model\Account\Form as PersonaModel;

/**
 * Class Form
 * @package Prueba\Persona\Controller\Account\Save
 */
class Form extends Action
{    
    /** @var \Magento\Framework\Controller\ResultFactory  */
    protected $_resultFactory;

    /** @var \Prueba\Persona\Model\Account\Form  */
    protected $_model;

    public function __construct(
       ResultFactory $resultFactory,
       PersonaModel $model,
       Context $context
    )
    {
	/** @var \Magento\Framework\View\Result\PageFactory  */
	$this->_resultFactory = $resultFactory;
	$this->_model = $model;

	parent::__construct($context);
    }

    /**
     * @return ResponseInterface|ResultInterface|void
     */
    public function execute()
    {
        $formData = (array) $this->getRequest()->getPost();
        if (!empty($formData['nombre'])) {
	  try {
            $this->_model->setNombre($formData['nombre']);
            $this->_model->setEdad($formData['edad']);
            $this->_model->setSexo($formData['sexo']);
	    $this->_model->setCreatedAt(date('Y-m-d h:i:s', time()));
            $this->_model->setUpdatedAt(date('Y-m-d h:i:s', time())); 

	    $this->_model->save();//Deprecated, use Resource Model "save" to implement service contract persistence operations.

	    //Display the saved (success) form message
            $this->messageManager->addSuccessMessage('Form data saved!');           
	  } catch (Exception $e) {
		//Display the error (failed) saving form message
            	$this->messageManager->addErrorMessage('There was an error saving the data, please try again later!'); 
		
		echo 'Error: ',  $e->getMessage(), "\n";
	  }

             
        }
	else {
	   $this->messageManager->addErrorMessage('Please enter data, form cannot be empty!'); 
	}

	// Redirect to form page
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());

        return $resultRedirect;
    }
}
