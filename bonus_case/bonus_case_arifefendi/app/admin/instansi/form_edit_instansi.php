
<div class="jumbotron animate__animated animate__fadeInDown animate__slow">
	<div class="container ">
		<h3>Ubah Data </h3> 

		<div class="col-lg-8">
			<form action="?page=proses_update_instansi&id=<?php echo $row['instansi_id'];?>" method="POST" enctype="" role="form ">
				<div class="form-group">
					<label>Instansi Name</label>
					<input class="form-control" type="text" name="instansi_name" value="<?php echo $row['instansi_name']; ?>" maxlength="100" placeholder="isikan nama instansi" required="">
				</div>

				<div class="form-group">
					<label>Description</label>
					<textarea name="instansi_desc" value="<?php echo $row['instansi_desc']; ?>" id="input" class="form-control" rows="3" required=""><?php echo $row['instansi_desc']; ?></textarea>
				</div>

				<a href="?page=Data Instansi" type="submit" class="btn btn-warning"><<</a>
				<input type="submit" name="update" value="update" class="btn btn-info">
				<button type="reset" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
</div>