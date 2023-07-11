<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_site_icon(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/mdb.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/main.css">
  <?php wp_head(); ?>
</head>
<?php flush(); ?>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <header>
    <div class="breadcrumbs  d-flex justify-content-center align-items-end ">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
    


    <nav class=" navbar navbar-expand-lg fixed-top scrolling-navbar d-none d-lg-block">
      <div class="col-xl-12 d-lg-flex justify-content-center m-auto align-items-center ">
        <div class="container-fluid py-3">
          <div class="d-none d-lg-block">
            <ul class="d-flex m-auto mr-xl-auto mr-5 align-items-center nav-list">
              <li class="mr-xl-4">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  início
                  <span class="hover-line"></span>
                </a>

              </li>
              <li class="mx-xl-4 mx-1">
                <a href="<?php echo esc_url(home_url('/')); ?>sobre">sobre
                  <span class="hover-line"></span>
                </a>
              </li>
              <li class="mx-xl-4 mx-1">
                <a href="<?php echo esc_url(home_url('/')); ?>empresas">Empresas
                  <span class="hover-line"></span>
                </a>
              </li>
            </ul>
          </div>
          <div class="logo">
            <a class="img-fluid"><?php the_custom_logo(); ?></a>
          </div>

          <div class="d-none d-lg-block">
            <ul class="d-flex m-auto ml-xl-auto ml-5 align-items-center nav-list">
              <li class=" mx-xl-4 mx-1">
                <a href="<?php echo esc_url(home_url('/')); ?>cases">cases
                  <span class="hover-line"></span>
                </a>
              </li>
              <li class=" mx-xl-4 mx-1">
                <a href="<?php echo esc_url(home_url('/')); ?>noticias">notícias
                  <span class="hover-line"></span>
                </a>
              </li>
              <li class=" ml-xl-4 ">
                <a href="<?php echo esc_url(home_url('/')); ?>contatos">contatos
                  <span class="hover-line"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <nav class="d-lg-none d-block  side-nav">
      <div class="container-fluid navbar mobile">
        <?php the_custom_logo(); ?>
        <div id="nav-icon" class="hamburger">
          <span class="bar"></span>
        </div>
      </div>
      <ul class="side-nav-list nav-list ">
        <li class="side-nav-item ">
          <div class="container-fluid">
            <ul class=" ml-auto pt-5">
              <li class="pb-3">
                <a href="<?php echo esc_url(home_url('/')); ?>sobre">sobre
                  <span class="hover-line"></span>
                </a>
              </li>
              <li class="pb-3">
                <a href="<?php echo esc_url(home_url('/')); ?>empresas">Empresas
                  <span class="hover-line"></span>
                </a>
              </li>
              <li class="pb-3">
                <a href="<?php echo esc_url(home_url('/')); ?>cases">cases
                  <span class="hover-line"></span>
                </a>
              </li>
              <li class="pb-3">
                <a href="<?php echo esc_url(home_url('/')); ?>noticias">notícias
                  <span class="hover-line"></span>
                </a>
              </li>
              <li class="pb-3">
                <a href="<?php echo esc_url(home_url('/')); ?>contatos">contatos
                  <span class="hover-line"></span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
  </header>