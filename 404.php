<?php
/**
 * Letras Diferentes Online — 404.php
 */
get_header();
?>
<main>
  <div class="error-page">
    <div class="error-code" aria-hidden="true">404</div>
    <h1>Página não encontrada</h1>
    <p>Ops! A página que você procurou não existe ou foi movida.</p>
    <a class="btn-fill" href="<?php echo esc_url(home_url('/')); ?>">🏠 Voltar ao início</a>
    <p style="margin-top:24px;font-size:.9rem;color:var(--muted)">
      Ou use o <a href="<?php echo esc_url(home_url('/#gerador')); ?>" style="color:var(--accent)">gerador de letras diferentes</a> direto aqui.
    </p>
  </div>
</main>
<?php get_footer(); ?>
