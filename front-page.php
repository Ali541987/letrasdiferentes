<?php
/**
 * Letras Diferentes Online — front-page.php
 * Homepage: entity-rich hub for "letras diferentes"
 */
get_header();

/* ── Schema: WebSite ── */
ld_schema_website();

/* ── Schema: WebApplication ── */
ld_schema_software(
    'Gerador de Letras Diferentes Online',
    'Gerador de letras diferentes grátis com 25+ estilos únicos para Instagram, WhatsApp, Free Fire e TikTok. Fontes Unicode bonitas para copiar e colar — sem cadastro.',
    home_url('/')
);

/* ── Schema: HowTo ── */
ld_schema_howto(
    'Como usar o Gerador de Letras Diferentes',
    'Aprenda a converter qualquer texto em letras diferentes e bonitas em 3 passos simples.',
    [
        ['name'=>'Digite seu texto', 'text'=>'No campo do gerador, escreva qualquer texto, nome, frase ou palavra que deseja transformar em letras diferentes.'],
        ['name'=>'Escolha um estilo', 'text'=>'Veja instantaneamente seu texto convertido em 25+ estilos de letras Unicode: negrito, itálico, cursivo, gótico, borbulha e muito mais.'],
        ['name'=>'Copie e cole', 'text'=>'Clique no botão "Copiar" ao lado do estilo que mais gostou e cole direto no Instagram, WhatsApp, Free Fire, TikTok ou qualquer outro app.'],
    ]
);

/* ── Schema: FAQ ── */
$faq_pairs = [
    ['q'=>'O que são letras diferentes?',
     'a'=>'Letras diferentes são caracteres especiais do padrão Unicode Mathematical Alphanumeric Symbols que visualmente imitam fontes diferentes. Por exemplo, 𝐍 parece "N" em negrito, 𝒩 parece cursivo e 𝔑 parece gótico — mas são todos texto normal que funciona em qualquer plataforma com suporte a Unicode.'],
    ['q'=>'Como copiar e colar letras diferentes?',
     'a'=>'É simples: 1) Digite seu texto no gerador acima. 2) Escolha o estilo que preferir entre os 25+ opções. 3) Clique em "Copiar" e cole no Instagram, WhatsApp, Free Fire, TikTok ou qualquer outro aplicativo.'],
    ['q'=>'As letras diferentes funcionam no Instagram?',
     'a'=>'Sim! O Instagram suporta caracteres Unicode no nome de exibição e na bio. Basta gerar as letras, copiar e colar no campo de edição do seu perfil. Estilos cursivos e em negrito são os mais populares no Instagram.'],
    ['q'=>'As letras diferentes funcionam no WhatsApp?',
     'a'=>'Sim! O WhatsApp aceita caracteres Unicode em mensagens, status e nome de perfil. Você pode enviar mensagens com letras em negrito, itálico, cursivo e outros estilos diretamente no chat.'],
    ['q'=>'Funciona no Free Fire?',
     'a'=>'Sim! A maioria dos 25+ estilos funciona no Free Fire para personalizar seu nick. Gere as letras, copie e cole no campo de nome do jogo. Estilos como negrito, gótico e cursivo são muito usados pelos jogadores.'],
    ['q'=>'Funciona no TikTok?',
     'a'=>'Sim! O TikTok aceita caracteres Unicode no nome de perfil e na bio. Use letras diferentes para se destacar e tornar seu perfil mais atraente e profissional.'],
    ['q'=>'As letras com acento funcionam?',
     'a'=>'Os caracteres com acento (ã, é, ç, ó, etc.) são mantidos como estão na maioria dos estilos. Nos estilos de fontes Unicode puras, apenas as letras a-z e A-Z são transformadas; os acentos permanecem normais, mas o resultado ainda fica estilizado.'],
    ['q'=>'O gerador é gratuito?',
     'a'=>'Sim, 100% gratuito! Não é necessário criar conta, baixar aplicativo ou pagar nada. Use quantas vezes quiser, em qualquer dispositivo, sem limitações.'],
];
ld_schema_faq($faq_pairs);
?>

