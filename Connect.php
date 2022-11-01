<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "playlist";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection is Failed" . mysqli_connect_error());
}
// echo "Connected Successfully";

?>