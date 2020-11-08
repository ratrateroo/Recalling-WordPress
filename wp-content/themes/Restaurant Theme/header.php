<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    wp_head()
    ?>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

</head>
<body>

<header>
    <div class="container">

        <?php
    wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            //'menu' => 'Top Bar'
            'menu_class' =>'top-bar'
        )
    );
    ?>
    </div>
</header>

    
