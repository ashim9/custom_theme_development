<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Wordpress</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <?php wp_head(); ?>
</head>
<body>
    <nav class="topbar">
        <div class="container">
            <div class="topbar-contents">
                <div class="topbar-left">
                    <a href="<?php echo esc_url(home_url('/'))?>"></a><img src="<?php echo get_template_directory_uri();?>/assets/img/logeServicIcon.svg" alt="logeservice logo">
                </div>
                <div class="topobar-right">
                    <div class="phone-btn">
                        <a href="tel:+001 234 7890"> <img src="<?php echo get_template_directory_uri();?>/assets/img/callICon.svg" alt="call icon"> +001 234 7890</a>
                    </div>
                    <div class="quote-btn">
                    <p><img src="<?php echo get_template_directory_uri();?>/assets/img/quoteIcon.svg" alt="quote icon">Request for quote</p>
                    </div>
                    <div class="search-icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/searchIcon.svg" alt="serach icon">
                    </div>
                    <div class="burger-menu">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/burger-menu-icon.svg" alt="burger-menu">
                    </div>
                </div>
            </div>
            <div class="navbar">
                <?php if(has_nav_menu('header-menu')){
                    wp_nav_menu(array('theme_location'=>'header-menu','menu_class' => 'header_menu')); 
                }
                ?>
            </div>
        </div>
    </nav>
</body>
</html>

<script>
    let hamburger = document.querySelector('.topobar-right .burger-menu');
    hamburger.addEventListener('click', (e)=>{
        let navbar = document.querySelector('.navbar');
        navbar.classList.toggle('active');
    });
</script>