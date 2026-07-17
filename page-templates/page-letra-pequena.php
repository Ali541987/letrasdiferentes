<?php
/**
 * Template Name: Página de Letra Pequena
 * Letras Diferentes Online — Gerador de letra pequena, sobrescrito, subscrito e small caps
 */

get_header();

ld_schema_faq([
    ['q'=>'Como colocar letra pequena em cima do texto?',
     'a'=>'Use o campo do gerador acima: digite o texto, clique em "Sobrescrito" e copie o resultado com um toque. Os caracteres gerados são Unicode sobrescrito (ᵃᵇᶜ) e funcionam em qualquer app — WhatsApp, Instagram, Free Fire, Discord — sem instalar nada.'],
    ['q'=>'Como fazer letra pequena no teclado do celular?',
     'a'=>'O teclado padrão do Android e do iPhone não tem atalho para sobrescrito. A forma mais rápida é usar o gerador desta página: digite o texto, toque em Sobrescrito ou Small Caps, copie e cole onde precisar.'],
    ['q'=>'Letra pequena FF: como colocar no nick do Free Fire?',
     'a'=>'Digite o nick desejado no gerador, escolha o estilo Sobrescrito ou Small Caps, copie o resultado e abra o Free Fire. Vá em Perfil, toque no lápis ao lado do nome, cole o texto e salve. Os caracteres Unicode pequenos são aceitos pelo Free Fire.'],
    ['q'=>'O que é sobrescrito e subscrito?',
     'a'=>'Sobrescrito (superscript) são letras ou números que aparecem acima da linha normal do texto: ᵃᵇᶜ ou ¹²³. Subscrito (subscript) são caracteres que aparecem abaixo: ₐₑₒ ou ₁₂₃. Ambos existem como caracteres Unicode padrão e não precisam de formatação especial para funcionar fora de editores de texto.'],
    ['q'=>'Números pequenos em cima para copiar: como fazer?',
     'a'=>'Use o gerador e digite apenas os números desejados (ex: 123). O estilo Sobrescrito gera ¹²³, que são os caracteres Unicode de expoente. Funcionam em qualquer campo de texto sem formatação especial.'],
    ['q'=>'Letras pequenas funcionam no WhatsApp?',
     'a'=>'Sim. Os caracteres sobrescrito (ᵃᵇᶜ) e small caps (ᴀʙᴄ) são texto Unicode padrão e funcionam em mensagens, status e nome de perfil do WhatsApp no Android e iPhone.'],
    ['q'=>'Como deixar a letra pequena no Instagram?',
     'a'=>'Gere o texto no estilo Sobrescrito ou Small Caps neste gerador, copie e cole na bio ou no nome de exibição do Instagram. O Instagram aceita qualquer caractere Unicode nesses campos.'],
    ['q'=>'Letras pequenas para bio: qual estilo usar?',
     'a'=>'O estilo Small Caps (ᴀʙᴄ) é o mais usado em bios porque mantém a legibilidade em textos mais longos. O Sobrescrito (ᵃᵇᶜ) fica bem para destacar uma palavra ou criar efeitos visuais dentro de uma frase.'],
]);

ld_schema_breadcrumb([
    ['name' => 'Letras Diferentes Online', 'url' => home_url('/')],
    ['name' => 'Letra Pequena', 'url' => get_permalink()],
]);

ld_schema_software(
    'Gerador de Letra Pequena',
    'Gere letras pequenas Unicode — sobrescrito, subscrito, small caps e números em expoente. Copie em 1 clique, grátis.',
    get_permalink()
);
?>

<main>
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="Localização">
  <a href="<?php echo esc_url(home_url('/')); ?>">Início</a>
  <span aria-hidden="true">›</span>
  <span>Letra Pequena</span>
</nav>

<!-- HERO -->
<section class="plat-hero">
  <div class="plat-icon" aria-hidden="true">ᴬ</div>
  <h1>Letra Pequena para Copiar — Gerador de Texto Pequeno</h1>
  <p>Gere letras pequenas Unicode: sobrescrito ᵃᵇᶜ, small caps ᴀʙᴄ, subscrito ₐₑₒ e números em expoente ¹²³. Funciona no Free Fire, Instagram, WhatsApp e Discord. Copie em 1 clique.</p>
