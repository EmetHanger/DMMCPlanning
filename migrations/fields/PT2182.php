<?php

$Vtiger_Utils_Log = true;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
include_once('../../config.inc.php');
set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');


// Assesments

$moduleInstance = Vtiger_Module::getInstance('Assesments');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);

// ADDRESS INFORMATION

$blockInstance = Vtiger_Block::getInstance('LBL_ADDRESS_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("address", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'address';
$fieldInstance->label = 'LBL_ADDRESS';
$fieldInstance->table = 'vtiger_assesments';
$fieldInstance->column = 'address';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


// AssesmentNumber

$moduleInstance = Vtiger_Module::getInstance('AssesmentNumber');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);




$fieldInstance = Vtiger_Field::getInstance("property_owner_name", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'property_owner_name';
$fieldInstance->label = 'LBL_PROPERTY_OWNER_NAME';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'property_owner_name';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->displaytype = 2;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

// ADDRESS INFORMATION

$blockInstance = Vtiger_Block::getInstance('LBL_ADDRESS_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("address", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'address';
$fieldInstance->label = 'LBL_ADDRESS';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'address';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


// NatureOfChanges

$moduleInstance = Vtiger_Module::getInstance('NatureOfChanges');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);




$fieldInstance = Vtiger_Field::getInstance("property_owner_name", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'property_owner_name';
$fieldInstance->label = 'LBL_PROPERTY_OWNER_NAME';
$fieldInstance->table = 'vtiger_natureofchanges';
$fieldInstance->column = 'property_owner_name';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->displaytype = 2;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

// ADDRESS INFORMATION

$blockInstance = Vtiger_Block::getInstance('LBL_ADDRESS_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("address", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'address';
$fieldInstance->label = 'LBL_ADDRESS';
$fieldInstance->table = 'vtiger_natureofchanges';
$fieldInstance->column = 'address';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$moduleInstance = Vtiger_Module::getInstance('NameChanges');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);




$fieldInstance = Vtiger_Field::getInstance("property_owner_name", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'property_owner_name';
$fieldInstance->label = 'LBL_PROPERTY_OWNER_NAME';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'property_owner_name';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->displaytype = 2;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

// ADDRESS INFORMATION

$blockInstance = Vtiger_Block::getInstance('LBL_ADDRESS_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("address", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'address';
$fieldInstance->label = 'LBL_ADDRESS';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'address';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}




echo 'fields done';
