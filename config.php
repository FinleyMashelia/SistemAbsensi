<?php

$conn = mysqli_connect('ajikdb.mysql.database.azure.com','ajikdb','Batassuci123','user_db');

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
