<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-img<?php if($is_padding_top_50) echo ' text-img-1'; if($image_left) echo '  text-img-revers'; if($is_center) echo ' item-center' ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">
			<div class="content">
				<div class="text" data-aos="fade-right" data-aos-duration="1500">

					<?php if ($vertical_text): ?>
						<div class="text-vertical">
							<p><?= $vertical_text ?></p>
						</div>
					<?php endif ?>
					
					<?php if ($text): ?>
						<?= add_class_content($text, 'title-h3') ?>
					<?php endif ?>

					<?php if ($link): ?>
						<div class="btn-wrap">
							<a href="<?= $link['url'] ?>" class="btn-border"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?> <img src="<?= get_stylesheet_directory_uri() ?>/img/arrow-right-pink.svg" alt=""></a>
						</div>
					<?php endif ?>

				</div>

				<?php if ($image): ?>
					<figure data-aos="fade-<?= $image_left ? 'right' : 'left' ?>" data-aos-delay="300" data-aos-duration="1500">

						<?php if ($icon): ?>
							<div class="logo-img">
								<?= wp_get_attachment_image($icon['ID'], 'full') ?>
							</div>
						<?php endif ?>

						<?= wp_get_attachment_image($image['ID'], 'full') ?>

					</figure>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>