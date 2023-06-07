
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
                <?php if(has_nav_menu('footer-menu')){
                    wp_nav_menu( array( 'theme_location' => 'footer-menu' ));
                }?>
                <?php if(has_nav_menu('footer-menu2')){
                    wp_nav_menu( array( 'theme_location' => 'footer-menu2'));
                }?>
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
            <p>&copy; Loge Service - 2022. All rights reserved.</p>
        </div>
    </div>
    
</div>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js" type="text/javascript" charset="utf-8"></script>
 <!-- <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.2.1.slim.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
<!-- <script src="<?php //echo get_bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script> -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js" type="text/javascript" charset="utf-8"></script>

<script>
    // $(document).ready(function(){
    //     $('.bannerSlider').slick({
    //         slidesToShow: 1,
    //         slidesToScroll: 1,
    //         infinite: true,
    //         dots: true;
    //     });

    //     $('.homeSlider,.homeSlider1').slick({
    //         prevArrow:`<div class="left-arrow-wrapper slider-arrow"><img class="left-arrow" src="<?php echo esc_url(get_template_directory_uri().'/assets/img/slick-left-arrow.svg') ?>" alt="left-arrow"></div>`,
    //         nextArrow:`<div class="right-arrow-wrapper slider-arrow"><img class="right-arrow" src="<?php echo esc_url(get_template_directory_uri().'/assets/img/slick-right-arrow.svg') ?>" alt="right-arrow"></div>`,
    //         slidesToShow: 3,
    //         slidesToScroll: 1,
    //         infinite: true,
    //         responsive: [
    //             {
    //             breakpoint: 1024,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 1,
    //             }
    //             },
    //             {
    //             breakpoint: 768,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             }
    //             }
    //         ]
    //     });
    // });


</script>

<script>
    $(document).ready(function(){
        homeSlider('.bannerSlider');
        slickSlider('.homeSlider');
        slickSlider('.homeSlider1');
    });
    function homeSlider(param){
        $(param).slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true
        });
    }
    function slickSlider(param){
        $(param).slick({
            prevArrow:`<div class="left-arrow-wrapper slider-arrow"><img class="left-arrow" src="<?php echo esc_url(get_template_directory_uri().'/assets/img/slick-left-arrow.svg') ?>" alt="left-arrow"></div>`,
            nextArrow:`<div class="right-arrow-wrapper slider-arrow"><img class="right-arrow" src="<?php echo esc_url(get_template_directory_uri().'/assets/img/slick-right-arrow.svg') ?>" alt="right-arrow"></div>`,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
        });
    }


</script>