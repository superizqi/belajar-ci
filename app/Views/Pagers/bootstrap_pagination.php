<?php
/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */

$pager->setSurroundCount(2);
?>
<style type="text/css">
	.marbot {
		  margin-bottom: 50px;
		}	
</style>
<div class="container marbot">
	<div class="row">
		<div class="col">
			
<center>
			<!-- kalo punya sebelum -->
        	<?php if ($pager->hasPrevious()) : ?>
                <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    First
                </a>
	        <?php endif ?>

	        <!-- untuk link yang aktif jadikan active -->
	        <?php foreach ($pager->links() as $link) : ?>
	                <a href="<?= $link['uri'] ?>" >
	                	<?= $link['active'] ? '<b>' : '' ?>
	                    <?= $link['title'] ?>
	                    <?= $link['active'] ? '</b>' : '' ?>
	                </a>
	        <?php endforeach ?>

          <!-- jika ada setelahnya maka tulis stelahnya -->
	        <?php if ($pager->hasNext()) : ?>
	                <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" >
	                   End
	                </a>
	        <?php endif ?>

</center>

		</div>
	</div>
</div>