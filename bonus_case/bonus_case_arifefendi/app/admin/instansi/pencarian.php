<?php 
$key    =   $_POST['keyword']; 
$query  = mysql_query("SELECT * from tb_instansi where instansi_name like '%$key%' ");
$no=1;
$cekdata = mysql_num_rows($query);

if ($key == null) 
{
	echo "
	<div class='col-md-12'>
	<a href='?page=Data Instansi' class='btn btn-xs' style='color: orange' role='button'><< back </a> 
	<div class='alert alert-warning animate__animated animate__fadeIn animate__slow'> 
	<strong>Silahkan masukkan kata Kunci terlebih dahulu!</strong>
	</div>
	</div>";
	die();
}

if( $cekdata == '0' ){
	echo '
	<div class="col-md-12">
	<a href="?page=Data Instansi" class="btn btn-xs" style="color: orange" role="button"><< back </a> 
	<div class="alert alert-warning">
	<strong>Pencarian dengan kata kunci : " <b>$key </h3> " adalah  </strong>'.mysql_num_rows($query).'data
	</div>
	</div>';
} 

if( $cekdata > 0 ) {
	echo '
	<div class="col-md-12">
	<a href="?page=Data Instansi" class="btn btn-xs" style="color: green" role="button"><< back </a> 
	<div class="alert alert-success">
	<strong>Pencarian dengan kata kunci : " <b>$key </h3> " adalah  </strong>'.mysql_num_rows($query).'data
	</div>
	</div>';
}
?>

<div class="col-sm-12"> 
	<div class="marg-top panel panel-primary">

		<div class="panel-heading">

			<h3 class="panel-title">
				Data Siswa
			</h3>
		</div>
		<div class="panel-body">
			<div class="bs-example" data-example-id="striped-table">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th width="5%">No</th>
							<th width="1%" >Action</th> 
							<th width="40%">Instansi</th>
							<th width="40%">Deskripsi</th> 
						</tr>
					</thead>
					<tbody > 
						<?php
						$no=1;
						while ($data = mysql_fetch_array($query)) {
							?>
							<tr>
								<td scope="row"><?php echo $no ;?></td>
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
								<td><?php echo $data['instansi_name'] ;?></td>
								<td><?php echo $data['instansi_desc'];?></td> 
							</tr>
							<?php 
							$no++;
						}
						?> 
					</tbody> 
				</table>



			</div>
		</div>
	</div>
</div>
