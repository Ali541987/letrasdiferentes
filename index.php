<?php
/**
 * Letras Diferentes Online — index.php (fallback)
 */
get_header();
?>
<main class="wrap" style="padding:60px 20px">
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
  <?php else : ?>
    <p style="text-align:center;color:var(--muted);padding:60px 0">Nenhum conteúdo encontrado.</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
