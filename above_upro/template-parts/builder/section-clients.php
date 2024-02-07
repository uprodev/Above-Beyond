<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($galleries): ?>
		<section class="clients">

			<?php if ($title): ?>
				<div class="content-width">
					<h2 class="title-h2"><?= $title ?></h2>
				</div>
			<?php endif ?>
			
			<?php foreach ($galleries as $index => $item): ?>

				<?php $images = $item['gallery'];
				if($images): ?>

					<div class="line line-<?= $index + 1 ?>">
						<div class='marquee marquee<?= $index + 1 ?>'>

							<?php foreach($images as $image): ?>

								<div class="item">
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</div>

							<?php endforeach; ?>

						</div>
					</div>

				<?php endif; ?>

			<?php endforeach ?>
			
		</section>
	<?php endif ?>

	<?php endif; ?>