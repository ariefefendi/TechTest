<?php
// fungsi insert data
include 'config/config.php';

	// parameter 
$instansi_name 	=   $_POST['instansi_name'];
$instansi_desc  =   $_POST['instansi_desc'];

	// query insert
$query 	= "INSERT INTO tb_instansi(instansi_name, instansi_desc)
VALUES ('$instansi_name','$instansi_desc')";
	// eksekusi query

if(mysql_query($query)){
// create session data
	setcookie('statusProses', 'success',time()+3);
	$_SESSION['msg_success']= "Data Berhasil Di <b>tambahkan</b>";
} else {
	setcookie('statusProses', 'error',time()+3);
	$_SESSION['msg_error']= "Data Gagal Di <b>tambahkan</b>";
}

// kembalikan ke list data
header("location:?page=Data Instansi");

?>