<?php
/**
 * Template Name: Página de Símbolos para Nick
 * Letras Diferentes Online — Símbolos para nick: Free Fire, Discord, Valorant, PUBG e mais
 */

get_header();

ld_schema_faq([
    ['q'=>'Quais símbolos funcionam no nick do Free Fire?',
     'a'=>'O Free Fire aceita a maioria dos símbolos Unicode: estrelas (★ ✦), raios (⚡), crânios (☠ 💀), coroas (♛ 👑), espadas (⚔), chamas (🔥), os ornamentos ꧁ e ꧂ e letras japonesas como ツ. Copie o símbolo aqui e cole no campo de edição do nick dentro do aplicativo.'],
    ['q'=>'Como colocar símbolos no nick do Discord?',
     'a'=>'O Discord aceita qualquer caractere Unicode no nome de exibição do perfil e nos nomes de servidores. Copie o símbolo desta página, abra o Discord, vá em Configurações de usuário > Meu perfil > edite o nome de exibição e cole. Funciona no app mobile e no desktop.'],
    ['q'=>'Posso usar símbolos japoneses como ツ no nick?',
     'a'=>'Sim. O ツ (katakana "tsu") e caracteres similares como シ, ジ e ッ são amplamente aceitos em nicks de jogos e redes sociais. Eles pertencem ao bloco Katakana do Unicode (U+30A0 a U+30FF) e são renderizados corretamente em Android, iPhone e Windows.'],
    ['q'=>'Os símbolos aparecem igual para todos os jogadores?',
     'a'=>'Sim, desde que os dispositivos dos outros jogadores tenham suporte Unicode — o que é o caso de qualquer Android, iPhone ou PC com Windows 10+ e versões recentes do macOS. Símbolos muito raros (acima de U+10000) podem não aparecer em dispositivos muito antigos.'],
    ['q'=>'Qual símbolo de coroa usar no nick do Free Fire?',
     'a'=>'Os mais usados são ♛ (coroa preta, U+265B), ♜ (torre de xadrez), 👑 (emoji de coroa) e ⚜ (flor de lis dourada). O ♛ é o favorito dos jogadores brasileiros por ser menor e encaixar bem entre letras no nick.'],
    ['q'=>'Quantos caracteres posso usar no nick do Free Fire?',
     'a'=>'O Free Fire permite até 12 caracteres no nick. Símbolos Unicode geralmente ocupam 1 ou 2 posições de caractere. Os ornamentos ꧁ e ꧂ ocupam 1 caractere cada. Planeje o nick com no máximo 8 a 10 letras para ter espaço para 2 a 3 símbolos.'],
    ['q'=>'Símbolos para nick de menina',
     'a'=>'Os símbolos mais populares em nicks femininos são: corações (♥ ❤ 💕 💗), flores (✿ ❀ ❁ 🌸 🌺), estrelas (✦ ★ ✨ 💫), borboletas (🦋), coroas (♛ 👑) e ornamentos decorativos como ꧁ e ꧂. Combine com letras cursivas do nosso gerador para um nick completo.'],
    ['q'=>'Símbolos para nick de menino',
     'a'=>'Os mais usados em nicks masculinos são: espadas (⚔ 🗡), crânios (☠ 💀), raios (⚡), chamas (🔥), coroas (♛), estrelas (★ ✦), armas (🔫 🏹 💣) e letras gregas (Ω Δ Σ). O Free Fire tem categorias específicas de nicks temáticos de guerra, sobrevivência e esporte.'],
]);

ld_schema_breadcrumb([
    ['name' => 'Letras Diferentes Online', 'url' => home_url('/')],
    ['name' => 'Símbolos para Nick', 'url' => get_permalink()],
]);

ld_schema_software(
    'Símbolos para Nick',
    '500+ símbolos Unicode para nick do Free Fire, Discord, Valorant e mais. Copie em 1 clique — grátis.',
    get_permalink()
);
?>

<main>

<nav class="breadcrumb" aria-label="Localização">
  <a href="<?php echo esc_url(home_url('/')); ?>">Início</a>
  <span aria-hidden="true">›</span>
  <a href="<?php echo esc_url(home_url('/simbolos/')); ?>">Símbolos</a>
  <span aria-hidden="true">›</span>
  <span>Símbolos para Nick</span>
</nav>

<section class="plat-hero">
  <div class="plat-icon" aria-hidden="true">⚔</div>
  <h1>Símbolos para Nick — 500+ para Copiar e Colar</h1>
  <p>Símbolos Unicode para nick do Free Fire, Discord, Valorant, PUBG e mais. Clique para copiar instantaneamente.</p>
</section>

