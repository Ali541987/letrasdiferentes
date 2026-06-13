<?php
/**
 * Letras Diferentes Online — single.php
 */
get_header();
?>
<main>
  <?php while (have_posts()) : the_post(); ?>
    <nav class="breadcrumb" aria-label="Localização">
      <a href="<?php echo esc_url(home_url('/')); ?>">Início</a>
      <span aria-hidden="true">›</span>
      <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
      <span aria-hidden="true">›</span>
      <span><?php echo esc_html(get_the_title()); ?></span>
    </nav>
    <div class="single-hero">
      <div class="single-meta">
        <span><?php echo get_the_date('d/m/Y'); ?></span>
        <span>📖 <?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> min de leitura</span>
      </div>
      <h1><?php the_title(); ?></h1>
    </div>
    <?php if (has_post_thumbnail()) : ?>
      <div class="wrap" style="margin-bottom:32px">
        <?php the_post_thumbnail('large', ['style'=>'border-radius:16px;width:100%;max-height:420px;object-fit:cover']); ?>
      </div>
    <?php endif; ?>
    <article class="content-article">
      <div class="article-wrap">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>

  <!-- Generator CTA inside post -->
  <div class="cta-section">
    <div class="wrap">
      <div class="cta-box">
        <h2>Experimente o gerador de letras diferentes</h2>
        <p>Mais de 25 estilos únicos para Instagram, WhatsApp, Free Fire e TikTok.</p>
        <a class="btn-fill" href="<?php echo esc_url(home_url('/#gerador')); ?>">✨ Gerar Letras Grátis</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
