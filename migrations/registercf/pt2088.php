<?php
//exit;
echo "Start<br>";
ini_set('display_errors', '1');
error_reporting(E_ALL & ~(E_STRICT|E_NOTICE|E_DEPRECATED));
 include_once('../../config.inc.php');
 set_include_path($root_directory);
include_once('vtlib/Vtiger/Module.php');
include_once('vtlib/Vtiger/Block.php');

require 'modules/com_vtiger_workflow/VTEntityMethodManager.inc';
$emm = new VTEntityMethodManager($adb);
$emm->addEntityMethod("Blockplan", "setFileno", "customfunctions/Blockplan/setFileno.php", "setFileno");
$emm->addEntityMethod("BuildingPlan", "setFileno", "customfunctions/BuildingPlan/setFileno.php", "setFileno");
$emm->addEntityMethod("Streetline", "setFileno", "customfunctions/Streetline/setFileno.php", "setFileno");
echo "Done";
?>
