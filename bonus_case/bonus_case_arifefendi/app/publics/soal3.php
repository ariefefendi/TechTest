

<br>
<div style="padding: 6px;">
	<h3 style="color: blue">Jawaban <?= $title; ?></h3>
	<p>

		<?php 
		// metode Rekursif
		echo "7 : 2 = ".bagiBilanganRekursif(7, 2) . "<br/>";
		echo "8 : 4 = ".bagiBilanganRekursif(8, 4) . "<br/>";
		echo "11 : 3 = ".bagiBilanganRekursif(11, 3) . "<br/>";

		function bagiBilanganRekursif( $numberInput, $divisorInput ) {
    		// make all input positive
			$number = abs($numberInput);
			$divisor = abs($divisorInput);

			if ($number < $divisor) {
				return 0;
			} else {
				return 1 + bagiBilanganRekursif($number-$divisor, $divisor);
			}
		}

		?>
	</p>
	<p>Script : </p>
	<img src="img/soal-03.PNG" class="img-responsive" alt="Image"><br/>
</div>