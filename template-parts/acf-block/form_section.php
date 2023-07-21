<?php
    $section_id = get_sub_field('section_id');
?>

<section id="<?php echo $section_id;?>" class="form" >
    <div class="container">
        <div class="form__wrap">
            <div class="reservation-form">
                <div class="form-title">
                    <?php _e('MAKE A RESERVATION', 'lagemmahotel');?>
                </div>
                <div class="form-text">
                    <?php _e('We accept reservations online for up to 6 people, for parties of 7 or more please call us on', 'lagemmahotel');?>
                        <span class="phone"><a href="tel:+38 (000) 000 00 00">+38 (000) 000 00 00</a></span>
                </div>
                <div class="form-submit">
                    <div id="sr-res-root" class="button js-submit"><?php _e('Book Now', 'lagemmahotel');?></div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal-line"></div>
</section>


