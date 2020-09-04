<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<h2 class="mt-2"><?php echo $title; ?></h2>
			<div class="card mb-3" style="max-width: 540px;">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="/img/<?php echo $komik['sampul']; ?>" class="card-img" alt="...">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title"><?php echo $komik['judul']; ?></h5>
			        <p class="card-text">Penulis : <?php echo $komik['penulis']; ?></p>
			        <p class="card-text"><small class="text-muted">Penerbit : <?php echo $komik['penerbit']; ?></small></p>

			        <a href="/komik/edit/<?php echo $komik['slug']; ?>" class="btn btn-warning">Edit</a>

			        <form action="/komik/<?php echo $komik['id']; ?>" method="post" class="d-inline ">
			        	<?php echo csrf_field();  ?>
			        	<input type="hidden" name="_method" value="DELETE">
			        	<button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?');">Delete</button>
			        </form>


					
			        <!-- <a href="/komik/delete/<?php echo $komik['id'] ?>" class="btn btn-danger">Delete</a> -->

			        <br><br>
			        <a href="/komik">Kembali ke daftar komik</a>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>

<?php $this->endSection(); ?>