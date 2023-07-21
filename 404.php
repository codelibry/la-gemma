<?php
/**
 * 404 page template
 */
?>
<?php get_header(); ?>

<section class="section not-found-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="not-found d-flex flex-column align-items-center justify-content-center">
					<h1 class="text--color--green"><?php _e('404','lagemmahotel');?></h1>
					<span class="mb-4"><?php _e('Page not found','lagemmahotel');?></span>
					<a href="/" class="button"><?php _e('Back to home','lagemmahotel');?></a>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>