
<div style="padding: 6px;">
	<h3 style="color: blue;">Jawaban <?= $title; ?></h3>
	<?php 
	$aplikasi[1] = "gtAkademik";
	$aplikasi[2] = "gtFinansi";
	$aplikasi[3] = "gtPerizinan";
	$aplikasi[4] = "eCampus";
	$aplikasi[5] = "eOviz";

	// sum total data
	$n = count($aplikasi);

	// loop with while
	$i = 1;
	while($i <= $n) {

		echo "<p>".$aplikasi[$i]."<p/>";

		$i++;
	} 
	?>

	<br/><p>Script : </p>
	<img src="img/soal-01.PNG" class="img-responsive" alt="Image">
</div>