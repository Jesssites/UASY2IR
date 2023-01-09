<?php 
$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "dbts_uas";

$koneksi = mysqli_connect($hostname, $user, $password, $db_name) or die(mysqli_error($koneksi));

if (!$koneksi){
    die("KONEKSI GAGAL: " . mysqli_error());
} else {
    echo "";
}
?>