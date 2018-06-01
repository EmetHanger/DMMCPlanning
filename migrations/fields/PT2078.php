<?php

$Vtiger_Utils_Log = true;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
include_once('../../config.inc.php');
set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');

$moduleInstance = Vtiger_Module::getInstance('AssesmentNumber');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("existing_assesment_no", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'existing_assesment_no';
$fieldInstance->label = 'LBL_EXISTING_ASSESMENT_NO';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'existing_assesment_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("application_type", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'application_type';
$fieldInstance->label = 'LBL_APPLICATION_TYPE';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'application_type';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Proposed','Permanant'));
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("application_category", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'application_category';
$fieldInstance->label = 'LBL_APPLICATION_CATEGORY';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'application_category';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('New building / house','Dividing building / house','Merge building / house','Under construction','Un authorized residents','Bare lands'));
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("application_file_number", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'application_file_number';
$fieldInstance->label = 'LBL_APPLICATION_FILE_NUMBER';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'application_file_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~M';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("application_status", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'application_status';
$fieldInstance->label = 'LBL_APPLICATION_STATUS';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'application_status';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Inspection','Resubmission','Legal Advice','Re-visit','Approval (Accountant)','Approval (Commissioner)','Approved','Rejected'));
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



// LOCATION INFORMATION


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_ADDRESS_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("street", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'street';
$fieldInstance->label = 'LBL_STREET';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'street';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("city", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'city';
$fieldInstance->label = 'LBL_CITY';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'city';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("ward_no", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'ward_no';
$fieldInstance->label = 'LBL_WARD_NO';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'ward_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("lot_no", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'lot_no';
$fieldInstance->label = 'LBL_LOT_NO';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'lot_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



//  FIELD VISIT INFORMATION


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_VALUATION_INSPECTION_INFORMATION';
$moduleInstance->addBlock($blockInstance);


$fieldInstance = Vtiger_Field::getInstance("date_of_inspection", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'date_of_inspection';
$fieldInstance->label = 'LBL_DATE_OF_INSPECTION';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'date_of_inspection';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("valuation_inspector_name", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'valuation_inspector_name';
$fieldInstance->label = 'LBL_VALUATION_INSPECTOR_NAME';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'valuation_inspector_name';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Valuation Inspector'));
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



// FIELD LOCATION INFORMATION


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_APPROVAL_INFORMATION';
$moduleInstance->addBlock($blockInstance);



$fieldInstance = Vtiger_Field::getInstance("comments_of_accountant", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'comments_of_accountant';
$fieldInstance->label = 'LBL_COMMENTS_OF_ACCOUNTANT';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'comments_of_accountant';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 19;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("comments_of_commissioner", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'comments_of_commissioner';
$fieldInstance->label = 'LBL_COMMENTS_OF_COMMISSIONAR';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'comments_of_commissioner';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 19;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("approved_date", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'approved_date';
$fieldInstance->label = 'LBL_APPROVED_DATE';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'LBL_APPROVED_DATE';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("approval_assesment_number", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'approval_assesment_number';
$fieldInstance->label = 'LBL_APPROVAL_ASSESMENT_NUMBER';
$fieldInstance->table = 'vtiger_assesmentnumber';
$fieldInstance->column = 'approval_assesment_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


echo 'fields done';
