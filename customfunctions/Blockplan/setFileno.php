<?php

function setFileno($entity) {
    global $adb;
    $entity_data = get_object_vars($entity);
    $data = $entity_data['data'];
    $id = explode('x', $data['id']);
    switch ($data['division']) {
        case 'Mt. Lavinia':
            $prefix = 'BP/M';
            break;
        case 'Ratmalana':
            $prefix = 'BP/R';
            break;
        case 'Kalubowila':
            $prefix = 'BP/KB';
            break;
        case 'Dehiwala':
            $prefix = 'BP/D';
            break;
    }
    $result = $adb->pquery('SELECT * FROM dmmc_file_numbers WHERE module=?', array($entity->getModuleName()));
    $filenos = $adb->fetch_array($result);
    $currentYr = date("Y", time());
    if ($filenos['year'] != $currentYr) {
        $result = $adb->pquery('UPDATE dmmc_file_numbers SET serial=1, year=? WHERE id=?', array($currentYr, $filenos['id']));
        $filenumber = $prefix . "/1/" . $currentYr;
    } else {
        $filenumber = $prefix . "/" . $filenos['serial'] . "/" . $filenos['year'];
        $serial = $filenos['serial']+1;
         $result = $adb->pquery('UPDATE dmmc_file_numbers SET serial=? WHERE id=?', array($serial, $filenos['id']));
    }
    $result = $adb->query("UPDATE vtiger_blockplan SET file_no='".$filenumber."' WHERE blockplanid='".$id['1']."'");

}