<main>
<!-- HERO -->
<section class="hero" role="banner">
  <div class="hero-badge">✨ #1 Gerador de Letras do Brasil</div>
  <h1>
    <span class="accent">Letras Diferentes</span><br>
    para Copiar e Colar
  </h1>
  <div class="hero-badges" aria-label="Características do gerador">
    <span class="hero-badge"><span>✦</span> 28 estilos únicos</span>
    <span class="hero-badge"><span>⚡</span> Resultado em 1 clique</span>
    <span class="hero-badge"><span>🔓</span> 100% grátis</span>
    <span class="hero-badge"><span>📱</span> Funciona no celular</span>
  </div>
  <p class="hero-desc">
    O gerador mais completo do Brasil — converta qualquer texto em fontes especiais
    para Instagram, WhatsApp, Free Fire, TikTok e mais. Sem cadastro, sem limites.
  </p>

  <a href="#gerador" class="hero-cta-btn">✨ Gerar letras agora</a>

  <div class="trending-chips" aria-label="Buscas populares">
    <span class="chips-label">🔥 Populares:</span>
    <button class="js-chip" data-text="Free Fire">Free Fire</button>
    <button class="js-chip" data-text="Instagram Bio">Instagram Bio</button>
    <button class="js-chip" data-text="Amor">Amor</button>
    <button class="js-chip" data-text="TikTok">TikTok</button>
    <button class="js-chip" data-text="Nick">Nick</button>
    <button class="js-chip" data-text="WhatsApp">WhatsApp</button>
  </div>

  <div class="stats-bar" aria-label="Estatísticas do gerador">
    <div class="stat-item">
      <span class="stat-num">25+</span>
      <span class="stat-lbl">Estilos únicos</span>
    </div>
    <div class="stat-item">
      <span class="stat-num">100%</span>
      <span class="stat-lbl">Gratuito</span>
    </div>
    <div class="stat-item">
      <span class="stat-num">1 clique</span>
      <span class="stat-lbl">Para copiar</span>
    </div>
    <div class="stat-item">
      <span class="stat-num">0</span>
      <span class="stat-lbl">Sem cadastro</span>
    </div>
  </div>
</section>
<!-- /HERO -->

<!-- GENERATOR -->
<section class="generator-section" id="gerador" aria-label="Gerador de letras diferentes">
  <div class="generator-box">

    <div class="gen-input-area">
      <span class="gen-input-icon" aria-hidden="true">✍️</span>
      <input
        type="text"
        id="ld-input"
        placeholder="Digite seu texto aqui…"
        maxlength="80"
        autocomplete="off"
        autocorrect="off"
        autocapitalize="off"
        spellcheck="false"
        aria-label="Digite o texto para converter em letras diferentes"
      >
      <span id="ld-char-count" class="char-count">0/80</span>
      <button id="ld-clear" aria-label="Limpar texto">Limpar</button>
    </div>
    <div class="gen-tools">
      <button id="ld-fav-toggle" class="gen-tool-btn js-fav-toggle" title="Mostrar favoritos">❤️ Favoritos <span id="ld-fav-count"></span></button>
      <button id="ld-share" class="gen-tool-btn js-share" title="Compartilhar link">🔗 Compartilhar</button>
      <button id="ld-history-toggle" class="gen-tool-btn js-history" title="Histórico">🕐 Histórico</button>
    </div>

    <div class="gen-filters" role="tablist" aria-label="Filtrar estilos">
      <span class="filter-label">Filtrar:</span>
      <button class="js-filter-btn is-active" data-filter="all" role="tab" aria-selected="true">Todos</button>
      <button class="js-filter-btn" data-filter="clasico" role="tab" aria-selected="false">Clássico</button>
      <button class="js-filter-btn" data-filter="cursivo" role="tab" aria-selected="false">Cursivo</button>
      <button class="js-filter-btn" data-filter="gotico" role="tab" aria-selected="false">Gótico</button>
      <button class="js-filter-btn" data-filter="bolinha" role="tab" aria-selected="false">Borbulha</button>
      <button class="js-filter-btn" data-filter="especial" role="tab" aria-selected="false">Especial</button>
      <button class="js-filter-btn" data-filter="efeito" role="tab" aria-selected="false">Efeitos</button>
    </div>

    <div class="gen-grid-wrap">
      <div class="ld-meta-row">
        <span class="ld-meta-row-title">Resultados</span>
        <span id="ld-counter"></span>
      </div>
      <div id="ld-grid" role="list" aria-label="Estilos de letras diferentes"></div>
    </div>

  </div>
