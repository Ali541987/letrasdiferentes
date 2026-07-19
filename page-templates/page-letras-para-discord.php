<?php
/**
 * Template Name: Página de Letras para Discord
 * Letras Diferentes Online — Fontes Unicode para Discord, nick e servidores
 */

get_header();

ld_schema_faq([
    ['q'=>'Como colocar letras diferentes no Discord?',
     'a'=>'Use o gerador acima: digite o texto, escolha o estilo desejado e copie. No Discord, vá em Configurações de usuário, edite seu nome de exibição ou bio "Sobre Mim" e cole o texto. Os caracteres Unicode funcionam em nome, bio, nome de servidor e canais.'],
    ['q'=>'Quais fontes funcionam no Discord?',
     'a'=>'O Discord aceita qualquer caractere Unicode padrão. Isso inclui estilos como negrito matemático (𝗻𝗲𝗴𝗿𝗶𝘁𝗼), itálico (𝘪𝘵á𝘭𝘪𝘤𝘰), gótico (𝔤ó𝔱𝔦𝔠𝔬), duplo contorno (𝕕𝕦𝕡𝕝𝕠) e cursivo (𝓬𝓾𝓻𝓼𝓲𝓿𝓸). Fontes que dependem de instalação local não funcionam — apenas Unicode.'],
    ['q'=>'Como fazer negrito no Discord?',
     'a'=>'O Discord usa Markdown para formatação nativa: coloque dois asteriscos antes e depois do texto (**texto**) para negrito. Para itálico use um asterisco (*texto*). Para negrito e itálico simultâneos use três (***texto***). Essas formatações só funcionam dentro de mensagens — não no nome de perfil, onde Unicode é a única opção.'],
    ['q'=>'Discord aceita caracteres Unicode no nick?',
     'a'=>'Sim. O Discord aceita Unicode completo no nome de exibição, incluindo letras estilizadas, símbolos e caracteres especiais. O limite é de 32 caracteres no nome de usuário (novo sistema) ou no nome de exibição. Caracteres como 𝓐, 𝔅, ℂ, ꧁, ꧂ e símbolos decorativos são aceitos normalmente.'],
    ['q'=>'Como mudar a letra do nome no Discord?',
     'a'=>'Gere o texto estilizado neste gerador, copie e abra o Discord. Vá em Configurações de usuário (ícone de engrenagem) → Perfil → edite o Nome de exibição → cole o texto e salve. No celular: toque no ícone de perfil → Nome de exibição → edite e salve.'],
    ['q'=>'Letras para servidor do Discord: como personalizar?',
     'a'=>'Para nomear canais e categorias com letras especiais, vá nas configurações do servidor → Canais → edite o nome do canal e cole caracteres Unicode. Para o nome do servidor, vá em Configurações do servidor → Visão geral → edite o nome. Símbolos como ✦, ━, ▸ e letras estilizadas são muito usados para organizar servidores visualmente.'],
    ['q'=>'Por que minha fonte não aparece no Discord mobile?',
     'a'=>'Fontes instaladas no sistema operacional do seu celular não aparecem para outros usuários — cada dispositivo renderiza o texto com suas próprias fontes instaladas. A solução é usar caracteres Unicode estilizados (gerados por este gerador), que são texto puro e aparecem igual em qualquer dispositivo.'],
    ['q'=>'Fontes para Discord vs Free Fire: qual a diferença?',
     'a'=>'O Free Fire tem limite de 12 caracteres no nick e aceita a maioria dos Unicode. O Discord tem limite de 32 caracteres e aceita Unicode completo, incluindo estilos mais longos. Além disso, o Discord permite formatação Markdown em mensagens (negrito, itálico, código), o que o Free Fire não tem. Veja nossa página de letras para Free Fire para comparar os estilos.'],
]);

ld_schema_breadcrumb([
    ['name' => 'Letras Diferentes Online', 'url' => home_url('/')],
    ['name' => 'Letras para Discord',       'url' => get_permalink()],
]);

ld_schema_software(
    'Gerador de Letras para Discord',
    'Gere fontes e letras diferentes para Discord — nick, nome de servidor e bio. Unicode completo, copie em 1 clique.',
    get_permalink()
);
?>

<main>
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="Localização">
  <a href="<?php echo esc_url(home_url('/')); ?>">Início</a>
  <span aria-hidden="true">›</span>
  <span>Letras para Discord</span>
</nav>

