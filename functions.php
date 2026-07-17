<?php
/**
 * Letras Diferentes Online — functions.php
 */

defined('ABSPATH') || exit;

/* ── FORCE SITE TITLE (overrides host resets) ── */
add_filter('option_blogname',        fn() => 'Letras Diferentes Online');
add_filter('option_blogdescription', fn() => 'Gerador de Letras Diferentes para Copiar e Colar');

/* ── THEME SETUP ── */
function ld_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','script','style']);
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');

    register_nav_menus([
        'primary' => 'Menu Principal',
        'footer'  => 'Menu Rodapé',
    ]);
}
add_action('after_setup_theme', 'ld_setup');

/* ── ENQUEUE SCRIPTS & STYLES ── */
function ld_enqueue() {
    $v   = wp_get_theme()->get('Version');
    $uri = get_template_directory_uri();

    wp_enqueue_style('ld-main', $uri . '/assets/css/main.css', [], $v);
    wp_enqueue_script('ld-converter', $uri . '/assets/js/converter.js', [], $v, true);
    wp_enqueue_script('ld-app',       $uri . '/assets/js/app.js', ['ld-converter'], $v, true);
}
add_action('wp_enqueue_scripts', 'ld_enqueue');

/* ── FORCE LANG ATTRIBUTE TO pt-BR ── */
add_filter('language_attributes', fn() => 'lang="pt-BR"');

/* ── DOCUMENT TITLE (pre_get runs before document_title_parts; priority 99 ensures we run after Rank Math) ── */
add_filter('pre_get_document_title', function($title) {
    if (is_front_page()) {
        return 'Letras Diferentes • Fontes de Letras Grátis ✨ 25+ 𝓔𝓼𝓽𝓲𝓵𝓸𝓼';
    }
    global $post;
    if (is_singular() && $post) {
        $slug = get_post_field('post_name', $post->ID);
        $map  = ld_get_page_meta_map();
        if (isset($map[$slug])) {
            return $map[$slug]['title'];
        }
    }
    return $title;
}, 99);

/* ── DOCUMENT TITLE (fallback via parts filter) ── */
function ld_document_title_parts($title) {
    global $post;
    if (is_singular() && $post) {
        $slug   = get_post_field('post_name', $post->ID);
        $map    = ld_get_page_meta_map();
        if (isset($map[$slug])) {
            $title['title'] = $map[$slug]['title'];
            unset($title['tagline'], $title['site']);
        }
    }
    if (is_front_page()) {
        $title['title'] = 'Letras Diferentes • Fontes de Letras Grátis ✨ 25+ 𝓔𝓼𝓽𝓲𝓵𝓸𝓼';
        unset($title['tagline'], $title['site']);
    }
    return $title;
}
add_filter('document_title_parts', 'ld_document_title_parts', 20);

/* ── META DESCRIPTION ── */
function ld_meta_description() {
    global $post;
    $desc = '';

    if (is_front_page()) {
        $desc = 'Gere letras diferentes e fontes de letras grátis: 25+ estilos para Instagram, WhatsApp, TikTok e Free Fire. Cursivas, góticas, bonitas, sem cadastro.';
    } elseif (is_singular() && $post) {
        $slug = get_post_field('post_name', $post->ID);
        $map  = ld_get_page_meta_map();
        if (isset($map[$slug])) {
            $desc = $map[$slug]['desc'];
        } elseif (has_excerpt($post->ID)) {
            $desc = wp_strip_all_tags(get_the_excerpt());
        }
    } elseif (is_category()) {
        $desc = 'Artigos sobre letras diferentes, fontes Unicode e dicas para Instagram, WhatsApp, Free Fire e TikTok.';
    }

    if ($desc) {
        echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
    }
}
add_action('wp_head', 'ld_meta_description', 1);

/* ── CANONICAL ──
 * Handled by Rank Math SEO to avoid duplicate canonical tags.
 * (Theme canonical removed 2026-06 — Rank Math is the single source.)
 */