</section>

<!-- GENERATOR -->
<section class="generator-section" id="gerador" aria-label="Gerador de letra pequena">
  <div class="generator-box">

    <div class="gen-input-area">
      <span class="gen-input-icon" aria-hidden="true">✍️</span>
      <input
        type="text"
        id="lp-input"
        placeholder="Digite seu texto aqui…"
        maxlength="80"
        autocomplete="off"
        autocorrect="off"
        autocapitalize="off"
        spellcheck="false"
        aria-label="Digite o texto para converter em letra pequena"
      >
      <span id="lp-char-count" class="char-count">0/80</span>
      <button id="lp-clear" aria-label="Limpar texto">Limpar</button>
    </div>

    <div class="gen-grid-wrap" style="margin-top:16px">
      <div class="ld-meta-row">
        <span class="ld-meta-row-title">Estilos de letra pequena</span>
        <span id="lp-hint" style="font-size:.82rem;color:var(--muted)">Digite um texto acima</span>
      </div>
      <div id="lp-grid" class="ld-grid" role="list" aria-label="Estilos de letra pequena"></div>
    </div>

    <div id="lp-toast" class="ld-toast" role="status" aria-live="polite"></div>

  </div>
</section>

<!-- TIPS -->
<section class="tips-section">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Como usar letras pequenas</h2>
    </div>
    <div class="tips-grid">
      <div class="tip-card">
        <div class="tip-card-icon">🔥</div>
        <p class="tip-card-title">Nick no Free Fire</p>
        <p class="tip-card-desc">Digite o nick no gerador, escolha Sobrescrito ou Small Caps, copie e cole no campo de edição do nick dentro do app do Free Fire. O estilo Small Caps é o mais usado nos nicks competitivos brasileiros.</p>
      </div>
      <div class="tip-card">
        <div class="tip-card-icon">📸</div>
        <p class="tip-card-title">Bio e nome no Instagram</p>
        <p class="tip-card-desc">Cole letras pequenas Unicode diretamente no nome de exibição ou na bio do Instagram. O Small Caps fica bem para nome de perfil. O Sobrescrito cria efeitos únicos dentro de frases na bio.</p>
      </div>
      <div class="tip-card">
        <div class="tip-card-icon">🔢</div>
        <p class="tip-card-title">Números em expoente</p>
        <p class="tip-card-desc">Digite apenas números (ex: 123) e use o estilo Sobrescrito para gerar ¹²³. Útil para notação científica, graus (°), citações numeradas e nicks com expoentes decorativos.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq-section" id="faq">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Perguntas sobre letra pequena</h2>
    </div>
    <div class="faq-list">
      <details class="faq-item">
        <summary>Como colocar letra pequena em cima do texto?</summary>
        <div class="faq-body">Use o campo do gerador acima: digite o texto, clique em "Sobrescrito" e copie o resultado. Os caracteres gerados são Unicode sobrescrito (ᵃᵇᶜ) e funcionam em qualquer app — WhatsApp, Instagram, Free Fire, Discord — sem instalar nada.</div>
      </details>
      <details class="faq-item">
        <summary>Como fazer letra pequena no teclado do celular?</summary>
        <div class="faq-body">O teclado padrão do Android e do iPhone não tem atalho para sobrescrito. A forma mais rápida é usar o gerador desta página: digite o texto, toque em Sobrescrito ou Small Caps, copie e cole onde precisar.</div>
      </details>
      <details class="faq-item">
        <summary>Letra pequena FF: como colocar no nick do Free Fire?</summary>
        <div class="faq-body">Digite o nick no gerador, escolha o estilo Sobrescrito ou Small Caps, copie o resultado e abra o Free Fire. Vá em Perfil, toque no lápis ao lado do nome, cole o texto e salve. Os caracteres Unicode pequenos são aceitos pelo Free Fire.</div>
      </details>
      <details class="faq-item">
        <summary>O que é sobrescrito e subscrito?</summary>
        <div class="faq-body">Sobrescrito (superscript) são letras ou números que aparecem acima da linha normal do texto: ᵃᵇᶜ ou ¹²³. Subscrito (subscript) são caracteres que aparecem abaixo: ₐₑₒ ou ₁₂₃. Ambos existem como caracteres Unicode padrão e funcionam em qualquer app de texto sem formatação especial.</div>
      </details>
      <details class="faq-item">
        <summary>Números pequenos em cima para copiar: como fazer?</summary>
        <div class="faq-body">Use o gerador e digite apenas os números desejados (ex: 123). O estilo Sobrescrito gera ¹²³, que são os caracteres Unicode de expoente. Funcionam em qualquer campo de texto sem formatação especial.</div>
      </details>
      <details class="faq-item">
        <summary>Letras pequenas funcionam no WhatsApp?</summary>
        <div class="faq-body">Sim. Os caracteres sobrescrito (ᵃᵇᶜ) e small caps (ᴀʙᴄ) são texto Unicode padrão e funcionam em mensagens, status e nome de perfil do WhatsApp no Android e iPhone.</div>
      </details>
      <details class="faq-item">
        <summary>Como deixar a letra pequena no Instagram?</summary>
        <div class="faq-body">Gere o texto no estilo Sobrescrito ou Small Caps neste gerador, copie e cole na bio ou no nome de exibição do Instagram. O Instagram aceita qualquer caractere Unicode nesses campos.</div>
      </details>
      <details class="faq-item">
        <summary>Letras pequenas para bio: qual estilo usar?</summary>
        <div class="faq-body">O estilo Small Caps (ᴀʙᴄ) é o mais usado em bios porque mantém a legibilidade em textos mais longos. O Sobrescrito (ᵃᵇᶜ) fica bem para destacar uma palavra ou criar efeitos visuais dentro de uma frase.</div>
      </details>
    </div>
  </div>
