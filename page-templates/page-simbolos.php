<?php
/**
 * Template Name: Página de Símbolos
 * Letras Diferentes Online — Símbolos para copiar e colar (nick, Free Fire, Instagram)
 */

get_header();

/* ── Schema ── */
ld_schema_faq([
    ['q'=>'O que são símbolos para copiar e colar?',
     'a'=>'Símbolos para copiar e colar são caracteres especiais do padrão Unicode — setas, estrelas, corações, formas geométricas e muito mais. Você clica, copia e cola em qualquer campo de texto: nick de jogo, bio do Instagram, WhatsApp, TikTok etc.'],
    ['q'=>'Os símbolos funcionam no nick do Free Fire?',
     'a'=>'A maioria dos símbolos Unicode funciona no nick do Free Fire: estrelas (★), espadas (⚔), coroas (♛), raios (⚡), crânios (☠) e muitos outros. Copie o símbolo aqui e cole no campo de edição do nick no app.'],
    ['q'=>'Como usar símbolos no Instagram?',
     'a'=>'Copie qualquer símbolo desta página e cole na bio, no nome de perfil ou nas legendas do Instagram. O Instagram aceita Unicode completo — funciona no app do Android, iPhone e na versão web.'],
    ['q'=>'Os símbolos funcionam no WhatsApp?',
     'a'=>'Sim! Cole símbolos Unicode diretamente em mensagens, status e nome de perfil do WhatsApp. Funciona no Android, iPhone e WhatsApp Web sem nenhuma instalação.'],
    ['q'=>'Quanto símbolos estão disponíveis?',
     'a'=>'Temos mais de 300 símbolos organizados em 8 categorias: Nick/Perfil, Free Fire, Setas, Corações, Estrelas, Decorações, Matemática e Moedas. Todos gratuitos e prontos para copiar.'],
]);

ld_schema_breadcrumb([
    ['name' => 'Letras Diferentes Online', 'url' => home_url('/')],
    ['name' => 'Símbolos para Copiar e Colar', 'url' => get_permalink()],
]);

ld_schema_software(
    'Símbolos para Copiar e Colar',
    'Mais de 300 símbolos Unicode para nick, Free Fire, Instagram e WhatsApp. Copie em 1 clique — grátis.',
    get_permalink()
);
?>

<main>
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="Localização">
  <a href="<?php echo esc_url(home_url('/')); ?>">Início</a>
  <span aria-hidden="true">›</span>
  <span>Símbolos para Copiar e Colar</span>
</nav>

<!-- HERO -->
<section class="plat-hero">
  <div class="plat-icon" aria-hidden="true">✦</div>
  <h1>Símbolos para Copiar e Colar</h1>
  <p>Mais de 300 símbolos Unicode para Instagram, WhatsApp, TikTok e decoração criativa. Clique para copiar instantaneamente.</p>
</section>

<!-- SYMBOL BROWSER -->
<section class="generator-section" id="simbolos" aria-label="Símbolos para copiar">
  <div class="generator-box">

    <!-- Search -->
    <div class="sym-search-wrap">
      <input type="search" id="sym-search" placeholder="🔍 Buscar símbolo…"
             autocomplete="off" spellcheck="false" aria-label="Buscar símbolo">
    </div>

    <!-- Category tabs -->
    <div class="gen-filters" role="tablist" aria-label="Categorias de símbolos">
      <span class="filter-label">Categoria:</span>
      <button class="js-filter-btn is-active" data-filter="all"      role="tab">Todos</button>
      <button class="js-filter-btn" data-filter="nick"               role="tab">🎮 Nick</button>
      <button class="js-filter-btn" data-filter="freefire"           role="tab">🔥 Free Fire</button>
      <button class="js-filter-btn" data-filter="setas"              role="tab">→ Setas</button>
      <button class="js-filter-btn" data-filter="coracoes"           role="tab">♥ Corações</button>
      <button class="js-filter-btn" data-filter="estrelas"           role="tab">★ Estrelas</button>
      <button class="js-filter-btn" data-filter="decoracoes"         role="tab">✿ Decorações</button>
      <button class="js-filter-btn" data-filter="matematica"         role="tab">∞ Especial</button>
    </div>

    <!-- Counter + grid -->
    <div class="gen-grid-wrap">
      <div class="ld-meta-row">
        <span class="ld-meta-row-title">Clique no símbolo para copiar</span>
        <span id="sym-counter"></span>
      </div>
      <div id="sym-grid" class="sym-grid" role="list" aria-label="Símbolos"></div>
    </div>

    <!-- Toast -->
    <div id="sym-toast" class="ld-toast" role="status" aria-live="polite"></div>

  </div>
