<?php
$title = get_field('form_section_title', 'option');
$message = get_field('form_message', 'option');
?>

<section class="section form-section">
	<div class="container">
		<div class="row">
			<div class="col-12 d-flex flex-column ">
                <?php if($title): ?>
                    <div class="form-section__title ">
                        <h3><?php echo $title; ?></h3>
                    </div>
                <?php endif; ?>

                <div class="form-section__form">
                    <?php echo do_shortcode('[contact-form-7 id="184" title="Contact form 1"]'); ?>
                </div>
			</div>
		</div>
	</div>
    <div class="form-section__success">
        <div class="form-section__success-inner">
            <?php echo $message?:'send success'; ?>
            <div class="form-section__close header-menu__close js-close-popup"></div>
        </div>
    </div>
</section>
