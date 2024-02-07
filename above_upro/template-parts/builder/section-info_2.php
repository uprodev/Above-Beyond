<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="pre-footer">
		<div class="content-width">
			<div class="content">

				<?php if ($image): ?>
					<div class="bg">
						<?= wp_get_attachment_image($image['ID'], 'full') ?>
					</div>
				<?php endif ?>
				
				<div class="text">

					<?php if ($text): ?>
						<?= add_class_content($text, 'title-h3') ?>
					<?php endif ?>
					
				</div>

				<?php if ($link): ?>
					<div class="btn-wrap">
						<a href="<?= $link['url'] ?>" class="btn-border"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow-right-pink.svg" alt=""></a>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>