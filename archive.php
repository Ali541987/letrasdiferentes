<?php
/**
 * Letras Diferentes Online — archive.php
 */
get_header();
?>
<main>
  <div class="hero" style="padding:48px 20px 32px">
    <h1><?php the_archive_title(); ?></h1>
  </div>
  <div class="wrap" style="padding-bottom:64px">
    <?php if (have_posts()) : ?>
      <div class="blog-grid">
        <?php while (have_posts()) : the_post(); ?>
          <article class="post-card">
            <div class="post-card-body">
              <p class="post-card-meta"><?php echo get_the_date(); ?></p>
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
        <?php echo paginate_links(); ?>
      </div>
    <?php else : ?>
      <p style="text-align:center;color:var(--muted);padding:60px 0">Nenhum post encontrado.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
