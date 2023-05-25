<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="container-fluid">
            <div class="d-flex navPrtDiv">
                <div>
                    <h3 class="logoText"><span class="logoBlack">Diet</span><span class="logoBlue">bux</span></h3>
                </div>
                <div class="d-flex navList">
                    <div>Plans</div>
                    <div>Calculator</div>
                    <div>Nutritionist</div>
                    <div>Menu</div>
                    <div>About</div>
                    <div>Sign up</div>
                    <div>Ar</div>
                </div>
            </div>
        </div>
    </header>
    <div id="content">