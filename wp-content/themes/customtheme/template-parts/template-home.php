<?php
/*
* Template Name: Home page
*/
get_header();

?>

<?php
    $home_banner_contents = get_field('home_banner_contents');
    $banner_gallery_card = get_field('banner_gallery_card');
    $loge_service_title = get_field('loge_service_title');
    $loge_service_subtitle = get_field('loge_service_subtitle');
    $loge_service_card = get_field('loge_service_card');
    $loge_service_right_options = get_field('loge_service_right_options');

    $home_banner_background_img = get_field('home_banner_background_img');

    $our_services_title = get_field('our_services_title');
    $our_services_subtitle = get_field('our_services_subtitle');
    $services_card = get_field('services_card');
    $our_services_card_btn = get_field('services_card_btn');
    $vehicle_fleet_services_card = get_field('vehicle_fleet_services_card');
    $vehicle_fleet_title = get_field('vehicle_fleet_title');
    $vehicle_fleet_subtitle = get_field('vehicle_fleet_subtitle');
    $news_and_info_card = get_field('news_and_info_card');
    $news_and_info_title = get_field('news_and_info_title');
    $news_and_info_subtitle = get_field('news_and_info_subtitle');
    $news_and_info_more_article = get_field('news_and_info_more_article');
    $more_article_button = get_field('more_article_button');
?>   
<main>
    <!-- .................... banner start ...................  -->
    <?php if(isset($home_banner_contents)):?>
        <div class="banner-wrapper">
            <?php if(isset($home_banner_contents['home_banner_background_img'])): ?>
                <?php foreach($home_banner_contents['home_banner_background_img'] as $home_banner) {?>
                    <div class="banner" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('<?php echo $home_banner['home_banner'] ?>')no-repeat;background-size:cover">
                <?php } ?>
            <?php endif ?>
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
                                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
        </div>
       
        <div class="phone-banner" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('<?php echo $home_banner_contents['home_banner_phone'] ?>')no-repeat;background-size:cover">
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
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
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
    <!-- .................. banner end .....................  -->
    <!-- ............ loge service section start ............  -->
    <div class="loge-service-section-wrapper">
        <div class="loge-service-section">
            <div class="container">
                <div class="loge-service-title">
                    <?php if(isset($loge_service_title)):?>
                        <h3><?php echo $loge_service_title ?></h3>
                    <?php endif; ?>
                    <?php if(isset($loge_service_subtitle)): ?>
                        <div class="service-subtitle">
                            <span></span>
                            <p><?php echo $loge_service_subtitle ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if(isset($loge_service_card)):?>
                    <div class="loge-service-card-wrapper">
                        <?php foreach($loge_service_card as $loge_service_cards) {?>
                            <div class="loge-service-card">
                                <?php if(isset($loge_service_cards['loge_service_card_icon'])): ?>
                                    <img src="<?php echo $loge_service_cards['loge_service_card_icon'] ?>" alt="">
                                <?php endif; ?>
                                <?php if(isset($loge_service_cards['loge_service_card_title'])): ?>
                                    <p class="loge-service-card-title"><?php echo $loge_service_cards['loge_service_card_title']?></p>
                                <?php endif; ?>
                                <?php if(isset($loge_service_cards['loge_service_card_descriptions'])): ?>
                                    <p class="loge_service_card_descriptions"><?php echo $loge_service_cards['loge_service_card_descriptions']?></p>
                                <?php endif; ?>
                            </div>
                        <?php } ?>
                        <?php if(isset($loge_service_right_options)): ?>
                            <ul>
                                <?php foreach($loge_service_right_options as $loge_service_right_options_card){?>
                                    <li><?php echo $loge_service_right_options_card['loge_service_right_card_text'] ?></li>
                                <?php } ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- ............ loge service section end .............. -->
    <!-- ............ our service section start .............. -->
    <div class="our-service-section-wrappper">
        <div class="our-service-section">
            <div class="container">
                <div class="our-service-title">
                    <?php if(isset($our_services_title)):?>
                        <h3><?php echo $our_services_title ?></h3>
                    <?php endif; ?>
                    <?php if(isset($our_services_subtitle)): ?>
                        <div class="service-subtitle">
                            <span></span>
                            <p><?php echo $our_services_subtitle ?></p>
                        </div>
                    <?php endif; ?> 
                </div>
                <?php if(isset($services_card)): ?>
                    <div class="service-card-wrapper homeSlider">
                            <?php foreach($services_card as $services_cards) {?>
                                <div class="service-card">
                                   <?php if(isset($services_cards['services_card_image'])): ?>
                                       <div class="service-card-img">
                                           <img src="<?php echo $services_cards['services_card_image']; ?>" alt="card_image">
                                       </div>
                                   <?php endif; ?>
                                   <div class="service-card-contents">
                                       <?php if(isset($services_cards['services_card_title'])): ?>
                                           <h3><?php echo $services_cards['services_card_title']; ?></h3>
                                       <?php endif; ?>
                                       <?php if(isset($services_cards['services_card_subtitle'])): ?>
                                           <p><?php echo $services_cards['services_card_subtitle']; ?></p>
                                       <?php endif; ?>
                                       <?php if($services_cards['services_card_btn']):
                                           $our_services_link_url = $services_cards['services_card_btn']['url'];
                                           $our_services_link_title = $services_cards['services_card_btn']['title'];
                                           $our_services_link_target = $services_cards['services_card_btn']['target'] ? $services_cards['services_card_btn']['target'] : '_self';
                                           ?>
                                           <div class="service-btn">
                                               <a href="<?php echo esc_url( $our_services_link_url ); ?>" target="<?php echo esc_attr( $our_services_link_target ); ?>"><?php echo esc_html( $our_services_link_title ); ?></a>
                                           </div>
                                       <?php endif; ?>
                                   </div>
                                </div>
                            <?php } ?>
                        </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- ............ our service section end .............. -->

    <!-- ............ Vehicle fleet section start .............. -->
    <div class="our-service-section-wrappper">
    <div class="our-service-section">
        <div class="container">
            <div class="our-service-title">
                <?php if(isset($vehicle_fleet_title)):?>
                    <h3><?php echo $vehicle_fleet_title ?></h3>
                <?php endif; ?>
                <?php if(isset($vehicle_fleet_subtitle)): ?>
                    <div class="service-subtitle">
                        <span></span>
                        <p><?php echo $vehicle_fleet_subtitle ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(isset($vehicle_fleet_services_card)): ?>
                <div class="service-card-wrapper homeSlider1">
                    <?php foreach($vehicle_fleet_services_card as $vehicle_fleet_services_cards) {?>
                    <div class="service-card">
                            <?php if(isset($vehicle_fleet_services_cards['vehicle_fleet_services_card_image'])): ?>
                                <div class="service-card-img">
                                    <img src="<?php echo $vehicle_fleet_services_cards['vehicle_fleet_services_card_image']; ?>" alt="">
                                </div>
                            <?php endif; ?>
                            <div class="service-card-contents">
                                <?php if(isset($vehicle_fleet_services_cards['vehicle_fleet_services_card_title'])): ?>
                                    <h3><?php echo $vehicle_fleet_services_cards['vehicle_fleet_services_card_title']; ?></h3>
                                <?php endif; ?>
                                <?php if(isset($vehicle_fleet_services_cards['vehicle_fleet_services_card_subtitle'])): ?>
                                    <p><?php echo $vehicle_fleet_services_cards['vehicle_fleet_services_card_subtitle']; ?></p>
                                <?php endif; ?>
                                <?php if($vehicle_fleet_services_cards['vehicle_fleet_services_card_button']): 
                                    $our_services_link_url = $vehicle_fleet_services_cards['vehicle_fleet_services_card_button']['url'];
                                    $our_services_link_title = $vehicle_fleet_services_cards['vehicle_fleet_services_card_button']['title'];
                                    $our_services_link_target = $vehicle_fleet_services_cards['vehicle_fleet_services_card_button']['target'] ? $vehicle_fleet_services_cards['vehicle_fleet_services_card_button']['target'] : '_self';
                                    ?>
                                    <div class="service-btn">
                                        <a href="<?php echo esc_url( $our_services_link_url ); ?>" target="<?php echo esc_attr( $our_services_link_target ); ?>"><?php echo esc_html( $our_services_link_title ); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            </div>
                    <?php } ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- ............ Vehicle fleet section end .............. -->
