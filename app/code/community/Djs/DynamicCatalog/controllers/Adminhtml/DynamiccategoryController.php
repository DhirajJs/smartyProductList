<?php
class Djs_DynamicCatalog_Adminhtml_DynamiccategoryController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Catalog'))
            ->_title($this->__('Manage Dynamic Catalog'));

        $this->_initAction()
            ->_addBreadcrumb(Mage::helper('djs_dynamiccatalog')->__('Catalog'), Mage::helper('djs_dynamiccatalog')->__
            ('Catalog'))
            ->renderLayout();
    }

    protected function _initAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('catalog/dynamiccatalog')
            ->_addBreadcrumb(Mage::helper('djs_dynamiccatalog')->__('Categories'), Mage::helper('djs_dynamiccatalog')
                ->__('Categories'))
        ;
        return $this;
    }
}