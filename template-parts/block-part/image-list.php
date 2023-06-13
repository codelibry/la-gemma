<?php
$title = get_sub_field('title');
$instagram = get_sub_field('instagram');
if ($instagram) {
	$url = $instagram['url'];
	$name = $instagram['title'];
	$target = $instagram['target'];
}
$image_list = get_sub_field('image_list');
?>

<section class="image-list section">
	<div class="container">
		<?php if($title || $instagram): ?>
			<div class="row">
				<div class="col-12">
					<div class="image-list__title animate fade-up">
						<?php if($title): ?>
							<h3><?php echo $title; ?></h3>
						<?php endif; ?>

						<?php if($instagram): ?>
							<a href="<?php echo $url?:''; ?>" target="<?php echo $target?:''; ?>"><?php echo $name?:'instagram'; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php if($image_list): ?>
			<ul class="row image-list__items animate fade-up">
				<?php foreach($image_list as $image):
					$img = $image['image']['ID'];
				?>
					<li class="col-sm-3">
						<div class="image-list__items-image">
							<?php echo wp_get_attachment_image($img, 'full'); ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>
