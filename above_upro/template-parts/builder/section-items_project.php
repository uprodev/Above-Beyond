<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<section class="projects-info">
			<div class="content-width">

				<?php foreach ($items as $item): ?>
					<div class="text" data-aos="fade-up" data-aos-duration="1500">

						<?php if ($item['title']): ?>
							<h2 class="title"><?= $item['title'] ?></h2>
						<?php endif ?>
						
						<?php if ($item['text']): ?>
							<?= $item['text'] ?>
						<?php endif ?>
						
						<div class="btn-wrap">
							<a href="#" class="btn-border">Let’s chat! <img src="<?= get_stylesheet_directory_uri() ?>/img/arrow-right-pink.svg" alt=""></a>
						</div>
					</div>

					<?php if($item['gallery']): ?>

						<div class="img-wrap<?php if(count($item['gallery']) > 1) echo ' img-wrap-2x' ?>" data-aos="fade-up" data-aos-duration="1500">

							<?php foreach($item['gallery'] as $image): ?>

								<figure>
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</figure>

							<?php endforeach; ?>

						</div>

					<?php endif; ?>

				<?php endforeach ?>

			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>