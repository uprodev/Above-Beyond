<?php get_header(); ?>

<section class="services-item-banner">

	<?php if (has_post_thumbnail()): ?>
		<div class="bg">
			<?php the_post_thumbnail('full') ?>
		</div>
	<?php endif ?>
	
	<div class="content-width">

		<?php if ($field = get_field('icon')): ?>
			<div class="icon-wrap">
				<?= wp_get_attachment_image($field['ID'], 'full') ?>
			</div>
		<?php endif ?>
		
		<h1><?= mb_strtoupper(get_the_title()) ?></h1>
	</div>
</section>

<?php if ( have_posts() ) :

	get_template_part( 'template-parts/content', 'builder' );

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

<?php get_footer(); ?>