<?php

/*
* Template Name: Home page
*/

get_header();

?>

<?php
    $home_banner_contents = get_field('home_banner_contents');
    $home_banner = get_field('home_banner');
    $banner_gallery_card = get_field('banner_gallery_card');
?>

<main>
    <?php if(isset($home_banner_contents)):?>
        <div class="banner" style="background:url('<?php echo $home_banner_contents['home_banner'] ?>')no-repeat;background-size:cover">
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
                 <div class="banner-gallery" style="background:url('<?php echo $banner_gallery_cards['banner_gallery_image'] ?>')no-repeat;background-size:cover">
                     <div class="banner-gallery-content">
                         <p><?php echo $banner_gallery_cards['banner_gallery_text'] ?></p>
                     </div>
                 </div>
             <?php } ?>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>