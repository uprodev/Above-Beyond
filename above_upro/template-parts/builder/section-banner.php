<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-banner">

		<?php if ($image): ?>
			<div class="bg">
				<?= wp_get_attachment_image($image['ID'], 'full') ?>
			</div>
		<?php endif ?>
		
		<div class="content-width">
			<div class="content">

				<?php if ($title): ?>
					<h1><?= $title ?></h1>
				<?php endif ?>
				
				<?php if ($link): ?>
					<div class="btn-wrap">
						<a href="<?= $link['url'] ?>" class="btn-shadow"<?php if($link['target']) echo ' target="_blank"' ?>><span><?= $link['title'] ?> <img src="<?= get_stylesheet_directory_uri() ?>/img/arrow-right.svg" alt=""></span></a>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>