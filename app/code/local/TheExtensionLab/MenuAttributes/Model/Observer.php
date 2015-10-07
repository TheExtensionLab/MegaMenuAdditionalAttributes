<?php
class TheExtensionLab_MenuAttributes_Model_Observer
{
    public function menuGetCategoryMenuDataAfter(Varien_Event_Observer $observer)
    {
        $category = $observer->getCategory();
        $categoryMenuData = $observer->getCategoryMenuData();

        if ($category->hasIconImage()){
            $imageUrl = $this->_prefixImageWithMediaPath($category->getIconImage());
            $categoryMenuData->setIconImage($imageUrl);
        }
    }

    private function _prefixImageWithMediaPath($image)
    {
        $mediaPath = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA);
        $categoryImageFolder = 'catalog/category/';
        $imageUrl = $mediaPath.$categoryImageFolder.$image;
        return $imageUrl;
    }
}