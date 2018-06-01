<?php
ini_set("error_reporting", "6135");
include_once 'includes/main/WebUI.php';
include_once 'vtlib/Vtiger/PackageExport.php';
include_once 'include/utils/utils.php';
require_once 'includes/Loader.php';
require_once('vtlib/Vtiger/Package.php');
require_once('vtlib/Vtiger/Module.php');
$package = new Vtiger_Package();
$package->export(Vtiger_Module::getInstance('AssesmentNumber'),'test/vtlib',',AssesmentNumber.zip',true);
echo '<pre>';
print_r("module exported");
?>
