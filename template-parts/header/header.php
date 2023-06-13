<?php 
/**
 * Header
 */
$logo_green = get_field('logo', 'option');
$logo_white = get_field('logo_white', 'option');
$action_button = get_field('action_button', 'option');
$today = date('Y-m-d');
$tomorrow = new DateTime('tomorrow');
$tomorrow = $tomorrow->format('Y-m-d');
$order_url = sprintf('https://be.synxis.com/?adult=2&arrive=%s&chain=10205&config=gemma&currency=EUR&depart=%s7&hotel=40864&level=hotel&locale=it-IT&rooms=1&theme=gemma',$today,$tomorrow);
if ($action_button) {
    $button_title = $action_button['title'];
    $button_link = $action_button['url'];
    $button_target = $action_button['target'];
}
$burger_icon = get_field('burger_icon', 'option');
?>

<header class="header">
    <div class="header-logo show" id="white-logo">
        <?php echo wp_get_attachment_image($logo_white['ID'], 'full'); ?>
    </div>
    <div class="header-logo" id="green-logo">
		<?php echo wp_get_attachment_image($logo_green['ID'], 'full'); ?>
    </div>
    <div class="header-inner">
        <div class="header-button">
            <a href="<?php echo $order_url; ?>" class="button button--bg" target="_blank">
                <?php echo $button_title?:'Book now'; ?>
            </a>
        </div>
    </div>
</header>