<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h2 class="my-3">Form Ubah data</h2>
			<form action="/komik/update/<?php echo $komik['id']; ?>" method="post">
				<?php echo csrf_field(); ?>
				<input type="hidden" name="slug" value="<?php echo $komik['slug']; ?>">
				<!-- supaya hanya bisa diinput di halaman ini aja -->
				  <div class="form-group row">
				    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $komik['judul']; ?>" autofocus>
				    </div>
				  </div>
				  
				  <div class="form-group row">
				    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $komik['penulis']; ?>">
				    </div>
				  </div>

				  <div class="form-group row">
				    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $komik['penerbit']; ?>">
				    </div>
				  </div>
	
				  <div class="form-group row">
				    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="sampul" name="sampul" value="<?php echo $komik['sampul']; ?>">
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