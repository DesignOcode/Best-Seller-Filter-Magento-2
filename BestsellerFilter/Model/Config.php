<?php
namespace Ocodewire\BestsellerFilter\Model;

class Config extends \Magento\Catalog\Model\Config
{
    public function getAttributeUsedForSortByArray()
    {
       $options = ['bestseller' => __('Best seller')];
        foreach ($this->getAttributesUsedForSortBy() as $attribute) {
            /* @var $attribute \Magento\Eav\Model\Entity\Attribute\AbstractAttribute */
            $options[$attribute->getAttributeCode()] = $attribute->getStoreLabel();
        }

       return $options;
    }
}
?>