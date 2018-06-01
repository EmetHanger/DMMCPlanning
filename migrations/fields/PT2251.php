<?php

$Vtiger_Utils_Log = true;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
include_once('../../config.inc.php');
set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');



$moduleInstance = Vtiger_Module::getInstance('BuildingPlan');
$blockInstance = Vtiger_Block::getInstance('LBL_DRAUGHTSMAN_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("draughtsman_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'draughtsman_comments';
$fieldInstance->label = 'LBL_DRAUGHTSMAN_COMMENTS';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'draughtsman_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$blockInstance = Vtiger_Block::getInstance('LBL_FIELD_VISIT_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("technical_officer_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'technical_officer_comments';
$fieldInstance->label = 'LBL_TECHNICAL_OFFICER_COMMENTS';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'technical_officer_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



$blockInstance = new Vtiger_Block();
$blockInstance->label = 'COMMISSIONERS_RECOMMENDATIONS_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("commissioner_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'commissioner_comments';
$fieldInstance->label = 'LBL_COMMISSIONER_COMMENTS';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'commissioner_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("commissioner_approval_date ", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'commissioner_approval_date';
$fieldInstance->label = 'COMMISSIONER_APPROVAL_DATE';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'commissioner_approval_date';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}

$blockInstance = new Vtiger_Block();
$blockInstance->label = 'ENGINEERS_RECOMMENDATIONS_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("Engineer_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'Engineer_comments';
$fieldInstance->label = 'LBL_ENGINEER_COMMENTS';
$fieldInstance->table = 'vtiger_buildingplan';
$fieldInstance->column = 'Engineer_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$moduleInstance = Vtiger_Module::getInstance('Blockplan');
$blockInstance = Vtiger_Block::getInstance('LBL_DRAUGHTSMAN_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("draughtsman_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'draughtsman_comments';
$fieldInstance->label = 'LBL_DRAUGHTSMAN_COMMENTS';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'draughtsman_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


$blockInstance = Vtiger_Block::getInstance('LBL_FIELD_VISIT_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("technical_officer_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'technical_officer_comments';
$fieldInstance->label = 'LBL_TECHNICAL_OFFICER_COMMENTS';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'technical_officer_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'COMMISSIONERS_RECOMMENDATIONS_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("commissioner_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'commissioner_comments';
$fieldInstance->label = 'LBL_COMMISSIONER_COMMENTS';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'commissioner_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("commissioner_approval_date ", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'commissioner_approval_date';
$fieldInstance->label = 'COMMISSIONER_APPROVAL_DATE';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'commissioner_approval_date';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'ENGINEERS_RECOMMENDATIONS_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("Engineer_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'Engineer_comments';
$fieldInstance->label = 'LBL_ENGINEER_COMMENTS';
$fieldInstance->table = 'vtiger_blockplan';
$fieldInstance->column = 'Engineer_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


$moduleInstance = Vtiger_Module::getInstance('StreetLine');
$blockInstance = Vtiger_Block::getInstance('LBL_DRAUGHTSMAN_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("draughtsman_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'draughtsman_comments';
$fieldInstance->label = 'LBL_DRAUGHTSMAN_COMMENTS';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'draughtsman_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'COMMISSIONERS_RECOMMENDATIONS_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("commissioner_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'commissioner_comments';
$fieldInstance->label = 'LBL_COMMISSIONER_COMMENTS';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'commissioner_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("commissioner_approval_date ", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'commissioner_approval_date';
$fieldInstance->label = 'COMMISSIONER_APPROVAL_DATE';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'commissioner_approval_date';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}

$blockInstance = new Vtiger_Block();
$blockInstance->label = 'ENGINEERS_RECOMMENDATIONS_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("Engineer_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'Engineer_comments';
$fieldInstance->label = 'LBL_ENGINEER_COMMENTS';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'Engineer_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



$moduleInstance = Vtiger_Module::getInstance('Coc');
$blockInstance = Vtiger_Block::getInstance('LBL_FIELD_VISIT_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("technical_officer_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'technical_officer_comments';
$fieldInstance->label = 'LBL_TECHNICAL_OFFICER_COMMENTS';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'technical_officer_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$blockInstance = new Vtiger_Block();
$blockInstance->label = 'COMMISSIONERS_RECOMMENDATIONS_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("commissioner_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'commissioner_comments';
$fieldInstance->label = 'LBL_COMMISSIONER_COMMENTS';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'commissioner_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("commissioner_approval_date ", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'commissioner_approval_date';
$fieldInstance->label = 'COMMISSIONER_APPROVAL_DATE';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'commissioner_approval_date';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'ENGINEERS_RECOMMENDATIONS_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("Engineer_comments", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'Engineer_comments';
$fieldInstance->label = 'LBL_ENGINEER_COMMENTS';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'Engineer_comments';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 21;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

echo 'fields done';
