<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="services-banner">
		<div class="content-width">
			<div class="content">
				<div class="text">

					<?php if ($title): ?>
						<h1><?= $title ?></h1>
					<?php endif ?>

					<?php if ($subtitle): ?>
						<h2 class="sub-title"><?= $subtitle ?></h2>
					<?php endif ?>

					<?php if ($text): ?>
						<?= $text ?>
					<?php endif ?>

					<?php if ($link): ?>
						<div class="btn-wrap<?php if($is_scroll) echo ' scroll' ?>">
							<a href="<?= $link['url'] ?>" class="btn-border btn-pink"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?> <img src="<?= get_stylesheet_directory_uri() ?>/img/arrow-right.svg" alt=""></a>
						</div>
					<?php endif ?>

				</div>
				
				<?php if ($image): ?>
					<figure>
						<?= wp_get_attachment_image($image['ID'], 'full') ?>
					</figure>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>