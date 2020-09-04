<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1>Hello, world!</h1>
			<?php  
				// var_dump($tes)
				d($tes)
			?>
		</div>
	</div>
</div>
<?php echo $this->endsection(); ?>
