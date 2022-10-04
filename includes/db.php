
<?php

ob_start();
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "simple_app";

$conn = mysqli_connect("$host", "$user", "$password", "$database");

if ($conn) {
    echo "";
} else {
    echo "Not Conneted" . mysqli_error($coon);
}
