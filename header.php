<!DOCTYPE html>
<html lang="he" dir="rtl" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="<?php echo ct_asset('images/favicon.ico'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site-layout">

<header class="site-header">
  <div class="container">
    <nav class="navbar navbar-light navbar-expand-lg" id="site-navbar">

      <!-- Logo dropdown -->
      <div class="nav-item dropdown" id="logo-dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo home_url('/'); ?>" id="logo-toggle" role="button">
          עץבעיר
        </a>
        <div class="dropdown-menu" aria-labelledby="logo-toggle">
          <a class="dropdown-item" href="<?php echo home_url('/#people'); ?>">א'נשי העץ</a>
          <a class="dropdown-item" href="<?php echo home_url('/#contact'); ?>">לקשור קשר</a>
          <a class="dropdown-item" href="<?php echo home_url('/#sponsor'); ?>">לחבק את העץ</a>
        </div>
      </div>

      <!-- Mobile toggle -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="תפריט">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="navbar-nav">

          <!-- לימוד בעולם האמיתי -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo home_url('/learn/'); ?>" id="tours-dropdown" role="button">
              לימוד בעולם האמיתי
            </a>
            <div class="dropdown-menu" aria-labelledby="tours-dropdown">
              <a class="dropdown-item" href="<?php echo home_url('/learn/#forage'); ?>">סיורי ליקוט עם אלון</a>
              <a class="dropdown-item" href="<?php echo home_url('/learn/#sessions'); ?>">עושות חיים בתל חובז</a>
            </div>
          </li>

          <!-- לימוד מקוון -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo home_url('/learn/#soil'); ?>" id="workshops-dropdown" role="button">
              לימוד מקוון
            </a>
            <div class="dropdown-menu" aria-labelledby="workshops-dropdown">
              <a class="dropdown-item" href="<?php echo home_url('/learn/#soil'); ?>">עושות חיים בבית: סדרת אדמה</a>
              <a class="dropdown-item" href="<?php echo home_url('/learn/#abrakadabra'); ?>">קורס כישוף ואקולוגיה עמוקה</a>
            </div>
          </li>

          <!-- מרכז ידע -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo home_url('/#info'); ?>" id="info-dropdown" role="button">
              מרכז ידע
            </a>
            <div class="dropdown-menu" aria-labelledby="info-dropdown">
              <a class="dropdown-item" href="https://www.patreon.com/collection/915737?view=expanded" target="_blank">מניפסטים</a>
              <a class="dropdown-item" href="https://www.patreon.com/collection/274006?view=expanded" target="_blank">הסכת במשעול הצר</a>
              <a class="dropdown-item" href="https://www.youtube.com/user/citytreenet/" target="_blank">סרטוני השיבה הביתה</a>
              <a class="dropdown-item" href="https://www.patreon.com/collection/695361?view=expanded" target="_blank">הגות</a>
            </div>
          </li>

          <!-- חלום -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo home_url('/#vision'); ?>" id="vision-dropdown" role="button">
              חלום
            </a>
            <div class="dropdown-menu" aria-labelledby="vision-dropdown">
              <a class="dropdown-item" href="<?php echo home_url('/#vision'); ?>">עץ חולם על העולם</a>
            </div>
          </li>

        </ul>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a id="patreon-btn" href="https://www.patreon.com/join/CityTree" target="_blank" rel="noopener">
              <img src="<?php echo ct_asset('images/patreon-standalone.png'); ?>" alt="חבקו את העץ בפטראון">
            </a>
          </li>
        </ul>
      </div>

    </nav>
  </div>
</header>

<div class="site-content">