<!-- HERO -->
<section class="plat-hero">
  <div class="plat-icon" aria-hidden="true">💬</div>
  <h1>Letras para Discord — Fontes Unicode para Copiar e Colar</h1>
  <p>Gere fontes e letras diferentes para Discord: nick, nome de exibição, bio "Sobre Mim" e canais de servidor. 25+ estilos Unicode que funcionam em qualquer dispositivo. Copie em 1 clique, grátis.</p>
</section>

<!-- GENERATOR -->
<section class="generator-section" id="gerador" aria-label="Gerador de letras para Discord">
  <div class="generator-box">

    <div class="gen-input-area">
      <span class="gen-input-icon" aria-hidden="true">✍️</span>
      <input
        type="text"
        id="ld-input"
        placeholder="Digite seu nick ou texto aqui…"
        maxlength="80"
        autocomplete="off"
        autocorrect="off"
        autocapitalize="off"
        spellcheck="false"
        aria-label="Digite o texto para converter em letras para Discord"
      >
      <span id="ld-char-count" class="char-count">0/80</span>
      <button id="ld-clear" aria-label="Limpar texto">Limpar</button>
    </div>

    <div class="gen-tools">
      <button id="ld-fav-toggle" class="gen-tool-btn js-fav-toggle" title="Mostrar favoritos" data-empty-hint="Clique ❤️ nos estilos para salvar">❤️ Favoritos <span id="ld-fav-count"></span></button>
      <button id="ld-share" class="gen-tool-btn js-share" title="Compartilhar link">🔗 Compartilhar</button>
      <button id="ld-history-toggle" class="gen-tool-btn js-history" title="Histórico" data-empty-hint="Textos digitados aparecem aqui">🕐 Histórico</button>
    </div>

    <div class="gen-filters" role="tablist" aria-label="Filtrar estilos">
      <span class="filter-label">Filtrar:</span>
      <button class="js-filter-btn is-active" data-filter="all"     role="tab">Todos</button>
      <button class="js-filter-btn"           data-filter="clasico"  role="tab">Clássico</button>
      <button class="js-filter-btn"           data-filter="cursivo"  role="tab">Cursivo</button>
      <button class="js-filter-btn"           data-filter="gotico"   role="tab">Gótico</button>
      <button class="js-filter-btn"           data-filter="bolinha"  role="tab">Borbulha</button>
      <button class="js-filter-btn"           data-filter="especial" role="tab">Especial</button>
      <button class="js-filter-btn"           data-filter="efeito"   role="tab">Efeitos</button>
    </div>

    <div class="gen-grid-wrap">
      <div class="ld-meta-row">
        <span class="ld-meta-row-title">Fontes para Discord</span>
        <span id="ld-counter"></span>
      </div>
      <div id="ld-grid" role="list" aria-label="Estilos de letras para Discord"></div>
    </div>

  </div>
</section>
<!-- /GENERATOR -->

<?php ld_ad(LD_AD_BELOW_GENERATOR); ?>

<!-- TIPS -->
<section class="tips-section">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Como usar letras no Discord</h2>
    </div>
    <div class="tips-grid">
      <div class="tip-card">
        <div class="tip-card-icon">👤</div>
        <p class="tip-card-title">Nick e nome de exibição</p>
        <p class="tip-card-desc">Gere o estilo desejado, copie e abra o Discord. Vá em Configurações de usuário → Perfil → Nome de exibição, cole o texto e salve. O limite é 32 caracteres. Estilos com caracteres mais compactos (gótico, cursivo) cabem mais no espaço disponível.</p>
      </div>
      <div class="tip-card">
        <div class="tip-card-icon">🖥️</div>
        <p class="tip-card-title">Nome de servidor e canais</p>
        <p class="tip-card-desc">Cole letras e símbolos Unicode diretamente nos nomes de canais e categorias do servidor. Símbolos como ━━━, ▸, ✦ e letras estilizadas são usados para criar servidores visualmente organizados. Vá em Configurações do servidor → nome do canal → edite e salve.</p>
      </div>
      <div class="tip-card">
        <div class="tip-card-icon">📝</div>
        <p class="tip-card-title">Bio "Sobre Mim"</p>
        <p class="tip-card-desc">A bio do Discord (seção "Sobre Mim") aceita até 190 caracteres e suporta Unicode completo. Use estilos como negrito matemático (𝗻𝗲𝗴𝗿𝗶𝘁𝗼) ou cursivo (𝓬𝓾𝓻𝓼𝓲𝓿𝓸) para destacar partes da bio. Emojis e símbolos especiais também funcionam nessa seção.</p>
      </div>
    </div>
  </div>
</section>

