<?php
/**
 * Template Name: Página de Emojis
 * Letras Diferentes Online — Emojis para copiar e colar (WhatsApp, Instagram, Free Fire, Discord)
 */

get_header();

/* ── Schema ── */
ld_schema_faq([
    ['q'=>'O que são emojis?',
     'a'=>'Emojis são pictogramas digitais padronizados pelo Unicode Consortium. O Unicode 16.0, publicado em setembro de 2024, contém 3.790 emojis. Eles funcionam como caracteres de texto em qualquer dispositivo — Android, iPhone e computador.'],
    ['q'=>'Como copiar e colar emojis?',
     'a'=>'Clique no emoji nesta página. O caractere é copiado automaticamente. Depois abra o app (WhatsApp, Instagram, Free Fire) e cole com um toque longo no campo de texto e selecione "Colar". No computador use Ctrl+V.'],
    ['q'=>'Quantos emojis existem no mundo?',
     'a'=>'O Unicode Consortium publicou 3.790 emojis no Unicode 16.0 (setembro de 2024). Cada versão acrescenta novos pictogramas aprovados por um comitê técnico internacional.'],
    ['q'=>'Quais emojis funcionam no Free Fire?',
     'a'=>'O Free Fire (da Garena) aceita emojis Unicode padrão no nick. Os mais usados pelos jogadores são 🔥💀⚔️💥⭐👑. Copie aqui e cole no campo de edição do nick no app.'],
    ['q'=>'Como usar emojis na bio do Instagram?',
     'a'=>'Copie o emoji aqui, abra o Instagram, vá em Editar perfil, cole no campo Bio ou Nome. O Instagram (da Meta) aceita qualquer emoji Unicode sem restrições.'],
    ['q'=>'Os emojis aparecem igual em todos os celulares?',
     'a'=>'O desenho visual varia por sistema: Android usa o Noto Emoji (do Google), iOS usa o Apple Color Emoji, Windows usa o Segoe UI Emoji. O caractere em si é idêntico — só o visual muda.'],
    ['q'=>'Qual foi o primeiro emoji da história?',
     'a'=>'O primeiro conjunto de 176 emojis foi criado por Shigetaka Kurita em 1999 para o serviço i-mode da NTT DoCoMo, no Japão. Em 2010 o Unicode Consortium incorporou emojis ao padrão Unicode.'],
    ['q'=>'Qual é o emoji mais usado no Brasil?',
     'a'=>'Segundo dados do Unicode Consortium, o ❤️ (coração vermelho) é o emoji mais enviado globalmente. No Brasil, entram também 😂 😭 🙏 😍 entre os mais frequentes no WhatsApp.'],
]);

ld_schema_breadcrumb([
    ['name' => 'Letras Diferentes Online', 'url' => home_url('/')],
    ['name' => 'Emojis para Copiar e Colar', 'url' => get_permalink()],
]);

ld_schema_software(
    'Emojis para Copiar e Colar',
    '3.000+ emojis para WhatsApp, Instagram, Free Fire e Discord. Clique e copie em 1 segundo. Atualizado com Unicode 16.0.',
    get_permalink()
);
?>

<main>
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="Localização">
  <a href="<?php echo esc_url(home_url('/')); ?>">Início</a>
  <span aria-hidden="true">›</span>
  <span>Emojis para Copiar e Colar</span>
</nav>

<!-- HERO -->
<section class="plat-hero">
  <div class="plat-icon" aria-hidden="true">😍</div>
  <h1>Emojis para Copiar e Colar 😍</h1>
  <p>Mais de 600 emojis para WhatsApp, Instagram, Free Fire e Discord. Clique para copiar na hora.</p>
</section>

<!-- EMOJI BROWSER -->
<section class="generator-section" id="emojis" aria-label="Emojis para copiar">
  <div class="generator-box">

    <!-- Search -->
    <div class="sym-search-wrap">
      <input type="search" id="emoji-search" placeholder="🔍 Buscar emoji…"
             autocomplete="off" spellcheck="false" aria-label="Buscar emoji">
    </div>

    <!-- Category tabs -->
    <div class="gen-filters" role="tablist" aria-label="Categorias de emojis">
      <span class="filter-label">Plataforma:</span>
      <button class="js-filter-btn is-active" data-filter="all"        role="tab">Todos</button>
      <button class="js-filter-btn" data-filter="whatsapp"             role="tab">💬 WhatsApp</button>
      <button class="js-filter-btn" data-filter="instagram"            role="tab">📸 Instagram</button>
      <button class="js-filter-btn" data-filter="freefire"             role="tab">🔥 Free Fire</button>
      <button class="js-filter-btn" data-filter="discord"              role="tab">🎮 Discord</button>
      <button class="js-filter-btn" data-filter="rostos"               role="tab">😀 Rostos</button>
      <button class="js-filter-btn" data-filter="animais"              role="tab">🐶 Animais</button>
      <button class="js-filter-btn" data-filter="coracoes"             role="tab">❤️ Corações</button>
      <button class="js-filter-btn" data-filter="maos"                 role="tab">👋 Gestos</button>
      <button class="js-filter-btn" data-filter="comida"               role="tab">🍕 Comida</button>
      <button class="js-filter-btn" data-filter="natureza"             role="tab">🌿 Natureza</button>
      <button class="js-filter-btn" data-filter="objetos"              role="tab">📱 Objetos</button>
      <button class="js-filter-btn" data-filter="simbolos"             role="tab">🔣 Símbolos</button>
    </div>

    <!-- Counter + grid -->
    <div class="gen-grid-wrap">
      <div class="ld-meta-row">
        <span class="ld-meta-row-title">Clique no emoji para copiar</span>
        <span id="emoji-counter"></span>
      </div>
      <div id="emoji-grid" class="sym-grid" role="list" aria-label="Emojis"></div>
    </div>

    <!-- Toast -->
    <div id="emoji-toast" class="ld-toast" role="status" aria-live="polite"></div>

  </div>
</section>

<?php ld_ad(LD_AD_BELOW_GENERATOR); ?>

<!-- TIPS -->
<section class="tips-section">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Como usar emojis nas redes sociais</h2>
    </div>
    <div class="tips-grid">
      <div class="tip-card">
        <div class="tip-card-icon">💬</div>
        <p class="tip-card-title">WhatsApp</p>
        <p class="tip-card-desc">Copie o emoji aqui, abra o WhatsApp e cole na conversa, no status ou no nome de perfil. Funciona no Android, iPhone e WhatsApp Web. Os emojis aparecem para todos os contatos, independente do celular que usam.</p>
      </div>
      <div class="tip-card">
        <div class="tip-card-icon">📸</div>
        <p class="tip-card-title">Instagram</p>
        <p class="tip-card-desc">Cole emojis na bio, no nome de exibição ou nas legendas das fotos. Abra o Instagram, vá em Editar perfil e cole no campo que quiser. Emojis no nome do perfil aumentam o destaque nos resultados de busca do app.</p>
      </div>
      <div class="tip-card">
        <div class="tip-card-icon">🔥</div>
        <p class="tip-card-title">Free Fire</p>
        <p class="tip-card-desc">O Free Fire aceita emojis Unicode no nick. Copie o emoji aqui, abra o app, vá em Perfil, toque no lápis ao lado do nick e cole. Emojis de fogo 🔥, caveira 💀 e espada ⚔️ são os preferidos da comunidade gamer.</p>
      </div>
    </div>
  </div>
</section>

<?php ld_ad(LD_AD_MID_CONTENT); ?>

