<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h2 class="my-3">Form Ubah data</h2>
			<!-- echo $validation->listErrors() -->
			<form action="/komik/update/<?php echo $komik['id']; ?>" method="post">
				<?php echo csrf_field(); ?>
				<input type="hidden" name="slug" value="<?php echo $komik['slug']; ?>">
				<!-- supaya hanya bisa diinput di halaman ini aja -->
				  <div class="form-group row">
				    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control <?php echo ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?php echo (old('judul')) ? old('judul') : $komik['judul']; ?>" autofocus>
				      <!-- kelas ini hanya akan muncul ketika diatas ada invalid -->
				      <div class="invalid-feedback">
				          <?php echo $validation->getError('judul'); ?>
				        </div>
				    </div>
				  </div>
				  
				  <div class="form-group row">
				    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo (old('penulis')) ? old('penulis') : $komik['penulis']; ?>">
				    </div>
				  </div>

				  <div class="form-group row">
				    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo (old('penerbit')) ? old('penerbit') : $komik['penerbit']; ?>">
				    </div>
				  </div>
	
				  <div class="form-group row">
				    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="sampul" name="sampul" value="<?php echo (old('sampul')) ? old('sampul') : $komik['sampul']; ?>">
				    </div>
				  </div>
				  
				  
				  <div class="form-group row">
				    <div class="col-sm-10">
				      <button type="submit" class="btn btn-primary">Ubah Data</button>
				    </div>
				  </div>
				</form>
		</div>
	</div>
</div>
<?php echo $this->endSection(); ?>