<?php ld_ad(LD_AD_MID_CONTENT); ?>

<!-- FAQ -->
<section class="faq-section" id="faq">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Perguntas sobre letras para Discord</h2>
    </div>
    <div class="faq-list">
      <details class="faq-item">
        <summary>Como colocar letras diferentes no Discord?</summary>
        <div class="faq-body">Use o gerador acima: digite o texto, escolha o estilo desejado e copie. No Discord, vá em Configurações de usuário (ícone de engrenagem) → Perfil → edite o Nome de exibição ou bio "Sobre Mim" → cole o texto e salve. Os caracteres Unicode funcionam em nome, bio, nome de servidor e canais.</div>
      </details>
      <details class="faq-item">
        <summary>Quais fontes funcionam no Discord?</summary>
        <div class="faq-body">O Discord aceita qualquer caractere Unicode padrão. Isso inclui negrito matemático (𝗻𝗲𝗴𝗿𝗶𝘁𝗼), itálico (𝘪𝘵á𝘭𝘪𝘤𝘰), gótico (𝔤ó𝔱𝔦𝔠𝔬), duplo contorno (𝕕𝕦𝕡𝕝𝕠) e cursivo (𝓬𝓾𝓻𝓼𝓲𝓿𝓸). Fontes instaladas no sistema operacional não funcionam para outros usuários — apenas caracteres Unicode.</div>
      </details>
      <details class="faq-item">
        <summary>Como fazer negrito no Discord?</summary>
        <div class="faq-body">O Discord usa Markdown para formatação em mensagens: <strong>**texto**</strong> = negrito, <em>*texto*</em> = itálico, <strong><em>***texto***</em></strong> = negrito e itálico, ~~texto~~ = tachado, `texto` = código, ||texto|| = spoiler. Essas formatações funcionam apenas em mensagens, não no nome de perfil. Para o nome, use as fontes Unicode deste gerador.</div>
      </details>
      <details class="faq-item">
        <summary>Discord aceita caracteres Unicode no nick?</summary>
        <div class="faq-body">Sim. O Discord aceita Unicode completo no nome de exibição, incluindo letras estilizadas, símbolos e caracteres especiais. O limite é de 32 caracteres. Caracteres como 𝓐, 𝔅, ℂ, ꧁, ꧂ e símbolos decorativos funcionam normalmente.</div>
      </details>
      <details class="faq-item">
        <summary>Como mudar a letra do nome no Discord?</summary>
        <div class="faq-body">Gere o texto estilizado neste gerador, copie e abra o Discord. Vá em Configurações de usuário → Perfil → Nome de exibição → cole o texto e salve. No celular: toque no ícone de perfil no canto inferior → toque no seu nome → Nome de exibição → edite e salve.</div>
      </details>
      <details class="faq-item">
        <summary>Letras para servidor do Discord: como personalizar?</summary>
        <div class="faq-body">Para nomear canais com letras especiais, vá em Configurações do servidor → Canais → edite o nome e cole caracteres Unicode. Símbolos como ✦, ━, ▸ são muito usados para organizar servidores. Para o nome do servidor, vá em Configurações do servidor → Visão geral → edite o nome.</div>
      </details>
      <details class="faq-item">
        <summary>Por que minha fonte não aparece no Discord mobile?</summary>
        <div class="faq-body">Fontes instaladas no sistema operacional do seu celular não aparecem para outros usuários. A solução é usar caracteres Unicode estilizados deste gerador — eles são texto puro e aparecem igual em qualquer dispositivo, seja Android, iPhone, Windows ou Mac.</div>
      </details>
      <details class="faq-item">
        <summary>Fontes para Discord vs Free Fire: qual a diferença?</summary>
        <div class="faq-body">O Free Fire tem limite de 12 caracteres no nick. O Discord tem limite de 32 caracteres e aceita Unicode completo. O Discord também permite formatação Markdown em mensagens (negrito, itálico, código), recurso que o Free Fire não tem. Veja nossa página de <a href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">letras para Free Fire</a> para comparar os estilos.</div>
      </details>
    </div>
  </div>
</section>

