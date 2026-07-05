<?php
/**
 * Letras Diferentes Online — Schema.php
 * JSON-LD structured data helpers
 */

defined('ABSPATH') || exit;

/* ── WebApplication / SoftwareApplication schema ── */
function ld_schema_software(string $name, string $desc, string $url): void {
    $schema = [
        '@context'         => 'https://schema.org',
        '@type'            => 'WebApplication',
        'name'             => $name,
        'description'      => $desc,
        'url'              => $url,
        'applicationCategory' => 'UtilitiesApplication',
        'operatingSystem'  => 'All',
        'offers'           => ['@type'=>'Offer','price'=>'0','priceCurrency'=>'BRL'],
        'inLanguage'       => 'pt-BR',
        'isAccessibleForFree' => true,
    ];
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}

/* ── HowTo schema ── */
function ld_schema_howto(string $name, string $desc, array $steps): void {
    $schema_steps = array_map(fn($s) => [
        '@type'      => 'HowToStep',
        'name'       => $s['name'],
        'text'       => $s['text'],
    ], $steps);

    $schema = [
        '@context'    => 'https://schema.org',
        '@type'       => 'HowTo',
        'name'        => $name,
        'description' => $desc,
        'step'        => $schema_steps,
    ];
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}

/* ── FAQ schema ── */
function ld_schema_faq(array $pairs): void {
    $entries = array_map(fn($p) => [
        '@type'          => 'Question',
        'name'           => $p['q'],
        'acceptedAnswer' => ['@type'=>'Answer','text'=>wp_strip_all_tags($p['a'])],
    ], $pairs);

    $schema = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $entries,
    ];
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}

/* ── BreadcrumbList schema ── */
function ld_schema_breadcrumb(array $items): void {
    $list = [];
    foreach ($items as $i => $item) {
        $list[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $item['name'],
            'item'     => $item['url'],
        ];
    }
    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $list,
    ];
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}

/* ── WebSite + Sitelinks Searchbox ── */
function ld_schema_website(): void {
    $schema = [
        '@context' => 'https://schema.org',
        '@type'    => 'WebSite',
        'name'     => 'Letras Diferentes Online',
        'url'      => home_url('/'),
        'inLanguage' => 'pt-BR',
        'sameAs'   => [
            'https://uk.pinterest.com/letrasdiferentesbr/',
        ],
        'potentialAction' => [
            '@type'       => 'SearchAction',
            'target'      => ['@type'=>'EntryPoint','urlTemplate'=> home_url('/?s={search_term_string}')],
            'query-input' => 'required name=search_term_string',
        ],
    ];
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}
