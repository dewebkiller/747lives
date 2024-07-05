<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Digital Extreme">
    <?php wp_head(); ?>
</head>

<body class="<?php body_class() ?>">
    <header>
        <section class="btm-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 d-sm-block d-none">
                        <div class="logo"><img src="<?php echo bloginfo('template_url'); ?>/images/logo.gif" alt="747lives"></div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" alt="747lives"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <?php
                                    $defaults = array(
                                        'theme_location' => 'primary',
                                        'menu' => '',
                                        'container' => 'ul',
                                        'container_class' => '',
                                        'container_id' => 'offcanvasExample',
                                        'menu_class' => 'nav navbar-nav',
                                        'menu_id' => '',
                                        'echo' => true,
                                        'fallback_cb' => 'wp_page_menu',
                                        'before' => '',
                                        'after' => '',
                                        'link_before' => '',
                                        'link_after' => '',
                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'depth' => 0,
                                        'walker' => ''
                                    );
                                    wp_nav_menu($defaults);
                                    ?>

                                </div>
                            </nav>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 d-none d-sm-block header-btn-right">
                        <div class="header-btn-wrapper">
                            <ul>
                                <li><a href="#" class="color-white btn btn-primary">Login</a></li>
                                <li><a href="#" class="color-white btn btn-primary">Sign Up</a></li>
                            </ul>
                            
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </header>