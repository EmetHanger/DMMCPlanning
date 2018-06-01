<?php

function setFileno($entity) {
    global $adb;
    $entity_data = get_object_vars($entity);
    $data = $entity_data['data'];
    $id = explode('x', $data['id']);

            $prefix = 'DMMC/FN/CVC/M';
            $suffix = $data['existing_assesment_no']."/".$data['street'];

    $result = $adb->pquery('SELECT * FROM dmmc_file_numbers WHERE module=?', array($entity->getModuleName()));
    $filenos = $adb->fetch_array($result);
    $currentYr = date("Y", time());
    if ($filenos['year'] != $currentYr) {
        $result = $adb->pquery('UPDATE dmmc_file_numbers SET serial=1, year=? WHERE id=?', array($currentYr, $filenos['id']));
        $filenumber = $prefix . "/1/" .$suffix."/". $currentYr;
    } else {
        $filenumber = $prefix . "/" . $filenos['serial'] . "/" .$suffix."/". $filenos['year'];
        $serial = $filenos['serial']+1;
         $result = $adb->pquery('UPDATE dmmc_file_numbers SET serial=? WHERE id=?', array($serial, $filenos['id']));
    }
    $result = $adb->query("UPDATE vtiger_natureofchanges SET changes_app_file_number='".$filenumber."' WHERE natureofchangesid='".$id['1']."'");

}
