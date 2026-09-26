<?php get_header(); ?>
<main id="main">
  <header class="page-hero"><div class="container"><p class="eyebrow">Aus dem Verein</p><h1>Aktuelles</h1></div></header>
  <div class="content-area"><div class="container post-list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="news-card"><a href="<?php the_permalink(); ?>" class="news-thumb"><?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } else { echo '<span class="news-placeholder" aria-hidden="true">✦</span>'; } ?></a><div class="news-content"><span class="news-meta"><?php echo esc_html(get_the_date('d. F Y')); ?></span><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php echo esc_html(wp_strip_all_tags(get_the_excerpt())); ?></p><a class="text-link" href="<?php the_permalink(); ?>">Weiterlesen →</a></div></article>
    <?php endwhile; else: ?><p>Noch keine Beiträge vorhanden.</p><?php endif; ?>
  </div><div class="container pagination"><?php the_posts_pagination(); ?></div></div>
</main>
<?php get_footer(); ?>
