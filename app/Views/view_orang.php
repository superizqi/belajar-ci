<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
	<h1> <?php echo $title; ?></h1>
	<div class="row">
		<div class="col">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Alamat</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($users as $k => $data) : ?>
				    <tr>
				      <td><?php echo $data['id']; ?></td>
				      <td><?php echo $data['nama']; ?></td>
				      <td><?php echo $data['alamat']; ?></td>
				    </tr>
				 <?php endforeach; ?>
			  </tbody>
			</table>
			<?= $pager->links('id_pagination','bootstrap_pagination') ?>
		</div>
	</div>
</div>

<?php echo $this->endSection(); ?>