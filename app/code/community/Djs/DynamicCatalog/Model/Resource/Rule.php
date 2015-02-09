<?php
class Djs_DynamicCatalog_Model_Resource_Rule extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('djs_dynamiccatalog/dynamiccatalog_rule', 'rule_id');
    }
}