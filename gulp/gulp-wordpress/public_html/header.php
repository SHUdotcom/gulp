<!DOCTYPE html>
<html>

<head>
  <title>gulp-test</title>
  <meta charset="utf-8">
  <meta name="description" content="gulp wordpress">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
  <meta name="robots" content="noindex , nofollow">

  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="header__inner">
      <a class="header__logo" href="/">
        gulp-WP用
      </a>
      <nav>
        <ul class="nav__items">
          <li>
            <a class="header__nav-link" href="<?php echo esc_url(home_url('/about')); ?>">
              About
            </a>
          </li>
          <li>
            <a class="header__nav-link" href="<?php echo esc_url(home_url('/news')); ?>">
              News
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>