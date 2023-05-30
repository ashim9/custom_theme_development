<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <?php wp_head(); ?>
</head>
<body>
    <div class="navbar">
        <div class="container">
            <div class="navbar-inner-content">
                <div class="navbar_left-logo">
                <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/nav-logo.png" alt=""></a>
                </div>
                <?php if(has_nav_menu('header-menu')){
                    wp_nav_menu(array('theme-location'=>'header-menu','menu_class' => 'header_menu')); 
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>