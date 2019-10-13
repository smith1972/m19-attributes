<?php

$installer = $this;

$installer->startSetup();

$installer->addAttribute('catalog_product', 'city_of_manufacture', array(
    'group'           => 'General',
    'label'           => 'City of manufacture',
    'input'           => 'text',
    'type'            => 'varchar',
    'required'        => 0,
    'visible_on_front'=> 0,
    'filterable'      => 0,
    'searchable'      => 0,
    'comparable'      => 0,
    'user_defined'    => 1,
    'is_configurable' => 0,
    'global'          => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'note'            => '',
));

$installer->addAttribute('catalog_product', 'dimentions', array(
    'group'           => 'General',
    'label'           => 'Dimentions',
    'input'           => 'text',
    'type'            => 'varchar',
    'required'        => 0,
    'visible_on_front'=> 0,
    'filterable'      => 0,
    'searchable'      => 0,
    'comparable'      => 0,
    'user_defined'    => 1,
    'is_configurable' => 0,
    'global'          => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'note'            => '',
));

$installer->addAttribute('catalog_product', 'volume', array(
    'group'           => 'General',
    'label'           => 'Volume',
    'input'           => 'text',
    'type'            => 'int',
    'required'        => 0,
    'visible_on_front'=> 0,
    'filterable'      => 0,
    'searchable'      => 0,
    'comparable'      => 0,
    'user_defined'    => 1,
    'is_configurable' => 0,
    'global'          => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'note'            => '',
));
$installer->endSetup();