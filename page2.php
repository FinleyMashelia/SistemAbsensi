<?php
@include 'config.php';
$att_barcode = $_POST["att_barcode"];
if(!empty($att_barcode)){
   $conn =mysqli_connect("localhost","root","","user_db") or die();
   $cek=mysqli_query($conn ,"select * from employee where att_barcode='$att_barcode' ");
   $jml=mysqli_num_rows($cek);
   if($jml>0){
     $data=mysqli_fetch_array($cek);
     $nama = $data["nama"];
     $universitas = $data["universitas"];
     $alamat = $data["alamat"];
     echo "<p>Att Barcode : <b>" . $att_barcode . "</b></p>";
     echo "<p>Nama : <b>" . $nama . "</b></p>";
     echo "<p>universitas : <b>" . $universitas . "</b></p>";
     echo "<p>Alamat : <b>" . $alamat . "</b></p>";
     $tgl = date("Y-m-d");
     $jam = date("h");
     if((int)$jam >= 15  && (int)$jam <= 18){
        $att_in = date("Y-m-d h:i:s");
        $cek=mysqli_query($conn,"select * from attendance where att_barcode='$att_barcode' and tgl='$tgl' ");
        $jml=mysqli_num_rows($cek);
        if($jml>0){
          $update=mysqli_query($conn,"update attendance set att_in='$att_in' where att_barcode='$att_barcode' and tgl='$tgl'");
        }else{
          $input=mysqli_query($conn,"insert into attendance(att_barcode,tgl,att_in) values('$att_barcode','$tgl','$att_in')");
        }
        echo "<p>Tanggal - Jam Masuk Kerja : <b>" . $att_in . "</b></p>";
     }else{ /* if((int)$jam >= 15  && (int)$jam <= 18) */
        $att_out = date("Y-m-d h:i:s");
        $cek=mysqli_query($conn,"select * from attendance where att_barcode='$att_barcode' and tgl='$tgl' ");
        $jml=mysqli_num_rows($cek);
        if($jml>0){
          $update=mysqli_query($conn,"update attendance set att_out='$att_out' where att_barcode='$att_barcode' and tgl='$tgl'");
        }else{
          $input=mysqli_query($conn,"insert into attendance(att_barcode,tgl,att_out) values('$att_barcode','$tgl','$att_out')");
        }
        echo "<p>Tanggal - Jam Pulang Kerja : <b>" . $att_out . "</b></p>";
     }
   }else{
     echo "<p>Kode barcode tidak terdaftar..</p>";
   }
   
}else{
   echo "<p>Silahkan masukkan kode barcode..</p>";
}
?>