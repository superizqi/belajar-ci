<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h2 class="my-3">Form tambah data</h2>
			<!-- echo $validation->listErrors() -->
			<form action="/komik/save" method="post" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<!-- supaya hanya bisa diinput di halaman ini aja -->
				  <div class="form-group row">
				    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control <?php echo ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus>
				      <!-- kelas ini hanya akan muncul ketika diatas ada invalid -->
				      <div class="invalid-feedback">
				          <?php echo $validation->getError('judul'); ?>
				        </div>
				    </div>

			  </div>
				  
				  <div class="form-group row">
				    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo old('penulis'); ?>">
				    </div>
				  </div>

				  <div class="form-group row">
				    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo old('penerbit'); ?>">
				    </div>
				  </div>
	
				  <div class="form-group row">
				    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
				    <div class="col sm-2">
						  	<img src="/img/default.jpg" class="img-thumbnail img-preview">
					</div>
				    <div class="col-sm-8">
				      <!-- <input type="text" class="form-control" id="sampul" name="sampul" value="echo old('sampul')"> -->
				      <div class="custom-file">
						  <input type="file" class="custom-file-input <?php echo ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
						  <div class="invalid-feedback">
				          	<?php echo $validation->getError('sampul'); ?>
				          </div>
						  <label class="custom-file-label" for="sampul">Pilih Gambar</label>
					  </div>
				    </div>
				  </div>
				  
				  
				  <div class="form-group row">
				    <div class="col-sm-10">
				      <button type="submit" class="btn btn-primary">Tambah Data</button>
				    </div>
				  </div>
				</form>
		</div>
	</div>
</div>
<?php echo $this->endSection(); ?>