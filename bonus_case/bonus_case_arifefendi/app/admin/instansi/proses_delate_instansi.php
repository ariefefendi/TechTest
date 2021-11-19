<?php
// fungsi insert data
include 'config/config.php';
// parameter id
$id = $_GET['id'];

$query 	= "DELETE FROM tb_instansi WHERE instansi_id='$id' ";

// eksekusi query delete.
if(mysql_query($query)){
// create session data
	setcookie('statusProses', 'success',time()+3);
	$_SESSION['msg_success']= "Data Berhasil Di <b>Hapus</b>";
} else {
	setcookie('statusProses', 'error',time()+3);
	$_SESSION['msg_error']= "Data Gagal Di <b>Hapus</b>";
}

// kembalikan ke list data
header("location:?page=Data Instansi");
?>