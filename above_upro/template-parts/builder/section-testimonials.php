<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<section class="testimonials" data-aos="fade-up" data-aos-duration="1500">
			<div class="content-width">

				<?php if ($title): ?>
					<h2 class="title-h1">
						<span class="title-wrap">
							<span class="text"><?= $title ?></span>

							<?php if ($icon): ?>
								<span class="img-wrap">
									<?= wp_get_attachment_image($icon['ID'], 'full') ?>
								</span>
							<?php endif ?>

						</span>
					</h2>
				<?php endif ?>
				
				<?php if ($text): ?>
					<p class="top"><?= $text ?></p>
				<?php endif ?>

				<div class="slider-wrap">
					<div class="swiper slider-testimonials">
						<div class="swiper-wrapper">

							<?php foreach ($items as $item): ?>

								<?php if ($item['text']): ?>
									
									<div class="swiper-slide">
										<blockquote><?= $item['text'] ?></blockquote>
										<div class="wrap">

											<?php if ($item['logo']): ?>
												<div class="logo">
													<?= wp_get_attachment_image($item['logo']['ID'], 'full') ?>
												</div>
											<?php endif ?>
											
											<?php if ($item['name']): ?>
												<p class="name"><?= $item['name'] ?></p>
											<?php endif ?>
											
										</div>
									</div>
								<?php endif ?>
							<?php endforeach ?>
							
						</div>
						<div class="swiper-pagination testimonials-pagination"></div>
					</div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>