<div class="jumbotron animate__animated animate__fadeInDown animate__slow">
	<div class="container ">
		<h3>Input Data</h3> 

		<div class="col-lg-8">
			<form action="?page=proses_tambah_instansi" method="POST" enctype="" role="form ">
				<div class="form-group">
					<label>Instansi Name</label>
					<input class="form-control" type="text" name="instansi_name" maxlength="30" placeholder="isikan nama anda" required="">
				</div>

				<div class="form-group">
					<label>Description</label>
					<textarea name="instansi_desc" id="input" class="form-control" rows="3" required="required"></textarea>
				</div>

				<a href="?page=Data Instansi" type="submit" class="btn btn-warning"><<</a>
				<input type="submit" name="tambah" value="Tambah data" class="btn btn-info"/>
				<button type="reset" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
</div>