</section>

<!-- ARTICLE -->
<article class="content-article">
  <div class="article-wrap">

  <h2>O que é letra pequena: sobrescrito, subscrito e small caps</h2>
  <p>O termo "letra pequena" cobre três categorias distintas de caracteres do padrão <strong>Unicode</strong> (mantido pelo Unicode Consortium, fundado em 1991 em Mountain View, Califórnia, com 154.998 caracteres catalogados na versão 16.0). O <strong>sobrescrito</strong> (superscript) são caracteres que aparecem acima da linha base do texto: ᵃ ᵇ ᶜ ᵈ ᵉ ᶠ ᵍ ʰ ⁱ ʲ ᵏ ˡ ᵐ ⁿ ᵒ ᵖ ʳ ˢ ᵗ ᵘ ᵛ ʷ ˣ ʸ ᶻ. O <strong>subscrito</strong> (subscript) são caracteres posicionados abaixo da linha base: ₐ ₑ ₒ ₓ ₙ ᵤ ᵥ ᵢ (cobertura parcial no Unicode). As <strong>small caps</strong> são versões menores das letras maiúsculas que ocupam a altura de uma letra minúscula: ᴀ ʙ ᴄ ᴅ ᴇ ꜰ ɢ ʜ ɪ ᴊ ᴋ ʟ ᴍ ɴ ᴏ ᴘ ǫ ʀ ꜱ ᴛ ᴜ ᴠ ᴡ ʏ ᴢ.</p>
  <p>O sobrescrito e o subscrito foram incorporados ao Unicode originalmente para uso em notação matemática e científica — expoentes (x²), fórmulas químicas (H₂O), indicadores ordinais (1ª, 2º). Com o crescimento do uso de texto em redes sociais, esses caracteres migraram para um uso totalmente novo: personalizar nicks de jogos, criar bios diferenciadas e escrever mensagens com visual único. As small caps, por sua vez, têm origem tipográfica — são um recurso de design clássico para títulos e siglas, mas também fazem sucesso como estilo de "letra pequena bonita" em perfis do Instagram e Free Fire.</p>

  <h2>Letra pequena para nick: Free Fire, Discord e Instagram</h2>
  <p>O <strong>Free Fire</strong> (desenvolvido pelo 111 Dots Studio e publicado pela <strong>Garena</strong> em 2017) aceita caracteres Unicode no nick, incluindo sobrescrito e small caps. O limite de 12 caracteres do nick no Free Fire favorece esses estilos porque o visual menor cria a percepção de que cabe mais informação no mesmo espaço. Os nicks mais comuns que usam letra pequena no FF combinam letras small caps com símbolos: ᴋɪɴɢ★, ᴅᴀʀᴋ⚡, ᴘʀᴏ🔥. Para usar no Free Fire: gere o texto no estilo Small Caps no gerador acima, copie e cole no campo de edição do nick dentro do app.</p>
  <p>O <strong>Discord</strong> (fundado em 2015 por Jason Citron, com 19+ milhões de servidores ativos) aceita Unicode completo no nome de exibição, em nomes de servidores e em canais. Small caps são populares em servidores de gaming porque criam hierarquia visual nos cargos e nicknames sem usar letras maiúsculas em caixa alta, que em texto online é associado a gritar. No <strong>Instagram</strong> (<strong>Meta Platforms</strong>), o sobrescrito é menos comum no nome de perfil pela limitação de leitura em texto menor, mas funciona bem como detalhe estético em bios — por exemplo, uma frase com ᵛᵒᶜᵉ ᵉˢᵗᵃ ᵃᑫᵘⁱ intercalada com texto normal.</p>

  <h2>Sobrescrito vs subscrito: diferença e como usar cada um</h2>
  <p>A diferença principal entre sobrescrito e subscrito é a <strong>posição vertical</strong> em relação à linha base do texto. O sobrescrito sobe: ᵃᵇᶜ. O subscrito desce: ₐₑₒ. Em termos de cobertura Unicode, o sobrescrito tem suporte para todas as 26 letras do alfabeto latino mais os dígitos 0 a 9. O subscrito tem cobertura parcial: apenas as letras a, e, i, j, n, o, u, v e x têm equivalentes subscritos no Unicode padrão. Quando o Unicode não tem um subscrito para determinada letra, o gerador mantém o caractere original para não distorcer o texto.</p>
  <p>Na prática, o sobrescrito é mais versátil para uso em nicks e bios porque tem cobertura completa do alfabeto. O subscrito funciona melhor para textos com vogais (ₐₑᵢₒᵤ) ou para inserir números abaixo da linha (H₂O, CO₂). Os <strong>números subscritos</strong> (₀₁₂₃₄₅₆₇₈₉) têm cobertura completa no Unicode e são muito usados em fórmulas, referências numeradas e nomes personalizados.</p>

  <h2>Números pequenos em cima (expoente) para copiar</h2>
  <p>Os <strong>números sobrescritos</strong> do Unicode são: ⁰ ¹ ² ³ ⁴ ⁵ ⁶ ⁷ ⁸ ⁹. Use o gerador desta página digitando apenas os números desejados e selecionando o estilo Sobrescrito. Os usos mais comuns no Brasil:</p>
  <ul>
    <li><strong>Indicadores de potência</strong>: 10² (cem), 2³ (oito)</li>
    <li><strong>Graus</strong>: 37° → combine com o símbolo ° (U+00B0)</li>
    <li><strong>Nicks com número em expoente</strong>: Player¹, KingFF², Ninja³</li>
    <li><strong>Notação abreviada</strong>: km², m³, área em m²</li>
    <li><strong>Números ordinais</strong>: 1º, 2ª (usando sobrescrito para o "o" e o "a")</li>
  </ul>
  <p>Os números subscritos (₀₁₂₃₄₅₆₇₈₉) têm cobertura completa e são usados em fórmulas químicas (H₂O, NaCl), índices matemáticos e como efeito visual em nicks. Digite os números no gerador e selecione o estilo Subscrito para copiá-los.</p>

  <h2>Como colocar letra pequena em cima no celular e computador</h2>
  <p>O caminho mais rápido em qualquer dispositivo é o gerador desta página. Em celulares Android e iPhone, o teclado padrão não oferece atalho direto para sobrescrito fora de apps de edição de texto como <strong>Microsoft Word</strong> (que tem o botão x² na aba Início) e <strong>Google Docs</strong> (Formatar > Texto > Sobrescrito). Mas nesses editores, a formatação sobrescrito é visual e não transferível para campos de texto simples como o nick do Free Fire ou a bio do Instagram — ela funciona apenas dentro do próprio documento.</p>
  <p>Os caracteres Unicode sobrescrito e subscrito gerados por esta página são diferentes: são caracteres de texto comum, não formatação. Por isso funcionam em qualquer campo, em qualquer app, em qualquer sistema operacional. Após copiar o texto gerado, basta colar no destino como faria com qualquer outro texto. Em <a href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">Free Fire</a>, <a href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">Instagram</a>, <a href="<?php echo esc_url(home_url('/letras-para-whatsapp/')); ?>">WhatsApp</a> e Discord o processo é idêntico: copie, abra o app, cole no campo desejado. Veja também nossa coleção de <a href="<?php echo esc_url(home_url('/letras-personalizadas/')); ?>">letras personalizadas</a> para mais estilos Unicode.</p>

  <div class="article-back-cta">
    <a href="#gerador">ᴬ Gerar letra pequena agora</a>
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
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-personalizadas/')); ?>">🎨 Letras Personalizadas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">🔥 Letras FF</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-cursivas/')); ?>">𝓒 Letras Cursivas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-goticas/')); ?>">𝔊 Letras Góticas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-bonitas/')); ?>">✨ Letras Bonitas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/simbolos-para-nick/')); ?>">⚔ Símbolos para Nick</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/tipos-de-letras/')); ?>">🔤 Tipos de Letras</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/fontes-de-letras/')); ?>">🖋 Fontes de Letras</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">📸 Letras Instagram</a>
    </div>
  </div>