</section>
<!-- /GENERATOR -->

<!-- PLATFORM QUICK LINKS -->
<section class="platforms-section" id="plataformas">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Para qual plataforma?</h2>
      <p class="section-sub">Letras especiais testadas e funcionando em todas as principais plataformas</p>
    </div>
    <div class="platforms-grid">
      <a class="platform-card" href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">
        <span class="platform-icon">📸</span>
        <span class="platform-name">Instagram</span>
        <span class="platform-kw">bio, nome, stories</span>
      </a>
      <a class="platform-card" href="<?php echo esc_url(home_url('/letras-para-whatsapp/')); ?>">
        <span class="platform-icon">💬</span>
        <span class="platform-name">WhatsApp</span>
        <span class="platform-kw">mensagens, status</span>
      </a>
      <a class="platform-card" href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">
        <span class="platform-icon">🔥</span>
        <span class="platform-name">Free Fire</span>
        <span class="platform-kw">nick, nome do jogo</span>
      </a>
      <a class="platform-card" href="<?php echo esc_url(home_url('/letras-para-tiktok/')); ?>">
        <span class="platform-icon">🎵</span>
        <span class="platform-name">TikTok</span>
        <span class="platform-kw">bio, nome do perfil</span>
      </a>
      <a class="platform-card" href="<?php echo esc_url(home_url('/letras-para-facebook/')); ?>">
        <span class="platform-icon">👤</span>
        <span class="platform-name">Facebook</span>
        <span class="platform-kw">posts, nome</span>
      </a>
    </div>
  </div>
</section>
<!-- /PLATFORM QUICK LINKS -->

<!-- STYLES SHOWCASE -->
<section class="styles-section">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Estilos em destaque</h2>
      <p class="section-sub">Veja uma prévia dos estilos mais populares com o texto "Letras"</p>
    </div>
    <div class="styles-list">
      <?php
      $showcase = [
          ['Script Cursivo',    '𝓛𝓮𝓽𝓻𝓪𝓼'],
          ['Gótico',            '𝔏𝔢𝔱𝔯𝔞𝔰'],
          ['Negrito',           '𝐋𝐞𝐭𝐫𝐚𝐬'],
          ['Duplo',             '𝕃𝕖𝕥𝕣𝕒𝕤'],
          ['Borbulha',          'Ⓛⓔⓣⓡⓐⓢ'],
          ['Pequenas Maiúsc.',   'ʟᴇᴛʀᴀꜱ'],
          ['Estético',          'L e t r a s'],
          ['Invertido',         'sɐɹʇǝ˥'],
      ];
      foreach ($showcase as [$name, $preview]) : ?>
        <div class="style-row">
          <span class="style-row-name"><?php echo esc_html($name); ?></span>
          <span class="style-row-preview"><?php echo esc_html($preview); ?></span>
          <button class="style-row-copy js-quick-copy" data-text="<?php echo esc_attr($preview); ?>">Copiar</button>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- /STYLES SHOWCASE -->

