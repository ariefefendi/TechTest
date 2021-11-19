<?php 
// mengaktifkan Fungsi Session.
session_start();
// cek kondisi $_SESSION apa bila tidak ada
if($_SESSION["status_login"] !=="berhasil")
{ 
  // di kembalikan ke form login.
  header("location:index.php");
}

include('config/config.php'); 
$content= "app/admin/";
$halaman= "";

if (!isset($_GET['page'])){
	$halaman="home/_dashboard.php";
	$title="home";

}else { 
	switch ($_GET['page']) {

   case "home":
   $halaman   ="home/_dashboard.php";
   $title     ="Home Page";
   break;

   // MODUL Instansi
   case 'Data Instansi': 
   $halaman   = "instansi/_listdata.php";
   $title     = "CRUD data Instansi.";
   break; 

   case "pencarian_instansi":
   $halaman   = "instansi/pencarian.php";  
   // $title     = "Halaman List Instansi";
   break;

   case "form_tambahInstansi":
   $halaman   = "instansi/form_tambah_instansi.php";  
   $title     = "Halaman List Instansi";
   break;

   case "form_edit_instansi":
   $halaman   = "instansi/form_edit_instansi.php";  
   $title     = "Form Edit Instansi";
   break;

   case "proses_tambah_instansi":
   $halaman   = "instansi/proses_tambah_instansi.php";  
   // $title     = "Halaman List Instansi";
   break;

   case "proses_update_instansi":
   $halaman   = "instansi/proses_update_instansi.php";  
   // $title     = "Halaman List Instansi";
   break;

   case "proses_delate_instansi":
   $halaman   = "instansi/proses_delate_instansi.php";  
   // $title     = "Halaman List Instansi";
   break;


   // MODUL ...
   
   // MODUL ...

   /* Default System Dijadika Eror, Karena Page / halaman belum di daftarkan ke dalam ROOTING ini atau sebaliknya. */

   default:
   $halaman = "404.php";
   $title   = "Error Not Found";
   break;


 }

}

$content=$content.$halaman; /* localhost/namaprojek/app/public/halaman yang di tangkap */
?>



<!-- Tempat Head = file css, js, dan file navbar menu atas  -->
<?php include('assets/head.php') ?>

<!-- BAGIAN NAVBAR / MENU HALAMAN -->
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Aplikasi</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse navbar-left">
      <ul class="nav navbar-nav navbar-left">
        <li> <a href="?page=home">Home</a> </li>
        <li> <a href="?page=Data Instansi">Data Instansi</a> </li>
      </ul>
    </div><!-- /.navbar-collapse -->

    <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li> <a href="logout.php">logout</a> </li>
          </ul>
        </li>
      </ul>
    </div>

  </div>
</nav>

<!-- end -->

<!-- content --> 
<?php include($content); ?>
<!-- end content -->

<!-- Tempat JS & Footernya -->
<?php include('assets/foot.php') ?>
<!-- End Foot -->
