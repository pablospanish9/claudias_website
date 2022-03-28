<?php include 'cl-config.php'?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -----Google Fonts:--------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Montserrat&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <!-- --------Styles-------------- -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
 integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
 <link rel="stylesheet" href="css/aboutmestyles.css">
<link rel="stylesheet" href="css/homecss.css">
<link rel="stylesheet" href="css/navbarstyles.css">
<link rel="stylesheet" href="css/forms.css">
<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- End Navbar CSS styles  -->
</head>
<body>

<!-- <div class="container">                                      -->
  <!-- navbar Start   -->

<nav class="navbar" id="navbar">
<!-- LOGO -->
<div class="logo">
  <a href="index.php"><img src="images/newlogo.png" alt="Logo image Claudia A'Zar interpretation and translation"></a>
</div>
<!-- NAVIGATION MENU -->
<div class="topnav" id="myTopnav">
<?=makeLinks($nav1)?>

    <!-- Start comment out original Nav
     <a href="index.php">Home</a>
    <a href="aboutme.html" >About me</a>
    <a href="services.php">Services</a>
    <a href="faqs.php">FAQs</a>
    <a href="contactme.php">Contact me</a> -->
    
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</nav>
 <!-- navbar End  -->
<!-- Header ends here cut point -->