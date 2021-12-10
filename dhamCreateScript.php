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
    "junagadh_1" => 70,

    "junagadh_ss" => 70,

    "gadhpur_ss" => 70
);
foreach ($arr as $key => $value) {
    //echo $key . '-' . $value;

    echo "CREATE TABLE `".$key."` (
  `room_no` int(5) NOT NULL,
  `count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `".$key."`
  ADD PRIMARY KEY (`room_no`);";

    echo '<br/>';
}


$conn->close();
?>