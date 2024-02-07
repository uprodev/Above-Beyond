<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="contact">
		<div class="content-width">
			<div class="content">

				<?php if ($title): ?>
					<h1><?= $title ?></h1>
				<?php endif ?>

				<?php if ($text): ?>
					<?= $text ?>
				<?php endif ?>

				<?php if ($form): ?>
					<?= do_shortcode('[contact-form-7 id="' . $form . '"]') ?>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>