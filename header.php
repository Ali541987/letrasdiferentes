<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="dark">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
/* OG/Twitter meta tags + Organization schema are handled by Rank Math SEO
 * to avoid duplicate tags. (Theme output removed 2026-06.) */
?>
<?php wp_head(); ?>
</head>
<body <?php body_class('ld-body'); ?>>
<?php wp_body_open(); ?>

<!-- SITE NAV -->
<header class="site-nav" role="banner">
  <a class="nav-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Letras Diferentes Online — Início">
    <span class="nav-logo-mark" aria-hidden="true">✦</span>
    <span class="nav-logo-text">Letras<span class="nav-logo-accent">Diferentes</span>Online<span class="nav-logo-tld">.com</span></span>
  </a>

  <nav class="nav-links js-nav-menu" role="navigation" aria-label="Menu principal">
    <a class="nav-link is-hot" href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">📸 Instagram</a>
    <a class="nav-link" href="<?php echo esc_url(home_url('/letras-para-whatsapp/')); ?>">💬 WhatsApp</a>
    <a class="nav-link" href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">🔥 Free Fire</a>
    <a class="nav-link" href="<?php echo esc_url(home_url('/letras-para-tiktok/')); ?>">🎵 TikTok</a>
    <a class="nav-link" href="<?php echo esc_url(home_url('/letras-cursivas/')); ?>">𝓒𝓾𝓻𝓼𝓲𝓿𝓪𝓼</a>
    <a class="nav-link" href="<?php echo esc_url(home_url('/letras-goticas/')); ?>">𝔊ó𝔱𝔦𝔠𝔞𝔰</a>
    <a class="nav-link" href="<?php echo esc_url(home_url('/letras-bonitas/')); ?>">✨ Bonitas</a>
    <a class="nav-link" href="<?php echo esc_url(home_url('/letras-para-bio/')); ?>">📝 Bio</a>
  </nav>

  <div class="nav-actions">
    <button class="theme-toggle-btn js-theme-toggle" aria-label="Alternar tema claro/escuro" title="Alternar modo claro/escuro">
      <span class="js-theme-icon" aria-hidden="true">🌙</span>
    </button>
    <a class="btn-fill" href="<?php echo esc_url(home_url('/#gerador')); ?>">✨ Gerar Letras</a>
    <button class="nav-hamburger js-nav-toggle" aria-label="Abrir menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
<!-- /SITE NAV -->
