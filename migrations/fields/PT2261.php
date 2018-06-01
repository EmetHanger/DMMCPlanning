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

$fieldInstance = Vtiger_Field::getInstance("need_authorization", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'need_authorization';
$fieldInstance->label = 'LBL_NEED_AUTHORIZATION';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'need_authorization';
$fieldInstance->columntype = 'varchar(3)';
$fieldInstance->uitype = 56;
$fieldInstance->typeofdata = 'C~O';
$blockInstance->addField($fieldInstance);
}

$moduleInstance = Vtiger_Module::getInstance('Blockplan');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);


$fieldInstance = Vtiger_Field::getInstance("need_authorization", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'need_authorization';
$fieldInstance->label = 'LBL_NEED_AUTHORIZATION';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'need_authorization';
$fieldInstance->columntype = 'varchar(3)';
$fieldInstance->uitype = 56;
$fieldInstance->typeofdata = 'C~O';
$blockInstance->addField($fieldInstance);
}


$moduleInstance = Vtiger_Module::getInstance('StreetLine');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);


$fieldInstance = Vtiger_Field::getInstance("need_authorization", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'need_authorization';
$fieldInstance->label = 'LBL_NEED_AUTHORIZATION';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'need_authorization';
$fieldInstance->columntype = 'varchar(3)';
$fieldInstance->uitype = 56;
$fieldInstance->typeofdata = 'C~O';
$blockInstance->addField($fieldInstance);
}



$moduleInstance = Vtiger_Module::getInstance('Coc');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("need_authorization", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'need_authorization';
$fieldInstance->label = 'LBL_NEED_AUTHORIZATION';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'need_authorization';
$fieldInstance->columntype = 'varchar(3)';
$fieldInstance->uitype = 56;
$fieldInstance->typeofdata = 'C~O';
$blockInstance->addField($fieldInstance);
}



echo 'fields done';
