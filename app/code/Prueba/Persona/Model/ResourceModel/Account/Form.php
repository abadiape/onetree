<?php

/**
 * Description of Prueba_Persona_Model_ResourceModel_Account_Form
 *
 * @package    Prueba/Persona
 * @author     Onetree Team (Pedro R. Abadía) <abadiape@gmail.com>
 */
namespace Prueba\Persona\Model\ResourceModel\Account;

class Form extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
    * Define main table
    */
    protected function _construct()
    {    
        $this->_init('persona', 'id');
    }
}

