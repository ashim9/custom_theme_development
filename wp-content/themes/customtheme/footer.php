
<?php 
    $footer_banner = get_field('footer_banner', 'option');
    $footer_sidebar = get_field('footer_sidebar', 'option');
?>

<div class="footer" style="background:url('<?php echo $footer_banner ?>')no-repeat;background-size:cover">
    <div class="container">
        <div class="footer-contents">
            <div class="footer-logos">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/footer-logo.svg" alt="footer logo">
                <div class="social-icons">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tweeter.svg" alt="tweeter-icon"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pinterest.svg" alt="pinterest-icon"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tweeter.svg" alt="tweeter-icon"></a> 
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="linkedin-icon"></a> 
                </div>
            </div>
            <div class="footer-wrapper">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' )); ?>
                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu2')); ?>
            </div>
    
            <?php if(isset($footer_sidebar)):  ?>
                <div class="footer-right-sidebar">
                    <?php foreach($footer_sidebar as $footer_sidebars) {?>
                        <?php if(isset($footer_sidebars['footer_sidebar_title'])): ?>
                            <h3><?php echo $footer_sidebars['footer_sidebar_title'] ?></h3>
                            <?php if(isset($footer_sidebars['footer_sidebar_subtitle'])): ?>
                                <p><?php echo $footer_sidebars['footer_sidebar_subtitle'] ?></p>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php } ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="footer-bottom">
            <p>&copy;Loge Service – 2022. All rights reserved.</p>
        </div>
    </div>
    
</div>