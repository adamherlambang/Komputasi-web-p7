<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = ""; // Password kosong
$db_name = "data_diri";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Gagal terhubung ke database: " . $conn->connect_error);
}
?>
