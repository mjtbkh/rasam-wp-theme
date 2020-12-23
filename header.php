<html lang="fa">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />

  </head>
  <body class="container-fluid">

    <div id="wrapper" class="col-10">

      <header class="col-12">
        <div id="logo">
          <h1><?php bloginfo( 'name' ) ?></h1>
          <span><?php bloginfo( 'description' ) ?></span>
        </div>
        <div id="menu-wrapper">
          <div id="burger"></div>
          <div id="menu">
            <?php wp_nav_menu( array('theme_location' => 'header-menu')); ?>
            <!-- <ul>
              <li>خانه</li>
              <li>بلاگ</li>
              <li>نویسندگان</li>
              <li>درباره ما</li>
              <li>تماس با ما</li>
            </ul> -->
          </div>
        </div>
      </header>
