<?php
class Djs_DynamicCatalog_Adminhtml_DynamiccategoryController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Locator'))
            ->_title($this->__('Manage Locations'));

        $this->loadLayout()->renderLayout();
    }
}