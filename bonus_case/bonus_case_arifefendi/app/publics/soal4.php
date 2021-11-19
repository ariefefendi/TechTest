<div style="padding: 6px;">
	<h3 style="color: blue">Jawaban <?php echo $title; ?></h3>
	<p>Buatlah sebuah program yang mencetak angka dari 1 sampai dengan 50, dengan ketentuan sebagai berikut:<br/>
		Jika angka yang akan tercetak merupakan kelipatan tiga, maka program akan mencetak kata “Foo”<br/>
		Jika angka yang akan tercetak merupakan kelipatan lima, maka program akan mencetak kata “Bar”<br/>
		Jika angka yang akan tercetak merupakan kelipatan tiga dan lima sekaligus, maka program akan <br/>
		mencetak kata “FooBar”.
	</p>
	<hr/>


	<!-- TABLE KELIPATAN 3 -->
	<table class='table table-hover'>
		<thead>
			<tr>
				<th>KELIPATAN 3</th>
			</tr>
		</thead>
		<tbody>

			<?php 
			$nilai = 50;
			$num = 1;
			while($num <= $nilai) {
				// kelipatan 3
				if($num%3 == 0){
				$keltiga = 'Foo ['.$num.']. <br/>'; // foo

				echo "
				<td> $keltiga </td>
				";
			}
			$num++; 
		} 
		?>

	</tbody>
</table>

<!-- TABLE KELIPATAN 5 -->
<table class='table table-hover'>
	<thead>
		<tr>
			<th>KELIPATAN 5</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		$nilai = 50;
		$num = 1;
		while($num <= $nilai) {

				// kelipatan 5
			if($num%5 == 0){
				$kellima = 'Bar ['.$num.']. <br/>'; // bar

				echo "
				<td> $kellima </td>
				";
			}
			$num++; 
		} 
		?>

	</tbody>
</table>


<!-- TABLE KELIPATAN 3 & 5 -->
<table class='table table-hover'>
	<thead>
		<tr>
			<th>KELIPATAN 3 & 5</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		$nilai = 50;
		$num = 1; 
		while($num <= $nilai) {

				// kelipatan 3 & 5
			if($num % 3 == 0 && $num % 5 == 0)
			{
				echo "<td> FooBar </td> ";
			}

			$num++; 
		} 
		?>

	</tbody>
</table>


	<p><b>Script :</b></p>
	<p>Kelipatan 3</p>
	<img src="img/soal-04-a.PNG" class="img-responsive" alt="Image"><br/>
	<p>Kelipatan 5</p>
	<img src="img/soal-04-b.PNG" class="img-responsive" alt="Image"><br/>
	<p>Kelipatan 3 & 5</p>
	<img src="img/soal-04-c.PNG" class="img-responsive" alt="Image">




</div>