<?php

$Vtiger_Utils_Log = true;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
include_once('../../config.inc.php');
set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');



$moduleInstance = Vtiger_Module::getInstance('BuildingPlan');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("actual_cost", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'actual_cost';
$fieldInstance->label = 'LBL_ACTUAL_COST';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'actual_cost';
$fieldInstance->columntype = 'varchar(3)';
$fieldInstance->uitype = 71;
$fieldInstance->typeofdata = 'N~O';
$blockInstance->addField($fieldInstance);
}

$moduleInstance = Vtiger_Module::getInstance('Blockplan');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);


$fieldInstance = Vtiger_Field::getInstance("actual_cost", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'actual_cost';
$fieldInstance->label = 'LBL_ACTUAL_COST';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'actual_cost';
$fieldInstance->columntype = 'varchar(3)';
$fieldInstance->uitype = 71;
$fieldInstance->typeofdata = 'N~O';
$blockInstance->addField($fieldInstance);
}


$moduleInstance = Vtiger_Module::getInstance('StreetLine');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);


$fieldInstance = Vtiger_Field::getInstance("actual_cost", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'actual_cost';
$fieldInstance->label = 'LBL_ACTUAL_COST';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'actual_cost';
$fieldInstance->columntype = 'varchar(3)';
$fieldInstance->uitype = 71;
$fieldInstance->typeofdata = 'N~O';
$blockInstance->addField($fieldInstance);
}



$moduleInstance = Vtiger_Module::getInstance('Coc');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("actual_cost", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'actual_cost';
$fieldInstance->label = 'LBL_ACTUAL_COST';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'actual_cost';
$fieldInstance->columntype = 'varchar(3)';
$fieldInstance->uitype = 71;
$fieldInstance->typeofdata = 'N~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("payment_made", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'payment_made';
$fieldInstance->label = 'LBL_PAYMENT_MADE';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'payment_made';
$fieldInstance->columntype = 'varchar(3)';
$fieldInstance->uitype = 71;
$fieldInstance->typeofdata = 'N~O';
$blockInstance->addField($fieldInstance);
}


echo 'fields done';
