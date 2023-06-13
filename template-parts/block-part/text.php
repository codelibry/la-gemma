<?php
$large_text = get_sub_field('large_text');
$arrow_to_top = get_sub_field('arrow_to_top');
if ($large_text) {
	$text = get_sub_field('content');
} else {
	$title = get_sub_field('title');
	$description = get_sub_field('description');
}
if ($large_text && $text): ?>

	<section class="text-large section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-large__text">
                    <h2 class="title-appear"><?php echo $text; ?></h2>
                </div>
            </div>
        </div>
	</section>

<?php else: ?>
    <section class="text-small section">
        <div class="container">
            <div class="row flex-column align-items-center">
                <?php if($arrow_to_top): ?>
                    <div class="text-small__arrow animate fade-up"></div>
                <?php endif; ?>
                <div class="text-small__text">
                    <h4 class="animate fade-up delay-1"><?php echo $title; ?></h4>
                    <span class="d-block animate fade-up delay-2"><?php echo $description; ?></span>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
