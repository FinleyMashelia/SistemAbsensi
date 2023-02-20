<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
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
         <h3>Hallo,<span><?php echo $_SESSION['user_name'] ?></span></h3>
         <h1>Selamat Datang di Page <span>Anak Magang</span></h1>
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
                  <span class="nav-text">Home</span>
               </a>
            </li>

            </li>
            <li>
               <a href="absensi.php">
                  <i class="fa fa-clock-o fa-lg"></i>
                  <span class="nav-text">Absensi</span>
               </a>
            </li>

       

         <ul>
            <li class="darkerli">
               <a href="about.php">
                  <i class="fa fa-lightbulb-o fa-lg"></i>
                  <span class="nav-text">About</span>
               </a>
            </li>
         </ul>

          <ul>
            <div class="position-relative">
               <a type="button" class="btn btn-danger" href="logout.php">Logout</a>
            </div>        
         </ul>
   </nav>
</body>

</html>