</section>

<!-- TIPS -->
<section class="tips-section">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Como usar símbolos para nick e perfil</h2>
    </div>
    <div class="tips-grid">
      <div class="tip-card">
        <div class="tip-card-icon">🎮</div>
        <p class="tip-card-title">Nick no Free Fire</p>
        <p class="tip-card-desc">Copie o símbolo aqui, abra o Free Fire, vá em Perfil > lápis > cole no nick. Use estrelas (★), raios (⚡) e crânios (☠) para um nick épico.</p>
      </div>
      <div class="tip-card">
        <div class="tip-card-icon">📸</div>
        <p class="tip-card-title">Bio e nome no Instagram</p>
        <p class="tip-card-desc">Cole símbolos na sua bio ou nome de exibição do Instagram. Corações (❤), estrelas (✨) e flores (✿) são os mais populares para perfis criativos.</p>
      </div>
      <div class="tip-card">
        <div class="tip-card-icon">💬</div>
        <p class="tip-card-title">WhatsApp e TikTok</p>
        <p class="tip-card-desc">Cole qualquer símbolo Unicode diretamente em mensagens do WhatsApp, status ou na bio do TikTok. Funciona em todos os dispositivos sem instalação.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq-section" id="faq">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Perguntas sobre símbolos para copiar</h2>
    </div>
    <div class="faq-list">
      <details class="faq-item">
        <summary>O que são símbolos para copiar e colar?</summary>
        <div class="faq-body">Símbolos para copiar e colar são caracteres especiais do padrão Unicode — setas, estrelas, corações, formas geométricas e muito mais. Você clica, copia e cola em qualquer campo de texto: nick de jogo, bio do Instagram, WhatsApp, TikTok etc.</div>
      </details>
      <details class="faq-item">
        <summary>Os símbolos funcionam no nick do Free Fire?</summary>
        <div class="faq-body">A maioria dos símbolos Unicode funciona no nick do Free Fire: estrelas (★), espadas (⚔), coroas (♛), raios (⚡), crânios (☠) e muitos outros. Copie o símbolo aqui e cole no campo de edição do nick no app. Alguns símbolos muito raros podem não aparecer — teste antes de confirmar.</div>
      </details>
      <details class="faq-item">
        <summary>Como usar símbolos no Instagram?</summary>
        <div class="faq-body">Copie qualquer símbolo desta página e cole na bio, no nome de perfil ou nas legendas do Instagram. O Instagram aceita Unicode completo — funciona no app do Android, iPhone e na versão web.</div>
      </details>
      <details class="faq-item">
        <summary>Os símbolos funcionam no WhatsApp?</summary>
        <div class="faq-body">Sim! Cole símbolos Unicode diretamente em mensagens, status e nome de perfil do WhatsApp. Funciona no Android, iPhone e WhatsApp Web sem nenhuma instalação.</div>
      </details>
      <details class="faq-item">
        <summary>Qual a diferença entre símbolos e letras diferentes?</summary>
        <div class="faq-body">As <a href="<?php echo esc_url(home_url('/')); ?>">letras diferentes</a> são versões alternativas das letras do alfabeto (𝒜, 𝔅, 𝐂…) que você gera digitando um texto. Já os símbolos são caracteres únicos (★, ⚔, ♥…) usados para decorar nomes, bios e mensagens. Use os dois juntos para criar nicks e perfis únicos.</div>
      </details>
    </div>
  </div>
</section>

