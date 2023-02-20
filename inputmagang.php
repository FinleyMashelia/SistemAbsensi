<?php

@include 'config.php';

session_start();


?>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="google" value="notranslate" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="">
                <h1>INPUT DATA MAGANG</h1>
            </div>
            <hr />

            <div class="col-xs-6">
                <div class="mb-6">
                    <form action="simpan.php" method="post" enctype="multipart/form-data">

                        <!-- fasilitas dari bootstrap utk membuat form input data -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NAMA</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" size="4" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">UNIVERSITAS</label>
                            <div class="col-sm-10">
                                <input type="text" name="universitas" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ALAMAT</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" class="form-control" required>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="LAKI-LAKI" required>
                                    <label class="form-check-label">LAKI-LAKI</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="PEREMPUAN" required>
                                    <label class="form-check-label">PEREMPUAN</label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">PROGRAM STUDI</label>
                            <div class="col-sm-10">
                                <input type="text" name="program_studi" class="form-control" size="4" required>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">BARCODE</label>
                            <div class="col-sm-10">
                                    <input type="text" name="att_barcode" class="form-control" size="4" required>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">&nbsp;</label>
                            <div class="col-sm-10">
                                <input type="submit" href="inputmagang.php" name="submit" class="btn btn-success" value="SIMPAN">
                                <a href="admin_page.php" class="btn btn-primary">KEMBALI</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>