<section class="generator-section" id="simbolos" aria-label="Símbolos para nick">
  <div class="generator-box">
    <div class="sym-search-wrap">
      <input type="search" id="sym-search" placeholder="🔍 Buscar símbolo…" autocomplete="off" spellcheck="false" aria-label="Buscar símbolo">
    </div>
    <div class="gen-filters" role="tablist" aria-label="Categorias de símbolos">
      <span class="filter-label">Jogo / Tipo:</span>
      <button class="js-filter-btn is-active" data-filter="all" role="tab">Todos</button>
      <button class="js-filter-btn" data-filter="ff" role="tab">🔥 Free Fire</button>
      <button class="js-filter-btn" data-filter="discord" role="tab">🎮 Discord</button>
      <button class="js-filter-btn" data-filter="valorant" role="tab">🔫 Valorant</button>
      <button class="js-filter-btn" data-filter="pubg" role="tab">🪖 PUBG</button>
      <button class="js-filter-btn" data-filter="estrelas" role="tab">★ Estrelas</button>
      <button class="js-filter-btn" data-filter="coracoes" role="tab">♥ Corações</button>
      <button class="js-filter-btn" data-filter="japones" role="tab">ツ Japonês</button>
      <button class="js-filter-btn" data-filter="decoracao" role="tab">◆ Decoração</button>
      <button class="js-filter-btn" data-filter="nick" role="tab">👑 Nick Geral</button>
    </div>
    <div class="gen-grid-wrap">
      <div class="ld-meta-row">
        <span class="ld-meta-row-title">Clique no símbolo para copiar</span>
        <span id="sym-counter"></span>
      </div>
      <div id="sym-grid" class="sym-grid" role="list" aria-label="Símbolos para nick"></div>
    </div>
    <div id="sym-toast" class="ld-toast" role="status" aria-live="polite"></div>
  </div>
</section>

<section class="tips-section">
  <div class="wrap">
    <div class="tips-grid">

      <div class="tip-card">
        <div class="tip-icon" aria-hidden="true">🔥</div>
        <h3 class="tip-title">Nick no Free Fire</h3>
        <p class="tip-body">Copie o símbolo aqui, abra o Free Fire, acesse Perfil &gt; lápis e cole no nick. Estrelas (★), raios (⚡), crânios (☠) e coroas (♛) são os mais usados pelos jogadores BR.</p>
      </div>

      <div class="tip-card">
        <div class="tip-icon" aria-hidden="true">🎮</div>
        <h3 class="tip-title">Discord e Valorant</h3>
        <p class="tip-body">O Discord aceita qualquer caractere Unicode no nome de exibição e em servidores. O Valorant permite símbolos no #tag. Cole diretamente no campo de edição do perfil.</p>
      </div>

      <div class="tip-card">
        <div class="tip-icon" aria-hidden="true">ツ</div>
        <h3 class="tip-title">Katakana e japonês</h3>
        <p class="tip-body">Caracteres japoneses como ツ シ ジ e ッ são populares em nicks de jogadores. Eles pertencem ao bloco Katakana (U+30A0-U+30FF) do Unicode e funcionam em quase todos os jogos.</p>
      </div>

    </div>
  </div>
</section>

