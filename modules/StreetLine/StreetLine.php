<?php
/***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

include_once 'modules/Vtiger/CRMEntity.php';

class StreetLine extends Vtiger_CRMEntity {
	var $table_name = 'vtiger_streetline';
	var $table_index= 'streetlineid';

	/**
	 * Mandatory table for supporting custom fields.
	 */
	var $customFieldTable = Array('vtiger_streetlinecf', 'streetlineid');

	/**
	 * Mandatory for Saving, Include tables related to this module.
	 */
	var $tab_name = Array('vtiger_crmentity', 'vtiger_streetline', 'vtiger_streetlinecf');

	/**
	 * Mandatory for Saving, Include tablename and tablekey columnname here.
	 */
	var $tab_name_index = Array(
		'vtiger_crmentity' => 'crmid',
		'vtiger_streetline' => 'streetlineid',
		'vtiger_streetlinecf'=>'streetlineid');

	/**
	 * Mandatory for Listing (Related listview)
	 */
	var $list_fields = Array (
		'LBL_ASSESMENT_NO' => array('streetline', 'assesment_no'),
		'LBL_FULLNAME' => array('streetline', 'fullname'),

	);
	var $list_fields_name = Array (
		'LBL_ASSESMENT_NO' => 'assesment_no',
		'LBL_FULLNAME' => 'fullname',

	);

	// Make the field link to detail view
	var $list_link_field = 'streetline_no';

	// For Popup listview and UI type support
	var $search_fields = Array(
		'LBL_FULLNAME' => array('streetline', 'fullname'),
		'LBL_ASSESMENT_NO' => array('streetline', 'assesment_no'),

	);
	var $search_fields_name = Array (
		'LBL_FULLNAME' => 'fullname',
		'LBL_ASSESMENT_NO' => 'assesment_no',

	);

	// For Popup window record selection
	var $popup_fields = Array ('streetline_no');

	// For Alphabetical search
	var $def_basicsearch_col = 'streetline_no';

	// Column value to use on detail view record text display
	var $def_detailview_recname = 'streetline_no';

	// Used when enabling/disabling the mandatory fields for the module.
	// Refers to vtiger_field.fieldname values.
	var $mandatory_fields = Array('streetline_no','assigned_user_id');

	var $default_order_by = 'streetline_no';
	var $default_sort_order='ASC';

	function StreetLine() {
		$this->log =LoggerManager::getLogger('StreetLine');
		$this->db = PearDatabase::getInstance();
		$this->column_fields = getColumnFields('StreetLine');
	}

	/**
	* Invoked when special actions are performed on the module.
	* @param String Module name
	* @param String Event Type
	*/
	function vtlib_handler($moduleName, $eventType) {
 		if($eventType == 'module.postinstall') {
 			//Enable ModTracker for the module
 			static::enableModTracker($moduleName);
		} else if($eventType == 'module.disabled') {
			// TODO Handle actions before this module is being uninstalled.
		} else if($eventType == 'module.preuninstall') {
			// TODO Handle actions when this module is about to be deleted.
		} else if($eventType == 'module.preupdate') {
			// TODO Handle actions before this module is updated.
		} else if($eventType == 'module.postupdate') {
			// TODO Handle actions after this module is updated.
		}
 	}
	
	/**
	 * Enable ModTracker for the module
	 */
	public static function enableModTracker($moduleName)
	{
		include_once 'vtlib/Vtiger/Module.php';
		include_once 'modules/ModTracker/ModTracker.php';
			
		//Enable ModTracker for the module
		$moduleInstance = Vtiger_Module::getInstance($moduleName);
		ModTracker::enableTrackingForModule($moduleInstance->getId());
	}
}