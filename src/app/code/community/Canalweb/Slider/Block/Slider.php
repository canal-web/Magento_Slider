<?php
class Canalweb_Slider_Block_Slider extends Mage_Catalog_Block_Product_Abstract
{
    protected $_itemCollection = null;

    public function getItems()
    {

        $attributeSetId = Mage::getStoreConfig('slider/main/attribute_set_id');
        $storeId = Mage::app()->getStore()->getId();

        if (is_null($this->_itemCollection))
        {
            $this->_itemCollection = Mage::getModel('slider/slides')->getItemsCollection($attributeSetId, $storeId);
        }

        return $this->_itemCollection;
    }
}
