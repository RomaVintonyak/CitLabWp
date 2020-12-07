
<html <?php language_attributes(); ?>>
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
      <meta name="description" content="test task"/>
      <meta name="keywords" content=""/>
      <meta name="google" content="notranslate" />
      <meta name="author" content="@Roman" />
      <meta name="robots" content="index, follow" />
      <title>&commat;<?php bloginfo('description'); ?></title>
	  <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <!--inrto-->
      <section id="intro" class="intro">
        <div class="intro__wraper">
          <div class="intro__coll intro__coll--l" style="background: url(<?php the_field('intro_bg')?>) no-repeat bottom;">
            <div class="nav__brand">
              <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/asets/img/intro/logo.svg" alt="logo" class="img"></a>
              <p><?php the_field('nav__brand')?></p>
            </div>
            <div class="figure__brand">
              <img src="<?php echo get_template_directory_uri()?>/asets/img/intro/logo.svg" alt="logo" class="img">
            </div>
          </div><!--/.intro__coll--l -->
          <div class="intro__coll intro__coll--r">
            <!--header-->
            <header class="header" id="header">
              <div class="nav__brand nav__brand--header">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/asets/img/intro/logo.svg" alt="logo" class="img"></a>
                <p><?php the_field('nav__brand')?></p>
              </div>
              <?php
              wp_nav_menu( [
                'theme_location'  => 'primary',
                'menu'            => 'Primary Menu', 
                'container'       => 'nav', 
                'container_class' => 'main__menu', 
                'echo'            => true,
                'items_wrap'      => '<ul>%3$s</ul>',
                'depth'           => 0,
              ] );
              ?>
              <div class="burger" id="burgerBtn">
                <span class="burger--item"></span>
                <span class="burger--item"></span>
                <span class="burger--item"></span>
                <span class="burger--item"></span>
              </div>
            </header><!--/.header-->
            <div class="intro__content">
              <h1 class="main__title">
              <?php bloginfo('name'); ?>
              </h1>
              <h2 class="main__suptitle">
                <?php the_field('main__suptitle')?>
              </h2>
            </div><!--/.intro__content-->
            <div class="intro__figure">
              <img src="<?php echo get_template_directory_uri()?>/asets/img/intro/logo_bg.svg" alt="logo__bg">
            </div>
            <div class="intro__btn" id="scrollBtn">
              <a href="#">
                <svg width="74" height="21" viewBox="0 0 74 21" 
                fill="#4C4D4E" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" 
                    d="M0.272669 3.59098C1.19577 0.840469 4.18906 -0.64602 
                    6.95837 0.270819L37 10.2167L67.0416 0.270819C69.8109 -0.64602 
                    72.8042 0.840469 73.7273 3.59098C74.6504 6.3415 73.1538 9.31448 
                    70.3845 10.2313L38.6714 20.7306C37.5865 21.0898 36.4135 21.0898 
                    35.3286 20.7306L3.61552 10.2313C0.846211 9.31448 -0.650434 6.3415 
                    0.272669 3.59098Z" style="mix-blend-mode:overlay"/>
                </svg>
              </a>
            </div>
          </div><!--/.intro__coll--r -->
        </div><!--/.intro__wraper-->
      </section>