<!-- FAQ -->
<section class="faq-section" id="faq">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Perguntas frequentes sobre emojis</h2>
    </div>
    <div class="faq-list">
      <details class="faq-item">
        <summary>O que são emojis?</summary>
        <div class="faq-body">Emojis são pictogramas digitais padronizados pelo <strong>Unicode Consortium</strong>. O Unicode 16.0, publicado em setembro de 2024, contém 3.790 emojis. Eles funcionam como caracteres de texto em qualquer dispositivo — Android, iPhone e computador.</div>
      </details>
      <details class="faq-item">
        <summary>Como copiar e colar emojis?</summary>
        <div class="faq-body">Clique no emoji nesta página. O caractere é copiado automaticamente. Depois abra o app (WhatsApp, Instagram, Free Fire) e cole com um toque longo no campo de texto e selecione "Colar". No computador use Ctrl+V.</div>
      </details>
      <details class="faq-item">
        <summary>Quantos emojis existem no mundo?</summary>
        <div class="faq-body">O <strong>Unicode Consortium</strong> publicou 3.790 emojis no <strong>Unicode 16.0</strong> (setembro de 2024). Cada versão acrescenta novos pictogramas aprovados por um comitê técnico internacional. A contagem inclui variações de tom de pele e combinações de família.</div>
      </details>
      <details class="faq-item">
        <summary>Quais emojis funcionam no Free Fire?</summary>
        <div class="faq-body">O <strong>Free Fire</strong> (da Garena) aceita emojis Unicode padrão no nick. Os mais usados pelos jogadores são 🔥💀⚔️💥⭐👑. Copie aqui e cole no campo de edição do nick no app da Garena. Alguns emojis muito recentes (Unicode 16.0) podem ainda não renderizar no jogo.</div>
      </details>
      <details class="faq-item">
        <summary>Como usar emojis na bio do Instagram?</summary>
        <div class="faq-body">Copie o emoji aqui, abra o Instagram, vá em Editar perfil, cole no campo Bio ou Nome. O <strong>Instagram</strong> (da Meta) aceita qualquer emoji Unicode sem restrições. Emojis na bio quebram o texto visualmente e tornam o perfil mais atrativo.</div>
      </details>
      <details class="faq-item">
        <summary>Os emojis aparecem igual em todos os celulares?</summary>
        <div class="faq-body">O desenho visual varia por sistema: Android usa o <strong>Noto Emoji</strong> (do Google), iOS usa o <strong>Apple Color Emoji</strong>, Windows usa o <strong>Segoe UI Emoji</strong>. O caractere em si é idêntico em todos os sistemas — só o visual muda de plataforma para plataforma.</div>
      </details>
      <details class="faq-item">
        <summary>Qual foi o primeiro emoji da história?</summary>
        <div class="faq-body">O primeiro conjunto de 176 emojis foi criado por <strong>Shigetaka Kurita</strong> em 1999 para o serviço i-mode da <strong>NTT DoCoMo</strong>, no Japão. Em 2010 o Unicode Consortium incorporou os emojis ao padrão Unicode, tornando-os universais em todos os dispositivos.</div>
      </details>
      <details class="faq-item">
        <summary>Qual é o emoji mais usado no Brasil?</summary>
        <div class="faq-body">Segundo dados do <strong>Unicode Consortium</strong>, o ❤️ (coração vermelho) é o emoji mais enviado globalmente. No Brasil, entram também 😂 😭 🙏 😍 entre os mais frequentes no WhatsApp, segundo levantamentos de uso da plataforma da Meta.</div>
      </details>
    </div>
  </div>
</section>

<!-- SEO ARTICLE -->
<article class="content-article">
  <div class="article-wrap">

  <h2>O que são emojis e como funcionam</h2>
  <p>Emojis são caracteres de texto padronizados pelo <strong>Unicode Consortium</strong>, a organização internacional que define os padrões de texto digital. Cada emoji tem um código único no sistema Unicode — o mesmo código que o seu teclado usa para letras e números. Isso significa que um emoji copiado aqui funciona em qualquer app, site ou dispositivo que suporte Unicode moderno: WhatsApp, Instagram, Free Fire, Discord, TikTok, Telegram e muito mais.</p>
  <p>O <strong>Unicode 16.0</strong>, publicado em setembro de 2024, trouxe o total para 3.790 emojis. Para usá-los é simples: clique no emoji nesta página, o caractere vai para sua área de transferência e você cola onde quiser. Sem instalação, sem extensão, sem cadastro.</p>

  <h2>Emojis para WhatsApp: os mais usados no Brasil</h2>
  <p>O <strong>WhatsApp</strong>, plataforma da Meta Platforms, é o app de mensagens mais instalado no Brasil, com mais de 165 milhões de usuários ativos. Os emojis mais enviados pelos brasileiros no WhatsApp são 😂 (rosto com lágrimas de alegria), ❤️ (coração vermelho), 😭 (rosto chorando), 🙏 (mãos em oração) e 😍 (rosto com olhos de coração).</p>
  <p>Você pode usar emojis em mensagens individuais e em grupos, no <strong>status do WhatsApp</strong> e no nome de perfil. Para colocar emoji no nome: abra o WhatsApp, vá em Configurações, toque no seu nome e cole o emoji antes ou depois do texto. Combine emojis com <a href="<?php echo esc_url(home_url('/letras-para-whatsapp/')); ?>">letras diferentes para WhatsApp</a> para deixar o perfil ainda mais chamativo.</p>

  <h2>Emojis para Instagram: bio, stories e reels</h2>
  <p>No <strong>Instagram</strong> (Meta), emojis aparecem em todos os campos de texto: bio, nome de exibição, legendas de fotos, comentários e stories. Para a bio, os emojis mais usados são ✨ (brilhos), 🌸 (flor de cerejeira), 💫 (estrela girando), 🦋 (borboleta) e 🌈 (arco-íris). Eles ajudam a separar visualmente as linhas e tornam o perfil mais organizado.</p>
  <p>Para colocar emoji no nome do Instagram: abra o app, vá em Editar perfil, toque no campo Nome e cole o emoji copiado aqui. O Instagram aceita qualquer emoji do padrão Unicode. Veja também nossa seleção de <a href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">letras para Instagram</a> para combinar com os emojis.</p>

  <h2>Emojis para nick no Free Fire</h2>
  <p>O <strong>Free Fire</strong>, battle royale da <strong>Garena</strong>, é o jogo mobile mais baixado no Brasil. Muitos jogadores decoram o nick com emojis para se destacar no lobby e nas partidas. Os emojis mais usados na comunidade Free Fire são 🔥 (fogo), 💀 (caveira), ⚔️ (espadas cruzadas), 💥 (explosão), ⭐ (estrela) e 👑 (coroa).</p>
  <p>Para usar: copie o emoji nesta página, abra o Free Fire, vá em Perfil, toque no ícone de lápis ao lado do nick e cole. Combine emojis com <a href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">letras para Free Fire</a> para criar nicks únicos que ninguém mais tem. Atenção: emojis muito recentes do Unicode 16.0 podem ainda não aparecer corretamente dentro do jogo.</p>

  <h2>A história dos emojis: de 1999 ao Unicode 16.0</h2>
  <p>O primeiro conjunto de emojis foi criado por <strong>Shigetaka Kurita</strong>, designer da empresa japonesa <strong>NTT DoCoMo</strong>, em 1999. Eram 176 pictogramas de 12x12 pixels, feitos para o serviço de internet móvel i-mode. A ideia era transmitir emoção e informação em poucos bytes.</p>
  <p>Em 2010, o <strong>Unicode Consortium</strong> incorporou os emojis ao padrão Unicode 6.0, tornando-os universais. Desde então, novas versões chegam todo ano. O Unicode 16.0 (setembro de 2024) é a versão mais recente, com 3.790 emojis no total. Hoje, os emojis originais de Kurita estão expostos no MoMA (Museu de Arte Moderna de Nova York) como peças de design histórico.</p>

  <h2>Por que os emojis parecem diferentes no Android e no iPhone</h2>
  <p>O código do emoji é o mesmo em todos os dispositivos, mas cada empresa cria o desenho visual por conta própria. O Android usa a fonte <strong>Noto Emoji</strong>, desenvolvida pelo Google. O iPhone usa a fonte <strong>Apple Color Emoji</strong>, da Apple. O Windows usa a <strong>Segoe UI Emoji</strong>, da Microsoft. Plataformas como <strong>Discord</strong> (Discord Inc.) e <strong>TikTok</strong> (ByteDance) chegam a ter suas próprias versões visuais dos emojis.</p>
  <p>Na prática, o emoji que você vê na tela pode ter um visual diferente do que o destinatário vai ver no celular dele. O significado, porém, é o mesmo. Se você copiar um emoji desta página, o caractere Unicode vai aparecer corretamente em qualquer plataforma, seja lá qual for o visual escolhido pelo sistema operacional. Veja também nossa lista de <a href="<?php echo esc_url(home_url('/simbolos/')); ?>">símbolos para copiar</a> e o <a href="<?php echo esc_url(home_url('/')); ?>">gerador de letras diferentes</a> para personalizar ainda mais seus perfis.</p>

  <div class="article-back-cta">
    <a href="#emojis">😍 Ver todos os emojis</a>
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
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">🔥 Letras FF</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">📸 Letras Instagram</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-cursivas/')); ?>">𝓒 Letras Cursivas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/simbolos/')); ?>">✦ Símbolos</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-whatsapp/')); ?>">💬 Letras WhatsApp</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-bonitas/')); ?>">✨ Letras Bonitas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-bio/')); ?>">📝 Letras para Bio</a>
    </div>
  </div>
