<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<section class="team">
			<div class="content-width">
				<div class="content" data-aos="fade-up" data-aos-duration="1500">

					<?php foreach ($items as $item): ?>
						<div class="item">
							<figure>

								<?php if ($item['photo']): ?>
									<?= wp_get_attachment_image($item['photo']['ID'], 'full', false, array('class' => 'logo_mob')) ?>
								<?php endif ?>
								
								<div class="text-block">

									<?php if ($item['name']): ?>
										<p class="name"><?= $item['name'] ?></p>
									<?php endif ?>
									
									<?php if ($item['position']): ?>
										<p><?= $item['position'] ?></p>
									<?php endif ?>
									
								</div>
							</figure>
						</div>
					<?php endforeach ?>

				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>