<!-- ARTICLE -->
<article class="content-article">
  <div class="article-wrap">

  <h2>Como usar letras diferentes no Discord</h2>
  <p>O <strong>Discord</strong> (fundado em 2015 por Jason Citron e Stan Vishnevskiy em San Francisco, Califórnia) é uma plataforma de comunicação com 500+ milhões de usuários registrados e 19+ milhões de servidores ativos. Diferente de outros apps de mensagem, o Discord oferece dois sistemas de personalização de texto: <strong>Unicode</strong> para nomes e bios, e <strong>Markdown</strong> para mensagens. Entender a diferença entre os dois é o primeiro passo para personalizar seu perfil de forma eficiente.</p>
  <p>As <strong>letras Unicode para Discord</strong> são caracteres do padrão Unicode (mantido pelo Unicode Consortium, fundado em 1991, com 154.998 caracteres na versão 16.0) que funcionam como texto normal em qualquer campo do Discord — nome de exibição, bio "Sobre Mim", nome de servidor e canais. Você gera o texto estilizado neste gerador, copia e cola diretamente no campo desejado. Não é necessário instalar nada. Os caracteres aparecem igual em qualquer dispositivo porque são texto padrão, não uma fonte local.</p>

  <h2>Fontes Unicode que funcionam no Discord</h2>
  <p>Todos os estilos gerados por este gerador funcionam no Discord. Os mais populares para nick e nome de exibição:</p>
  <ul>
    <li><strong>Negrito matemático</strong> (𝗡𝗲𝗴𝗿𝗶𝘁𝗼) — bloco Unicode Mathematical Bold, U+1D400 a U+1D7FF. Visual forte, muito usado em nicks competitivos</li>
    <li><strong>Cursivo script</strong> (𝓒𝓾𝓻𝓼𝓲𝓿𝓸) — bloco Mathematical Script, elegante para bios e servidores temáticos</li>
    <li><strong>Gótico Fraktur</strong> (𝔊ó𝔱𝔦𝔠𝔬) — bloco Mathematical Fraktur, visual medieval, popular em servidores de RPG e jogos</li>
    <li><strong>Duplo contorno</strong> (𝔻𝕦𝕡𝕝𝕠) — bloco Mathematical Double-Struck, visual único, se destaca em qualquer nick</li>
    <li><strong>Small Caps</strong> (ꜱᴍᴀʟʟ ᴄᴀᴘꜱ) — letras maiúsculas compactas, muito usado em servidores profissionais</li>
  </ul>
  <p>Estilos com caracteres invertidos, espelhados ou com efeitos especiais (como letras viradas de cabeça para baixo) funcionam no Discord mas podem prejudicar a leitura em nomes de canais. Para nomes de servidores e categorias, prefira estilos legíveis com símbolos decorativos como separadores (━━━, ·····, ══).</p>

  <h2>Discord Markdown: negrito, itálico e formatação nativa</h2>
  <p>O Discord usa <strong>Markdown</strong> (especificamente o dialeto CommonMark) para formatação de texto dentro de mensagens. Esta formatação é diferente das fontes Unicode — ela funciona apenas em mensagens, não em nomes ou bios. Os comandos principais:</p>

  <div style="overflow-x:auto;margin:16px 0">
  <table style="width:100%;border-collapse:collapse;font-size:.92rem">
    <thead>
      <tr style="border-bottom:1px solid var(--border)">
        <th style="text-align:left;padding:8px 12px;color:var(--muted)">Efeito</th>
        <th style="text-align:left;padding:8px 12px;color:var(--muted)">Código na mensagem</th>
        <th style="text-align:left;padding:8px 12px;color:var(--muted)">Resultado</th>
      </tr>
    </thead>
    <tbody>
      <tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 12px">Negrito</td><td style="padding:8px 12px"><code>**texto**</code></td><td style="padding:8px 12px"><strong>texto</strong></td></tr>
      <tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 12px">Itálico</td><td style="padding:8px 12px"><code>*texto*</code></td><td style="padding:8px 12px"><em>texto</em></td></tr>
      <tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 12px">Negrito + itálico</td><td style="padding:8px 12px"><code>***texto***</code></td><td style="padding:8px 12px"><strong><em>texto</em></strong></td></tr>
      <tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 12px">Tachado</td><td style="padding:8px 12px"><code>~~texto~~</code></td><td style="padding:8px 12px"><s>texto</s></td></tr>
      <tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 12px">Sublinhado</td><td style="padding:8px 12px"><code>__texto__</code></td><td style="padding:8px 12px"><u>texto</u></td></tr>
      <tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 12px">Código inline</td><td style="padding:8px 12px"><code>`texto`</code></td><td style="padding:8px 12px"><code>texto</code></td></tr>
      <tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 12px">Spoiler</td><td style="padding:8px 12px"><code>||texto||</code></td><td style="padding:8px 12px">[spoiler oculto]</td></tr>
      <tr><td style="padding:8px 12px">Citação</td><td style="padding:8px 12px"><code>&gt; texto</code></td><td style="padding:8px 12px">▎ texto</td></tr>
    </tbody>
  </table>
  </div>

  <p>A formatação Markdown do Discord funciona em mensagens normais, em canais de texto e em DMs. Não funciona em nomes de usuário, nome de exibição, bio ou nomes de canais — para esses campos, use as fontes Unicode deste gerador. Nos bots do Discord, o Markdown também é usado extensivamente para formatar respostas e embeds.</p>

  <h2>Letras para nick no Discord: fontes para nick mais usadas</h2>
  <p>O sistema de nick do Discord permite um <strong>nome de exibição</strong> de até 32 caracteres separado do nome de usuário (que desde 2023 usa o formato lowercase sem discriminador numérico). O nome de exibição é o que outros usuários veem nos servidores e é onde as fontes Unicode têm maior impacto visual. Os combos mais usados em servidores brasileiros:</p>
  <ul>
    <li><strong>꧁𝔑𝔞𝔪𝔢꧂</strong> — Ornamentos Javanese (U+A9C1/U+A9C2) com letras góticas. Clássico dos nicks decorativos</li>
    <li><strong>『𝓝𝓪𝓶𝓮』</strong> — Colchetes japoneses (U+300E/U+300F) com cursivo. Popular em servidores de anime</li>
    <li><strong>✦ 𝗡𝗮𝗺𝗲 ✦</strong> — Estrela Unicode (U+2726) com negrito matemático. Visual limpo e legível</li>
    <li><strong>ᴺᵃᵐᵉ</strong> — Small caps + sobrescrito. Minimalista, cabe bem no limite de caracteres</li>
  </ul>
  <p>Para servidores temáticos (RPG, anime, e-sports), o estilo das fontes comunica muito sobre o personagem ou função do usuário. Servidores de e-sports usam negrito e gótico. Servidores de anime usam cursivo e ornamentos japoneses. Servidores de roleplay usam Fraktur e estilos medievais. Veja também nossa coleção de <a href="<?php echo esc_url(home_url('/simbolos-para-nick/')); ?>">símbolos para nick</a> para complementar as fontes com decorações.</p>

  <h2>Como colocar letras diferentes no nome do Discord passo a passo</h2>
  <p>O processo é o mesmo no Android, iPhone, Windows e Mac:</p>
  <ol style="padding-left:1.4rem;line-height:2">
    <li>Digite seu nick ou texto no campo do gerador acima</li>
    <li>Escolha o estilo desejado (todos funcionam no Discord)</li>
    <li>Clique no estilo para copiar automaticamente</li>
    <li>Abra o Discord e clique no ícone de engrenagem (⚙️) ao lado do seu nome</li>
    <li>Vá em <strong>Perfil</strong> → clique em <strong>Nome de exibição</strong></li>
    <li>Apague o nome atual e cole o texto copiado (Ctrl+V ou toque longo → Colar)</li>
    <li>Clique em <strong>Salvar</strong></li>
  </ol>
  <p>Para alterar o nome em um servidor específico sem mudar o nome global: clique com o botão direito no servidor → <strong>Editar perfil do servidor</strong> → altere o apelido do servidor com o texto estilizado. Isso afeta apenas aquele servidor. Veja também como usar <a href="<?php echo esc_url(home_url('/letras-personalizadas/')); ?>">letras personalizadas</a> e <a href="<?php echo esc_url(home_url('/letras-goticas/')); ?>">letras góticas</a> para nicks únicos no Discord.</p>

  <div class="article-back-cta">
    <a href="#gerador">💬 Gerar letras para Discord agora</a>
  </div>
  </div>
</article>

<?php ld_ad(LD_AD_BEFORE_LINKS); ?>

<!-- INTERNAL LINKS -->
<section class="links-section">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Explore também</h2>
    </div>
    <div class="links-grid">
      <a class="links-card" href="<?php echo esc_url(home_url('/')); ?>">✦ Gerador de Letras</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-personalizadas/')); ?>">🎨 Letras Personalizadas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">🔥 Letras FF</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/simbolos-para-nick/')); ?>">⚔ Símbolos para Nick</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-goticas/')); ?>">𝔊 Letras Góticas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-cursivas/')); ?>">𝓒 Letras Cursivas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-bonitas/')); ?>">✨ Letras Bonitas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/tipos-de-letras/')); ?>">🔤 Tipos de Letras</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/fontes-de-letras/')); ?>">🖋 Fontes de Letras</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">📸 Letras Instagram</a>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