</section>

</main>

<script>
'use strict';
(function () {

/* ── EMOJI DATA ── */
const EMOJIS = [
  /* whatsapp */
  {e:'😂',n:'rosto com lágrimas de alegria risada engraçado',c:'whatsapp'},
  {e:'❤️',n:'coração vermelho amor',c:'whatsapp'},
  {e:'😭',n:'rosto chorando muito triste lágrimas',c:'whatsapp'},
  {e:'🙏',n:'mãos rezando agradecendo por favor',c:'whatsapp'},
  {e:'😍',n:'rosto apaixonado olhos de coração amor',c:'whatsapp'},
  {e:'🥹',n:'rosto contendo lágrimas emocionado',c:'whatsapp'},
  {e:'😊',n:'rosto sorrindo feliz alegre',c:'whatsapp'},
  {e:'😘',n:'rosto mandando beijo',c:'whatsapp'},
  {e:'😅',n:'rosto sorrindo com suor nervoso',c:'whatsapp'},
  {e:'🤣',n:'rosto rolando de rir gargalhada',c:'whatsapp'},
  {e:'👍',n:'polegar para cima ok ótimo',c:'whatsapp'},
  {e:'😔',n:'rosto pensativo triste decepcionado',c:'whatsapp'},
  {e:'😩',n:'rosto exausto cansado frustrado',c:'whatsapp'},
  {e:'😤',n:'rosto bufando raiva irritado',c:'whatsapp'},
  {e:'🥺',n:'rosto pedindo implorando carente',c:'whatsapp'},
  {e:'😏',n:'rosto com sorriso malicioso provocando',c:'whatsapp'},
  {e:'🤔',n:'rosto pensando reflexão dúvida',c:'whatsapp'},
  {e:'😌',n:'rosto aliviado relaxado tranquilo',c:'whatsapp'},
  {e:'🫶',n:'mãos formando coração amor carinho',c:'whatsapp'},
  {e:'💕',n:'dois corações amor paixão',c:'whatsapp'},
  {e:'😢',n:'rosto chorando triste lágrima',c:'whatsapp'},
  {e:'😬',n:'rosto com dentes cerrados constrangido tenso',c:'whatsapp'},
  {e:'🥰',n:'rosto apaixonado com corações',c:'whatsapp'},
  {e:'😒',n:'rosto entediado sem graça',c:'whatsapp'},
  {e:'🙄',n:'rosto virando os olhos irritação tédio',c:'whatsapp'},
  {e:'😁',n:'rosto sorrindo feliz dentes aparecem',c:'whatsapp'},
  {e:'😆',n:'rosto sorrindo fechando olhos risada',c:'whatsapp'},
  {e:'😉',n:'rosto piscando olho brincadeira',c:'whatsapp'},
  {e:'😇',n:'rosto com auréola anjo inocente',c:'whatsapp'},
  {e:'🥳',n:'rosto comemorando festa balão',c:'whatsapp'},
  {e:'🤩',n:'rosto estrelado admirado impressionado',c:'whatsapp'},
  {e:'😋',n:'rosto com língua de fora gostoso',c:'whatsapp'},
  {e:'😛',n:'rosto com língua de fora brincando',c:'whatsapp'},
  {e:'😜',n:'rosto piscando com língua de fora',c:'whatsapp'},
  {e:'🤪',n:'rosto louco maluco zoando',c:'whatsapp'},
  {e:'😝',n:'rosto fechando olhos língua de fora',c:'whatsapp'},
  {e:'🤑',n:'rosto com sinal de dinheiro cifrão',c:'whatsapp'},
  {e:'😗',n:'rosto dando beijo',c:'whatsapp'},
  {e:'😚',n:'rosto dando beijo fechando olhos',c:'whatsapp'},
  {e:'😙',n:'rosto dando beijo sorrindo',c:'whatsapp'},

  /* instagram */
  {e:'✨',n:'brilhos estrelas faíscas',c:'instagram'},
  {e:'💫',n:'estrela girando tontura brilho',c:'instagram'},
  {e:'⭐',n:'estrela amarela destaque',c:'instagram'},
  {e:'🌟',n:'estrela brilhante faíscas',c:'instagram'},
  {e:'🌈',n:'arco-íris colorido esperança',c:'instagram'},
  {e:'🦋',n:'borboleta transformação delicada',c:'instagram'},
  {e:'🌸',n:'flor de cerejeira sakura primavera',c:'instagram'},
  {e:'🌺',n:'hibisco flor tropical vermelha',c:'instagram'},
  {e:'🌻',n:'girassol amarelo felicidade',c:'instagram'},
  {e:'🌹',n:'rosa flor amor romântico',c:'instagram'},
  {e:'🍀',n:'trevo quatro folhas sorte',c:'instagram'},
  {e:'🌿',n:'folha verde natureza planta',c:'instagram'},
  {e:'🍃',n:'folhas ao vento natureza fresca',c:'instagram'},
  {e:'💐',n:'buquê de flores presente',c:'instagram'},
  {e:'🌷',n:'tulipa flor primavera',c:'instagram'},
  {e:'🌼',n:'flor amarela margarida',c:'instagram'},
  {e:'❄️',n:'floco de neve inverno frio',c:'instagram'},
  {e:'🫶',n:'mãos formando coração amor',c:'instagram'},
  {e:'💕',n:'dois corações amor paixão',c:'instagram'},
  {e:'💗',n:'coração rosa crescendo',c:'instagram'},
  {e:'💓',n:'coração batendo pulsando',c:'instagram'},
  {e:'💞',n:'corações girando amor',c:'instagram'},
  {e:'💝',n:'coração com laço presente amor',c:'instagram'},
  {e:'💖',n:'coração brilhante faísca',c:'instagram'},
  {e:'💘',n:'coração com flecha cupido',c:'instagram'},
  {e:'💟',n:'decoração coração',c:'instagram'},
  {e:'❣️',n:'ponto de exclamação coração',c:'instagram'},
  {e:'🌙',n:'lua crescente noite',c:'instagram'},
  {e:'☀️',n:'sol brilhando dia',c:'instagram'},
  {e:'💄',n:'batom maquiagem feminino',c:'instagram'},
  {e:'👑',n:'coroa realeza rainha',c:'instagram'},
  {e:'🎀',n:'laço decoração fofo',c:'instagram'},
  {e:'🪄',n:'varinha mágica magia',c:'instagram'},
  {e:'🫧',n:'bolhas sabão limpo',c:'instagram'},
  {e:'🦄',n:'unicórnio mágico mito',c:'instagram'},

  /* freefire */
  {e:'🔥',n:'fogo chama calor free fire',c:'freefire'},
  {e:'💀',n:'caveira morte osso skull',c:'freefire'},
  {e:'☠️',n:'caveira ossos cruzados perigo morte',c:'freefire'},
  {e:'⚔️',n:'espadas cruzadas batalha luta combate',c:'freefire'},
  {e:'💥',n:'explosão impacto bomb',c:'freefire'},
  {e:'🎯',n:'alvo precisão tiro certeiro',c:'freefire'},
  {e:'🏆',n:'troféu campeão vitória',c:'freefire'},
  {e:'👑',n:'coroa realeza rei boss',c:'freefire'},
  {e:'💎',n:'diamante precioso raro',c:'freefire'},
  {e:'🩸',n:'gota de sangue ferimento',c:'freefire'},
  {e:'🎮',n:'controle de videogame gamer',c:'freefire'},
  {e:'🕹️',n:'joystick arcade jogo',c:'freefire'},
  {e:'🏹',n:'arco e flecha atirador',c:'freefire'},
  {e:'🛡️',n:'escudo proteção defesa',c:'freefire'},
  {e:'🗡️',n:'adaga faca arma',c:'freefire'},
  {e:'💣',n:'bomba explosivo perigo',c:'freefire'},
  {e:'🔫',n:'pistola arma de fogo',c:'freefire'},
  {e:'🪖',n:'capacete militar soldado',c:'freefire'},
  {e:'⚡',n:'raio trovão energia elétrica',c:'freefire'},
  {e:'🌪️',n:'tornado redemoinho tempestade',c:'freefire'},
  {e:'🎲',n:'dado sorte jogo',c:'freefire'},
  {e:'💪',n:'braço forte músculo poder',c:'freefire'},
  {e:'🔰',n:'símbolo verde iniciante',c:'freefire'},
  {e:'🏅',n:'medalha honra conquista',c:'freefire'},
  {e:'🥇',n:'medalha de ouro primeiro lugar',c:'freefire'},
  {e:'🎖️',n:'medalha militar honra',c:'freefire'},
  {e:'⚙️',n:'engrenagem configuração mecânica',c:'freefire'},
  {e:'🗿',n:'estátua pedra sólido',c:'freefire'},
  {e:'🔴',n:'círculo vermelho alerta',c:'freefire'},
  {e:'🟥',n:'quadrado vermelho bloco',c:'freefire'},
  {e:'⬛',n:'quadrado preto escuro',c:'freefire'},
  {e:'🏴‍☠️',n:'bandeira pirata caveira corsário',c:'freefire'},
  {e:'💢',n:'símbolo de raiva irritação',c:'freefire'},
  {e:'🌑',n:'lua nova escura sombra',c:'freefire'},
  {e:'🪬',n:'mão de fátima amuleto proteção',c:'freefire'},

  /* discord */
  {e:'🎉',n:'festa confete comemorando',c:'discord'},
  {e:'🎊',n:'bola de confete festa celebração',c:'discord'},
  {e:'🎈',n:'balão festa aniversário',c:'discord'},
  {e:'🎁',n:'presente embrulho surpresa',c:'discord'},
  {e:'🎂',n:'bolo de aniversário vela',c:'discord'},
  {e:'🎆',n:'fogos de artifício celebração',c:'discord'},
  {e:'🎇',n:'estrelinhas sparkler fogos',c:'discord'},
  {e:'🥂',n:'taças brindando comemoração',c:'discord'},
  {e:'🍾',n:'garrafa de champagne celebração',c:'discord'},
  {e:'🎸',n:'guitarra elétrica rock música',c:'discord'},
  {e:'🎹',n:'piano teclado música clássica',c:'discord'},
  {e:'🎺',n:'trompete instrumento musical',c:'discord'},
  {e:'🎻',n:'violino instrumento clássico',c:'discord'},
  {e:'🥁',n:'bateria percussão ritmo',c:'discord'},
  {e:'🪘',n:'tambor djembe percussão',c:'discord'},
  {e:'🎤',n:'microfone cantor performance',c:'discord'},
  {e:'🎧',n:'fone de ouvido headset música',c:'discord'},
  {e:'🖥️',n:'monitor computador desktop',c:'discord'},
  {e:'💻',n:'notebook laptop computador',c:'discord'},
  {e:'📱',n:'celular smartphone mobile',c:'discord'},
  {e:'🤖',n:'robô inteligência artificial bot',c:'discord'},
  {e:'👾',n:'alien pixelado arcade jogo retrô',c:'discord'},
  {e:'🎭',n:'teatro máscaras drama comédia',c:'discord'},
  {e:'🃏',n:'carta curinga joker baralho',c:'discord'},
  {e:'🎴',n:'carta japonesa hanafuda',c:'discord'},
  {e:'🀄',n:'peça de mahjong jogo',c:'discord'},
  {e:'🧩',n:'peça de puzzle quebra-cabeça',c:'discord'},
  {e:'🕹️',n:'joystick videogame controle',c:'discord'},
  {e:'🪄',n:'varinha mágica truque mágico',c:'discord'},
  {e:'🛸',n:'disco voador OVNI alien espacial',c:'discord'},

  /* rostos */
  {e:'😀',n:'rosto sorrindo feliz contente',c:'rostos'},
  {e:'😃',n:'rosto sorrindo aberto alegre',c:'rostos'},
  {e:'😄',n:'rosto sorrindo olhos fechados alegria',c:'rostos'},
  {e:'😁',n:'rosto sorrindo com dentes',c:'rostos'},
  {e:'😆',n:'rosto sorrindo fechando os olhos risada',c:'rostos'},
  {e:'😅',n:'rosto sorrindo com suor nervoso',c:'rostos'},
  {e:'🤣',n:'rosto rolando de rir gargalhada',c:'rostos'},
  {e:'😂',n:'rosto com lágrimas de alegria risada',c:'rostos'},
  {e:'🙂',n:'rosto levemente sorrindo',c:'rostos'},
  {e:'🙃',n:'rosto de cabeça para baixo irônico',c:'rostos'},
  {e:'😉',n:'rosto piscando olho brincadeira',c:'rostos'},
  {e:'😊',n:'rosto sorrindo feliz ruborizado',c:'rostos'},
  {e:'😇',n:'rosto com auréola anjo inocente',c:'rostos'},
  {e:'🥰',n:'rosto apaixonado corações amor',c:'rostos'},
  {e:'😍',n:'rosto com olhos de coração apaixonado',c:'rostos'},
  {e:'🤩',n:'rosto estrelado admirado impressionado',c:'rostos'},
  {e:'😘',n:'rosto mandando beijo',c:'rostos'},
  {e:'😗',n:'rosto dando beijo',c:'rostos'},
  {e:'😚',n:'rosto dando beijo fechando olhos',c:'rostos'},
  {e:'😙',n:'rosto dando beijo sorrindo',c:'rostos'},
  {e:'🥲',n:'rosto sorrindo com lágrima emocionado',c:'rostos'},
  {e:'😋',n:'rosto com língua de fora gostoso',c:'rostos'},
  {e:'😛',n:'rosto com língua de fora brincando',c:'rostos'},
  {e:'😜',n:'rosto piscando com língua de fora',c:'rostos'},
  {e:'🤪',n:'rosto louco maluco zoando',c:'rostos'},
  {e:'😝',n:'rosto fechando olhos língua de fora',c:'rostos'},
  {e:'🤑',n:'rosto com cifrão dinheiro',c:'rostos'},
  {e:'🤗',n:'rosto abraçando mãos abrindo',c:'rostos'},
  {e:'🤭',n:'rosto com mão na boca surpreso',c:'rostos'},
  {e:'🫡',n:'rosto saudando respeitoso',c:'rostos'},
  {e:'🫢',n:'rosto boquiaberto chocado surpreso',c:'rostos'},
  {e:'🫣',n:'rosto espiando curioso',c:'rostos'},
  {e:'🤫',n:'rosto pedindo silêncio shhh',c:'rostos'},
  {e:'🤔',n:'rosto pensando reflexão dúvida',c:'rostos'},
  {e:'🫠',n:'rosto derretendo exausto',c:'rostos'},
  {e:'🤐',n:'rosto com zíper na boca segredo',c:'rostos'},
  {e:'🤨',n:'rosto com sobrancelha levantada desconfiado',c:'rostos'},
  {e:'😐',n:'rosto neutro sem expressão',c:'rostos'},
  {e:'😑',n:'rosto sem expressão entorpecido',c:'rostos'},
  {e:'😶',n:'rosto sem boca calado',c:'rostos'},
  {e:'🫥',n:'rosto pontilhado invisível',c:'rostos'},
  {e:'😏',n:'rosto com sorriso malicioso provocando',c:'rostos'},
  {e:'😒',n:'rosto entediado sem graça',c:'rostos'},
  {e:'🙄',n:'rosto virando os olhos irritação tédio',c:'rostos'},
  {e:'😬',n:'rosto com dentes cerrados constrangido',c:'rostos'},
  {e:'🤥',n:'rosto mentiroso nariz crescendo',c:'rostos'},
  {e:'🫨',n:'rosto tremendo agitado',c:'rostos'},
  {e:'😌',n:'rosto aliviado relaxado tranquilo',c:'rostos'},
  {e:'😔',n:'rosto pensativo triste decepcionado',c:'rostos'},
  {e:'😪',n:'rosto com sono cansado',c:'rostos'},
  {e:'🤤',n:'rosto babando com vontade',c:'rostos'},
  {e:'😴',n:'rosto dormindo zzz sonhando',c:'rostos'},
  {e:'😷',n:'rosto com máscara doente',c:'rostos'},
  {e:'🤒',n:'rosto doente com termômetro febre',c:'rostos'},
  {e:'🤕',n:'rosto com curativo machucado',c:'rostos'},
  {e:'🤢',n:'rosto enjoado nauseado',c:'rostos'},
  {e:'🤮',n:'rosto vomitando nojo',c:'rostos'},
  {e:'🤧',n:'rosto espirrando resfriado',c:'rostos'},
  {e:'🥵',n:'rosto com calor fervendo',c:'rostos'},
  {e:'🥶',n:'rosto com frio gelado',c:'rostos'},
  {e:'🥴',n:'rosto tonto zonzo confuso',c:'rostos'},
  {e:'😵',n:'rosto tonto com olhos em espiral',c:'rostos'},
  {e:'🤯',n:'rosto explodindo mente impactado',c:'rostos'},
  {e:'🤠',n:'rosto com chapéu de cowboy',c:'rostos'},
  {e:'🥸',n:'rosto disfarçado óculos bigode',c:'rostos'},
  {e:'🥳',n:'rosto comemorando festa chapéu',c:'rostos'},
  {e:'🥺',n:'rosto suplicando carente implorando',c:'rostos'},
  {e:'😎',n:'rosto com óculos escuros legal',c:'rostos'},
  {e:'🤓',n:'rosto nerd óculos inteligente',c:'rostos'},
  {e:'🧐',n:'rosto com monóculo examinando',c:'rostos'},
  {e:'😕',n:'rosto confuso sem entender',c:'rostos'},
  {e:'🫤',n:'rosto com boca torta indeciso',c:'rostos'},
  {e:'😟',n:'rosto preocupado ansioso',c:'rostos'},
  {e:'🙁',n:'rosto ligeiramente triste',c:'rostos'},
  {e:'☹️',n:'rosto tristíssimo desanimado',c:'rostos'},
  {e:'😮',n:'rosto boquiaberto surpreso',c:'rostos'},
  {e:'😯',n:'rosto surpreso chocado silencioso',c:'rostos'},
  {e:'😲',n:'rosto muito surpreso espantado',c:'rostos'},
  {e:'😳',n:'rosto vermelho envergonhado surpreso',c:'rostos'},
  {e:'🥱',n:'rosto bocejando com sono entediado',c:'rostos'},
  {e:'😦',n:'rosto assustado boca aberta',c:'rostos'},
  {e:'😧',n:'rosto angustiado sofrendo',c:'rostos'},
  {e:'😨',n:'rosto com medo assustado',c:'rostos'},
  {e:'😰',n:'rosto ansioso suando frio',c:'rostos'},
  {e:'😥',n:'rosto decepcionado aliviado suado',c:'rostos'},
  {e:'😢',n:'rosto chorando triste lágrima',c:'rostos'},
  {e:'😭',n:'rosto chorando muito triste lágrimas',c:'rostos'},
  {e:'😱',n:'rosto gritando de medo terror',c:'rostos'},
  {e:'😖',n:'rosto confuso frustrado',c:'rostos'},
  {e:'😣',n:'rosto persistindo esforçando',c:'rostos'},
  {e:'😞',n:'rosto desapontado triste',c:'rostos'},
  {e:'😓',n:'rosto suado constrangido',c:'rostos'},
  {e:'😩',n:'rosto exausto cansado frustrado',c:'rostos'},
  {e:'😫',n:'rosto cansado exausto esgotado',c:'rostos'},
  {e:'😤',n:'rosto bufando raiva irritado',c:'rostos'},
  {e:'😠',n:'rosto com raiva bravo',c:'rostos'},
  {e:'😡',n:'rosto muito bravo vermelho com raiva',c:'rostos'},
  {e:'🤬',n:'rosto xingando palavrão censurado',c:'rostos'},
  {e:'😈',n:'rosto com chifres sorrindo malvado',c:'rostos'},
  {e:'👿',n:'rosto com chifres bravo demônio',c:'rostos'},
  {e:'💀',n:'caveira morte ossada',c:'rostos'},
  {e:'☠️',n:'caveira e ossos cruzados perigo',c:'rostos'},
  {e:'💩',n:'cocô sorrindo engraçado',c:'rostos'},
  {e:'🤡',n:'palhaço assustador',c:'rostos'},
  {e:'👹',n:'demônio japonês ogro vermelho',c:'rostos'},
  {e:'👺',n:'goblin japonês máscara',c:'rostos'},
  {e:'👻',n:'fantasma branco assustador',c:'rostos'},
  {e:'👽',n:'alien extraterrestre',c:'rostos'},
  {e:'👾',n:'alien pixelado videogame',c:'rostos'},
  {e:'🤖',n:'robô inteligência artificial',c:'rostos'},

  /* animais */
  {e:'🐶',n:'cachorro dog filhote fofo',c:'animais'},
  {e:'🐱',n:'gato cat felino fofo',c:'animais'},
  {e:'🐭',n:'rato ratinho fofo',c:'animais'},
  {e:'🐹',n:'hamster fofo roedor',c:'animais'},
  {e:'🐰',n:'coelho orelhas fofinho',c:'animais'},
  {e:'🦊',n:'raposa laranja esperta',c:'animais'},
  {e:'🐻',n:'urso marrom fofo',c:'animais'},
  {e:'🐼',n:'panda preto e branco bambu',c:'animais'},
  {e:'🐨',n:'coala cinza fofinho árvore',c:'animais'},
  {e:'🐯',n:'tigre listras laranja',c:'animais'},
  {e:'🦁',n:'leão juba rei da selva',c:'animais'},
  {e:'🐮',n:'vaca malhada fazenda leite',c:'animais'},
  {e:'🐷',n:'porco rosa fazenda',c:'animais'},
  {e:'🐸',n:'sapo verde lago',c:'animais'},
  {e:'🐵',n:'macaco primata banana',c:'animais'},
  {e:'🙈',n:'macaco não vê nada segredo',c:'animais'},
  {e:'🙉',n:'macaco não ouve segredo',c:'animais'},
  {e:'🙊',n:'macaco não fala segredo',c:'animais'},
  {e:'🐔',n:'galinha branca fazenda',c:'animais'},
  {e:'🐧',n:'pinguim preto e branco gelo',c:'animais'},
  {e:'🐦',n:'pássaro azul voando',c:'animais'},
  {e:'🐤',n:'pintinho amarelo bebê',c:'animais'},
  {e:'🦆',n:'pato aquático lagoa',c:'animais'},
  {e:'🦅',n:'águia majestosa voando',c:'animais'},
  {e:'🦉',n:'coruja sábia noturna',c:'animais'},
  {e:'🦇',n:'morcego noturno vampiro',c:'animais'},
  {e:'🐺',n:'lobo uivando noite',c:'animais'},
  {e:'🐴',n:'cavalo marrom montaria',c:'animais'},
  {e:'🦄',n:'unicórnio mágico chifre colorido',c:'animais'},
  {e:'🐝',n:'abelha mel amarelo listras',c:'animais'},
  {e:'🦋',n:'borboleta colorida transformação',c:'animais'},
  {e:'🐌',n:'caracol lento casinha',c:'animais'},
  {e:'🐞',n:'joaninha vermelha bolinhas',c:'animais'},
  {e:'🐜',n:'formiga preta trabalhadora',c:'animais'},
  {e:'🐢',n:'tartaruga lenta casco verde',c:'animais'},
  {e:'🐍',n:'cobra serpente réptil',c:'animais'},
  {e:'🦎',n:'lagarto réptil sol',c:'animais'},
  {e:'🐙',n:'polvo tentáculos mar',c:'animais'},
  {e:'🦑',n:'lula tentáculos oceano',c:'animais'},
  {e:'🦀',n:'caranguejo vermelho pinças',c:'animais'},
  {e:'🐟',n:'peixe azul rio mar',c:'animais'},
  {e:'🐠',n:'peixe tropical colorido',c:'animais'},
  {e:'🐡',n:'peixe baiacu espinhos',c:'animais'},
  {e:'🦈',n:'tubarão cinza predador mar',c:'animais'},
  {e:'🐬',n:'golfinho salto inteligente',c:'animais'},
  {e:'🐳',n:'baleia azul sopro mar',c:'animais'},
  {e:'🐋',n:'baleia grande oceano',c:'animais'},
  {e:'🦭',n:'foca gelo polar',c:'animais'},
  {e:'🐊',n:'crocodilo réptil verde',c:'animais'},
  {e:'🐘',n:'elefante cinza tromba',c:'animais'},
  {e:'🦛',n:'hipopótamo gordo rio',c:'animais'},
  {e:'🦒',n:'girafa pescoço longo manchas',c:'animais'},
  {e:'🦘',n:'canguru pulo marsupial',c:'animais'},
  {e:'🐕',n:'cachorro cão fiel',c:'animais'},
  {e:'🐈',n:'gato felino doméstico',c:'animais'},
  {e:'🦔',n:'ouriço espinhos pequeno',c:'animais'},

  /* coracoes */
  {e:'❤️',n:'coração vermelho amor paixão',c:'coracoes'},
  {e:'🧡',n:'coração laranja amizade',c:'coracoes'},
  {e:'💛',n:'coração amarelo alegria amizade',c:'coracoes'},
  {e:'💚',n:'coração verde natureza saúde',c:'coracoes'},
  {e:'💙',n:'coração azul calma confiança',c:'coracoes'},
  {e:'💜',n:'coração roxo criatividade',c:'coracoes'},
  {e:'🖤',n:'coração preto elegância',c:'coracoes'},
  {e:'🤍',n:'coração branco paz pureza',c:'coracoes'},
  {e:'🤎',n:'coração marrom terra',c:'coracoes'},
  {e:'💔',n:'coração partido separação',c:'coracoes'},
  {e:'❤️‍🔥',n:'coração em chamas paixão intensa',c:'coracoes'},
  {e:'❤️‍🩹',n:'coração remendado cura recuperação',c:'coracoes'},
  {e:'💕',n:'dois corações amor paixão',c:'coracoes'},
  {e:'💞',n:'corações girando amor mútuo',c:'coracoes'},
  {e:'💓',n:'coração batendo pulsando',c:'coracoes'},
  {e:'💗',n:'coração rosa crescendo amor',c:'coracoes'},
  {e:'💖',n:'coração brilhante faísca',c:'coracoes'},
  {e:'💘',n:'coração com flecha cupido',c:'coracoes'},
  {e:'💝',n:'coração com laço presente',c:'coracoes'},
  {e:'💟',n:'decoração coração roxo',c:'coracoes'},
  {e:'❣️',n:'ponto exclamação coração',c:'coracoes'},
  {e:'♥️',n:'naipe coração baralho',c:'coracoes'},
  {e:'💑',n:'casal coração amor relacionamento',c:'coracoes'},
  {e:'💏',n:'casal beijando romance',c:'coracoes'},
  {e:'🫀',n:'coração anatômico órgão saúde',c:'coracoes'},

  /* maos */
  {e:'👋',n:'mão acenando tchau olá',c:'maos'},
  {e:'🤚',n:'mão levantada para stop',c:'maos'},
  {e:'🖐️',n:'mão aberta cinco dedos',c:'maos'},
  {e:'✋',n:'mão levantada parar alto',c:'maos'},
  {e:'🖖',n:'saudação vulcano Star Trek',c:'maos'},
  {e:'🫱',n:'mão apontando direita',c:'maos'},
  {e:'🫲',n:'mão apontando esquerda',c:'maos'},
  {e:'🫳',n:'palma para baixo',c:'maos'},
  {e:'🫴',n:'palma para cima oferecendo',c:'maos'},
  {e:'🫷',n:'mão empurrando esquerda',c:'maos'},
  {e:'🫸',n:'mão empurrando direita',c:'maos'},
  {e:'👌',n:'ok perfeito certinho dedo polegar indicador',c:'maos'},
  {e:'🤌',n:'gesto italiano dedo juntando',c:'maos'},
  {e:'🤏',n:'dedo e polegar pequeno quase nada',c:'maos'},
  {e:'✌️',n:'paz dois dedos vitória',c:'maos'},
  {e:'🤞',n:'dedos cruzados boa sorte',c:'maos'},
  {e:'🫰',n:'estalo de dedos click',c:'maos'},
  {e:'🤟',n:'te amo em libras',c:'maos'},
  {e:'🤘',n:'rock heavy metal chifres',c:'maos'},
  {e:'🤙',n:'liga pra mim shaka',c:'maos'},
  {e:'👈',n:'dedo apontando esquerda',c:'maos'},
  {e:'👉',n:'dedo apontando direita',c:'maos'},
  {e:'👆',n:'dedo apontando cima',c:'maos'},
  {e:'🖕',n:'dedo do meio ofensa',c:'maos'},
  {e:'👇',n:'dedo apontando baixo',c:'maos'},
  {e:'☝️',n:'dedo indicador para cima atenção',c:'maos'},
  {e:'🫵',n:'você aponta para alguém',c:'maos'},
  {e:'👍',n:'polegar para cima ok ótimo',c:'maos'},
  {e:'👎',n:'polegar para baixo ruim não gostei',c:'maos'},
  {e:'✊',n:'punho fechado poder resistência',c:'maos'},
  {e:'👊',n:'soco punho',c:'maos'},
  {e:'🤛',n:'punho esquerdo cumprimento',c:'maos'},
  {e:'🤜',n:'punho direito cumprimento',c:'maos'},
  {e:'👏',n:'palmas aplausos parabéns',c:'maos'},
  {e:'🙌',n:'mãos levantadas comemorando',c:'maos'},
  {e:'🫶',n:'mãos formando coração amor',c:'maos'},
  {e:'👐',n:'mãos abertas abraço',c:'maos'},
  {e:'🤲',n:'mãos abertas para cima rezando',c:'maos'},
  {e:'🤝',n:'aperto de mão acordo parceria',c:'maos'},
  {e:'🙏',n:'mãos em oração rezando obrigado',c:'maos'},
  {e:'✍️',n:'mão escrevendo assinar',c:'maos'},
  {e:'💅',n:'unhas pintadas manicure vaidade',c:'maos'},
  {e:'💪',n:'braço forte músculo academia',c:'maos'},

  /* comida */
  {e:'🍎',n:'maçã vermelha fruta saudável',c:'comida'},
  {e:'🍊',n:'laranja tangerina cítrico',c:'comida'},
  {e:'🍋',n:'limão amarelo azedo',c:'comida'},
  {e:'🍇',n:'uva roxa cacho vinho',c:'comida'},
  {e:'🍓',n:'morango vermelho doce',c:'comida'},
  {e:'🍒',n:'cereja vermelha par',c:'comida'},
  {e:'🍑',n:'pêssego laranja suculento',c:'comida'},
  {e:'🥭',n:'manga tropical amarela',c:'comida'},
  {e:'🍍',n:'abacaxi tropical espinhoso',c:'comida'},
  {e:'🥥',n:'coco tropical branco',c:'comida'},
  {e:'🍌',n:'banana amarela curva',c:'comida'},
  {e:'🍉',n:'melancia verde vermelha',c:'comida'},
  {e:'🍐',n:'pera verde fruta',c:'comida'},
  {e:'🍏',n:'maçã verde fruta',c:'comida'},
  {e:'🫐',n:'mirtilo blueberry roxo',c:'comida'},
  {e:'🍅',n:'tomate vermelho vegetal',c:'comida'},
  {e:'🥝',n:'kiwi verde fruta',c:'comida'},
  {e:'🍆',n:'berinjela roxa vegetal',c:'comida'},
  {e:'🥑',n:'abacate verde gordura boa',c:'comida'},
  {e:'🥦',n:'brócolis verde vegetal saudável',c:'comida'},
  {e:'🧅',n:'cebola roxa vegetal',c:'comida'},
  {e:'🥔',n:'batata inglesa vegetal',c:'comida'},
  {e:'🌽',n:'milho amarelo espiga',c:'comida'},
  {e:'🍕',n:'pizza italiana queijo',c:'comida'},
  {e:'🍔',n:'hambúrguer lanche fast food',c:'comida'},
  {e:'🍟',n:'batata frita fast food',c:'comida'},
  {e:'🌮',n:'taco mexicano tortilha',c:'comida'},
  {e:'🌯',n:'wrap wrap mexicano enrolado',c:'comida'},
  {e:'🍣',n:'sushi japonês arroz peixe',c:'comida'},
  {e:'🍱',n:'bento box japonês lancheira',c:'comida'},
  {e:'🍜',n:'macarrão ramen japonês sopa',c:'comida'},
  {e:'🍲',n:'panela cozido ensopado',c:'comida'},
  {e:'🍛',n:'curry arroz amarelo indiano',c:'comida'},
  {e:'🍝',n:'macarrão espaguete massas',c:'comida'},
  {e:'🍗',n:'frango assado coxinha',c:'comida'},
  {e:'🍖',n:'carne osso churrasco',c:'comida'},
  {e:'🥩',n:'bife carne vermelha grelhado',c:'comida'},
  {e:'🍳',n:'ovo frito frigideira café da manhã',c:'comida'},
  {e:'🥞',n:'panqueca pilha café da manhã',c:'comida'},
  {e:'🧇',n:'waffle quadriculado café da manhã',c:'comida'},
  {e:'🧀',n:'queijo amarelo fatia',c:'comida'},
  {e:'🍰',n:'fatia de bolo sobremesa',c:'comida'},
  {e:'🎂',n:'bolo de aniversário vela',c:'comida'},
  {e:'🧁',n:'cupcake bolinho doce',c:'comida'},
  {e:'🍫',n:'chocolate barra doce',c:'comida'},
  {e:'🍬',n:'bala doce colorido',c:'comida'},
  {e:'🍭',n:'pirulito colorido doce',c:'comida'},
  {e:'🍺',n:'cerveja caneco chopp',c:'comida'},
  {e:'🍻',n:'canecas brindando cerveja',c:'comida'},
  {e:'🥂',n:'taças de champagne brinde',c:'comida'},
  {e:'🍷',n:'taça de vinho tinto',c:'comida'},
  {e:'🥃',n:'copo de uísque bebida',c:'comida'},
  {e:'🧋',n:'bubble tea chá bolinha',c:'comida'},
  {e:'☕',n:'café xícara quente',c:'comida'},
  {e:'🍵',n:'chá xícara verde japonês',c:'comida'},

  /* natureza */
  {e:'🌱',n:'muda de planta pequena crescendo',c:'natureza'},
  {e:'🌿',n:'folha verde natureza planta',c:'natureza'},
  {e:'🍀',n:'trevo quatro folhas sorte',c:'natureza'},
  {e:'🌾',n:'espiga de trigo campo colheita',c:'natureza'},
  {e:'🌵',n:'cacto deserto espinho',c:'natureza'},
  {e:'🎄',n:'árvore de natal decoração',c:'natureza'},
  {e:'🌲',n:'árvore conífera pinheiro',c:'natureza'},
  {e:'🌳',n:'árvore folhosa parque',c:'natureza'},
  {e:'🌴',n:'palmeira tropical praia',c:'natureza'},
  {e:'🪴',n:'vaso de planta decoração indoor',c:'natureza'},
  {e:'🌺',n:'hibisco flor tropical vermelha',c:'natureza'},
  {e:'🌸',n:'flor de cerejeira sakura primavera',c:'natureza'},
  {e:'🌼',n:'flor amarela margarida',c:'natureza'},
  {e:'🌻',n:'girassol amarelo felicidade',c:'natureza'},
  {e:'🌹',n:'rosa flor amor romântico',c:'natureza'},
  {e:'🌷',n:'tulipa flor primavera',c:'natureza'},
  {e:'💐',n:'buquê de flores presente',c:'natureza'},
  {e:'🍄',n:'cogumelo vermelho bolinhas',c:'natureza'},
  {e:'🌊',n:'onda do mar surf praia',c:'natureza'},
  {e:'🌋',n:'vulcão erupção fogo',c:'natureza'},
  {e:'🏔️',n:'montanha nevada pico neve',c:'natureza'},
  {e:'⛰️',n:'montanha rocha pico',c:'natureza'},
  {e:'🌅',n:'nascer do sol manhã aurora',c:'natureza'},
  {e:'🌄',n:'nascer do sol montanhas',c:'natureza'},
  {e:'🌇',n:'pôr do sol cidade entardecer',c:'natureza'},
  {e:'🌆',n:'cidade ao entardecer skyline',c:'natureza'},
  {e:'🌃',n:'noite estrelada cidade',c:'natureza'},
  {e:'🌉',n:'ponte iluminada noite',c:'natureza'},
  {e:'🌌',n:'galáxia via láctea estrelas',c:'natureza'},
  {e:'🌙',n:'lua crescente noite',c:'natureza'},
  {e:'⭐',n:'estrela amarela destaque',c:'natureza'},
  {e:'🌟',n:'estrela brilhante faíscas',c:'natureza'},
  {e:'☀️',n:'sol brilhando dia calor',c:'natureza'},
  {e:'🌈',n:'arco-íris colorido esperança',c:'natureza'},
  {e:'⛅',n:'sol com nuvem tempo nublado',c:'natureza'},

  /* objetos */
  {e:'📱',n:'celular smartphone mobile',c:'objetos'},
  {e:'💻',n:'notebook laptop computador',c:'objetos'},
  {e:'🖥️',n:'monitor desktop computador',c:'objetos'},
  {e:'⌨️',n:'teclado digitação computador',c:'objetos'},
  {e:'🖱️',n:'mouse computador clique',c:'objetos'},
  {e:'📺',n:'televisão TV assistir',c:'objetos'},
  {e:'📷',n:'câmera fotografia foto',c:'objetos'},
  {e:'📸',n:'câmera flash selfie foto',c:'objetos'},
  {e:'🎥',n:'câmera de vídeo filmagem',c:'objetos'},
  {e:'📞',n:'telefone chamada ligação',c:'objetos'},
  {e:'☎️',n:'telefone fixo antigo',c:'objetos'},
  {e:'📟',n:'pager beeper mensagem',c:'objetos'},
  {e:'📠',n:'fax impressão transmissão',c:'objetos'},
  {e:'💡',n:'lâmpada ideia iluminação',c:'objetos'},
  {e:'🔦',n:'lanterna luz portátil',c:'objetos'},
  {e:'🕯️',n:'vela luz romântico',c:'objetos'},
  {e:'💰',n:'saco de dinheiro rico fortuna',c:'objetos'},
  {e:'💳',n:'cartão de crédito pagamento',c:'objetos'},
  {e:'💎',n:'diamante precioso joia',c:'objetos'},
  {e:'⚖️',n:'balança justiça equilíbrio',c:'objetos'},
  {e:'🔧',n:'chave inglesa ferramenta conserto',c:'objetos'},
  {e:'🪛',n:'chave de fenda ferramenta',c:'objetos'},
  {e:'🔩',n:'parafuso metal fixação',c:'objetos'},
  {e:'⚙️',n:'engrenagem configuração mecânica',c:'objetos'},
  {e:'🧲',n:'ímã magnetismo atração',c:'objetos'},
  {e:'🪜',n:'escada subir altura',c:'objetos'},
  {e:'🧰',n:'caixa de ferramentas reparo',c:'objetos'},
  {e:'🔒',n:'cadeado fechado segurança',c:'objetos'},
  {e:'🔓',n:'cadeado aberto acesso',c:'objetos'},
  {e:'🔑',n:'chave acesso porta',c:'objetos'},
  {e:'🗝️',n:'chave antiga vintage',c:'objetos'},
  {e:'📦',n:'caixa pacote entrega',c:'objetos'},
  {e:'📫',n:'caixa de correio fechada',c:'objetos'},
  {e:'📬',n:'caixa de correio aberta carta',c:'objetos'},
  {e:'📭',n:'caixa de correio aberta vazia',c:'objetos'},
  {e:'📮',n:'caixa de correio vermelha',c:'objetos'},
  {e:'🗳️',n:'urna votação eleição',c:'objetos'},
  {e:'📝',n:'bloco de notas escrever',c:'objetos'},
  {e:'✏️',n:'lápis escrever desenhar',c:'objetos'},
  {e:'🖊️',n:'caneta escrever',c:'objetos'},
  {e:'🖋️',n:'caneta tinteiro clássico',c:'objetos'},
  {e:'📌',n:'alfinete fixar vermelho',c:'objetos'},
  {e:'📍',n:'marcador localização mapa',c:'objetos'},
  {e:'✂️',n:'tesoura cortar papel',c:'objetos'},
  {e:'🗃️',n:'ficheiro organizador pasta',c:'objetos'},

  /* simbolos */
  {e:'💯',n:'cem por cento perfeito máximo',c:'simbolos'},
  {e:'✅',n:'check marcado correto confirmado',c:'simbolos'},
  {e:'❌',n:'x errado incorreto deletar',c:'simbolos'},
  {e:'❓',n:'ponto de interrogação dúvida pergunta',c:'simbolos'},
  {e:'❔',n:'ponto de interrogação branco',c:'simbolos'},
  {e:'❕',n:'ponto de exclamação branco',c:'simbolos'},
  {e:'❗',n:'ponto de exclamação vermelho atenção',c:'simbolos'},
  {e:'🔴',n:'círculo vermelho ponto alerta',c:'simbolos'},
  {e:'🟠',n:'círculo laranja ponto',c:'simbolos'},
  {e:'🟡',n:'círculo amarelo ponto',c:'simbolos'},
  {e:'🟢',n:'círculo verde ponto confirmado',c:'simbolos'},
  {e:'🔵',n:'círculo azul ponto informação',c:'simbolos'},
  {e:'🟣',n:'círculo roxo ponto',c:'simbolos'},
  {e:'⚫',n:'círculo preto ponto',c:'simbolos'},
  {e:'⚪',n:'círculo branco ponto',c:'simbolos'},
  {e:'🔺',n:'triângulo vermelho para cima',c:'simbolos'},
  {e:'🔻',n:'triângulo vermelho para baixo',c:'simbolos'},
  {e:'🔷',n:'losango azul grande',c:'simbolos'},
  {e:'🔸',n:'losango laranja pequeno',c:'simbolos'},
  {e:'🔹',n:'losango azul pequeno',c:'simbolos'},
  {e:'🔶',n:'losango laranja grande',c:'simbolos'},
  {e:'💠',n:'losango azul brilhante',c:'simbolos'},
  {e:'🔃',n:'setas girando sentido horário',c:'simbolos'},
  {e:'🔄',n:'setas circulares recarregar',c:'simbolos'},
  {e:'🔀',n:'embaralhar aleatório shuffle',c:'simbolos'},
  {e:'🔁',n:'repetir loop circular',c:'simbolos'},
  {e:'🔂',n:'repetir uma vez',c:'simbolos'},
  {e:'▶️',n:'play reproduzir iniciar',c:'simbolos'},
  {e:'⏭️',n:'avançar próximo skip',c:'simbolos'},
  {e:'⏮️',n:'voltar anterior começo',c:'simbolos'},
  {e:'⏪',n:'rebobinar retroceder rápido',c:'simbolos'},
  {e:'⏩',n:'avançar rápido fast forward',c:'simbolos'},
  {e:'⏫',n:'avançar dois passos cima',c:'simbolos'},
  {e:'⏬',n:'avançar dois passos baixo',c:'simbolos'},
  {e:'⛔',n:'proibido não permitido bloqueado',c:'simbolos'},
  {e:'🚫',n:'proibido não pode bloqueado',c:'simbolos'},
];

/* ── STATE ── */
let curFilter = 'all';
let search    = '';

/* ── ELEMENTS ── */
const grid       = document.getElementById('emoji-grid');
const counter    = document.getElementById('emoji-counter');
const searchEl   = document.getElementById('emoji-search');
const filterBtns = document.querySelectorAll('.js-filter-btn');
const toast      = document.getElementById('emoji-toast');

/* ── TOAST ── */
function showToast(msg) {
  toast.textContent = msg;
  toast.classList.add('show');
  clearTimeout(toast._t);
  toast._t = setTimeout(() => toast.classList.remove('show'), 1800);
}

/* ── COPY ── */
function copyEmoji(em, btn) {
  navigator.clipboard.writeText(em).then(() => {
    btn.classList.add('copied');
    setTimeout(() => btn.classList.remove('copied'), 900);
    showToast('✅ ' + em + '  copiado!');
  }).catch(() => {
    const ta = document.createElement('textarea');
    ta.value = em;
    ta.style.cssText = 'position:fixed;opacity:0;pointer-events:none';
    document.body.appendChild(ta);
    ta.select();
    document.execCommand('copy');
    document.body.removeChild(ta);
    btn.classList.add('copied');
    setTimeout(() => btn.classList.remove('copied'), 900);
    showToast('✅ ' + em + '  copiado!');
  });
}

/* ── RENDER ── */
function render() {
  let list = EMOJIS;
  if (curFilter !== 'all') list = list.filter(em => em.c === curFilter);
  const q = search.toLowerCase();
  if (q) list = list.filter(em => em.e.includes(q) || em.n.toLowerCase().includes(q));

  counter.textContent = list.length + ' emojis';

  if (list.length === 0) {
    grid.innerHTML = '<p style="padding:32px;text-align:center;color:var(--muted)">Nenhum emoji encontrado.</p>';
    return;
  }

  grid.innerHTML = list.map((em, i) =>
    `<button class="sym-btn" data-e="${em.e}" title="${em.n}" aria-label="Copiar emoji ${em.n}" style="animation-delay:${i * 5}ms" role="listitem">${em.e}</button>`
  ).join('');

  grid.querySelectorAll('.sym-btn').forEach(btn => {
    btn.addEventListener('click', () => copyEmoji(btn.dataset.e, btn));
  });
}

/* ── FILTER TABS ── */
filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    curFilter = btn.dataset.filter;
    filterBtns.forEach(b => b.classList.toggle('is-active', b === btn));
    render();
  });
});

/* ── SEARCH ── */
if (searchEl) {
  searchEl.addEventListener('input', () => {
    search = searchEl.value.trim();
    render();
  });
}

/* ── INIT ── */
render();

})();
</script>

<?php get_footer(); ?>
