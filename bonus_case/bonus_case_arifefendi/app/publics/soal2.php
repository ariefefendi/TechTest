<div style="padding: 6px;">
	<h4 style="color: blue;">Jawaban <?= $title; ?></h4>
	<p>Buatlah sebuah query untuk menampilkan nama mahasiswa “Sari” sebagai mahasiswa yang memiliki nilai mata kuliah tertinggi pada mata kuliah dengan kode “MK303”.</p>	


</div>


<?php 
include 'config/config.php';

// setup pagination
$batas=1;
@$hal=$_GET['hal'];

if($hal=='')
{
	$posisi=0;
	$hal=1;
}
else
{
	$posisi=($hal-1) * $batas;
}





/* Data query */
$read_data  = mysql_query("SELECT mhs.mhs_nim, mhs.mhs_nama, tb1.nilai, mhs.mhs_angkatan FROM `tb_mahasiswa_nilai` as tb1, tb_mahasiswa as mhs, tb_matakuliah as mk where tb1.mk_id=mk.mk_id and tb1.mhs_id=mhs.mhs_id and tb1.mk_id='2' order by tb1.nilai DESC LIMIT $posisi,$batas");

$jumlah_data = mysql_query("SELECT mhs.mhs_nim, mhs.mhs_nama, tb1.nilai, mhs.mhs_angkatan FROM `tb_mahasiswa_nilai` as tb1, tb_mahasiswa as mhs, tb_matakuliah as mk where tb1.mk_id=mk.mk_id and tb1.mhs_id=mhs.mhs_id and tb1.mk_id='2' order by tb1.nilai DESC");
?>

<div class="container-fluid animate__animated animate__fadeIn animate__slow">
	<div class="row">
		<div style="padding: 6px;">
			<h4 style="color: blue;">Query</h4>
			<p><code>
				SELECT mhs.mhs_nim, mhs.mhs_nama, tb1.nilai, mhs.mhs_angkatan FROM `tb_mahasiswa_nilai` as tb1, tb_mahasiswa as mhs, tb_matakuliah as mk where tb1.mk_id=mk.mk_id and tb1.mhs_id=mhs.mhs_id and tb1.mk_id='2' order by tb1.nilai DESC LIMIT 1
			</code></p>	
		</div>

		<div class="col-sm-12"> 
			<div class="marg-top panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">list data</h3>
				</div>
				<div class="panel-body">
					<div class="bs-example" data-example-id="striped-table">

						<table border="0" class="table table-striped table-hover">
							<thead>
								<tr>
									<th width="20%">nim</th>
									<th width="40%">nama</th>
									<th width="40%">nilai</th>
									<!-- <th width="15%" colspan="2">Action</th>  -->
								</tr>
							</thead>
							<tbody >

								<?php 

								$no=$posisi+1;
								while ($data = mysql_fetch_array($read_data)) {
									?>
									<tr>
										<td><?php echo $data['mhs_nim']  ?></td>
										<td><?php echo $data['mhs_nama']  ?></td>
										<td><?php echo $data['nilai'] ?></td>
									</tr>
									<?php $no++;} ?>
								</tbody>
							</table> 

						</div>
					</div>
				</div>
				<p>Script : </p>
				<img src="img/soal-02.PNG" class="img-responsive" alt="Image">
			</div>
		</div><!-- end row -->
	</div><!-- container -->

