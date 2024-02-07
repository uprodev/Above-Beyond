<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="superpowers">

		<?php if ($image): ?>
			<div class="bg">
				<?= wp_get_attachment_image($image['ID'], 'full') ?>
			</div>
		<?php endif ?>

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

			<?php if($services): ?>

				<div class="content">

					<?php foreach($services as $index => $post): 

						global $post;
						setup_postdata($post); ?>

						<div class="item<?php if(($index + 1) % 3 == 0) echo ' item-full' ?>" data-aos="fade-up" data-aos-duration="1500"<?php if($index > 0) echo ' data-aos-delay="300"' ?>>

							<?php if ($field = get_field('card_image')): ?>
								<div class="bg">
									<?= wp_get_attachment_image($field['ID'], 'full') ?>
								</div>
							<?php endif ?>
							
							<div class="wrap">
								<h6 class="title"><?php the_title() ?></h6>
								<?php the_content() ?>
								<div class="btn-wrap">
									<a href="<?php the_permalink() ?>" class="btn-border btn-big">Find out more<img src="<?= get_stylesheet_directory_uri() ?>/img/arrow-right.svg" alt=""></a>
								</div>
							</div>
						</div>

					<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				</div>

			<?php endif; ?>

		</div>
	</section>

	<?php endif; ?>