<?php
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
foreach ($arr as $key => $value) {
    echo '<br/>';
    echo   'https://utara.shreehariji.com/utaraCount/?dham='. base64_encode($key);
    echo '<br/>';
}

//echo str_replace('_',' ',strtoupper("junagadh_purus_1"));

//str_replace('_', ' ', ucwords($state));

?>