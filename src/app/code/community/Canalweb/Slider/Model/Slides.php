<?php
class Canalweb_Slider_Model_Slides extends Mage_Catalog_Model_Product
{
    public function getItemsCollection($attributeSetId, $storeId)
    {
        $resource = Mage::getSingleton('core/resource');
        $readConnection = $resource->getConnection('core_read');

        $query = "SELECT entity_id FROM catalog_product_flat_". $storeId ." WHERE attribute_set_id=". $attributeSetId ." ORDER BY weight";

        $results = $readConnection->fetchAll($query);
        $productIds = array();
        foreach($results as $res){
            $productIds[] = $res['entity_id'];
        }
        $collection = $this->getCollection()
            ->addAttributeToFilter('entity_id', array('in' => $productIds))
            ->addUrlRewrite();

        return $collection;
    }
}
