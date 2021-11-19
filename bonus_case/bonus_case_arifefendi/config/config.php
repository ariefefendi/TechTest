<?php

	// $connect = mysql_connect(HOST, USERNAME, PASSWORD, DB); // tambahkan @ agar tidak muncul error default dari fungsi koneksi.

	$conf = mysql_connect(
						'localhost',  	/* hostname */
						'root', 		/* username */
						''); 			/* password */

	$connect = mysql_select_db('bonus_case', $conf);

	if (!$connect) {
		die("Koneksi gagal! <br> Silahkan cek koneksi anda");
	} 
	// else {
	// 	echo $res = json_encode('success'); 
	// }
?>