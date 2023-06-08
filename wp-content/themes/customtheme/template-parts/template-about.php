<?php
/*
* Template Name: About page
*/
get_header();

?>

<?php
    $breadcrumbs = get_field('breadcrumbs');
    $about_page_loge_service = get_field('about_page_loge_service');
    $loge_service_title = get_field('loge_service_title');
    $about_page_why_choose = get_field('about_page_why_choose');
    // var_dump($about_page_loge_service['loge_service_second_column']);
?>

<main>
    <?php 
        $data = new WP_query(array(
            'post_type' => 'common-breadcrumb',
        ))
    ?>
     <?php //while($data->have_posts()):$data->the_post(); ?>
    
    <?php if(isset($about_page_loge_service)): ?>
        <div class="loge-service-section-wrapper">
            <div class="loge-service-section about-us-first-column">
                <div class="container">
                    <div class="loge-service-title">
                        <?php if(isset($about_page_loge_service['loge_service_title'])):?>
                            <h3><?php echo $about_page_loge_service['loge_service_title'] ?></h3>
                        <?php endif; ?>
                        <?php if(isset($about_page_loge_service['loge_service_subtitle'])): ?>
                            <div class="service-subtitle">
                                <span></span>
                                <p><?php echo $about_page_loge_service['loge_service_subtitle'] ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="about-us-first-column-three-row">
                        <div class="about-us-first-column-first-row">
                            <?php if(isset($about_page_loge_service['loge_service_first_column'])): ?>
                                <?php echo $about_page_loge_service['loge_service_first_column'] ?>
                            <?php endif; ?>
                        </div>
                        <div class="about-us-first-column-second-row">
                            <?php if(isset($about_page_loge_service['loge_service_second_column'])): ?> 
                                <?php foreach($about_page_loge_service['loge_service_second_column'] as $loge_service_second_column_contents ) { ?>
                                    <p><?php echo $loge_service_second_column_contents['loge_service_second_column_content'] ?></p> 
                                <?php } ?>
                            <?php endif; ?>
                        </div>
                        <div class="about-us-first-column-third-row">
                            <?php if(isset($about_page_loge_service['loge_service_third_column'])): ?>
                                <img src="<?php  echo $about_page_loge_service['loge_service_third_column'] ?>" alt="about page image">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(isset($about_page_why_choose)):  ?>
        <div class="loge-service-section-wrapper">
            <div class="loge-service-section about-us-second-column">
                <div class="container">
                    <div class="loge-service-title">
                        <?php if(isset($about_page_why_choose['why_choose_title'])):?>
                            <h3><?php echo $about_page_why_choose['why_choose_title'] ?></h3>
                        <?php endif; ?>
                        <?php if(isset($about_page_why_choose['why_choose_subtitle'])): ?>
                            <div class="service-subtitle">
                                <span></span>
                                <p><?php echo $about_page_why_choose['why_choose_subtitle'] ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if(isset($about_page_why_choose['why_choose_text_group'])):?>
                        <div class="why-choose-text-wrapper">
                            <?php foreach($about_page_why_choose['why_choose_text_group'] as $about_page_why_choose_contents) {?>
                                <div class="why-choose-contents">
                                    <h3><?php echo $about_page_why_choose_contents['why_choose_text_group_title'] ?></h3>
                                    <p><?php echo $about_page_why_choose_contents['why_choose_text_group_subtitle'] ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

</main>