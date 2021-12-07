<?php
$servername = "localhost";
/*$username = "shreehar_mahotsavutara";
$password = "SarDharMahotsav@2021";
$dbname = "shreehar_mahotsavutara";*/
$username = "root";
$password = "root";
$dbname = "utara_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
    echo $key . '-' . $value;

    for ($i = 1; $i <= $value; $i++) {

        $sql = "INSERT INTO ".$key."(room_no) VALUES (" . $i . ")";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
}


$conn->close();
?>