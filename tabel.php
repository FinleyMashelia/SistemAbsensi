<?php

@include 'config.php';

session_start();


?>
<!DOCTYPE html>
<html>
<head>
 <title>Absensi Magang Diskominfo</title>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

</head>
<body>
    <br>
<a href="admin_page.php"><button type="button" class="btn btn-danger btn-lg">Back</button></a>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="inputmagang.php"><button class="btn btn-primary me-md-2" type="button">Tambah Data</button></a>
</div>
<br> <br>

<div class ="mx-auto">
    <div class="card">
            <h5 class="card-header text-white bg-secondary">Daftar Mahasiswa Magang</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Mahasiswa</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Universitas</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    <tbody>
                    <?php
                    include "config.php";

                    $no=1;
                    $ambildata = mysqli_query($conn,"select * from employee");
                    while($tampil = mysqli_fetch_array($ambildata)){
                    

                        echo "
                        <tr> 
                            <td align='center'>$no</td>
                            <td align='center'>$tampil[id_employee]</td>
                            <td>$tampil[nama]</td>
                            <td>$tampil[alamat]</td>
                            <td>$tampil[universitas]</td>
                            <td>$tampil[att_barcode]</td>
                            <td 'cols'>
                                <a herf='?kode=$tampil[id_employee] button type='button' class='btn btn-danger'>Hapus</button></a>
                                
                            </td>
                            
                        <tr>";

                        $no++; 

                    }
                    ?>
                    </tbody>
                </thead>
                </table>
                <?php 
                if(isset($_GET['kode'])){
                    mysqli_query($conn,"delete from employee where id_employee='$_GET[kode]'");

                    echo "Data telah terhapus";
                    echo "<meta http-equiv=refresh content=2;URL='tabel.php'>";
                }
                ?>
        </div>
    </div>

</div>
</body>
</html>