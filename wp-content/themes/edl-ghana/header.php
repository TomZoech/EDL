<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main">Zum Inhalt springen</a>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Eat, Drink & Learn – Startseite">
      <span class="brand-mark" aria-hidden="true">✦</span>
      <span>Eat, Drink<br>&amp; Learn<small>Bildung schafft Zukunft</small></span>
    </a>
    <div class="nav-wrap">
      <button class="nav-toggle" aria-expanded="false" aria-controls="primary-nav" aria-label="Menü öffnen"><span></span><span></span><span></span></button>
      <nav id="primary-nav" class="primary-nav" aria-label="Hauptnavigation">
        <?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'menu_class'=>'nav-list','fallback_cb'=>'edl_fallback_menu')); ?>
      </nav>
      <a class="button header-cta" href="<?php echo esc_url(home_url('/#spenden')); ?>">Jetzt helfen <span aria-hidden="true">→</span></a>
    </div>
  </div>
</header>