<section class="article-section">
  <div class="wrap">
    <div class="article-content">

      <h2>Símbolos para nick: o que funciona em cada jogo</h2>
      <p>O Unicode Consortium, fundado em 1991 e com sede em Mountain View, Califórnia, define os padrões de caracteres usados em todos os sistemas modernos. A versão 16.0 do Unicode cataloga 154.998 caracteres, incluindo símbolos, letras gregas, caracteres japoneses e ornamentos decorativos. Todos os símbolos desta página são caracteres Unicode oficiais, não imagens, o que significa que funcionam em qualquer plataforma que tenha suporte ao padrão.</p>
      <p>O Free Fire, desenvolvido pelo estúdio 111 Dots Studio e publicado pela Garena desde 2017, foi o jogo mobile mais baixado do mundo em 2019 e aceitou caracteres Unicode no campo de nick desde as primeiras versões. O Discord Inc., fundado em 2015 por Jason Citron e Stanislav Vishnevskiy, conta com mais de 19 milhões de servidores ativos por dia e passou por uma atualização do sistema de nomes de usuário em 2023 que ampliou o suporte a caracteres especiais nos nomes de exibição. O Valorant, lançado pela Riot Games em junho de 2020 com 22 agentes e 9 mapas, aceita símbolos no nome de exibição. O PUBG Mobile, lançado pela PUBG Corporation (hoje parte da Krafton) em 2018, também suporta Unicode no campo de nome do jogador.</p>

      <h2>Símbolos para nick no Free Fire: lista com os mais usados</h2>
      <p>O Free Fire permite até 12 caracteres no nick, contando letras e símbolos. Os que funcionam de forma consistente dentro do jogo são: ★ ✦ ꧁ ꧂ ⚔ ⚡ ☠ 💀 🔥 ♛ ♜ ツ シ 👑 ⚜. Para editar o nick, acesse o Free Fire, toque no ícone de perfil no canto superior esquerdo e toque no lápis ao lado do nome. Cole o símbolo copiado diretamente no campo de texto.</p>
      <p>Os ornamentos ꧁ e ꧂ (caracteres U+A9C1 e U+A9C2, do script javanês) se tornaram populares porque enquadram visualmente o nick, criando um efeito de moldura ao redor do nome. Cada um ocupa apenas 1 posição de caractere, deixando espaço para até 10 letras entre eles. O ツ (U+30C4, caractere katakana "tsu") ganhou popularidade global em comunidades de jogadores por volta de 2010 a 2012 por lembrar visualmente um rosto sorridente, e hoje é um dos símbolos mais reconhecíveis em nicks ao redor do mundo.</p>

      <h2>Símbolos para nick no Discord e Valorant</h2>
      <p>O Discord, lançado em 2015, atualizou seu sistema de identidade de usuário em 2023 para permitir nomes de exibição com suporte completo a caracteres Unicode. Isso significa que você pode usar qualquer símbolo desta página no seu nome de exibição do Discord. Os símbolos que ficam melhores em nomes de Discord são os geométricos e decorativos: ◈ ◆ ◇ ▲ △ ✦ ◉ ● ⬛ 🔵 🟢 🔴, pois mantêm boa legibilidade em tamanhos pequenos de fonte.</p>
      <p>No Valorant, os símbolos funcionam no nome de exibição, mas a Riot Tag (o sufixo #xxxx que acompanha o nome) aceita apenas caracteres alfanuméricos. No PUBG Mobile, publicado pela Krafton em 2018, o campo de nome aceita símbolos Unicode normalmente, e os mais usados pelos jogadores são: 👑 ★ ⚔ ☠ ⚡ 🔥. Vale testar cada símbolo escolhido antes de confirmar, pois filtros de conteúdo em alguns jogos podem bloquear caracteres específicos dependendo da região do servidor.</p>

      <h2>Símbolos japoneses e chineses para nick: guia completo</h2>
      <p>O Unicode organiza os caracteres em blocos por idioma e tipo. O bloco Katakana (U+30A0 a U+30FF) contém 96 caracteres, incluindo o ツ e outros populares em nicks como シ, ジ e ッ. O bloco Hiragana (U+3040 a U+309F) contém os caracteres silábicos japoneses mais suaves. Já o bloco CJK Unified Ideographs (U+4E00 a U+9FFF) reúne 20.902 ideogramas chineses e japoneses (kanji) comuns. Todos eles são suportados por qualquer Android moderno, iPhone com iOS 10+ e Windows 10.</p>
      <p>Entre os caracteres chineses mais usados em nicks de jogadores estão: 龍 (dragão), 王 (rei), 神 (divindade ou deus), e 武 (guerreiro ou marcial). Esses caracteres ficam bem em nicks curtos porque carregam significado visual forte mesmo para quem não lê chinês ou japonês. Uma ressalva prática: alguns jogos com servidores regionais têm filtros contra caracteres CJK específicos, especialmente aqueles com conotações políticas ou religiosas. Sempre teste o nick com os símbolos escolhidos antes de pagar para trocar o nome dentro do jogo.</p>

      <h2>Como usar símbolos para criar um nick épico: exemplos</h2>
      <p>A combinação de símbolos com um nome ou apelido segue algumas regras visuais simples. Símbolos iguais nas duas pontas do nick criam simetria e ficam bem em qualquer fonte. Símbolos temáticos no meio do nick, entre palavras, funcionam melhor quando o nick tem duas partes, como nome e sobrenome ou apelido e número. A mistura de um símbolo grande (como ♛ ou ⚔) com um símbolo menor (como ★ ou ·) cria hierarquia visual sem poluir o nome.</p>
      <p>Para um resultado ainda mais personalizado, combine os símbolos desta página com <a href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">letras para Free Fire</a> ou com <a href="<?php echo esc_url(home_url('/letras-personalizadas/')); ?>">letras personalizadas</a> do nosso gerador. Os nicks abaixo mostram combinações que funcionam bem no Free Fire, Discord e PUBG:</p>
      <ul class="nick-examples">
        <li><code>꧁★ Leandro ★꧂</code></li>
        <li><code>⚔ GUERREIRO ⚡</code></li>
        <li><code>💀 ASSASSINO 💀</code></li>
        <li><code>♛ RainhaSofia ♛</code></li>
        <li><code>ツ Pedro ツ</code></li>
        <li><code>☠ Dark_Wolf ☠</code></li>
        <li><code>🔥 FF_Pro_BR 🔥</code></li>
        <li><code>✦ Valentina ✦</code></li>
        <li><code>👑 KingJunior 👑</code></li>
        <li><code>⚜ EliteGamer ⚜</code></li>
      </ul>

    </div>
  </div>
</section>

<?php ld_ad(LD_AD_BELOW_GENERATOR); ?>

<section class="faq-section" id="faq">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Perguntas sobre símbolos para nick</h2>
    </div>
    <div class="faq-list">

      <details class="faq-item">
        <summary class="faq-question">Quais símbolos funcionam no nick do Free Fire?</summary>
        <div class="faq-answer"><p>O Free Fire aceita a maioria dos símbolos Unicode: estrelas (★ ✦), raios (⚡), crânios (☠ 💀), coroas (♛ 👑), espadas (⚔), chamas (🔥), os ornamentos ꧁ e ꧂ e letras japonesas como ツ. Copie o símbolo aqui e cole no campo de edição do nick dentro do aplicativo.</p></div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">Como colocar símbolos no nick do Discord?</summary>
        <div class="faq-answer"><p>O Discord aceita qualquer caractere Unicode no nome de exibição do perfil e nos nomes de servidores. Copie o símbolo desta página, abra o Discord, vá em Configurações de usuário &gt; Meu perfil &gt; edite o nome de exibição e cole. Funciona no app mobile e no desktop.</p></div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">Posso usar símbolos japoneses como ツ no nick?</summary>
        <div class="faq-answer"><p>Sim. O ツ (katakana "tsu") e caracteres similares como シ, ジ e ッ são amplamente aceitos em nicks de jogos e redes sociais. Eles pertencem ao bloco Katakana do Unicode (U+30A0 a U+30FF) e são renderizados corretamente em Android, iPhone e Windows.</p></div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">Os símbolos aparecem igual para todos os jogadores?</summary>
        <div class="faq-answer"><p>Sim, desde que os dispositivos dos outros jogadores tenham suporte Unicode — o que é o caso de qualquer Android, iPhone ou PC com Windows 10+ e versões recentes do macOS. Símbolos muito raros (acima de U+10000) podem não aparecer em dispositivos muito antigos.</p></div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">Qual símbolo de coroa usar no nick do Free Fire?</summary>
        <div class="faq-answer"><p>Os mais usados são ♛ (coroa preta, U+265B), ♜ (torre de xadrez), 👑 (emoji de coroa) e ⚜ (flor de lis dourada). O ♛ é o favorito dos jogadores brasileiros por ser menor e encaixar bem entre letras no nick.</p></div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">Quantos caracteres posso usar no nick do Free Fire?</summary>
        <div class="faq-answer"><p>O Free Fire permite até 12 caracteres no nick. Símbolos Unicode geralmente ocupam 1 ou 2 posições de caractere. Os ornamentos ꧁ e ꧂ ocupam 1 caractere cada. Planeje o nick com no máximo 8 a 10 letras para ter espaço para 2 a 3 símbolos.</p></div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">Símbolos para nick de menina</summary>
        <div class="faq-answer"><p>Os símbolos mais populares em nicks femininos são: corações (♥ ❤ 💕 💗), flores (✿ ❀ ❁ 🌸 🌺), estrelas (✦ ★ ✨ 💫), borboletas (🦋), coroas (♛ 👑) e ornamentos decorativos como ꧁ e ꧂. Combine com letras cursivas do nosso gerador para um nick completo.</p></div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">Símbolos para nick de menino</summary>
        <div class="faq-answer"><p>Os mais usados em nicks masculinos são: espadas (⚔ 🗡), crânios (☠ 💀), raios (⚡), chamas (🔥), coroas (♛), estrelas (★ ✦), armas (🔫 🏹 💣) e letras gregas (Ω Δ Σ). O Free Fire tem categorias específicas de nicks temáticos de guerra, sobrevivência e esporte.</p></div>
      </details>

    </div>
  </div>
</section>

<?php ld_ad(LD_AD_MID_CONTENT); ?>
<?php ld_ad(LD_AD_BEFORE_LINKS); ?>

<section class="links-section">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Explore também</h2>
    </div>
    <div class="links-grid">
      <a class="links-card" href="<?php echo esc_url(home_url('/')); ?>">✦ Gerador de Letras</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/simbolos/')); ?>">✦ Símbolos</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">🔥 Letras FF</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-personalizadas/')); ?>">🎨 Letras Personalizadas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-cursivas/')); ?>">𝓒 Letras Cursivas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-goticas/')); ?>">𝔊 Letras Góticas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">📸 Letras Instagram</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/tipos-de-letras/')); ?>">🔤 Tipos de Letras</a>
    </div>
  </div>
