<?php
/**
 * Letras Diferentes Online — search.php
 */
get_header();
?>
<main>
  <div class="hero" style="padding:48px 20px 32px">
    <h1>Busca: <span class="accent"><?php echo esc_html(get_search_query()); ?></span></h1>
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
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <p style="text-align:center;color:var(--muted);padding:60px 0">
        Nenhum resultado para "<?php echo esc_html(get_search_query()); ?>". Tente outra busca.
      </p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
