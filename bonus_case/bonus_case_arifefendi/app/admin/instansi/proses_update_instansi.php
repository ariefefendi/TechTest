<?php
// fungsi insert data
include 'config/config.php';

// parameter
$instansi_id   	= $_GET['id'];

$instansi_name	= $_POST['instansi_name'];
$instansi_desc	= $_POST['instansi_desc'];

// query
$query 	= "UPDATE tb_instansi
SET instansi_name = '$instansi_name',
instansi_desc = '$instansi_desc' 
WHERE instansi_id='$instansi_id'";

// eksekusi query
if(mysql_query($query)){
// create session data
	setcookie('statusProses', 'success',time()+3);
	$_SESSION['msg_success']= "Data Berhasil Di <b>Ubah</b>";
} else {
	setcookie('statusProses', 'error',time()+3);
	$_SESSION['msg_error']= "Data Gagal Di <b>Ubah</b>";
}

// kemblikan ke halaman list_siswa.
header("location:?page=Data Instansi");

?>