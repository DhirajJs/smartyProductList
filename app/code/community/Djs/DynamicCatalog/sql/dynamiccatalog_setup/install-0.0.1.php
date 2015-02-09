<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

/**
 * Create table 'salesrule/rule'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('djs_dynamiccatalog/rule'))
    ->addColumn('rule_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Rule Id')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
    ), 'Name')
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, '64k', array(
    ), 'Description')
    ->addColumn('from_date', Varien_Db_Ddl_Table::TYPE_DATE, null, array(
    ), 'From Date')
    ->addColumn('to_date', Varien_Db_Ddl_Table::TYPE_DATE, null, array(
    ), 'To Date')

    ->addColumn('customer_group_ids', Varien_Db_Ddl_Table::TYPE_TEXT, '64k', array(
    ), 'Customer Group Ids')
    ->addColumn('is_active', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'nullable'  => false,
        'default'   => '0',
    ), 'Is Active')
    ->addColumn('conditions_serialized', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
    ), 'Conditions Serialized')
    ->addColumn('actions_serialized', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
    ), 'Actions Serialized')
    ->addIndex($installer->getIdxName('djs_dynamiccatalog/rule', array('is_active', 'to_date', 'from_date')),
        array('is_active', 'to_date', 'from_date'))
    ->setComment('Dynamic catalog rule');
$installer->getConnection()->createTable($table);

$installer->endSetup();