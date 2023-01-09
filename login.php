<?php
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM user
WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: home.html");
} else {
    echo "<center>Email atau Password anda salah. Silahkan COba lagi<button><a href='login.html'>LOGIN</a></button></center>";
}
?>