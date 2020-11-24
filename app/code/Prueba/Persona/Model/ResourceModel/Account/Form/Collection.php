<?php
/**
 * Description of Prueba_Persona_Model_ResourceModel_Account_Form_Collection
 *
 * @package    Prueba/Persona
 * @author     Onetree Team (Pedro R. Abadía) <abadiape@gmail.com>
 */
namespace Prueba\Persona\Model\ResourceModel\Account\Form;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
    * Define model & resource model
    */
    protected function _construct()
    {
        $this->_init('Prueba\Persona\Model\Account\Form', 'Prueba\Persona\Model\ResourceModel\Account\Form');
    }
}
