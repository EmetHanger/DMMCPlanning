<?php

$Vtiger_Utils_Log = true;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
include_once('../../config.inc.php');
set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');

$moduleInstance = Vtiger_Module::getInstance('OwnershipVerification');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("existing_assesment_no", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'existing_assesment_no';
$fieldInstance->label = 'LBL_EXISTING_ASSESMENT_NO';
$fieldInstance->table = 'vtiger_ownershipverification';
$fieldInstance->column = 'existing_assesment_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


$fieldInstance = Vtiger_Field::getInstance("changes_app_phone_number", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'changes_app_phone_number';
$fieldInstance->label = 'LBL_APPLICATION_PHONE_NUMBER';
$fieldInstance->table = 'vtiger_ownershipverification';
$fieldInstance->column = 'changes_app_phone_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("ownerveri_app_status", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'ownerveri_app_status';
$fieldInstance->label = 'LBL_NUMBER_VERIFICATION_APPLICATION_STATUS';
$fieldInstance->table = 'vtiger_ownershipverification';
$fieldInstance->column = 'ownerveri_app_status';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Field Visit','Approval(Accountant)','Approved','Rejected'));
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


// FIELD APPROVAL INFORMATION


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_FIELD_VISIT_INFORMATION';
$moduleInstance->addBlock($blockInstance);



$fieldInstance = Vtiger_Field::getInstance("visit_date", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'visit_date';
$fieldInstance->label = 'LBL_DATE_OF_VISIT';
$fieldInstance->table = 'vtiger_ownershipverification';
$fieldInstance->column = 'visit_date';
$fieldInstance->columntype = 'date';
$fieldInstance->uitype = 5;
$fieldInstance->typeofdata = 'D~O';
$blockInstance->addField($fieldInstance);
}

$fieldInstance = Vtiger_Field::getInstance("valuation_officer", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'valuation_officer';
$fieldInstance->label = 'LBL_VALUATION_OFFICER';
$fieldInstance->table = 'vtiger_ownershipverification';
$fieldInstance->column = 'valuation_officer';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 15;
$fieldInstance->setPicklistValues(array('Valuation Officer'));
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
$fieldInstance->table = 'vtiger_ownershipverification';
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
$fieldInstance->table = 'vtiger_ownershipverification';
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
$fieldInstance->table = 'vtiger_ownershipverification';
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
$fieldInstance->table = 'vtiger_ownershipverification';
$fieldInstance->column = 'lot_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
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
$fieldInstance->table = 'vtiger_ownershipverification';
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
$fieldInstance->table = 'vtiger_ownershipverification';
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
$fieldInstance->table = 'vtiger_ownershipverification';
$fieldInstance->column = 'approval_assesment_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}






echo 'fields done';
