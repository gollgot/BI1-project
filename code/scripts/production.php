<?php

    // Get json data on the "rte-opendata" website
    $json = file_get_contents('https://rte-opendata.opendatasoft.com/api/records/1.0/search/?dataset=prod_region_filiere&rows=13&sort=regions_nouvelles&facet=annee&facet=regions_nouvelles&refine.annee=2016');
    $obj = json_decode($json);

    // Array will contain each entries for the final CSV
    $res = array();
    // Header
    $currentDatas = array("Région", "Production nucléaire", "Production thermique", "Production hydraulique", "Production éolienne", "Production solaire", "Production bioénergies", "Production totale");

    $res[] = $currentDatas;

    // Get datas we need and add each entry in the res array
    foreach ($obj->records as $record) {
        // Each type of production
        $region = $record->fields->regions_nouvelles;
        $nuclear = !empty($record->fields->production_nucleaire_gwh) ? $record->fields->production_nucleaire_gwh : 0;
        $thermal = !empty($record->fields->production_thermique_gwh) ? $record->fields->production_thermique_gwh : 0;
        $wind = !empty($record->fields->production_eolienne_gwh) ? $record->fields->production_eolienne_gwh : 0;
        $water = !empty($record->fields->production_hydraulique_gwh) ? $record->fields->production_hydraulique_gwh : 0;
        $sun = !empty($record->fields->production_solaire_gwh) ? $record->fields->production_solaire_gwh : 0;
        $bioenergies = !empty($record->fields->production_bioenergies_gwh) ? $record->fields->production_bioenergies_gwh : 0;
        $total = $nuclear + $thermal + $wind + $water + $sun + $bioenergies;

        $currentDatas = array($region, $nuclear, $thermal, $water, $wind, $sun, $bioenergies, $total);
        $res[] = $currentDatas;
    }

    // Create a csv file and add into it each entry of the res array (will automatically formatted as a csv file)
    $fp = fopen('../../data/processed/production.csv', 'w');
    foreach ($res as $fields) {
        fputcsv($fp, $fields);
    }
    fclose($fp);

    echo "terminé";
?>