<?php 
session_start();
include 'config/config.php';

$username = mysql_real_escape_string($_POST['username']);
$password = sha1($_POST['password']);

if($_POST['submit'] === "Login"){

	// cek login from database
	$result = mysql_query("SELECT tb1.`username`, tb1.`password`, tb2.name as level FROM `tb_users` as tb1 JOIN tb_user_roles AS tb2 ON tb1.`level`=tb2.id WHERE tb1.username='$username' and tb1.password='$password'");

	$check = mysql_num_rows($result);

	if($check === 0 ) 
	{ 

		echo 'Check password dan username anda!';
	    die(mysql_error()); // TODO: better error handling

	} else {

		while($row = mysql_fetch_array($result))
		{
			// check usernam dan password apakah sudah benar benar betul
			if($username == $row['username'] && $password == $row['password'])
			{

				// echo 'Anda berhasil login';
 
				// role 'administrator'
				if($row['level'] === 'administrator')
				{
					// create session data login
					$_SESSION['nama']=$r['username'];
					$_SESSION['level']=$r['level'];
					$_SESSION['status_login']="berhasil";

					// kembalikan ke akses halaman
					header("location:admin.php?page=Data Instansi");
				}
 
				// role 'petugas'
				if($row['level'] === 'petugas')
				{
					// create session data login
					$_SESSION['nama']=$r['username'];
					$_SESSION['level']=$r['level'];
					$_SESSION['status_login']="berhasil";

					// kembalikan ke akses halaman
					header("location:petugas.php");
				}


			}

		}
		
	}


	// echo $hasil;



}

die();


?>