<?php
/**
 * Letras Diferentes Online — sitemap.php
 * Template Name: Sitemap
 */
get_header();

header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

  <url>
    <loc><?php echo esc_url(home_url('/')); ?></loc>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
  </url>

  <?php
  $static_pages = [
      '/letras-para-instagram/', '/letras-para-whatsapp/', '/letras-para-free-fire/',
      '/letras-para-tiktok/', '/letras-para-facebook/', '/letras-cursivas/',
      '/letras-goticas/', '/letras-bonitas/', '/letras-para-bio/', '/blog/',
  ];
  foreach ($static_pages as $slug) : ?>
  <url>
    <loc><?php echo esc_url(home_url($slug)); ?></loc>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <?php endforeach; ?>

  <?php
  $posts = get_posts(['post_type'=>'post','post_status'=>'publish','posts_per_page'=>-1,'fields'=>'ids']);
  foreach ($posts as $id) : ?>
  <url>
    <loc><?php echo esc_url(get_permalink($id)); ?></loc>
    <lastmod><?php echo esc_html(get_the_modified_date('Y-m-d', $id)); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
  </url>
  <?php endforeach; ?>

</urlset>
<?php exit; ?>