</section>

</main>

<script>
'use strict';
(function () {

/* ── CHARACTER MAPS ── */
const SUPER_MAP = {
  'a':'ᵃ','b':'ᵇ','c':'ᶜ','d':'ᵈ','e':'ᵉ','f':'ᶠ','g':'ᵍ','h':'ʰ','i':'ⁱ',
  'j':'ʲ','k':'ᵏ','l':'ˡ','m':'ᵐ','n':'ⁿ','o':'ᵒ','p':'ᵖ','q':'ᑫ','r':'ʳ',
  's':'ˢ','t':'ᵗ','u':'ᵘ','v':'ᵛ','w':'ʷ','x':'ˣ','y':'ʸ','z':'ᶻ',
  'A':'ᴬ','B':'ᴮ','D':'ᴰ','E':'ᴱ','G':'ᴳ','H':'ᴴ','I':'ᴵ','J':'ᴶ','K':'ᴷ',
  'L':'ᴸ','M':'ᴹ','N':'ᴺ','O':'ᴼ','P':'ᴾ','R':'ᴿ','T':'ᵀ','U':'ᵁ','V':'ⱽ','W':'ᵂ',
  '0':'⁰','1':'¹','2':'²','3':'³','4':'⁴','5':'⁵','6':'⁶','7':'⁷','8':'⁸','9':'⁹',
  '+':'⁺','-':'⁻','=':'⁼','(':'⁽',')':'⁾'
};

const SUB_MAP = {
  'a':'ₐ','e':'ₑ','o':'ₒ','x':'ₓ','n':'ₙ','u':'ᵤ','v':'ᵥ','i':'ᵢ','j':'ⱼ',
  '0':'₀','1':'₁','2':'₂','3':'₃','4':'₄','5':'₅','6':'₆','7':'₇','8':'₈','9':'₉',
  '+':'₊','-':'₋','=':'₌','(':'₍',')':'₎'
};

const SMALL_MAP = {
  'a':'ᴀ','b':'ʙ','c':'ᴄ','d':'ᴅ','e':'ᴇ','f':'ꜰ','g':'ɢ','h':'ʜ','i':'ɪ',
  'j':'ᴊ','k':'ᴋ','l':'ʟ','m':'ᴍ','n':'ɴ','o':'ᴏ','p':'ᴘ','q':'ǫ','r':'ʀ',
  's':'ꜱ','t':'ᴛ','u':'ᴜ','v':'ᴠ','w':'ᴡ','x':'x','y':'ʏ','z':'ᴢ',
  'A':'ᴀ','B':'ʙ','C':'ᴄ','D':'ᴅ','E':'ᴇ','F':'ꜰ','G':'ɢ','H':'ʜ','I':'ɪ',
  'J':'ᴊ','K':'ᴋ','L':'ʟ','M':'ᴍ','N':'ɴ','O':'ᴏ','P':'ᴘ','Q':'ǫ','R':'ʀ',
  'S':'ꜱ','T':'ᴛ','U':'ᴜ','V':'ᴠ','W':'ᴡ','X':'x','Y':'ʏ','Z':'ᴢ'
};

function convert(text, map) {
  return text.split('').map(c => map[c] !== undefined ? map[c] : c).join('');
}

/* ── STYLES ── */
const STYLES = [
  {
    id: 'super',
    name: 'Sobrescrito',
    desc: 'Letras acima da linha — ᵃᵇᶜ',
    map: SUPER_MAP,
    tag: '📤',
  },
  {
    id: 'small',
    name: 'Small Caps',
    desc: 'Maiúsculas pequenas — ᴀʙᴄ',
    map: SMALL_MAP,
    tag: 'ᴬ',
  },
  {
    id: 'sub',
    name: 'Subscrito',
    desc: 'Letras abaixo da linha — ₐₑₒ',
    map: SUB_MAP,
    tag: '📥',
  },
];

/* ── ELEMENTS ── */
const input   = document.getElementById('lp-input');
const counter = document.getElementById('lp-char-count');
const clearBtn = document.getElementById('lp-clear');
const grid    = document.getElementById('lp-grid');
const hint    = document.getElementById('lp-hint');
const toast   = document.getElementById('lp-toast');

/* ── TOAST ── */
function showToast(msg) {
  toast.textContent = msg;
  toast.classList.add('show');
  clearTimeout(toast._t);
  toast._t = setTimeout(() => toast.classList.remove('show'), 1800);
}

/* ── COPY ── */
function copyText(text, btn) {
  navigator.clipboard.writeText(text).then(() => {
    btn.classList.add('copied');
    setTimeout(() => btn.classList.remove('copied'), 900);
    showToast('✅ Copiado!');
  }).catch(() => {
    const ta = document.createElement('textarea');
    ta.value = text;
    ta.style.cssText = 'position:fixed;opacity:0;pointer-events:none';
    document.body.appendChild(ta);
    ta.select();
    document.execCommand('copy');
    document.body.removeChild(ta);
    btn.classList.add('copied');
    setTimeout(() => btn.classList.remove('copied'), 900);
    showToast('✅ Copiado!');
  });
}

/* ── RENDER ── */
function render() {
  const text = input.value;
  counter.textContent = text.length + '/80';

  if (!text.trim()) {
    grid.innerHTML = '';
    hint.textContent = 'Digite um texto acima';
    return;
  }

  hint.textContent = STYLES.length + ' estilos disponíveis';

  grid.innerHTML = STYLES.map((style, i) => {
    const result = convert(text, style.map);
    return '<div class="ld-card" role="listitem" style="animation-delay:' + (i * 60) + 'ms">' +
      '<div class="ld-card-label">' + style.tag + ' ' + style.name + '</div>' +
      '<div class="ld-card-desc" style="font-size:.8rem;color:var(--muted);margin-bottom:6px">' + style.desc + '</div>' +
      '<button class="ld-card-copy js-copy" data-result="' + result.replace(/"/g, '&quot;') + '" aria-label="Copiar ' + style.name + '">' +
        '<span class="ld-card-preview">' + result + '</span>' +
        '<span class="ld-copy-icon">⧉</span>' +
      '</button>' +
    '</div>';
  }).join('');

  grid.querySelectorAll('.js-copy').forEach(btn => {
    btn.addEventListener('click', () => copyText(btn.dataset.result, btn));
  });
}

/* ── EVENTS ── */
input.addEventListener('input', render);

clearBtn.addEventListener('click', () => {
  input.value = '';
  render();
  input.focus();
});

/* ── INIT ── */
render();

})();
</script>

<?php get_footer(); ?>
