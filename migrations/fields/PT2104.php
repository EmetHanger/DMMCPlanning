<?php

$Vtiger_Utils_Log = true;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
include_once('../../config.inc.php');
set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');

$moduleInstance = Vtiger_Module::getInstance('NameChanges');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("existing_assesment_no", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'existing_assesment_no';
$fieldInstance->label = 'LBL_EXISTING_ASSESMENT_NO';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'existing_assesment_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



$fieldInstance = Vtiger_Field::getInstance("changes_app_file_number", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'changes_app_file_number';
$fieldInstance->label = 'LBL_APPLICATION_FILE_NUMBER';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'changes_app_file_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~M';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("name_changes_type", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'name_changes_type';
$fieldInstance->label = 'LBL_NAME_CHANGES_TYPE';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'name_changes_type';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Existing','New'));
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


$fieldInstance = Vtiger_Field::getInstance("changes_app_phone_number", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'changes_app_phone_number';
$fieldInstance->label = 'LBL_APPLICATION_PHONE_NUMBER';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'changes_app_phone_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("changes_application_status", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'changes_application_status';
$fieldInstance->label = 'LBL_APPLICATION_STATUS';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'changes_application_status';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Inspection','Approval(Accountant)','Approved','Rejected'));
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
$fieldInstance->table = 'vtiger_namechanges';
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
$fieldInstance->table = 'vtiger_namechanges';
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
$fieldInstance->table = 'vtiger_namechanges';
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
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'lot_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



//  FIELD VALUATION iNS INFORMATION


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_VALUATION_INSPECTION_INFORMATION';
$moduleInstance->addBlock($blockInstance);


$fieldInstance = Vtiger_Field::getInstance("date_of_inspection", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'date_of_inspection';
$fieldInstance->label = 'LBL_DATE_OF_INSPECTION';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'date_of_inspection';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("chng_val_inspector_name", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'chng_val_inspector_name';
$fieldInstance->label = 'LBL_VALUATION_INSPECTOR_NAME';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'chng_val_inspector_name';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Valuation Inspector'));
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



// FIELD APPROVAL INFORMATION


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_APPROVAL_INFORMATION';
$moduleInstance->addBlock($blockInstance);



$fieldInstance = Vtiger_Field::getInstance("comments_of_accountant", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'comments_of_accountant';
$fieldInstance->label = 'LBL_COMMENTS_OF_ACCOUNTANT';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'comments_of_accountant';
$fieldInstance->columntype = 'varchar(255)';
$fieldInstance->uitype = 19;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


$fieldInstance = Vtiger_Field::getInstance("approved_date", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'approved_date';
$fieldInstance->label = 'LBL_APPROVED_DATE';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'approved_date';
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
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'approval_assesment_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}



// File LOCATION INFORMATION



$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_FILE_LOCAION_INFORMATION';
$moduleInstance->addBlock($blockInstance);



$fieldInstance = Vtiger_Field::getInstance("plan", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'plan';
$fieldInstance->label = 'LBL_PLAN';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'plan';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("deed_copy", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'deed_copy';
$fieldInstance->label = 'LBL_DEED_COPY';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'deed_copy';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


$fieldInstance = Vtiger_Field::getInstance("Power_of_attorney", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'Power_of_attorney';
$fieldInstance->label = 'LBL_POWER_OF_ATTORNEY';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'Power_of_attorney';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("Condominium_approval ", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'Condominium_approval';
$fieldInstance->label = 'LBL_CONDOMONIUM_APPROVAL';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'Condominium_approval';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


$fieldInstance = Vtiger_Field::getInstance("sketch", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'sketch';
$fieldInstance->label = 'LBL_SKETCH';
$fieldInstance->table = 'vtiger_namechanges';
$fieldInstance->column = 'sketch';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}





echo 'fields done';
