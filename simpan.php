<?php
@include 'config.php';
// menyimpan data kedalam variabel
$nama          = $_POST['nama'];
$universitas   = $_POST['universitas'];
$alamat        = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$program_studi = $_POST['program_studi'];
$att_barcode   = $_POST['att_barcode'];

// query SQL untuk insert data
$query="INSERT INTO employee SET nama='$nama',universitas='$universitas',alamat='$alamat',jenis_kelamin='$jenis_kelamin',program_studi='$program_studi',att_barcode='$att_barcode'";
mysqli_query($conn, $query);
// mengalihkan ke halaman mulaibarcode.php
header("location:admin_page.php");
?>