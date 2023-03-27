<!DOCTYPE html>
<html>

<head>
  <title>CafeSite</title>
  <meta charset="utf-8">
  <meta name="description" content="gulp wordpress">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
  <meta name="robots" content="noindex , nofollow">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/destyle.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/style.css" />

  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="header__wrapper">
      <a class="header__logo" href="/">
        gulp-WP用
      </a>
      <nav>
        <ul class="nav__items">
          <li><a class="nav-item" href="<?php echo home_url(); ?>/about">ABOUT</a></li>
          <li><a class="nav-item" href="<?php echo home_url(); ?>/archive">NEWS</a></li>
          <li>
            <a class="nav-item" href="<?php echo esc_url(home_url('/')); ?>/#link-access">
              ACCESS
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>