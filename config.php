<?php

$conn = mysqli_connect('localhost','root','','user_db');

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>