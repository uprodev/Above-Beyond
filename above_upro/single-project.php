<?php get_header(); ?>

<section class="services-item-banner project-detail-banner">

	<?php if (has_post_thumbnail()): ?>
		<div class="bg">
			<?php the_post_thumbnail() ?>
		</div>
	<?php endif ?>
	
	<div class="content-width">
		<div class="content">
			<div class="text">

				<?php if ($terms = wp_get_object_terms(get_the_ID(), 'project_cat')): ?>
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
				
				<h1><?= mb_strtoupper(get_the_title()) ?></h1>
			</div>
		</div>
	</div>
</section>

<?php if ( have_posts() ) :

	get_template_part( 'template-parts/content', 'builder' );

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

<?php get_footer(); ?>