<?php 
// aktifited the session function.

include('config/config.php'); 
$content= "app/publics/";
$halaman= "";

if (!isset($_GET['page'])){
	$halaman="home.php";
	$title="home";

}else { 
	switch ($_GET['page']) {

	case "soal-01":
   $halaman   ="soal1.php";
   $title     ="Soal 01";
   break;

   case 'soal-02':
   $halaman   = "soal2.php";
   $title     = "Soal 02";
   break; 

   case 'soal-03': 
   $halaman   = "soal3.php";
   $title     = "Soal 03";
   break; 

   case "soal-04":
   $halaman   = "soal4.php";
   $title     = "Soal 04";
   break;

   case "soal-05":
   $halaman   = "soal5.php";
   $title     = "Soal 05";
   break;

   case "loginApps":
   $halaman   = "../../index.php";
   $title     = "Soal 05";
   break;

   // MODUL ...

   // MODUL ...
   
   // MODUL ...

   /* Default System Dijadika Eror, Karena Page / halaman belum di daftarkan ke dalam ROOTING ini atau sebaliknya. */

   default:
   $halaman = "404.php";
   $title   = "Error Not Found";
   break;


 }

}

$content=$content.$halaman; /* aslinya : localhost/namaprojek/app/public/halaman yang di tangkap */
?>



<!-- Tempat Head = file css, js, dan file navbar menu atas  -->
<?php include('assets/head.php') ?>

<!-- BAGIAN NAVBAR / MENU HALAMAN -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Aplikasi</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">

      <ul class="nav navbar-nav navbar-left">
        <li> <a href="?page=soal-01">soal 01</a> </li>
        <li> <a href="?page=soal-02">soal 02</a> </li> 
        <li> <a href="?page=soal-03">soal 03</a> </li>
        <li> <a href="?page=soal-04">soal 04</a> </li>
        <li> <a href="?page=soal-05">soal 05</a> </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<!-- end -->

<!-- content --> 
<?php include($content); ?>
<!-- end content -->

<!-- Tempat JS & Footernya -->
<?php include('assets/foot.php') ?>
<!-- End Foot -->
