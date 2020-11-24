<?php
/**
 * Description of Prueba_Persona_Model_Account_Form
 *
 * @package    Prueba/Persona
 * @author     Onetree Team (Pedro R. Abadía) <abadiape@gmail.com>
 */
namespace Prueba\Persona\Model\Account;

class Form extends \Magento\Framework\Model\AbstractModel
{
    /**
    * Define resource model
    */
    protected function _construct()
    {
        $this->_init('Prueba\Persona\Model\ResourceModel\Account\Form');
    }
}