</section>

</main>

<script>
'use strict';
(function () {

const SYMBOLS = [
  /* ff */
  {s:'꧁',c:'ff'},{s:'꧂',c:'ff'},{s:'★',c:'ff'},{s:'☆',c:'ff'},{s:'✦',c:'ff'},
  {s:'✧',c:'ff'},{s:'⭐',c:'ff'},{s:'♛',c:'ff'},{s:'♜',c:'ff'},{s:'♞',c:'ff'},
  {s:'⚜',c:'ff'},{s:'⚔',c:'ff'},{s:'⚡',c:'ff'},{s:'🔥',c:'ff'},{s:'💀',c:'ff'},
  {s:'☠',c:'ff'},{s:'🩸',c:'ff'},{s:'🎯',c:'ff'},{s:'💣',c:'ff'},{s:'🔫',c:'ff'},
  {s:'🪖',c:'ff'},{s:'🛡',c:'ff'},{s:'🗡',c:'ff'},{s:'🏹',c:'ff'},{s:'💥',c:'ff'},
  {s:'💎',c:'ff'},{s:'🏆',c:'ff'},{s:'👑',c:'ff'},{s:'🌪',c:'ff'},{s:'🔰',c:'ff'},
  {s:'♠',c:'ff'},{s:'♣',c:'ff'},{s:'♦',c:'ff'},{s:'♥',c:'ff'},{s:'✘',c:'ff'},
  {s:'✗',c:'ff'},{s:'✕',c:'ff'},{s:'✖',c:'ff'},{s:'◉',c:'ff'},{s:'◎',c:'ff'},
  {s:'●',c:'ff'},{s:'ツ',c:'ff'},{s:'シ',c:'ff'},{s:'ジ',c:'ff'},{s:'ッ',c:'ff'},
  {s:'ヅ',c:'ff'},{s:'Ω',c:'ff'},{s:'α',c:'ff'},{s:'β',c:'ff'},{s:'γ',c:'ff'},
  {s:'δ',c:'ff'},{s:'ε',c:'ff'},{s:'θ',c:'ff'},{s:'λ',c:'ff'},{s:'μ',c:'ff'},
  {s:'π',c:'ff'},{s:'σ',c:'ff'},{s:'φ',c:'ff'},{s:'ψ',c:'ff'},{s:'Δ',c:'ff'},
  {s:'Λ',c:'ff'},{s:'Σ',c:'ff'},{s:'Φ',c:'ff'},{s:'Ψ',c:'ff'},
  /* discord */
  {s:'◈',c:'discord'},{s:'◆',c:'discord'},{s:'◇',c:'discord'},{s:'◉',c:'discord'},{s:'●',c:'discord'},
  {s:'○',c:'discord'},{s:'▲',c:'discord'},{s:'△',c:'discord'},{s:'▽',c:'discord'},{s:'▼',c:'discord'},
  {s:'■',c:'discord'},{s:'□',c:'discord'},{s:'▪',c:'discord'},{s:'▫',c:'discord'},{s:'◾',c:'discord'},
  {s:'◽',c:'discord'},{s:'✦',c:'discord'},{s:'✧',c:'discord'},{s:'✩',c:'discord'},{s:'✪',c:'discord'},
  {s:'✫',c:'discord'},{s:'✬',c:'discord'},{s:'✭',c:'discord'},{s:'✮',c:'discord'},{s:'✯',c:'discord'},
  {s:'✰',c:'discord'},{s:'★',c:'discord'},{s:'☆',c:'discord'},{s:'⭐',c:'discord'},{s:'🌟',c:'discord'},
  {s:'💫',c:'discord'},{s:'✨',c:'discord'},{s:'🔵',c:'discord'},{s:'🟢',c:'discord'},{s:'🔴',c:'discord'},
  {s:'🟡',c:'discord'},{s:'🟣',c:'discord'},{s:'⚫',c:'discord'},{s:'⚪',c:'discord'},{s:'🎮',c:'discord'},
  {s:'🕹',c:'discord'},{s:'🎯',c:'discord'},{s:'🏅',c:'discord'},{s:'🥇',c:'discord'},{s:'🔔',c:'discord'},
  {s:'🎵',c:'discord'},{s:'🎶',c:'discord'},
  /* valorant */
  {s:'⚔',c:'valorant'},{s:'🗡',c:'valorant'},{s:'🏹',c:'valorant'},{s:'🔫',c:'valorant'},{s:'💥',c:'valorant'},
  {s:'🎯',c:'valorant'},{s:'🛡',c:'valorant'},{s:'♦',c:'valorant'},{s:'◆',c:'valorant'},{s:'◈',c:'valorant'},
  {s:'▲',c:'valorant'},{s:'△',c:'valorant'},{s:'▽',c:'valorant'},{s:'▼',c:'valorant'},{s:'✦',c:'valorant'},
  {s:'✧',c:'valorant'},{s:'◉',c:'valorant'},{s:'●',c:'valorant'},{s:'⭐',c:'valorant'},{s:'🌟',c:'valorant'},
  {s:'✨',c:'valorant'},{s:'💎',c:'valorant'},{s:'🏆',c:'valorant'},{s:'⚜',c:'valorant'},{s:'♛',c:'valorant'},
  {s:'👑',c:'valorant'},{s:'🔥',c:'valorant'},{s:'⚡',c:'valorant'},{s:'💀',c:'valorant'},{s:'☠',c:'valorant'},
  {s:'🩸',c:'valorant'},
  /* pubg */
  {s:'🪖',c:'pubg'},{s:'🛡',c:'pubg'},{s:'🔫',c:'pubg'},{s:'💣',c:'pubg'},{s:'🗡',c:'pubg'},
  {s:'🏹',c:'pubg'},{s:'⚔',c:'pubg'},{s:'💥',c:'pubg'},{s:'🎯',c:'pubg'},{s:'⚡',c:'pubg'},
  {s:'🔥',c:'pubg'},{s:'💀',c:'pubg'},{s:'☠',c:'pubg'},{s:'★',c:'pubg'},{s:'⭐',c:'pubg'},
  {s:'✦',c:'pubg'},{s:'♛',c:'pubg'},{s:'👑',c:'pubg'},{s:'💎',c:'pubg'},{s:'🏆',c:'pubg'},
  {s:'♠',c:'pubg'},{s:'♣',c:'pubg'},{s:'♦',c:'pubg'},{s:'♥',c:'pubg'},{s:'⬛',c:'pubg'},
  {s:'🟥',c:'pubg'},{s:'🟦',c:'pubg'},{s:'🟩',c:'pubg'},{s:'🟨',c:'pubg'},{s:'🟧',c:'pubg'},
  /* estrelas */
  {s:'★',c:'estrelas'},{s:'☆',c:'estrelas'},{s:'✦',c:'estrelas'},{s:'✧',c:'estrelas'},{s:'✩',c:'estrelas'},
  {s:'✪',c:'estrelas'},{s:'✫',c:'estrelas'},{s:'✬',c:'estrelas'},{s:'✭',c:'estrelas'},{s:'✮',c:'estrelas'},
  {s:'✯',c:'estrelas'},{s:'✰',c:'estrelas'},{s:'⭐',c:'estrelas'},{s:'🌟',c:'estrelas'},{s:'💫',c:'estrelas'},
  {s:'✨',c:'estrelas'},{s:'☀',c:'estrelas'},{s:'🌙',c:'estrelas'},{s:'🌛',c:'estrelas'},{s:'🌜',c:'estrelas'},
  {s:'⛅',c:'estrelas'},{s:'🌈',c:'estrelas'},{s:'❄',c:'estrelas'},{s:'☃',c:'estrelas'},{s:'⛄',c:'estrelas'},
  {s:'🌺',c:'estrelas'},{s:'🌸',c:'estrelas'},{s:'🌼',c:'estrelas'},{s:'🌻',c:'estrelas'},{s:'🌹',c:'estrelas'},
  {s:'🍀',c:'estrelas'},{s:'🦋',c:'estrelas'},{s:'🌊',c:'estrelas'},{s:'🌪',c:'estrelas'},{s:'🌐',c:'estrelas'},
  /* coracoes */
  {s:'♥',c:'coracoes'},{s:'❤',c:'coracoes'},{s:'♡',c:'coracoes'},{s:'❥',c:'coracoes'},{s:'❣',c:'coracoes'},
  {s:'💕',c:'coracoes'},{s:'💗',c:'coracoes'},{s:'💓',c:'coracoes'},{s:'💞',c:'coracoes'},{s:'💝',c:'coracoes'},
  {s:'💖',c:'coracoes'},{s:'💘',c:'coracoes'},{s:'💟',c:'coracoes'},{s:'❦',c:'coracoes'},{s:'❧',c:'coracoes'},
  {s:'💜',c:'coracoes'},{s:'💙',c:'coracoes'},{s:'💚',c:'coracoes'},{s:'🧡',c:'coracoes'},{s:'💛',c:'coracoes'},
  {s:'🖤',c:'coracoes'},{s:'🤍',c:'coracoes'},{s:'🤎',c:'coracoes'},{s:'💔',c:'coracoes'},{s:'💌',c:'coracoes'},
  {s:'💒',c:'coracoes'},{s:'🪷',c:'coracoes'},{s:'🌸',c:'coracoes'},{s:'🌺',c:'coracoes'},{s:'🌹',c:'coracoes'},
  /* japones */
  {s:'ツ',c:'japones'},{s:'シ',c:'japones'},{s:'ジ',c:'japones'},{s:'ッ',c:'japones'},{s:'ヅ',c:'japones'},
  {s:'ア',c:'japones'},{s:'イ',c:'japones'},{s:'ウ',c:'japones'},{s:'エ',c:'japones'},{s:'オ',c:'japones'},
  {s:'カ',c:'japones'},{s:'キ',c:'japones'},{s:'ク',c:'japones'},{s:'ケ',c:'japones'},{s:'コ',c:'japones'},
  {s:'サ',c:'japones'},{s:'ス',c:'japones'},{s:'セ',c:'japones'},{s:'ソ',c:'japones'},{s:'タ',c:'japones'},
  {s:'テ',c:'japones'},{s:'ト',c:'japones'},{s:'ナ',c:'japones'},{s:'ニ',c:'japones'},{s:'ヌ',c:'japones'},
  {s:'ネ',c:'japones'},{s:'ノ',c:'japones'},{s:'ハ',c:'japones'},{s:'ヒ',c:'japones'},{s:'フ',c:'japones'},
  {s:'ヘ',c:'japones'},{s:'ホ',c:'japones'},{s:'マ',c:'japones'},{s:'ミ',c:'japones'},{s:'ム',c:'japones'},
  {s:'メ',c:'japones'},{s:'モ',c:'japones'},{s:'ヤ',c:'japones'},{s:'ユ',c:'japones'},{s:'ヨ',c:'japones'},
  {s:'ラ',c:'japones'},{s:'リ',c:'japones'},{s:'ル',c:'japones'},{s:'レ',c:'japones'},{s:'ロ',c:'japones'},
  {s:'ワ',c:'japones'},{s:'ヲ',c:'japones'},{s:'ン',c:'japones'},{s:'ヴ',c:'japones'},{s:'ガ',c:'japones'},
  {s:'ギ',c:'japones'},{s:'グ',c:'japones'},{s:'ゲ',c:'japones'},{s:'ゴ',c:'japones'},{s:'ザ',c:'japones'},
  {s:'ズ',c:'japones'},{s:'ゼ',c:'japones'},{s:'ゾ',c:'japones'},{s:'ダ',c:'japones'},{s:'デ',c:'japones'},
  {s:'ド',c:'japones'},{s:'バ',c:'japones'},{s:'ビ',c:'japones'},{s:'ブ',c:'japones'},{s:'ベ',c:'japones'},
  {s:'ボ',c:'japones'},{s:'パ',c:'japones'},{s:'ピ',c:'japones'},{s:'プ',c:'japones'},{s:'ペ',c:'japones'},
  {s:'ポ',c:'japones'},
  /* decoracao */
  {s:'『',c:'decoracao'},{s:'』',c:'decoracao'},{s:'「',c:'decoracao'},{s:'」',c:'decoracao'},{s:'【',c:'decoracao'},
  {s:'】',c:'decoracao'},{s:'〖',c:'decoracao'},{s:'〗',c:'decoracao'},{s:'〔',c:'decoracao'},{s:'〕',c:'decoracao'},
  {s:'《',c:'decoracao'},{s:'》',c:'decoracao'},{s:'〈',c:'decoracao'},{s:'〉',c:'decoracao'},{s:'═',c:'decoracao'},
  {s:'║',c:'decoracao'},{s:'╔',c:'decoracao'},{s:'╗',c:'decoracao'},{s:'╚',c:'decoracao'},{s:'╝',c:'decoracao'},
  {s:'╠',c:'decoracao'},{s:'╣',c:'decoracao'},{s:'╦',c:'decoracao'},{s:'╩',c:'decoracao'},{s:'╬',c:'decoracao'},
  {s:'╭',c:'decoracao'},{s:'╮',c:'decoracao'},{s:'╰',c:'decoracao'},{s:'╯',c:'decoracao'},{s:'━',c:'decoracao'},
  {s:'┄',c:'decoracao'},{s:'┅',c:'decoracao'},{s:'┈',c:'decoracao'},{s:'┉',c:'decoracao'},{s:'▬',c:'decoracao'},
  {s:'▭',c:'decoracao'},{s:'▮',c:'decoracao'},{s:'▯',c:'decoracao'},{s:'•',c:'decoracao'},{s:'·',c:'decoracao'},
  {s:'°',c:'decoracao'},{s:'∙',c:'decoracao'},{s:'‡',c:'decoracao'},{s:'†',c:'decoracao'},{s:'‰',c:'decoracao'},
  {s:'§',c:'decoracao'},{s:'¶',c:'decoracao'},{s:'◦',c:'decoracao'},{s:'⁕',c:'decoracao'},{s:'⁑',c:'decoracao'},
  {s:'⁂',c:'decoracao'},{s:'※',c:'decoracao'},{s:'⊹',c:'decoracao'},{s:'✤',c:'decoracao'},{s:'✢',c:'decoracao'},
  {s:'✣',c:'decoracao'},{s:'✥',c:'decoracao'},{s:'✽',c:'decoracao'},{s:'✾',c:'decoracao'},{s:'✿',c:'decoracao'},
  {s:'❀',c:'decoracao'},{s:'❁',c:'decoracao'},{s:'❃',c:'decoracao'},{s:'❋',c:'decoracao'},
  /* nick */
  {s:'ω',c:'nick'},{s:'Ω',c:'nick'},{s:'α',c:'nick'},{s:'β',c:'nick'},{s:'γ',c:'nick'},
  {s:'δ',c:'nick'},{s:'ε',c:'nick'},{s:'θ',c:'nick'},{s:'λ',c:'nick'},{s:'μ',c:'nick'},
  {s:'π',c:'nick'},{s:'σ',c:'nick'},{s:'φ',c:'nick'},{s:'ψ',c:'nick'},{s:'Δ',c:'nick'},
  {s:'Λ',c:'nick'},{s:'Σ',c:'nick'},{s:'Φ',c:'nick'},{s:'Ψ',c:'nick'},{s:'•',c:'nick'},
  {s:'·',c:'nick'},{s:'°',c:'nick'},{s:'∙',c:'nick'},{s:'¡',c:'nick'},{s:'¿',c:'nick'},
  {s:'‼',c:'nick'},{s:'⁉',c:'nick'},{s:'™',c:'nick'},{s:'®',c:'nick'},{s:'©',c:'nick'},
  {s:'№',c:'nick'},{s:'∞',c:'nick'},{s:'∑',c:'nick'},{s:'√',c:'nick'},{s:'±',c:'nick'},
  {s:'×',c:'nick'},{s:'÷',c:'nick'},{s:'≠',c:'nick'},{s:'≈',c:'nick'},{s:'≤',c:'nick'},
  {s:'≥',c:'nick'},{s:'∈',c:'nick'},{s:'∩',c:'nick'},{s:'∪',c:'nick'},{s:'⊕',c:'nick'},
  {s:'⊗',c:'nick'},{s:'⊥',c:'nick'},{s:'¬',c:'nick'},{s:'∧',c:'nick'},{s:'∨',c:'nick'},
  {s:'$',c:'nick'},{s:'€',c:'nick'},{s:'£',c:'nick'},{s:'¥',c:'nick'},{s:'¢',c:'nick'},
];

let curFilter = 'all';
let search    = '';

const grid       = document.getElementById('sym-grid');
const counter    = document.getElementById('sym-counter');
const searchEl   = document.getElementById('sym-search');
const filterBtns = document.querySelectorAll('.js-filter-btn');
const toast      = document.getElementById('sym-toast');

function showToast(msg) {
  toast.textContent = msg;
  toast.classList.add('show');
  clearTimeout(toast._t);
  toast._t = setTimeout(() => toast.classList.remove('show'), 1800);
}

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
    '<button class="sym-btn" data-s="' + s.s.replace(/"/g, '&quot;') + '" title="Copiar ' + s.s + '" aria-label="Copiar símbolo ' + s.s + '" style="animation-delay:' + (i * 8) + 'ms" role="listitem">' + s.s + '</button>'
  ).join('');

  grid.querySelectorAll('.sym-btn').forEach(btn => {
    btn.addEventListener('click', () => copySymbol(btn.dataset.s, btn));
  });
}

filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    curFilter = btn.dataset.filter;
    filterBtns.forEach(b => b.classList.toggle('is-active', b === btn));
    render();
  });
});

if (searchEl) {
  searchEl.addEventListener('input', () => {
    search = searchEl.value.trim();
    render();
  });
}

render();

})();
</script>

<?php get_footer(); ?>