/* ── PAGE META MAP (title ≤60 chars, desc 150-160 chars) ── */
function ld_get_page_meta_map() {
    return [
        // ── PLATFORM PAGES ───────────────────────────────────────────────
        'letras-para-instagram'  => [
            'title' => 'Fontes para Instagram • Letras Diferentes Grátis',
            'desc'  => 'Fontes para Instagram: bio, nome e stories com letras diferentes e bonitas. 25+ estilos cursivos, góticos e especiais para copiar e colar — grátis, sem cadastro.',
        ],
        'letras-para-whatsapp'   => [
            'title' => 'Letras para WhatsApp • Fontes Diferentes Grátis',
            'desc'  => 'Envie letras diferentes no WhatsApp! Textos em negrito, itálico, cursivo e mais. Copie e cole direto no chat — 25+ estilos grátis, sem app.',
        ],
        'letras-para-free-fire'  => [
            'title' => 'Letras FF • Letras Diferentes para Free Fire Grátis',
            'desc'  => 'Letras diferentes para Free Fire — 25+ estilos para deixar seu nick épico. Fontes Unicode, gótico, cursivo e mais. Copie e cole no Free Fire grátis.',
        ],
        'letras-para-tiktok'     => [
            'title' => 'Letras para TikTok • Fontes Diferentes Grátis',
            'desc'  => 'Letras diferentes para TikTok: bio, nome de perfil e legendas. 25+ estilos únicos para copiar e colar. Destaque seu perfil com fontes especiais — grátis.',
        ],
        'letras-para-facebook'   => [
            'title' => 'Letras para Facebook • Fontes Diferentes Grátis',
            'desc'  => 'Letras diferentes para Facebook: posts, nome e bio. Copie e cole textos em negrito, cursivo, gótico e 25+ estilos únicos — 100% grátis, sem cadastro.',
        ],
        // ── STYLE PAGES ──────────────────────────────────────────────────
        'letras-cursivas'        => [
            'title' => 'Letras Cursivas para Copiar e Colar • Grátis',
            'desc'  => 'Letras cursivas para Instagram, WhatsApp e mais. Fontes cursivas e script em estilo elegante — copie e cole em 1 clique. Grátis, sem cadastro.',
        ],
        'letras-goticas'         => [
            'title' => 'Letras Góticas para Copiar e Colar • Grátis',
            'desc'  => 'Letras góticas diferentes para Instagram, Free Fire e WhatsApp. Fontes Fraktur e gótico medieval — copie e cole em 1 clique. Grátis, sem cadastro.',
        ],
        'letras-bonitas'         => [
            'title' => 'Letras Bonitas para Copiar e Colar • 25+ Estilos',
            'desc'  => 'As letras mais bonitas para Instagram, WhatsApp e bio. 25+ fontes estilizadas para copiar e colar grátis. Sem cadastro, funciona em qualquer dispositivo.',
        ],
        'letras-para-bio'        => [
            'title' => 'Letras para Bio • Fontes Diferentes para Instagram',
            'desc'  => 'Letras diferentes e bonitas para sua bio do Instagram. Fontes cursivas, góticas e especiais para copiar e colar. Deixe sua bio incrível — grátis.',
        ],
        // ── SYMBOLS PAGE ─────────────────────────────────────────────────
        'simbolos'               => [
            'title' => 'Símbolos para Copiar e Colar • Nick e Free Fire',
            'desc'  => 'Mais de 300 símbolos para copiar e colar — nick, Free Fire, Instagram e WhatsApp. Estrelas, setas, corações e muito mais. Clique e copie grátis.',
        ],
        // ── FONTES DE LETRAS (PILLAR PAGE) ──────────────────────────────
        'fontes-de-letras'       => [
            'title' => 'Fontes de Letras para Copiar e Colar • 25+ Estilos',
            'desc'  => 'Gere fontes de letras diferentes: negrito, cursivo, gótico e mais 25+ estilos. Copie e cole grátis, sem cadastro, no Instagram, WhatsApp ou Word.',
        ],
        // ── LETRAS PERSONALIZADAS ────────────────────────────────────────
        'letras-personalizadas'  => [
            'title' => 'Letras Personalizadas para Copiar e Colar • Grátis',
            'desc'  => 'Gerador de letras personalizadas para nick, Instagram, Free Fire e Discord. 25+ estilos Unicode grátis. Copie e cole em 1 clique, sem cadastro.',
        ],
        // ── TIPOS DE LETRAS ──────────────────────────────────────
        'tipos-de-letras'        => [
            'title' => 'Tipos de Letras para Copiar e Colar • 25+ Fontes',
            'desc'  => 'Descubra os tipos de letras Unicode e gere estilos para copiar e colar grátis. Cursivo, gótico, negrito e 25+ fontes para Instagram, WhatsApp e Free Fire.',
        ],
        // ── SÍMBOLOS PARA NICK ───────────────────────────────────
        'simbolos-para-nick'     => [
            'title' => 'Símbolos para Nick — 500+ para Copiar e Colar',
            'desc'  => 'Símbolos Unicode para nick do Free Fire, Discord, Valorant e PUBG. Estrelas, coroas, crânios, katakana e 500+ caracteres. Copie em 1 clique, grátis.',
        ],
        // ── LETRA PEQUENA ────────────────────────────────────────
        'letra-pequena'          => [
            'title' => 'Letra Pequena para Copiar — Gerador Grátis',
            'desc'  => 'Gere letras pequenas Unicode: sobrescrito ᵃᵇᶜ, small caps ᴀʙᴄ, subscrito ₐₑₒ e números em expoente ¹²³. Copie em 1 clique — grátis, sem cadastro.',
        ],
        // ── EMOJIS ───────────────────────────────────────────────────────
        'emojis'                 => [
            'title' => 'Emojis para Copiar e Colar 😍 • WhatsApp e Free Fire',
            'desc'  => 'Copie e cole 600+ emojis para WhatsApp, Instagram, Free Fire e Discord. Unicode 16.0. Organizados por plataforma, clique e cole em qualquer app.',
        ],
        // ── BLOG ─────────────────────────────────────────────────────────
        'blog'                   => [
            'title' => 'Blog • Letras Diferentes Online',
            'desc'  => 'Dicas, tutoriais e novidades sobre letras diferentes, fontes Unicode, Instagram, WhatsApp e Free Fire.',
        ],
    ];
}

