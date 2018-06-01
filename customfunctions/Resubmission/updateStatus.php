<?php

function updateStatus($entity) {
    global $adb;
    $entity_data = get_object_vars($entity);
    $data = $entity_data['data'];
    $id = explode('x', $data['id']);
    $related = explode('x', $data['related_to']);
    $relatedModel = Vtiger_Record_Model::getInstanceById($related['1']);
    $relatedName = $relatedModel->getModule()->getName();
    $statusFieldName = "plan_status";
    if ($relatedName == 'BuildingPlan') {
        $statusFieldName = "build_". $statusFieldName;
    }
    if ($relatedName == 'Coc') {
        $statusFieldName = 'coc_' . $statusFieldName;
    }
    if ($relatedName == 'StreetLine') {
        $statusFieldName = 'street_' . $statusFieldName;
    }
    $relatedModel->set($statusFieldName,'Resubmission');
    $relatedModel->set('mode','edit');
    
    $relatedModel->save();
 
//    $updated = $adb->query($sql);
}