<!-- SEO ARTICLE -->
<article class="content-article">
  <div class="article-wrap">
  <h2>Símbolos para Nick: como personalizar seu perfil</h2>
  <p>Os <strong>símbolos para copiar e colar</strong> são caracteres especiais do padrão Unicode que funcionam como texto normal em qualquer plataforma. Ao contrário de imagens, eles aparecem em qualquer dispositivo — Android, iPhone, PC — sem necessidade de instalação de fontes ou apps especiais. Para uso específico em nicks de jogos como Free Fire, Discord e Valorant, veja nossa coleção dedicada de <a href="<?php echo esc_url(home_url('/simbolos-para-nick/')); ?>">símbolos para nick</a> com categorias separadas por jogo.</p>

  <h2>Símbolos para Nick do Free Fire</h2>
  <p>O <strong>Free Fire</strong> aceita centenas de símbolos Unicode no nick. Os mais usados pelos jogadores são estrelas (★ ✦), raios (⚡), caveiras (☠ 💀), espadas (⚔), coroas (♛ 👑) e chamas (🔥). Para usar: copie o símbolo aqui, abra o app do Free Fire, vá em <strong>Perfil → lápis → cole no nick</strong>. Combine símbolos com <a href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">letras diferentes para Free Fire</a> para um nick ainda mais épico.</p>

  <h2>Símbolos para Instagram e Bio</h2>
  <p>O <a href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">Instagram</a> aceita qualquer caractere Unicode no nome de exibição e na bio. <strong>Símbolos para instagram bio</strong> populares incluem estrelas (✨ ⭐), flores (✿ ❀), corações (♥ ❤ 💕) e setas (→ ►). Para a bio, combine símbolos com <a href="<?php echo esc_url(home_url('/letras-para-bio/')); ?>">letras para bio</a> para criar seções visuais distintas e se destacar na pesquisa.</p>

  <h2>Símbolos para copiar — como funciona</h2>
  <p>Todos os símbolos desta página usam o padrão <strong>Unicode</strong>, o sistema universal de caracteres que está presente em todos os sistemas operacionais e navegadores modernos. Basta clicar no símbolo desejado para copiá-lo automaticamente — nenhum aplicativo ou extensão necessária. Cole em qualquer campo de texto: <a href="<?php echo esc_url(home_url('/letras-para-whatsapp/')); ?>">WhatsApp</a>, <a href="<?php echo esc_url(home_url('/letras-para-tiktok/')); ?>">TikTok</a>, Discord, Twitter/X, Telegram e muito mais.</p>
  <div class="article-back-cta">
    <a href="#simbolos">✦ Ver todos os símbolos</a>
  </div>
  </div>
</article>

<!-- INTERNAL LINKS -->
<section class="links-section">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Explore também</h2>
    </div>
    <div class="links-grid">
      <a class="links-card" href="<?php echo esc_url(home_url('/')); ?>">✦ Gerador de Letras</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/simbolos-para-nick/')); ?>">⚔ Símbolos para Nick</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">🔥 Letras FF</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">📸 Letras Instagram</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-cursivas/')); ?>">𝓒 Letras Cursivas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-goticas/')); ?>">𝔊 Letras Góticas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-bio/')); ?>">📝 Letras para Bio</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-bonitas/')); ?>">✨ Letras Bonitas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letra-pequena/')); ?>">ᴬ Letra Pequena</a>
    </div>
  </div>
</section>

</main>

