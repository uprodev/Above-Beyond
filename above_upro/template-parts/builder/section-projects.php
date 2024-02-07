<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if($projects): ?>

		<section class="projects">
			<div class="content-width">
				<div class="line">

					<?php for ($i = 0; $i < 28; $i++) { ?>
						<p<?php if($i == 0 || $i == 12) echo ' class="white"' ?>><?= mb_strtoupper(get_the_title()) ?></p>
					<?php } ?>

				</div>

				<?php foreach($projects as $item):  ?>

					<?php if ($item['project']): ?>
						<div class="item" data-aos="fade-up" data-aos-duration="1500">

							<?php if (get_field('card_image', $item['project']->ID) || has_post_thumbnail($item['project']->ID)): ?>
							<figure>
								<a href="<?php the_permalink($item['project']->ID) ?>">
									<?= ($field = get_field('card_image', $item['project']->ID)) ? wp_get_attachment_image($field['ID'], 'full') : get_the_post_thumbnail($item['project']->ID, 'full') ?>
								</a>
							</figure>
						<?php endif ?>

						<div class="text">

							<?php if ($terms = wp_get_object_terms($item['project']->ID, 'project_cat')): ?>
								<?php foreach ($terms as $term): ?>

									<div class="icon-wrap">

										<?php if ($field = get_field('icon', 'term_' . $term->term_id)): ?>
											<div class="wrap">
												<?= wp_get_attachment_image($field['ID'], 'full') ?>
											</div>
										<?php endif ?>

										<p><?= mb_strtoupper($term->name) ?></p>
									</div>

								<?php endforeach ?>

							<?php endif ?>

							<h2 class="title-h2">
								<a href="<?php the_permalink($item['project']->ID) ?>"><?= mb_strtoupper(get_the_title($item['project']->ID)) ?></a>
							</h2>

							<?php if (get_the_excerpt($item['project']->ID)): ?>
								<p class="info"><?= get_the_excerpt($item['project']->ID) ?></p>
							<?php endif ?>

							<div class="btn-wrap">
								<a href="<?php the_permalink($item['project']->ID) ?>" class="btn-border btn-big">View Case Study <img src="<?= get_stylesheet_directory_uri() ?>/img/arrow-right.svg" alt=""></a>

								<?php if ($item['link']): ?>
									<a href="<?= $item['link']['url'] ?>" class="link"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
								<?php endif ?>

							</div>
						</div>
					</div>
				<?php endif ?>

			<?php endforeach; ?>

			<?php wp_reset_postdata(); ?>

		</div>
	</section>

<?php endif; ?>

<?php endif; ?>