/* ── SCHEMA HELPERS (loaded from inc/schema.php) ── */
require_once get_template_directory() . '/inc/schema.php';

/* ── 410 GONE FOR MALWARE-ERA SPAM URLS (/items/*) ──
 * These URLs never existed as real content. They were generated by a
 * spam sitemap during the June 2026 malware incident. Serving 410 instead
 * of a plain 404 tells search engines to stop re-checking them.
 */
add_action('template_redirect', function () {
    $uri = $_SERVER['REQUEST_URI'] ?? '';
    if (str_starts_with($uri, '/items/')) {
        status_header(410);
        nocache_headers();
        include get_query_template('404');
        exit;
    }
}, 1);

/* ── EXCERPT LENGTH ── */
add_filter('excerpt_length', fn() => 30);
add_filter('excerpt_more',   fn() => '…');

/* ── REMOVE EMOJI SCRIPTS (performance) ── */
remove_action('wp_head',             'print_emoji_detection_script', 7);
remove_action('wp_print_styles',     'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles',  'print_emoji_styles');

/* ── GOOGLE ADSENSE ── */
add_action('wp_head', function() {
    echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8880099093437517" crossorigin="anonymous"></script>' . "\n";
}, 2);

/* ── CLEAN WP HEAD ── */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

/* ── ROBOTS.TXT: point to sitemap_index.xml directly (no redirect) ──
 * WP core outputs sitemap.xml which 301s to sitemap_index.xml.
 * GSC does not follow sitemap redirects, so it never fetches the sitemap.
 * This filter writes the correct URL so GSC can auto-discover it.
 */
add_filter('robots_txt', function($output) {
    return str_replace(
        'Sitemap: ' . home_url('/sitemap.xml'),
        'Sitemap: ' . home_url('/sitemap_index.xml'),
        $output
    );
}, 99);

/* ── SITEMAP PAGE TEMPLATE ── */
add_filter('theme_page_templates', function($tpls) {
    $tpls['page-templates/page-blog.php']      = 'Blog';
    $tpls['page-templates/page-platform.php']  = 'Página de Plataforma';
    $tpls['page-templates/page-simbolos.php']           = 'Símbolos';
    $tpls['page-templates/page-fontes-de-letras.php']   = 'Fontes de Letras';
    $tpls['page-templates/page-emojis.php']             = 'Página de Emojis';
    $tpls['page-templates/page-letra-pequena.php']      = 'Letra Pequena';
    return $tpls;
});
