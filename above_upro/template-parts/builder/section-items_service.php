<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<section class="more-item-3x">
			<div class="content-width">
				<div class="content">

					<?php foreach ($items as $index => $item): ?>
						<div class="item" data-aos="fade-up" data-aos-delay="<?= $index * 50 ?>" data-aos-duration="1500">

							<?php if ($item['icon']): ?>
								<div class="icon-wrap">
									<?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
								</div>
							<?php endif ?>

							<?php if ($item['title']): ?>
								<h3 class="title"><?= $item['title'] ?></h3>
							<?php endif ?>

							<?php if ($item['text']): ?>
								<?= $item['text'] ?>
							<?php endif ?>

						</div>
					<?php endforeach ?>

					<?php if ($image): ?>
						<div class="item item-img" data-aos="fade-up" data-aos-delay="<?= count($items) * 50 ?>" data-aos-duration="1500">
							<figure>
								<?= wp_get_attachment_image($image['ID'], 'full') ?>
							</figure>
						</div>
					<?php endif ?>
					
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>