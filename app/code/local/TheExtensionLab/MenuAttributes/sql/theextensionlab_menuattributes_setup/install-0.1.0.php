<?php
$this->startSetup();
$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'icon_image', array(
    'type'                       => 'varchar',
    'label'                      => 'Icon Image',
    'input'                      => 'image',
    'backend'                    => 'catalog/category_attribute_backend_image',
    'required'                   => false,
    'sort_order'                 => 4,
    'global'                     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'group'                      => 'General Information',

));
$this->endSetup();