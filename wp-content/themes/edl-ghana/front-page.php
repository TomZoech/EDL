<?php get_header(); ?>
<main id="main">
  <section class="hero" aria-labelledby="hero-title">
    <img class="hero-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/ghana-school-hero.png'); ?>" alt="Lehrerin und Schulkinder lernen gemeinsam auf einem Schulhof in Ghana" fetchpriority="high">
    <div class="container">
      <div class="hero-content">
        <p class="eyebrow">Gemeinsam Zukunft gestalten</p>
        <h1 id="hero-title">Bildung, die <span>weiterträgt.</span></h1>
        <p class="hero-text">Wir unterstützen eine Schule in Ghana – mit sicheren Lernräumen, gesunder Ernährung und Chancen für Kinder, deren Familien das Schulgeld nicht aufbringen können.</p>
        <div class="hero-actions">
          <a class="button" href="#projekt">Unser Projekt entdecken <span aria-hidden="true">↓</span></a>
          <a class="button button--light" href="#spenden">Gemeinsam helfen <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
    <div class="hero-note"><strong>Unser Schwerpunkt</strong>Eine Schule in Ghana nachhaltig stärken – Schritt für Schritt.</div>
  </section>

  <div class="impact-strip" aria-label="Unsere Unterstützung">
    <div class="container impact-grid">
      <div class="impact-item"><span class="impact-icon" aria-hidden="true">⌂</span><strong>Klassenräume</strong><span>Platz zum konzentrierten Lernen</span></div>
      <div class="impact-item"><span class="impact-icon" aria-hidden="true">●</span><strong>Kantine</strong><span>Gesunde Mahlzeiten im Schulalltag</span></div>
      <div class="impact-item"><span class="impact-icon" aria-hidden="true">✦</span><strong>Kindergarten</strong><span>Ein guter Start für die Kleinsten</span></div>
      <div class="impact-item"><span class="impact-icon" aria-hidden="true">⌘</span><strong>Computerraum</strong><span>Digitale Bildung und neue Chancen</span></div>
    </div>
  </div>

  <section class="intro" id="ueber-uns">
    <div class="container intro-grid">
      <div class="ghana-card" aria-label="Unser Projekt in Ghana">
        <div class="ghana-shape" aria-hidden="true">
          <svg viewBox="0 0 300 420" role="img"><path fill="currentColor" d="M89 13l34 18 35-5 39 23 36 8 15 39-15 42 8 38-29 34-4 47-28 39-5 51-32 58-22-45-30-23-12-42-39-36 9-45-17-39 25-38-1-50 34-26z"/><path fill="#198754" d="M88 147l68-34 58 26-15 79-70 17-52-42z" opacity=".95"/><circle cx="147" cy="178" r="20" fill="#c82e36"/><path d="M147 161l5 11 12 1-9 8 3 12-11-6-11 6 3-12-9-8 12-1z" fill="#f4c842"/></svg>
        </div>
        <div class="ghana-label"><strong>Ghana, Westafrika</strong><span>Ein Projekt. Viele Möglichkeiten.</span></div>
      </div>
      <div class="intro-copy">
        <p class="eyebrow">Wofür wir stehen</p>
        <h2 class="section-title">Eine gute Schule verändert mehr als einen Stundenplan.</h2>
        <p>Bildung eröffnet Perspektiven – doch Lernen gelingt nur, wenn auch die Grundlagen stimmen. Deshalb unterstützen wir nicht nur Gebäude und Ausstattung, sondern begleiten Kinder ganzheitlich.</p>
        <div class="quote-line">Jede Investition in Bildung ist eine Investition in Selbstbestimmung.</div>
        <p>Unser Verein arbeitet direkt, persönlich und mit Blick auf langfristige Wirkung. Gemeinsam mit den Menschen vor Ort verbessern wir die Schulstruktur und helfen besonders begabten Kindern, deren Eltern die Kosten nicht alleine tragen können.</p>
        <a class="text-link" href="#projekt">So wirkt unsere Hilfe <span aria-hidden="true">→</span></a>
      </div>
    </div>
  </section>

  <section class="projects" id="projekt">
    <div class="container">
      <div class="section-head">
        <div><p class="eyebrow">Projekt Ghana</p><h2 class="section-title">Hilfe, die dort ankommt, wo sie gebraucht wird.</h2></div>
        <p class="section-lead">Wir verbinden bessere Infrastruktur mit direkter Unterstützung für Kinder – für einen stabilen Schulalltag und echte Zukunftschancen.</p>
      </div>
      <div class="project-grid">
        <article class="project-card"><span class="project-number">01</span><h3>Lernräume schaffen</h3><p>Klassenräume, Kindergarten und Computerraum geben Kindern einen sicheren, zeitgemäßen Ort zum Lernen und Entdecken.</p></article>
        <article class="project-card"><span class="project-number">02</span><h3>Grundversorgung sichern</h3><p>Die Kantine, Schulbücher und verlässliche Ernährung sorgen dafür, dass Kinder gesund und konzentriert am Unterricht teilnehmen können.</p></article>
        <article class="project-card"><span class="project-number">03</span><h3>Talente fördern</h3><p>Wir übernehmen Schulgebühren für besonders engagierte Kinder, wenn ihre Familien diese finanzielle Last nicht tragen können.</p></article>
      </div>
    </div>
  </section>

  <section class="news" id="aktuelles">
    <div class="container">
      <div class="section-head">
        <div><p class="eyebrow">News &amp; Aktuelles</p><h2 class="section-title">Was sich vor Ort bewegt.</h2></div>
        <a class="text-link" href="<?php echo esc_url(home_url('/aktuelles/')); ?>">Alle Neuigkeiten <span aria-hidden="true">→</span></a>
      </div>
      <div class="news-grid">
        <?php
        $news = new WP_Query(array('post_type'=>'post','post_status'=>'publish','posts_per_page'=>3,'ignore_sticky_posts'=>true));
        if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); ?>
          <article class="news-card">
            <a href="<?php the_permalink(); ?>" class="news-thumb" tabindex="-1">
              <?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } else { echo '<span class="news-placeholder" aria-hidden="true">✦</span>'; } ?>
            </a>
            <div class="news-content"><span class="news-meta"><?php echo esc_html(get_the_date('d. F Y')); ?></span><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php echo esc_html(wp_strip_all_tags(get_the_excerpt())); ?></p><a class="text-link" href="<?php the_permalink(); ?>">Weiterlesen <span aria-hidden="true">→</span></a></div>
          </article>
        <?php endwhile; wp_reset_postdata(); else: ?>
          <article class="news-card"><div class="news-thumb"><span class="news-placeholder" aria-hidden="true">✦</span></div><div class="news-content"><span class="news-meta">Bald mehr</span><h3>Neuigkeiten aus unserem Projekt</h3><p>Hier berichten wir künftig über Fortschritte, Begegnungen und die nächsten Schritte an der Schule.</p></div></article>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="donate" id="spenden">
    <div class="container donate-panel">
      <div><p class="eyebrow" style="color:#f4c842">Gemeinsam helfen</p><h2>Aus kleinen Beiträgen werden große Chancen.</h2><p>Die Spendenmöglichkeit wird derzeit vorbereitet. Wenn Sie unser Schulprojekt schon jetzt unterstützen möchten, nehmen Sie gerne direkt Kontakt mit uns auf.</p></div>
      <a class="button button--light" href="mailto:info@example.org?subject=Ich%20möchte%20das%20Schulprojekt%20unterstützen">Interesse bekunden <span aria-hidden="true">→</span></a>
    </div>
  </section>
</main>
<?php get_footer(); ?>
