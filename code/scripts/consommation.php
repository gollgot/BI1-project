<?php

    // Get json data on the "rte-opendata" API (filter by year 2016)
    $json = file_get_contents('https://rte-opendata.opendatasoft.com/api/records/1.0/search/?dataset=conso_nette_regionale&rows=13&sort=regions_nouvelles&facet=annee&facet=code_insee&facet=regions_nouvelles&refine.annee=2016');
    $obj = json_decode($json);

    // Array will contain each entries for the final CSV
    $res = array();
    // Header
    $currentDatas = array("regions", "consommation");

    $res[] = $currentDatas;

    // Get datas we need and add each entry in the res array
    foreach ($obj->records as $record) {
        $currentDatas = array($record->fields->regions_nouvelles, $record->fields->conso_nette_corrigee);
        $res[] = $currentDatas;
    }

    // Create a csv file and add into it each entry of the res array (will automatically formatted as a csv file)
    $fp = fopen('../../data/processed/consommation.csv', 'w');
    fwrite($fp, "\xEF\xBB\xBF"); // set right encodage for excel
    foreach ($res as $fields) {
        fputcsv($fp, $fields);
    }
    fclose($fp);

    echo "Finished, processed file generated at : /data/processed/consommation.csv";
?>