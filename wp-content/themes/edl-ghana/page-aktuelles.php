<?php get_header(); ?>
<main id="main">
  <header class="page-hero"><div class="container"><p class="eyebrow">Aus dem Verein</p><h1>Aktuelles</h1><p class="section-lead">Fortschritte, Begegnungen und Geschichten aus unserem Schulprojekt in Ghana.</p></div></header>
  <div class="content-area"><div class="container post-list">
    <?php
    $paged = max(1, get_query_var('paged'));
    $news = new WP_Query(array('post_type'=>'post','post_status'=>'publish','posts_per_page'=>9,'paged'=>$paged));
    if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); ?>
      <article class="news-card"><a href="<?php the_permalink(); ?>" class="news-thumb"><?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } else { echo '<span class="news-placeholder" aria-hidden="true">✦</span>'; } ?></a><div class="news-content"><span class="news-meta"><?php echo esc_html(get_the_date('d. F Y')); ?></span><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php echo esc_html(wp_strip_all_tags(get_the_excerpt())); ?></p><a class="text-link" href="<?php the_permalink(); ?>">Weiterlesen →</a></div></article>
    <?php endwhile; else: ?><p>Noch keine Beiträge vorhanden.</p><?php endif; wp_reset_postdata(); ?>
  </div><div class="container pagination"><?php echo paginate_links(array('total'=>$news->max_num_pages,'current'=>$paged)); ?></div></div>
</main>
<?php get_footer(); ?>
