<?php
/**
 * Template Name: Blog
 * Letras Diferentes Online — Blog listing page
 */
get_header();
?>

<div class="hero" style="padding:48px 20px 32px">
  <h1>Blog <span class="accent">Letras Diferentes</span></h1>
  <p class="hero-desc">Dicas, tutoriais e novidades sobre letras Unicode, Instagram, WhatsApp e Free Fire.</p>
</div>

<main class="wrap" style="padding-bottom:64px">
  <?php
  /* On static pages WordPress uses 'page' not 'paged' for pagination */
  $paged = max(1, get_query_var('paged') ?: get_query_var('page') ?: 1);
  $q = new WP_Query([
      'post_type'      => 'post',
      'post_status'    => 'publish',
      'posts_per_page' => 12,
      'paged'          => $paged,
  ]);
  ?>
  <?php if ($q->have_posts()) : ?>
    <div class="blog-grid">
      <?php while ($q->have_posts()) : $q->the_post(); ?>
        <article class="post-card">
          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium_large', ['class'=>'post-card-img', 'loading'=>'lazy']); ?>
            </a>
          <?php endif; ?>
          <div class="post-card-body">
            <p class="post-card-meta"><?php echo get_the_date('d M Y'); ?></p>
            <h2 class="post-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="post-card-excerpt"><?php the_excerpt(); ?></p>
          </div>
          <div class="post-card-footer">
            <a class="read-more" href="<?php the_permalink(); ?>">Ler mais →</a>
          </div>
        </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <div style="text-align:center;margin-top:40px">
      <?php echo paginate_links(['total'=>$q->max_num_pages,'prev_text'=>'← Anterior','next_text'=>'Próximo →']); ?>
    </div>

  <?php else : ?>
    <p style="text-align:center;color:var(--muted);padding:60px 0">Nenhum post publicado ainda. Volte em breve!</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
