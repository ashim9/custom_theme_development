<?php

/*
* Template Name: Home page
*/

get_header();

?>

<?php
    $home_banner_contents = get_field('home_banner_contents');
    $home_banner = get_field('home_banner');
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
                <?php if( $home_banner_contents['home_banner_btn_text'] )
                        $link_url = $home_banner_contents['home_banner_btn_text']['url'];
                        $link_title = $home_banner_contents['home_banner_btn_text']['title'];
                        $link_target = $home_banner_contents['home_banner_btn_text']['target'] ? $link['target'] : '_self';
                    ?>
                    <div class="banner-btn">
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                <?php //endif; ?>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>