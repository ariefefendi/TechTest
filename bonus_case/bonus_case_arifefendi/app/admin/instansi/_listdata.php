<?php 
include 'config/config.php';

// check cookie if not aktif
@$cekcookie = $_COOKIE['statusProses'];
if($cekcookie == ''){
	unset($_SESSION['msg_success']);
	unset($_SESSION['msg_error']);
}

// session succes saving data
@$success = $_SESSION['msg_success'];
if( $success != "" ) {
	echo "
	<div class='col-md-12'>
	<div class='alert alert-success alert-dismissible' role='alert'>
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
	<strong>Alert!</strong> $success </div></div>";
}

// select id for edit data.
@$id = $_GET['id'];
if(!empty($id)) {
	// query edit data.
	$query 	= mysql_query("SELECT * from tb_instansi where instansi_id='$id'");
	// eksekusi query => dalam bentuk array
	$row 	= mysql_fetch_array($query);
	// panggil form edit data, dan tampilkan $row[''];
	include 'app/admin/instansi/form_edit_instansi.php';
	die();
}

// setup pagination
$batas=5;
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

/* Data query table Siswa */
$read_siswa  = mysql_query("SELECT * FROM tb_instansi LIMIT $posisi,$batas");
$jumlah_data = mysql_query("SELECT instansi_id from tb_instansi");
?>

<div class="container-fluid animate__animated animate__fadeIn animate__slow">
	<div class="row listdata">
		<div class="col-sm-2">
			<h3><a href="?page=form_tambahInstansi" type="button" class="btn btn-primary">Input New </a>
				<sup>
					<span class="label label-default"> 
						<?php 
						$jumlah = mysql_num_rows($jumlah_data);
						echo $jumlah;
						?>
					</span>
				</sup>
			</h3>
		</div>

		<div class="col-sm-8 text-right">
			<form action="?page=pencarian_instansi" method="POST" class="form-inline">
				<div class="form-group">
					<input type="text" name="keyword" class="form-control" placeholder="Search data">
				</div>
				<button type="submit" class="btn btn-info">search</button>
			</form>
		</div>



		<div class="col-sm-12"> 
			<div class="marg-top panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Data siswa</h3>
				</div>
				<div class="panel-body">
					<div class="bs-example" data-example-id="striped-table">

						<table border="0" class="table table-striped table-hover">
							<thead>
								<tr>
									<th width="2%">No</th>
									<th width="5%">Aksi</th> 
									<th width="30%">Instansi</th>
									<th width="60%">Deskripsi</th>
								</tr>
							</thead>
							<tbody >

								<?php 
								
								$no=$posisi+1;
								while ($data = mysql_fetch_array($read_siswa)) {
									?>
									<tr>
										<th scope="row"><?php echo $no ?></th>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Aksi <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="admin.php?page=Data Instansi&id=<?php echo $data['instansi_id'];?>
															">Edit</a>
														</li>
														<li><a href="admin.php?page=proses_delate_instansi&id=<?php echo $data['instansi_id'];?>">Delete</a></li>
													</ul>
												</div>
											</td>
											<td><?php echo $data['instansi_name']  ?></td>
											<td><?php echo $data['instansi_desc'] ?></td>
										</tr>
										<?php $no++;} ?>
									</tbody>
								</table> 

								<div class="text-center">
									<ul class="pagination pagination-sm">

										<?php 
					      // CONTOH : jumlh data 40 bagi 8 = 5 
										$total  = mysql_num_rows($jumlah_data);
										$jml_halaman = ceil($total/$batas);

										for($i=1;$i<=$jml_halaman;$i++)
										{
											if($i!=$jml_halaman)
											{
												echo "<li><a href='?page=Data Instansi&hal=$i'>$i</a></li>";
											}
											else
											{
												echo "<li><a href='?page=Data Instansi&hal=$i'>$i</a></li>";
											}
										}

										?>

									</ul>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end row 
			container -->