{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}
{strip}
{literal}
<script>
function setCombinedFieldvalues(){
var finalname = jQuery('#{$MODULE}_editView_fieldName_{$FIELD_NAME}_left').val() + ' ' + jQuery('#{$MODULE}_editView_fieldName_{$FIELD_NAME}_right').val();
alert(finalname);
jQuery('#{$MODULE}_editView_fieldName_{$FIELD_NAME}').val(finalname);
}
</script>
{/literal}
{assign var="FIELD_INFO" value=Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($FIELD_MODEL->getFieldInfo()))}
{assign var="SPECIAL_VALIDATOR" value=$FIELD_MODEL->getValidator()}
{assign var="FIELD_NAME" value=$FIELD_MODEL->get('name')}
<input onblur='setCombinedFieldvalues()' id="{$MODULE}_editView_fieldName_{$FIELD_NAME}_left" type="text" class="input-large {if $FIELD_MODEL->isNameField()}nameField{/if}" data-validation-engine="validate[{if $FIELD_MODEL->isMandatory() eq true}required,{/if}funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name="{$FIELD_MODEL->getFieldName()}_left" value="{$FIELD_MODEL->get('fieldvalue')}"
{if $FIELD_MODEL->get('uitype') eq '3' || $FIELD_MODEL->get('uitype') eq '4'|| $FIELD_MODEL->isReadOnly()} readonly {/if} data-fieldinfo='{$FIELD_INFO}' {if !empty($SPECIAL_VALIDATOR)}data-validator={Zend_Json::encode($SPECIAL_VALIDATOR)}{/if} style="width: 28%;float: left;" />

<input onblur='setCombinedFieldvalues()' id="{$MODULE}_editView_fieldName_{$FIELD_NAME}_right" type="text" class="input-large {if $FIELD_MODEL->isNameField()}nameField{/if}" data-validation-engine="validate[{if $FIELD_MODEL->isMandatory() eq true}required,{/if}funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name="{$FIELD_MODEL->getFieldName()}_right" value="{$FIELD_MODEL->get('fieldvalue')}"
{if $FIELD_MODEL->get('uitype') eq '3' || $FIELD_MODEL->get('uitype') eq '4'|| $FIELD_MODEL->isReadOnly()} readonly {/if} data-fieldinfo='{$FIELD_INFO}' {if !empty($SPECIAL_VALIDATOR)}data-validator={Zend_Json::encode($SPECIAL_VALIDATOR)}{/if} style="width: 28%;float: left;margin-left: 2px;"/>
{* TODO - Handler Ticker Symbol field *}

<input id="{$MODULE}_editView_fieldName_{$FIELD_NAME}" type="hidden"  name="{$FIELD_MODEL->getFieldName()}" value="{$FIELD_MODEL->get('fieldvalue')}"
{if $FIELD_MODEL->get('uitype') eq '3' || $FIELD_MODEL->get('uitype') eq '4'|| $FIELD_MODEL->isReadOnly()} readonly {/if} data-fieldinfo='{$FIELD_INFO}' {if !empty($SPECIAL_VALIDATOR)}data-validator={Zend_Json::encode($SPECIAL_VALIDATOR)}{/if} style="width: 28%;float: left;margin-left: 2px;"/>

{/strip}
