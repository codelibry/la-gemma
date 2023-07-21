		
		</main>
        
        <?php if(!is_front_page()) :?>
            <?php get_template_part('template-parts/blocks/newsletter'); ?>
        <?php endif; ?>
        
        <?php get_template_part('template-parts/footer/footer'); ?>

        <?php wp_footer(); ?>

	</body>
</html>