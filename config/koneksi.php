<?php
//Koneksi kedatabase
$hostmysql="localhost";
$username_db="root";
$password_db="" ;
$database="db_azure" ;
$conn=mysqli_init();
mysqli_real_connect($conn, $hostmysql, $username_db, $password_db, $database, 3306);
if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
?>