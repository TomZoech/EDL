<?php get_header(); ?>
<main id="main">
  <?php while (have_posts()) : the_post(); ?>
    <header class="page-hero"><div class="container"><p class="eyebrow">Eat, Drink &amp; Learn</p><h1><?php the_title(); ?></h1></div></header>
    <article class="content-area"><div class="container article"><?php the_content(); ?></div></article>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
