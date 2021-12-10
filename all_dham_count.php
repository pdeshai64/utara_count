<?php
$servername = "localhost";
$username = "shreehar_mahotsavutara";
$password = "SarDharMahotsav@2021";
$dbname = "shreehar_mahotsavutara";
/*$username = "root";
$password = "root";
$dbname = "utara_test";
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$arr = array(
    "gadhpur_dham" => 350,
    "junagadh_dham_male" => 180,
    "junagadh_dham_female" => 180,

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

    "dholera_dham_shreeji_female" => 200

);

$sum=0;
foreach ($arr as $key => $value) {
    //echo $key . '-' . $value;


        $sql = "SELECT SUM(count) as count FROM ".$key;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                $current_count = $row["count"];
                $sum = $sum + $current_count;
                echo str_replace('_',' ', strtoupper($key))." - ".$current_count. "<br>";
            }
        } else {
            echo $key." - Not Found". "<br>";

        }
}
echo "<br> <br> Total = ".$sum."<br>";


$conn->close();
?>