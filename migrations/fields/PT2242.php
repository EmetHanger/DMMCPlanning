<?php

$Vtiger_Utils_Log = true;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
include_once('../../config.inc.php');
set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');



$moduleInstance = Vtiger_Module::getInstance('BuildingPlan');
$blockInstance = Vtiger_Block::getInstance('LBL_LOCATION_INFORMATION',$moduleInstance);


$fieldInstance = Vtiger_Field::getInstance("existing_assesment_no", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'existing_assesment_no';
$fieldInstance->label = 'LBL_EXISTING_ASSESMENT_NUMBER';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'existing_assesment_no';
$fieldInstance->columntype = 'varchar(30)';
$fieldInstance->uitype = 33;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("street_name", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'street_name';
$fieldInstance->label = 'LBL_STREET_NAME';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'street_name';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}


$fieldInstance = Vtiger_Field::getInstance("ward_number", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'ward_number';
$fieldInstance->label = 'LBL_WARD_NUMBER';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'ward_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}



$moduleInstance = Vtiger_Module::getInstance('Blockplan');
$blockInstance = Vtiger_Block::getInstance('LBL_LOCATION_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("existing_assesment_no", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'existing_assesment_no';
$fieldInstance->label = 'LBL_EXISTING_ASSESMENT_NUMBER';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'existing_assesment_no';
$fieldInstance->columntype = 'varchar(30)';
$fieldInstance->uitype = 33;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("street_name", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'street_name';
$fieldInstance->label = 'LBL_STREET_NAME';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'street_name';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}


$fieldInstance = Vtiger_Field::getInstance("ward_number", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'ward_number';
$fieldInstance->label = 'LBL_WARD_NUMBER';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'ward_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}


$moduleInstance = Vtiger_Module::getInstance('StreetLine');
$blockInstance = Vtiger_Block::getInstance('LBL_LOCATION_INFORMATION',$moduleInstance);



$fieldInstance = Vtiger_Field::getInstance("existing_assesment_no", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'existing_assesment_no';
$fieldInstance->label = 'LBL_EXISTING_ASSESMENT_NUMBER';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'existing_assesment_no';
$fieldInstance->columntype = 'varchar(30)';
$fieldInstance->uitype = 33;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("street_name", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'street_name';
$fieldInstance->label = 'LBL_STREET_NAME';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'street_name';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}


$fieldInstance = Vtiger_Field::getInstance("ward_number", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'ward_number';
$fieldInstance->label = 'LBL_WARD_NUMBER';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'ward_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}



$moduleInstance = Vtiger_Module::getInstance('Coc');
$blockInstance = Vtiger_Block::getInstance('LBL_LOCATION_INFORMATION',$moduleInstance);


$fieldInstance = Vtiger_Field::getInstance("existing_assesment_no", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'existing_assesment_no';
$fieldInstance->label = 'LBL_EXISTING_ASSESMENT_NUMBER';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'existing_assesment_no';
$fieldInstance->columntype = 'varchar(30)';
$fieldInstance->uitype = 33;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("street_name", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'street_name';
$fieldInstance->label = 'LBL_STREET_NAME';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'street_name';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}


$fieldInstance = Vtiger_Field::getInstance("ward_number", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'ward_number';
$fieldInstance->label = 'LBL_WARD_NUMBER';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'ward_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('default value'));
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->defaultvalue = 'default value';
$blockInstance->addField($fieldInstance);
}


echo 'fields done';
