<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<section class="number-block">
			<div class="bg">
				<img src="<?= get_stylesheet_directory_uri() ?>/img/bg-5.png" alt="">
			</div>
			<div class="content-width">

				<?php if ($title): ?>
					<h3 class="title-h3"><?= $title ?></h3>
				<?php endif ?>
				
				<div class="content">

					<?php foreach ($items as $index => $item): ?>
						<div class="item item-<?= $index + 1 ?>">

							<?php if ($item['number']): ?>
								<p class="num"><span>0</span><?= $item['sign'] ?></p>
							<?php endif ?>
							
							<?php if ($item['text']): ?>
								<p class="text"><?= $item['text'] ?></p>
							<?php endif ?>
							
						</div>
					<?php endforeach ?>
					
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>