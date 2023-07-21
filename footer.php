		
		</main>
        
        <?php if(!is_front_page() && !is_page_template('template-pages/about-page.php')) :?>
            <?php get_template_part('template-parts/blocks/newsletter'); ?>
        <?php endif; ?>
        
        <?php get_template_part('template-parts/footer/footer'); ?>

        <?php wp_footer(); ?>

        <script src="https://www.sevenrooms.com/widget/embed.js"></script>
        <script>
        SevenroomsWidget.init({
            venueId: "lucasrestaurant",
            triggerId: "sr-res-root", // id of the dom element that will trigger this widget
            type: "reservations", // either 'reservations' or 'waitlist' or 'events'
            styleButton: false, // true if you are using the SevenRooms button
            clientToken: "" //(Optional) Pass the api generated clientTokenId here
        })
        </script>

	</body>
</html>