<!-- ............ News & Info section start .............. -->
<div class="news-and-info-section-wrappper">
    <div class="our-service-section">
        <div class="container">
            <div class="our-service-title">
                <?php if(isset($news_and_info_title)):?>
                    <h3><?php echo $news_and_info_title ?></h3>
                <?php endif; ?>
                <?php if(isset($news_and_info_subtitle)): ?>
                    <div class="service-subtitle">
                        <span></span>
                        <p><?php echo $news_and_info_subtitle ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="news-and-info-card">
                <?php if(isset($news_and_info_card)): ?>
                    <div class="service-card-wrapper">
                        <?php foreach($news_and_info_card as $news_and_info_cards) {?>
                                <div class="service-card">
                                    <?php if(isset($news_and_info_cards['news_and_info_card_image'])): ?>
                                        <div class="service-card-img">
                                            <img src="<?php echo $news_and_info_cards['news_and_info_card_image']; ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <div class="service-card-contents">
                                        <?php if(isset($news_and_info_cards['news_and_info_card_title'])): ?>
                                            <h3><?php echo $news_and_info_cards['news_and_info_card_title']; ?></h3>
                                        <?php endif; ?>
                                        <?php if(isset($news_and_info_cards['news_and_info_card_date'])): ?>
                                            <p><?php echo $news_and_info_cards['news_and_info_card_date']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        <?php } ?>
                        <?php if(isset($news_and_info_more_article)): ?>
                            <div class="more-article-wrapper">
                                <?php foreach($news_and_info_more_article as $more_articles ) {?>
                                    <div class="more-article">
                                        <?php if( $more_articles['news_and_info_more_article_title']):?>
                                            <h3><?php echo $more_articles['news_and_info_more_article_title']; ?> </h3>
                                        <?php endif; ?>
                                        <?php if($more_articles['news_and_info_more_article_date']): ?>
                                            <p><?php echo $more_articles['news_and_info_more_article_date']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php } ?>
                                <?php if(isset($more_article_button)): 
                                    $more_article_button_url = $more_article_button['url'];
                                    $more_article_button_title = $more_article_button['title'];
                                    $more_article_button_target = $more_article_button['target'] ? $link['target'] : '_self';
                                    ?>
                                    <div class="more-article-btn">
                                        <a href="<?php echo esc_url( $more_article_button_url ); ?>" target="<?php echo esc_attr( $more_article_button_target ); ?>"><?php echo esc_html( $more_article_button_title ); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- ............ News & Info section end ................ -->
</main>

<?php get_footer(); ?>