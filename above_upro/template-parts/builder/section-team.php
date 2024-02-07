<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="about-banner">
		<div class="bg"><img src="<?= get_stylesheet_directory_uri() ?>/img/bg-4.png" alt=""></div>
		<div class="content-width">
			<div class="content">

				<?php if ($text): ?>
					<?= $text ?>
				<?php endif ?>
				
				<?php if ($link): ?>
					<div class="btn-wrap<?php if($is_scroll) echo ' scroll' ?>">
						<a href="<?= $link['url'] ?>" class="btn-border"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?> <img src="<?= get_stylesheet_directory_uri() ?>/img/arrow-down.svg" alt=""></a>
					</div>
				<?php endif ?>

				<?php if ($items): ?>
					<figure>

						<?php foreach ($items as $index => $item): ?>
							<div class="item item-<?= $index + 1 ?>">

								<?php if ($item['image']): ?>
									<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
								<?php endif ?>

								<?php if ($item['name']): ?>
									<p><?= $item['name'] ?></p>
								<?php endif ?>

							</div>
						<?php endforeach ?>

					</figure>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>