<script>
'use strict';
(function () {

/* ── SYMBOL DATA ── */
const SYMBOLS = [
  /* nick */
  {s:'★',c:'nick'},{s:'☆',c:'nick'},{s:'✦',c:'nick'},{s:'✧',c:'nick'},{s:'⭐',c:'nick'},
  {s:'👑',c:'nick'},{s:'💎',c:'nick'},{s:'🏆',c:'nick'},{s:'⚜',c:'nick'},{s:'♛',c:'nick'},
  {s:'♜',c:'nick'},{s:'♞',c:'nick'},{s:'꧁',c:'nick'},{s:'꧂',c:'nick'},{s:'•',c:'nick'},
  {s:'·',c:'nick'},{s:'°',c:'nick'},{s:'∙',c:'nick'},{s:'※',c:'nick'},{s:'‡',c:'nick'},
  {s:'†',c:'nick'},{s:'‰',c:'nick'},{s:'§',c:'nick'},{s:'¶',c:'nick'},{s:'ツ',c:'nick'},
  {s:'シ',c:'nick'},{s:'ッ',c:'nick'},{s:'ジ',c:'nick'},{s:'ヅ',c:'nick'},{s:'Ü',c:'nick'},
  {s:'ω',c:'nick'},{s:'Ω',c:'nick'},{s:'α',c:'nick'},{s:'β',c:'nick'},{s:'γ',c:'nick'},
  {s:'δ',c:'nick'},{s:'ε',c:'nick'},{s:'θ',c:'nick'},{s:'λ',c:'nick'},{s:'μ',c:'nick'},
  {s:'π',c:'nick'},{s:'σ',c:'nick'},{s:'φ',c:'nick'},{s:'ψ',c:'nick'},{s:'Δ',c:'nick'},
  {s:'Λ',c:'nick'},{s:'Σ',c:'nick'},{s:'Φ',c:'nick'},{s:'Ψ',c:'nick'},

  /* freefire */
  {s:'⚔',c:'freefire'},{s:'⚡',c:'freefire'},{s:'🔥',c:'freefire'},{s:'💀',c:'freefire'},
  {s:'☠',c:'freefire'},{s:'🩸',c:'freefire'},{s:'🎯',c:'freefire'},{s:'🎮',c:'freefire'},
  {s:'💣',c:'freefire'},{s:'🔫',c:'freefire'},{s:'🪖',c:'freefire'},{s:'🛡',c:'freefire'},
  {s:'⚔️',c:'freefire'},{s:'🗡',c:'freefire'},{s:'🏹',c:'freefire'},{s:'💥',c:'freefire'},
  {s:'🌪',c:'freefire'},{s:'❄',c:'freefire'},{s:'🌊',c:'freefire'},{s:'⚙',c:'freefire'},
  {s:'🔰',c:'freefire'},{s:'♠',c:'freefire'},{s:'♣',c:'freefire'},{s:'♦',c:'freefire'},
  {s:'♥',c:'freefire'},{s:'🃏',c:'freefire'},{s:'🎲',c:'freefire'},{s:'🎭',c:'freefire'},
  {s:'⬛',c:'freefire'},{s:'🟥',c:'freefire'},{s:'🟦',c:'freefire'},{s:'🟩',c:'freefire'},
  {s:'🟨',c:'freefire'},{s:'🟧',c:'freefire'},{s:'🟪',c:'freefire'},{s:'⬜',c:'freefire'},
  {s:'▪',c:'freefire'},{s:'▫',c:'freefire'},{s:'◾',c:'freefire'},{s:'◽',c:'freefire'},

  /* setas */
  {s:'→',c:'setas'},{s:'←',c:'setas'},{s:'↑',c:'setas'},{s:'↓',c:'setas'},
  {s:'↗',c:'setas'},{s:'↘',c:'setas'},{s:'↙',c:'setas'},{s:'↖',c:'setas'},
  {s:'↔',c:'setas'},{s:'↕',c:'setas'},{s:'⇒',c:'setas'},{s:'⇐',c:'setas'},
  {s:'⇑',c:'setas'},{s:'⇓',c:'setas'},{s:'⇔',c:'setas'},{s:'⇕',c:'setas'},
  {s:'➜',c:'setas'},{s:'➡',c:'setas'},{s:'➢',c:'setas'},{s:'➤',c:'setas'},
  {s:'➥',c:'setas'},{s:'➦',c:'setas'},{s:'➨',c:'setas'},{s:'➩',c:'setas'},
  {s:'➪',c:'setas'},{s:'➫',c:'setas'},{s:'➬',c:'setas'},{s:'➭',c:'setas'},
  {s:'➯',c:'setas'},{s:'➱',c:'setas'},{s:'►',c:'setas'},{s:'◄',c:'setas'},
  {s:'▲',c:'setas'},{s:'▼',c:'setas'},{s:'▶',c:'setas'},{s:'◀',c:'setas'},
  {s:'⟶',c:'setas'},{s:'⟵',c:'setas'},{s:'⟷',c:'setas'},{s:'↺',c:'setas'},
  {s:'↻',c:'setas'},{s:'↩',c:'setas'},{s:'↪',c:'setas'},{s:'⤴',c:'setas'},
  {s:'⤵',c:'setas'},

  /* coracoes */
  {s:'♥',c:'coracoes'},{s:'❤',c:'coracoes'},{s:'♡',c:'coracoes'},{s:'❥',c:'coracoes'},
  {s:'❣',c:'coracoes'},{s:'💕',c:'coracoes'},{s:'💗',c:'coracoes'},{s:'💓',c:'coracoes'},
  {s:'💞',c:'coracoes'},{s:'💝',c:'coracoes'},{s:'💖',c:'coracoes'},{s:'💘',c:'coracoes'},
  {s:'💟',c:'coracoes'},{s:'❦',c:'coracoes'},{s:'❧',c:'coracoes'},{s:'💜',c:'coracoes'},
  {s:'💙',c:'coracoes'},{s:'💚',c:'coracoes'},{s:'🧡',c:'coracoes'},{s:'💛',c:'coracoes'},
  {s:'🖤',c:'coracoes'},{s:'🤍',c:'coracoes'},{s:'🤎',c:'coracoes'},{s:'💔',c:'coracoes'},
  {s:'❤️‍🔥',c:'coracoes'},{s:'❤️‍🩹',c:'coracoes'},

  /* estrelas */
  {s:'★',c:'estrelas'},{s:'☆',c:'estrelas'},{s:'✦',c:'estrelas'},{s:'✧',c:'estrelas'},
  {s:'✩',c:'estrelas'},{s:'✪',c:'estrelas'},{s:'✫',c:'estrelas'},{s:'✬',c:'estrelas'},
  {s:'✭',c:'estrelas'},{s:'✮',c:'estrelas'},{s:'✯',c:'estrelas'},{s:'✰',c:'estrelas'},
  {s:'⭐',c:'estrelas'},{s:'🌟',c:'estrelas'},{s:'💫',c:'estrelas'},{s:'✨',c:'estrelas'},
  {s:'☀',c:'estrelas'},{s:'🌙',c:'estrelas'},{s:'🌛',c:'estrelas'},{s:'🌜',c:'estrelas'},
  {s:'🌝',c:'estrelas'},{s:'🌚',c:'estrelas'},{s:'☁',c:'estrelas'},{s:'⛅',c:'estrelas'},
  {s:'🌈',c:'estrelas'},{s:'❄',c:'estrelas'},{s:'☃',c:'estrelas'},{s:'⛄',c:'estrelas'},
  {s:'🌺',c:'estrelas'},{s:'🌸',c:'estrelas'},{s:'🌼',c:'estrelas'},{s:'🌻',c:'estrelas'},
  {s:'🌹',c:'estrelas'},{s:'🍀',c:'estrelas'},{s:'🦋',c:'estrelas'},{s:'🌊',c:'estrelas'},

  /* decoracoes */
  {s:'✿',c:'decoracoes'},{s:'❀',c:'decoracoes'},{s:'❁',c:'decoracoes'},{s:'❃',c:'decoracoes'},
  {s:'❋',c:'decoracoes'},{s:'◉',c:'decoracoes'},{s:'◎',c:'decoracoes'},{s:'●',c:'decoracoes'},
  {s:'◯',c:'decoracoes'},{s:'○',c:'decoracoes'},{s:'◌',c:'decoracoes'},{s:'◍',c:'decoracoes'},
  {s:'◈',c:'decoracoes'},{s:'◇',c:'decoracoes'},{s:'◆',c:'decoracoes'},{s:'◅',c:'decoracoes'},
  {s:'▻',c:'decoracoes'},{s:'△',c:'decoracoes'},{s:'▽',c:'decoracoes'},{s:'■',c:'decoracoes'},
  {s:'□',c:'decoracoes'},{s:'▪',c:'decoracoes'},{s:'▫',c:'decoracoes'},{s:'▬',c:'decoracoes'},
  {s:'▭',c:'decoracoes'},{s:'▮',c:'decoracoes'},{s:'▯',c:'decoracoes'},{s:'┄',c:'decoracoes'},
  {s:'┅',c:'decoracoes'},{s:'┈',c:'decoracoes'},{s:'┉',c:'decoracoes'},{s:'═',c:'decoracoes'},
  {s:'║',c:'decoracoes'},{s:'╔',c:'decoracoes'},{s:'╗',c:'decoracoes'},{s:'╚',c:'decoracoes'},
  {s:'╝',c:'decoracoes'},{s:'╠',c:'decoracoes'},{s:'╣',c:'decoracoes'},{s:'╦',c:'decoracoes'},
  {s:'╩',c:'decoracoes'},{s:'╬',c:'decoracoes'},{s:'〈',c:'decoracoes'},{s:'〉',c:'decoracoes'},
  {s:'《',c:'decoracoes'},{s:'》',c:'decoracoes'},{s:'「',c:'decoracoes'},{s:'」',c:'decoracoes'},
  {s:'『',c:'decoracoes'},{s:'』',c:'decoracoes'},{s:'【',c:'decoracoes'},{s:'】',c:'decoracoes'},
  {s:'〖',c:'decoracoes'},{s:'〗',c:'decoracoes'},{s:'〔',c:'decoracoes'},{s:'〕',c:'decoracoes'},

  /* matematica */
  {s:'∞',c:'matematica'},{s:'∑',c:'matematica'},{s:'√',c:'matematica'},{s:'∆',c:'matematica'},
  {s:'π',c:'matematica'},{s:'Ω',c:'matematica'},{s:'±',c:'matematica'},{s:'×',c:'matematica'},
  {s:'÷',c:'matematica'},{s:'≠',c:'matematica'},{s:'≈',c:'matematica'},{s:'≤',c:'matematica'},
  {s:'≥',c:'matematica'},{s:'∈',c:'matematica'},{s:'∉',c:'matematica'},{s:'∩',c:'matematica'},
  {s:'∪',c:'matematica'},{s:'⊂',c:'matematica'},{s:'⊃',c:'matematica'},{s:'∂',c:'matematica'},
  {s:'∫',c:'matematica'},{s:'∮',c:'matematica'},{s:'∝',c:'matematica'},{s:'∴',c:'matematica'},
  {s:'∵',c:'matematica'},{s:'⊕',c:'matematica'},{s:'⊗',c:'matematica'},{s:'⊥',c:'matematica'},
  {s:'‖',c:'matematica'},{s:'∣',c:'matematica'},{s:'¬',c:'matematica'},{s:'∧',c:'matematica'},
  {s:'∨',c:'matematica'},{s:'⊤',c:'matematica'},{s:'⊢',c:'matematica'},{s:'⊨',c:'matematica'},
  {s:'©',c:'matematica'},{s:'®',c:'matematica'},{s:'™',c:'matematica'},{s:'℠',c:'matematica'},
  {s:'$',c:'matematica'},{s:'€',c:'matematica'},{s:'£',c:'matematica'},{s:'¥',c:'matematica'},
  {s:'¢',c:'matematica'},{s:'₿',c:'matematica'},
];

/* ── STATE ── */
let curFilter = 'all';
let search    = '';

/* ── ELEMENTS ── */
const grid       = document.getElementById('sym-grid');
const counter    = document.getElementById('sym-counter');
const searchEl   = document.getElementById('sym-search');
const filterBtns = document.querySelectorAll('.js-filter-btn');
const toast      = document.getElementById('sym-toast');

/* ── TOAST ── */
function showToast(msg) {
  toast.textContent = msg;
  toast.classList.add('show');
  clearTimeout(toast._t);
  toast._t = setTimeout(() => toast.classList.remove('show'), 1800);
}

/* ── COPY ── */
function copySymbol(sym, btn) {
  navigator.clipboard.writeText(sym).then(() => {
    btn.classList.add('copied');
    setTimeout(() => btn.classList.remove('copied'), 900);
    showToast('✅ ' + sym + '  copiado!');
  }).catch(() => {
    const ta = document.createElement('textarea');
    ta.value = sym;
    ta.style.cssText = 'position:fixed;opacity:0;pointer-events:none';
    document.body.appendChild(ta);
    ta.select();
    document.execCommand('copy');
    document.body.removeChild(ta);
    btn.classList.add('copied');
    setTimeout(() => btn.classList.remove('copied'), 900);
    showToast('✅ ' + sym + '  copiado!');
  });
}

/* ── RENDER ── */
function render() {
  let list = SYMBOLS;
  if (curFilter !== 'all') list = list.filter(s => s.c === curFilter);
  if (search) list = list.filter(s => s.s.includes(search));

  counter.textContent = list.length + ' símbolos';

  if (list.length === 0) {
    grid.innerHTML = '<p style="padding:32px;text-align:center;color:var(--muted)">Nenhum símbolo encontrado.</p>';
    return;
  }

  grid.innerHTML = list.map((s, i) =>
    `<button class="sym-btn" data-s="${s.s}" title="Copiar ${s.s}" aria-label="Copiar símbolo ${s.s}" style="animation-delay:${i * 8}ms" role="listitem">${s.s}</button>`
  ).join('');

  grid.querySelectorAll('.sym-btn').forEach(btn => {
    btn.addEventListener('click', () => copySymbol(btn.dataset.s, btn));
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
