<?php

$Vtiger_Utils_Log = true;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
// include_once('../../config.inc.php');
// set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');

$moduleInstance = Vtiger_Module::getInstance('StreetLine');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);


$fieldInstance = Vtiger_Field::getInstance("LBL_STREET_PLAN_STATUS", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'street_plan_status';
$fieldInstance->label = 'LBL_STREET_PLAN_STATUS';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'street_plan_status';
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
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'plan_approved_date';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_PAYMENT_MADE", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'payment_made';
$fieldInstance->label = 'LBL_PAYMENT_MADE';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'payment_made';
$fieldInstance->columntype = 'varchar(3)';
$fieldInstance->uitype = 56;
$fieldInstance->typeofdata = 'C~O';
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
$fieldInstance->table = 'vtiger_streetline';
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
$fieldInstance->table = 'vtiger_streetline';
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
$fieldInstance->table = 'vtiger_streetline';
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
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'lot_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


// DRAUGHTSMAN INFORMATON

$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_DRAUGHTSMAN_INFORMATION';
$moduleInstance->addBlock($blockInstance);



$fieldInstance = Vtiger_Field::getInstance("LBL_SUBMITTED_DATE_TO_DRAUGHTSMAN", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'submitted_date_to_draughtsman';
$fieldInstance->label = 'LBL_SUBMITTED_DATE_TO_DRAUGHTSMAN';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'submitted_date_to_draughtsman';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_ASS_STREET_DRAUGHTSMAN", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'ass_street_draughtsman';
$fieldInstance->label = 'LBL_ASS_STREET_DRAUGHTSMAN';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'ass_street_draughtsman';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Draughtsman Test '));
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_SURVEYOURS_PLAN_NO", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'surveyors_plan_no';
$fieldInstance->label = 'LBL_SURVEYOURS_PLAN_NO';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'surveyors_plan_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_NAME_OF_THE_SURVEYOURS", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'name_of_the_surveyors';
$fieldInstance->label = 'LBL_NAME_OF_THE_SURVEYOURS';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'name_of_the_surveyors';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_DATE_OF_THE_SURVEYOURS_PLAN", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'date_of_surveyors_plan';
$fieldInstance->label = 'LBL_DATE_OF_THE_SURVEYOURS_PLAN';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'date_of_surveyors_plan';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_ASS_STREET_PLAN_ENGINEER", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'ass_street_plan_engineer';
$fieldInstance->label = 'LBL_ASS_STREET_PLAN_ENGINEER';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'ass_street_plan_engineer';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Street Engineer'));
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



// FIELD LOCATION INFORMATION


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_FILE_LOCAION_INFORMATION';
$moduleInstance->addBlock($blockInstance);



$fieldInstance = Vtiger_Field::getInstance("LBL_PLAN", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'plan';
$fieldInstance->label = 'LBL_PLAN';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'plan';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~M';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("LBL_OLD_PLAN", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'old_plan';
$fieldInstance->label = 'LBL_OLD_PLAN';
$fieldInstance->table = 'vtiger_streetline';
$fieldInstance->column = 'old_plan';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



echo 'fields done';