<!-- HOW TO USE -->
<section class="howto-section" id="como-usar">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Como usar — 3 passos simples</h2>
      <p class="section-sub">Sem cadastro, sem app, sem complicação</p>
    </div>
    <div class="steps-grid">
      <div class="step-card">
        <div class="step-num">1</div>
        <p class="step-title">Digite seu texto</p>
        <p class="step-desc">Escreva qualquer nome, frase ou palavra no campo do gerador. O resultado aparece instantaneamente.</p>
      </div>
      <div class="step-card">
        <div class="step-num">2</div>
        <p class="step-title">Escolha o estilo</p>
        <p class="step-desc">Navegue pelos 25+ estilos de letras diferentes: cursivo, gótico, borbulha, efeitos e muito mais.</p>
      </div>
      <div class="step-card">
        <div class="step-num">3</div>
        <p class="step-title">Copie e cole</p>
        <p class="step-desc">Clique em "Copiar" e cole diretamente no Instagram, WhatsApp, Free Fire ou onde quiser. Pronto!</p>
      </div>
    </div>
  </div>
</section>
<!-- /HOW TO USE -->

<!-- INTERNAL LINKS -->
<section class="links-section">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Explore por categoria</h2>
      <p class="section-sub">Acesse páginas especializadas com dicas e estilos selecionados</p>
    </div>
    <div class="links-grid">
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-cursivas/')); ?>">
        <span class="links-card-icon">𝓒</span> Letras Cursivas
      </a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-goticas/')); ?>">
        <span class="links-card-icon">𝔊</span> Letras Góticas
      </a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-bonitas/')); ?>">
        <span class="links-card-icon">✨</span> Letras Bonitas
      </a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-bio/')); ?>">
        <span class="links-card-icon">📝</span> Letras para Bio
      </a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">
        <span class="links-card-icon">📸</span> Letras Instagram
      </a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-whatsapp/')); ?>">
        <span class="links-card-icon">💬</span> Letras WhatsApp
      </a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">
        <span class="links-card-icon">🔥</span> Letras Free Fire
      </a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-tiktok/')); ?>">
        <span class="links-card-icon">🎵</span> Letras TikTok
      </a>
    </div>
  </div>
</section>
<!-- /INTERNAL LINKS -->

<!-- FAQ -->
<section class="faq-section" id="faq">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Perguntas frequentes</h2>
      <p class="section-sub">Tudo que você precisa saber sobre letras diferentes</p>
    </div>
    <div class="faq-list">
      <?php foreach ($faq_pairs as $faq) : ?>
        <details class="faq-item">
          <summary><?php echo esc_html($faq['q']); ?></summary>
          <div class="faq-body"><?php echo wp_kses_post($faq['a']); ?></div>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- /FAQ -->

<!-- CTA -->
<section class="cta-section">
  <div class="wrap">
    <div class="cta-box">
      <h2>Pronto para usar suas letras diferentes?</h2>
      <p>Gerador gratuito, 25+ estilos, sem cadastro. Copie em 1 clique.</p>
      <a class="btn-fill" href="#gerador">✨ Gerar Letras Agora</a>
    </div>
  </div>
</section>
<!-- /CTA -->

