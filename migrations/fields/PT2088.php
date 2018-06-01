<?php
exit;
$Vtiger_Utils_Log = true;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
 include_once('../../config.inc.php');
 set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');

$moduleInstance = Vtiger_Module::getInstance('Blockplan');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'file_no';
$fieldInstance->label = 'LBL_FILE_NO';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'file_no';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);

$moduleInstance = Vtiger_Module::getInstance('BuildingPlan');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'file_no';
$fieldInstance->label = 'LBL_FILE_NO';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'file_no';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);

$moduleInstance = Vtiger_Module::getInstance('StreetLine');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'file_no';
$fieldInstance->label = 'LBL_FILE_NO';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'file_no';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);


$moduleInstance = Vtiger_Module::getInstance('Blockplan');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'division';
$fieldInstance->label = 'LBL_DIVISION';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'division';
$fieldInstance->columntype = 'varchar(128)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Mt. Lavinia','Ratmalana','Kalubowila','Dehiwala'));
$fieldInstance->typeofdata = 'V~M';
$fieldInstance->defaultvalue = 'Open';
$blockInstance->addField($fieldInstance);

$moduleInstance = Vtiger_Module::getInstance('BuildingPlan');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'division';
$fieldInstance->label = 'LBL_DIVISION';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'division';
$fieldInstance->columntype = 'varchar(128)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Mt. Lavinia','Ratmalana','Kalubowila','Dehiwala'));
$fieldInstance->typeofdata = 'V~M';
$fieldInstance->defaultvalue = 'Open';
$blockInstance->addField($fieldInstance);

$moduleInstance = Vtiger_Module::getInstance('StreetLine');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'division';
$fieldInstance->label = 'LBL_DIVISION';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'division';
$fieldInstance->columntype = 'varchar(128)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Mt. Lavinia','Ratmalana','Kalubowila','Dehiwala'));
$fieldInstance->typeofdata = 'V~M';
$fieldInstance->defaultvalue = 'Open';
$blockInstance->addField($fieldInstance);




echo 'fields done';
