<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = "daftar_kehadiran";

$db = new mysqli($hostname, $username, $password, $db_name);

if($db->connect_error){
    die('koneksi gagal;'. $db->connect_error);
}
?>