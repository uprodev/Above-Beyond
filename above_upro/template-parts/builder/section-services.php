<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if($services): ?>

		<section class="services">
			<div class="content-width">

				<?php foreach($services as $post): 

					global $post;
					setup_postdata($post); ?>
					<div class="item">

						<?php if (has_post_thumbnail()): ?>
							<div class="bg">
								<?php the_post_thumbnail('full') ?>
							</div>
						<?php endif ?>
						
						<div class="wrap">
							<h3 class="title-h3"><?php the_title() ?></h3>
							<div class="line"></div>
							<p><?php the_excerpt() ?></p>
							<div class="btn-wrap">
								<a href="<?php the_permalink() ?>" class="btn-border">Find out more<img src="<?= get_stylesheet_directory_uri() ?>/img/arrow-right.svg" alt=""></a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>

				<?php wp_reset_postdata(); ?>

			</div>
		</section>

	<?php endif; ?>

	<?php endif; ?>