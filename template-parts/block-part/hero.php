<?php
$banner_list = get_sub_field('banner_list');
$dropdown_title = get_sub_field('dropdawn_title');
$dropdown_description = get_sub_field('dropdawn_description');

if ($banner_list): ?>

	<div class="section hero">
		<ul class="hero-list js-slider">
			<?php foreach($banner_list as $slide):
				$image = $slide['image'];
				$title = $slide['title'];
				if ($image): ?>
				<li>
					<div class="hero-list__item">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="hero-list__item__image">
						<?php if($title): ?>
							<div class="hero-list__title-wrapper">
                                <div class="hero-list__title">
                                    <h1><?php echo $title; ?></h1>
                                </div>
							</div>
						<?php endif; ?>
					</div>
				</li>
				<?php endif;
			endforeach; ?>
		</ul>
		<?php if($dropdown_title && $dropdown_description): ?>
			<div class="hero-dropdown js-dropdown">
				<div class="hero-dropdown__title">
					<?php echo $dropdown_title; ?>
				</div>
				<div class="hero-dropdown__description">
					<?php echo $dropdown_description; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>

<?php endif; ?>
