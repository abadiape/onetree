<?php
/**
 * Onetree
 *
 * NOTICE OF LICENSE
 *
 * @category    Prueba
 * @package     Prueba_Persona
 */

namespace Prueba\Persona\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Zend_Db_Exception;

/**
 * Class InstallSchema
 * @package Prueba\Persona\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     *
     * @throws Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        if (!$installer->tableExists('persona')) {
            $table = $installer->getConnection()
                ->newTable($installer->getTable('persona'))
                ->addColumn('id', Table::TYPE_INTEGER, null, [
                    'identity' => true,
                    'nullable' => false,
                    'primary'  => true,
                    'unsigned' => true,
                ], 'Log ID')
                ->addColumn('nombre', Table::TYPE_TEXT, 255, [], 'Nombre')
                ->addColumn('edad', Table::TYPE_TEXT, 255, [], 'Edad')
                ->addColumn('sexo', Table::TYPE_TEXT, 1, [], 'Sexo')
                ->addColumn('created_at', Table::TYPE_TIMESTAMP, null, [], 'Created At')
		->addColumn('updated_at', Table::TYPE_TIMESTAMP, null, [], 'Updated At');

            $installer->getConnection()->createTable($table);
        }

        $installer->endSetup();
    }
}
