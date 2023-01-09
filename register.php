<?php
require 'koneksi.php';

if (isset($_POST['REG'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query_sql = "INSERT INTO user (name, username, email, password)
                VALUES('$name','$username','$email','$password')";
    
    if (mysqli_query($koneksi, $query_sql)){
        header("location:login.html");
    } else {
        echo "Register Gagal : " . mysqli_error($koneksi);
    }
}
?>
