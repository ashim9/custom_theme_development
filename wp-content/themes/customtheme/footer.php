
<?php 
    $footer_banner = get_field('footer_banner'); 

?>

<div class="footer" style="background:url('<?php echo $footer_banner ?>')no-repeat;background-size:cover">
    <div class="footer-contents">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </div>
</div>