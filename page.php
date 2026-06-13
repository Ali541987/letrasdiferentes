<?php
/**
 * Letras Diferentes Online — page.php
 * Default page template (for simple CMS pages)
 */
get_header();
?>
<main>
  <?php while (have_posts()) : the_post(); ?>
    <div class="hero" style="padding:48px 20px 32px">
      <h1><?php echo esc_html(get_the_title()); ?></h1>
    </div>
    <article class="content-article">
      <div class="article-wrap">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
