<?php

$Vtiger_Utils_Log = true;
include_once('../../config.inc.php');
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');

$moduleInstance = Vtiger_Module::getInstance('NumberVerification');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION',$moduleInstance);

$fieldInstance = Vtiger_Field::getInstance("existing_assesment_no", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'existing_assesment_no';
$fieldInstance->label = 'LBL_EXISTING_ASSESMENT_NO';
$fieldInstance->table = 'vtiger_numberverification';
$fieldInstance->column = 'existing_assesment_no';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}


$fieldInstance = Vtiger_Field::getInstance("numberveri_changes_type", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'numberveri_changes_type';
$fieldInstance->label = 'LBL_NUMBER_VERIFICATION_CHANGES_TYPE';
$fieldInstance->table = 'vtiger_numberverification';
$fieldInstance->column = 'numberveri_changes_type';
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
$fieldInstance->table = 'vtiger_numberverification';
$fieldInstance->column = 'changes_app_phone_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}
//////////////////////////
// $fieldInstance = Vtiger_Field::getInstance("numberveri_app_status", $moduleInstance);
//         if ($fieldInstance === false) {
// $fieldInstance = new Vtiger_Field();
// $fieldInstance->name = 'numberveri_app_status';
// $fieldInstance->label = 'LBL_NUMBER_VERI_APPLICATION_STATUS';
// $fieldInstance->table = 'vtiger_numberverification';
// $fieldInstance->column = 'numberveri_app_status';
// $fieldInstance->columntype = 'varchar(100)';
// $fieldInstance->uitype = 15;
// $fieldInstance->setPicklistValues(array('Approval(Accountant)','Approved','Rejected'));
// $fieldInstance->typeofdata = 'V~O';
// $blockInstance->addField($fieldInstance);
// }
/////////////////////////////////


// LOCATION INFORMATION


$blockInstance = new Vtiger_Block();
$blockInstance->label = 'LBL_ADDRESS_INFORMATION';
$moduleInstance->addBlock($blockInstance);

$fieldInstance = Vtiger_Field::getInstance("street", $moduleInstance);
        if ($fieldInstance === false) {
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'street';
$fieldInstance->label = 'LBL_STREET';
$fieldInstance->table = 'vtiger_numberverification';
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
$fieldInstance->table = 'vtiger_numberverification';
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
$fieldInstance->table = 'vtiger_numberverification';
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
$fieldInstance->table = 'vtiger_numberverification';
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
$fieldInstance->table = 'vtiger_numberverification';
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
$fieldInstance->table = 'vtiger_numberverification';
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
$fieldInstance->table = 'vtiger_numberverification';
$fieldInstance->column = 'approval_assesment_number';
$fieldInstance->columntype = 'varchar(100)';
$fieldInstance->uitype = 1;
$fieldInstance->typeofdata = 'V~O';
$blockInstance->addField($fieldInstance);
}







echo 'fields done';
