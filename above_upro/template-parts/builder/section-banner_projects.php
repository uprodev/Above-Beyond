<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="projects-banner">

		<?php if (has_post_thumbnail()): ?>
			<div class="bg">
				<?php the_post_thumbnail('full') ?>
			</div>
		<?php endif ?>

		<div class="content-width">
			<div class="content">
				<div class="text">
					<h3 class="sub-title"><?= mb_strtoupper(get_the_title()) ?></h3>
					<?php the_content() ?>
					<p></p>
				</div>

			</div>
		</div>
	</section>

	<?php endif; ?>