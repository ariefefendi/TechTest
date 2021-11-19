<?php
session_start();
// menghapus semua session yang aktif. 
session_destroy();
header("location:index.php");
?> 