<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-6">
			<h1> <?php echo $title; ?></h1>
			<form action="/OrangController/index" method="post">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="masukkan keyword pencarian" name="keyword">
				  <div class="input-group-append">
				    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
				  </div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Alamat</th>
			      <th scope="col">Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $i = 1 + ($per_halaman * ($current_page-1)); ?>
			  	<?php foreach ($users as $k => $data) : ?>
				    <tr>
				      <td><?php echo $i++; ?></td>
				      <td><?php echo $data['nama']; ?></td>
				      <td><?php echo $data['alamat']; ?></td>
				      <td><a href="" class="btn btn-success">Detail</a></td>
				    </tr>
				 <?php endforeach; ?>
			  </tbody>
			</table>
			 <!-- $pager->links('id_pagination','bootstrap_pagination')  -->
			  <!-- echo $pager->links(); -->
			  <!-- php echo $pager->('namatabel','filepagination') ?> -->
			  <?php echo $pager->links('orang','orang_pagination'); ?>
		</div>
	</div>
</div>

<?php echo $this->endSection(); ?>