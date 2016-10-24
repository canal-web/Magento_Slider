<?php
class Canalweb_Slider_Model_Slides extends Mage_Catalog_Model_Product
{
    public function getItemsCollection($attributeSetId, $storeId)
    {
        $resource = Mage::getSingleton('core/resource');
        $readConnection = $resource->getConnection('core_read');

        $query = "SELECT entity_id FROM catalog_product_flat_". $storeId ." WHERE attribute_set_id=". $attributeSetId ." ORDER BY weight ASC";

        $results = $readConnection->fetchAll($query);

        $collection = new Varien_Data_Collection();
        foreach($results as $row){
            $rowObj = new Varien_Object();
            $rowObj->setData($row);
            $collection->addItem($rowObj);
        }

        return $collection;
    }
}
