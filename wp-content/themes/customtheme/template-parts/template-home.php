<?php

/*
* Template Name: Home page
*/

get_header();

?>

<?php
    $home_banner_contents = get_field('home_banner_contents');
    // $home_banner = get_field('home_banner');
    $banner_gallery_card = get_field('banner_gallery_card');
    $loge_service_title = get_field('loge_service_title');
    $loge_service_subtitle = get_field('loge_service_subtitle');
    $loge_service_card = get_field('loge_service_card');
    $loge_service_right_options = get_field('loge_service_right_options');
?>

<main>
    <?php if(isset($home_banner_contents)):?>
        <div class="banner" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('<?php echo $home_banner_contents['home_banner'] ?>')no-repeat;background-size:cover">
            <div class="banner-contents">
                <?php if(isset($home_banner_contents['home_banner_header'])): ?>
                    <h2><?php echo $home_banner_contents['home_banner_header'] ?></h2>
                <?php endif; ?>
                <?php if(isset($home_banner_contents['home_banner_subheader'])): ?>
                    <p><?php echo $home_banner_contents['home_banner_subheader'] ?></p>
                <?php endif; ?>
                <?php if( $home_banner_contents['home_banner_btn_text'] ):
                        $link_url = $home_banner_contents['home_banner_btn_text']['url'];
                        $link_title = $home_banner_contents['home_banner_btn_text']['title'];
                        $link_target = $home_banner_contents['home_banner_btn_text']['target'] ? $link['target'] : '_self';
                    ?>
                    <div class="banner-btn">
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if(isset($banner_gallery_card)): ?>
        <div class="banner_gallery_card">
            <?php foreach($banner_gallery_card as $banner_gallery_cards) {?>
                 <div class="banner-gallery" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('<?php echo $banner_gallery_cards['banner_gallery_image'] ?>')no-repeat;background-size:cover">
                     <div class="banner-gallery-content">
                         <p><?php echo $banner_gallery_cards['banner_gallery_text'] ?></p>
                     </div>
                 </div>
             <?php } ?>
        </div>
    <?php endif; ?>
    <div class="loge-service-section">
        <div class="container">
            <div class="loge-service-title">
                <?php if(isset($loge_service_title)):?>
                    <h3><?php echo $loge_service_title ?></h3>
                <?php endif; ?>
                <?php if(isset($loge_service_subtitle)): ?>
                    <p><?php echo $loge_service_subtitle ?></p>
                <?php endif; ?>
            </div>
            <div class="loge-service-card-wrapper">
                <?php if(isset($loge_service_card)):
                    foreach($loge_service_card as $loge_service_cards) {?>
                        <div class="loge-service-card">
                            <?php if(isset($loge_service_cards['loge_service_card_icon'])): ?>
                                <img src="<?php echo $loge_service_cards['loge_service_card_icon'] ?>" alt="">
                            <?php endif; ?>
                            <?php if(isset($loge_service_cards['loge_service_card_title'])): ?>
                                <p><?php echo $loge_service_cards['loge_service_card_title']?></p>
                            <?php endif; ?>
                            <?php if(isset($loge_service_cards['loge_service_card_descriptions'])): ?>
                                <p class="loge_service_card_descriptions"><?php echo $loge_service_cards['loge_service_card_descriptions']?></p>
                            <?php endif; ?>
                        </div>
                    <?php } ?>
                <?php endif; ?>
                <?php if(isset($loge_service_right_options)): ?>
                    <ul>
                        <?php foreach($loge_service_right_options as $loge_service_right_options_card){?>
                            <li><?php echo $loge_service_right_options_card['loge_service_right_card_text'] ?></li>
                        <?php } ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>