<?php
/*
$arr = array(
    "vadtal_dham_ss" => 70,
    "vadtal_dham_1" => 115,
    "vadtal_dham_2" => 1006,
    "gadhpur_dham" => 350,
    "junagadh_dham_male" => 180,
    "junagadh_dham_female" => 180,
    "dholera_dham_male" => 525,
    "dholera_dham_female" => 580,
    "dharm_ss_male" => 140,
    "bhakti_ss_female" => 125
);
*/

$arr = array(
    "vadtal_dham_ss" => 70,
    "vadtal_dham_1" => 115,
    "vadtal_dham_2" => 1006,
    "gadhpur_dham" => 350,
    "junagadh_dham_male" => 180,
    "junagadh_dham_female" => 180,
    "dholera_dham_male" => 525,
    "dholera_dham_female" => 580,
    "dharm_ss_male" => 140,
    "bhakti_ss_female" => 125,
    "dholera_dham_sahjanand_male" => 200,

    "dholera_dham_shreehari_male" => 200,

    "dholera_dham_harikrishna_male" => 200,

    "dholera_dham_narayanmuni_male" => 200,

    "dholera_dham_nyalkaran_male" => 200,

    "dholera_dham_swaminarayan_male" => 200,

    "dholera_dham_nilkanth_male" => 200,

    "dholera_dham_ghanshyam_male" => 200,

    "dholera_dham_sarjudas_male" => 200,

    "dholera_dham_shreeji_male" => 200,

    "dholera_dham_sahjanand_female" => 200,

    "dholera_dham_shreehari_female" => 200,

    "dholera_dham_harikrishna_female" => 200,

    "dholera_dham_narayanmuni_female" => 200,

    "dholera_dham_nyalkaran_female" => 200,

    "dholera_dham_swaminarayan_female" => 200,

    "dholera_dham_nilkanth_female" => 200,

    "dholera_dham_ghanshyam_female" => 200,

    "dholera_dham_sarjudas_female" => 200,

    "dholera_dham_shreeji_female" => 200,

    "junagadh_1" => 70,

    "junagadh_ss" => 70,

    "gadhpur_ss" => 70
);

foreach ($arr as $key => $value) {
    echo '<br/>';
    echo $key;
    echo '<br/>';
    echo   'https://utara.shreehariji.com/utaraCount/?dham='. base64_encode($key);
    echo '<br/>';
}

//echo str_replace('_',' ',strtoupper("junagadh_purus_1"));

//str_replace('_', ' ', ucwords($state));

?>