<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:login_form.php');
}



?>

<!DOCTYPE html>
<html class="menu">
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="google" value="notranslate" />
   <title>Admin menu</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/menu.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/search.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->



</head>

<body class="p">
   <div class="container active">

      <div class="content">
         <h3>Hallo,<span><?php echo $_SESSION['admin_name'] ?></span></h3>
         <h1>Selamat Datang di Page <span>Admin</span></h1>
      </div>
   </div>

   </div>
   <nav class="main-menu">
      <div>
      
         <img style="width: 100%; height: 100%"  class="logo" src="img/diskominfosemarang.png">

         </img>
      </div>
      <div class="settings"></div>
      <div class="scrollbar" id="style-1">

         <ul>

            <li>
               <a href="admin_page.php">
                  <i class="fa fa-home fa-lg"></i>
                  <span class="nav-text">Menu Utama</span>
               </a>
            </li>

            </li>

            </li>
            <li>
               <a href="tabel.php">
                  <i class="fa fa-table"></i>
                  <span class="nav-text">Daftar Mahasiswa</span>
               </a>
            </li>
            <li>
               <a href="tabel2.php">
                  <i class="fa fa-table"></i>
                  <span class="nav-text">Tabel Absen</span>
               </a>
            </li>

            <li>
               <a href="inputmagang.php">
                  <i class="fa fa-plus-square" aria-hidden="true"></i>
                  <span class="nav-text">Create Magang</span>
               </a>
            </li>
         </ul>

         <ul>
            <li class="darkerli">
               <a href="IDcard.php">
               <i class="fa fa-desktop fa-lg"></i>
                  <span class="nav-text">ID Card</span>
               </a>
            </li>
         </ul>
         <ul>
            <li class="darkerli">
               <a href="index.php">
               <i class="fa fa-envelope-o fa-lg"></i>
                  <span class="nav-text">Barcode</span>
               </a>
            </li>
         </ul>
         

         
         <ul>
        
         

          <ul>
            <div class="position-relative">
               <a type="button" class="btn btn-danger" href="logout.php">Logout</a>
            </div>        
         </ul>
   </nav>
</body>

</html>