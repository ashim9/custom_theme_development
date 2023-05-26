<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <?php wp_head(); ?>
</head>
<body>
    <div>
        <?php 
            wp_nav_menu(array('theme-location'=>'header-menu','menu_class' => 'header_menu',));
         ?>
    </div>
</body>
</html>