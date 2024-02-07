<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-center-block<?php if($gallery) echo ' text-center-block-img' ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">
			<div class="content" data-aos="fade-up" data-aos-duration="1500">

				<?php if ($title): ?>
					<h2 class="title-h3"><?= $title ?></h2>
					<div class="line"></div>
				<?php endif ?>
				
				<?php if ($text): ?>
					<?= $text ?>
				<?php endif ?>
				
			</div>

			<?php if($gallery): ?>

				<div class="img-wrap">

					<?php foreach($gallery as $image): ?>

						<figure>
							<?= wp_get_attachment_image($image['ID'], 'full') ?>
						</figure>

					<?php endforeach; ?>

				</div>

			<?php endif; ?>

		</div>
	</section>

	<?php endif; ?>