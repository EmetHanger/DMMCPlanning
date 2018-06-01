<?php

$Vtiger_Utils_Log = true;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
include_once('../../config.inc.php');
set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');

$moduleInstance = Vtiger_Module::getInstance('Coc');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);


$fieldInstance = Vtiger_Field::getInstance("LBL_COC_PLAN_STATUS", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'coc_plan_status';
$fieldInstance->label = 'LBL_COC_PLAN_STATUS';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'coc_plan_status';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Open','Draughsman Verification','Payment Made','Resubmission','Engineer Review','Field Visit','For commitee approval','Approved','Rejected','Submitted to Juries','Submitted to Legal Officers','Submitted to Drainage Engineer'));
$fieldInstance->typeofdata = 'V~M';
$fieldInstance->defaultvalue = 'Open';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_PLAN_APPROVED_DATE", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'plan_approved_date';
$fieldInstance->label = 'LBL_PLAN_APPROVED_DATE';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'plan_approved_date';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}



$fieldInstance = Vtiger_Field::getInstance("LBL_DATE_OF_RESIDENCY", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'date_of_residency';
$fieldInstance->label = 'LBL_DATE_OF_RESIDENCY';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'date_of_residency';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}



// LOCATION INFORMATION


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_LOCATION_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("LBL_STREET", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'street';
$fieldInstance->label = 'LBL_STREET';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'street';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_CITY", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'city';
$fieldInstance->label = 'LBL_CITY';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'city';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_WARD_NO", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'ward_no';
$fieldInstance->label = 'LBL_WARD_NO';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'ward_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_LOT_NO", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'lot_no';
$fieldInstance->label = 'LBL_LOT_NO';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'lot_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}




// OLD COC INFORMATION

$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_OLD_COC_INFORMATION';
$moduleInstance->addBlock($blockInstance);


$fieldInstance = Vtiger_Field::getInstance("LBL_OLD_COC_NUMBER", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'old_coc_number';
$fieldInstance->label = 'LBL_OLD_COC_NUMBER';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'old_coc_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


$fieldInstance = Vtiger_Field::getInstance("LBL_OLD_COC_DATE", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'old_coc_date';
$fieldInstance->label = 'LBL_OLD_COC_DATE';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'old_coc_date';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}
//  FIELD VISIT INFORMATION


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_FIELD_VISIT_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("LBL_COC_BUILD_TECH_OFFICER", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'ass_build_tech_officer';
$fieldInstance->label = 'LBL_COC_BUILD_TECH_OFFICER';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'ass_build_tech_officer';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Technical Test'));
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_COC_PLAN_ENGINEER", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'coc_plan_engineer';
$fieldInstance->label = 'LBL_COC_PLAN_ENGINEER';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'coc_plan_engineer';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Plan Engineer'));
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



$fieldInstance = Vtiger_Field::getInstance("LBL_DATE_OF_VISIT", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'date_of_visit';
$fieldInstance->label = 'LBL_DATE_OF_VISIT';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'date_of_visit';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}


// FIELD LOCATION INFORMATION


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_FILE_LOCAION_INFORMATION';
$moduleInstance->addBlock($blockInstance);



$fieldInstance = Vtiger_Field::getInstance("LBL_BUILDINGPLAN_APP", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'building_plan_approval';
$fieldInstance->label = 'LBL_BUILDINGPLAN_APP';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'building_plan_approval';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_COC_BLOCK_PLAN_APP", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'coc_block_plan_approval';
$fieldInstance->label = 'LBL_COC_BLOCK_PLAN_APP';
$fieldInstance->table = 'vtiger_coc';
$fieldInstance->column = 'coc_block_plan_approval';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



echo 'fields done';