<!-- CONTENT SEO (para Google entender o tema da página) -->
<article class="content-article">
  <div class="article-wrap">
  <h2>O que são letras diferentes para copiar e colar?</h2>
  <p>
    <strong>Letras diferentes</strong> são caracteres especiais do padrão Unicode Mathematical Alphanumeric Symbols —
    um bloco da tabela Unicode que contém versões alternativas de letras do alfabeto latino em
    vários estilos visuais: negrito, itálico, script cursivo, gótico (Fraktur), duplo
    contorno, borbulha e muito mais. Também chamadas de <strong>fontes de letras</strong>,
    <strong>letras personalizadas</strong> ou <strong>letras especiais</strong>, esses
    caracteres são texto real — não imagens — e por isso funcionam em qualquer app com suporte a Unicode.
  </p>
  <p>
    Ao contrário de imagens ou fontes de design, essas letras são <strong>texto real</strong>.
    Por isso funcionam em qualquer campo de texto que suporte Unicode — e hoje isso inclui
    Instagram, WhatsApp, Free Fire, TikTok, Facebook, Twitter/X, Discord e muitos outros.
  </p>

  <h2>Para que servem as fontes de letras diferentes?</h2>
  <p>
    As principais utilizações das <strong>fontes diferentes</strong> são: personalizar o
    <strong>nome no Instagram</strong>, criar uma <strong>bio estilizada</strong>,
    enviar mensagens diferenciadas no <strong>WhatsApp</strong>, ter um
    <strong>nick único no Free Fire</strong> ou deixar o perfil do <strong>TikTok</strong>
    mais atrativo. Também são muito usadas em posts para destacar títulos e chamar atenção.
  </p>

  <h2>Como funciona o modificador de letras?</h2>
  <p>
    Nosso <strong>modificador de letras</strong> online converte qualquer texto digitado em
    25+ estilos diferentes instantaneamente — sem instalar nada, sem criar conta.
    É o jeito mais rápido de <strong>mudar letra</strong> e criar
    <strong>letras personalizadas</strong> para redes sociais.
    Basta digitar, escolher o estilo e clicar em copiar.
  </p>

  <h2>Quais são os tipos de letras diferentes disponíveis?</h2>
  <p>
    Nosso gerador oferece 25+ <strong>tipos de letras</strong>, organizados em categorias:
    <strong>Clássico</strong> (negrito 𝐋, itálico 𝐿, sans serif 𝖫, monospace 𝙻, largo Ｌ),
    <strong>Cursivo</strong> (script elegante 𝒮, script cursivo 𝓢, pequenas maiúsculas ꜱ),
    <strong>Gótico</strong> (fraktur 𝔖, fraktur negrito 𝕬, duplo contorno 𝕊),
    <strong>Borbulha</strong> (ⓢ, 🅢),
    <strong>Especial</strong> (sobrescrito, estético) e
    <strong>Efeitos</strong> (tachado S̶, sublinhado S̲, invertido s, zalgo glitch).
    Todas as <strong>fontes de letras para copiar</strong> funcionam em Android e iPhone.
  </p>

  <h2>Letras diferentes para copiar — como fazer?</h2>
  <p>
    Para gerar <strong>letras diferentes para copiar</strong>: 1) Digite qualquer texto no campo acima.
    2) Os resultados aparecem instantaneamente em todos os estilos disponíveis.
    3) Clique em "Copiar" no estilo que gostou e cole onde quiser.
    São <strong>letras bonitas para copiar e colar</strong> que funcionam no Instagram,
    WhatsApp, Free Fire, TikTok e qualquer outro aplicativo com suporte a Unicode.
  </p>

  <h2>As fontes para Instagram funcionam na bio?</h2>
  <p>
    Sim! Todas as <strong>fontes para Instagram</strong> geradas aqui funcionam na bio,
    no nome de perfil e nas legendas. O Instagram suporta completamente os caracteres Unicode,
    o que significa que suas <strong>letras para bio</strong> ficarão exatamente como você
    viu na prévia — estilizadas e únicas. Os estilos cursivos e em negrito são os favoritos
    dos usuários brasileiros. <a href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">
    Veja nossa página dedicada a fontes para Instagram →</a>
  </p>

  <h2>As letras funcionam no celular?</h2>
  <p>
    Sim! O <strong>gerador de letras diferentes</strong> funciona perfeitamente em smartphones
    Android e iPhone. As letras são caracteres de texto padrão Unicode e aparecem corretamente
    na maioria dos sistemas operacionais modernos. Basta acessar este site
    pelo navegador do celular, gerar as fontes de letras e colar no aplicativo desejado.
    Sem download, sem cadastro, 100% gratuito.
  </p>
  <div class="article-back-cta">
    <a href="#gerador">✨ Usar o gerador agora</a>
  </div>
  </div>
</article>
<!-- /CONTENT SEO -->
</main>

<?php get_footer(); ?>
