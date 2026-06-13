<?php
/**
 * Template Name: Página Legal
 * Letras Diferentes Online — Legal pages (Privacidade, Termos, Cookies)
 */

get_header();

$slug = get_post_field('post_name', get_the_ID());
$site = 'LetrasDiferentesOnline.com';
$url  = home_url('/');
$email = 'contato@letrasdiferentesonline.com';
$updated = '20 de maio de 2026';

/* ── CONTENT MAP ── */
$legal = [

/* ════════════════════════════════════════════════════════════
   POLÍTICA DE PRIVACIDADE
════════════════════════════════════════════════════════════ */
'politica-de-privacidade' => [
  'title' => 'Política de Privacidade',
  'content' => "
<h2>1. Identificação do Controlador</h2>
<p><strong>LetrasDiferentesOnline.com</strong> (\"nós\", \"nosso\" ou \"site\") é o controlador dos dados pessoais tratados neste site, nos termos da Lei Geral de Proteção de Dados (LGPD — Lei nº 13.709/2018). Em caso de dúvidas sobre esta política, entre em contato pelo e-mail: <a href=\"mailto:{$email}\">{$email}</a>.</p>

<h2>2. Dados Coletados e Finalidade</h2>
<p>O {$site} é uma ferramenta gratuita de geração de texto. A coleta de dados é mínima e transparente:</p>
<table class=\"legal-table\">
  <thead><tr><th>Dado</th><th>Finalidade</th><th>Base Legal (LGPD)</th></tr></thead>
  <tbody>
    <tr><td>Preferências de tema (claro/escuro)</td><td>Lembrar sua preferência visual entre visitas</td><td>Legítimo interesse (Art. 7º, IX)</td></tr>
    <tr><td>Histórico de buscas (últimas 8)</td><td>Exibir suas buscas recentes para conveniência</td><td>Legítimo interesse (Art. 7º, IX)</td></tr>
    <tr><td>Favoritos salvos</td><td>Recordar os estilos marcados como favoritos</td><td>Legítimo interesse (Art. 7º, IX)</td></tr>
    <tr><td>Dados de navegação anônimos</td><td>Análise de uso via Google Analytics (sem identificação pessoal)</td><td>Consentimento (Art. 7º, I)</td></tr>
  </tbody>
</table>
<p>Os dados de preferências, histórico e favoritos são armazenados <strong>exclusivamente no seu dispositivo</strong> via <code>localStorage</code> do navegador. Nenhum dado desse tipo é enviado ou armazenado em nossos servidores.</p>

<h2>3. Dados que NÃO Coletamos</h2>
<p>Não coletamos, solicitamos nem armazenamos: nome completo, e-mail, telefone, endereço, CPF, dados de cartão de crédito ou qualquer outro dado de identificação pessoal. O uso do site não requer criação de conta ou qualquer forma de cadastro.</p>

<h2>4. Cookies e Tecnologias Similares</h2>
<p>Utilizamos cookies para fins de análise de tráfego (Google Analytics). Esses cookies coletam dados de forma agregada e anônima — não identificam você pessoalmente. Para informações detalhadas sobre os cookies utilizados, consulte nossa <a href=\"/politica-de-cookies/\">Política de Cookies</a>. Você pode desativar os cookies analíticos nas configurações do seu navegador sem perda de funcionalidade do site.</p>

<h2>5. Compartilhamento de Dados</h2>
<p>Não vendemos, alugamos nem comercializamos seus dados pessoais com terceiros. Compartilhamos dados analíticos agregados e anônimos com:</p>
<ul>
  <li><strong>Google Analytics</strong> (Google LLC): para análise de tráfego e comportamento de uso. Dados anônimos, sem identificação pessoal. <a href=\"https://policies.google.com/privacy\" target=\"_blank\" rel=\"noopener\">Política de Privacidade do Google</a>.</li>
</ul>

<h2>6. Transferência Internacional de Dados</h2>
<p>O Google Analytics pode processar dados em servidores localizados nos Estados Unidos. Essa transferência é realizada sob os mecanismos de salvaguarda previstos na LGPD (Art. 33), incluindo cláusulas contratuais padrão reconhecidas pela autoridade competente.</p>

<h2>7. Retenção de Dados</h2>
<p>Os dados armazenados via <code>localStorage</code> permanecem no seu dispositivo até que você os apague manualmente (limpando os dados do navegador) ou desinstale o aplicativo. Dados analíticos do Google Analytics são retidos por 26 meses, conforme configuração padrão da plataforma.</p>

<h2>8. Seus Direitos como Titular (Art. 18, LGPD)</h2>
<p>Nos termos da LGPD, você tem direito a:</p>
<ul>
  <li><strong>Acesso</strong>: confirmar se tratamos seus dados e obter cópia deles</li>
  <li><strong>Correção</strong>: solicitar a correção de dados incompletos, inexatos ou desatualizados</li>
  <li><strong>Eliminação</strong>: solicitar a eliminação dos dados tratados com base em consentimento</li>
  <li><strong>Portabilidade</strong>: receber seus dados em formato estruturado e interoperável</li>
  <li><strong>Revogação do consentimento</strong>: retirar consentimento a qualquer momento, sem prejuízo ao uso anterior</li>
  <li><strong>Oposição</strong>: se opor ao tratamento realizado com base em legítimo interesse</li>
  <li><strong>Informação</strong>: ser informado sobre as entidades com as quais compartilhamos dados</li>
</ul>
<p>Para exercer qualquer um desses direitos, entre em contato pelo e-mail <a href=\"mailto:{$email}\">{$email}</a>. Responderemos em até 15 dias úteis.</p>

<h2>9. Segurança</h2>
<p>Adotamos medidas técnicas e organizacionais razoáveis para proteger as informações tratadas. Como os dados de preferências são armazenados localmente no seu dispositivo, a segurança desse armazenamento depende também da proteção do próprio dispositivo pelo usuário.</p>

<h2>10. Links Externos</h2>
<p>Nosso site pode conter links para sites externos (Instagram, WhatsApp, Google, etc.). Esta Política de Privacidade aplica-se exclusivamente ao {$site}. Recomendamos a leitura das políticas de privacidade de qualquer site externo que você acesse.</p>

<h2>11. Alterações nesta Política</h2>
<p>Podemos atualizar esta Política de Privacidade periodicamente. Alterações significativas serão comunicadas por aviso no site. A data da última atualização está indicada no topo desta página. O uso continuado do site após alterações implica aceitação da nova versão.</p>

<h2>12. Contato e Encarregado de Dados (DPO)</h2>
<p>Para exercer seus direitos, esclarecer dúvidas ou registrar reclamações sobre o tratamento de dados pessoais, entre em contato:</p>
<p><strong>E-mail</strong>: <a href=\"mailto:{$email}\">{$email}</a><br>
<strong>Site</strong>: <a href=\"{$url}\">{$url}</a></p>
<p>Você também pode registrar reclamações perante a <strong>Autoridade Nacional de Proteção de Dados (ANPD)</strong>: <a href=\"https://www.gov.br/anpd\" target=\"_blank\" rel=\"noopener\">www.gov.br/anpd</a>.</p>
",
],

/* ════════════════════════════════════════════════════════════
   TERMOS DE USO
════════════════════════════════════════════════════════════ */
'termos-de-uso' => [
  'title' => 'Termos de Uso',
  'content' => "
<h2>1. Aceitação dos Termos</h2>
<p>Ao acessar e usar o <strong>LetrasDiferentesOnline.com</strong> (\"site\" ou \"serviço\"), você concorda com estes Termos de Uso. Se não concordar com qualquer parte destes termos, não utilize o site.</p>

<h2>2. Descrição do Serviço</h2>
<p>O {$site} é uma ferramenta gratuita de conversão de texto que gera caracteres Unicode estilizados (letras cursivas, góticas, negrito, estético e outros estilos) a partir de qualquer texto digitado pelo usuário. O serviço é oferecido gratuitamente, sem necessidade de cadastro, criação de conta ou pagamento de qualquer natureza.</p>

<h2>3. Uso Permitido</h2>
<p>Você pode usar o {$site} para:</p>
<ul>
  <li>Gerar e copiar texto estilizado em Unicode para uso pessoal, criativo ou profissional</li>
  <li>Personalizar perfis, bios, mensagens e publicações em redes sociais e aplicativos</li>
  <li>Criar nicks para jogos online</li>
  <li>Qualquer uso lícito e não prejudicial a terceiros</li>
</ul>

<h2>4. Uso Proibido</h2>
<p>É expressamente proibido usar o {$site} para:</p>
<ul>
  <li>Gerar conteúdo ilegal, difamatório, abusivo, discriminatório, ameaçador ou que viole direitos de terceiros</li>
  <li>Criar texto estilizado para fins de spam, phishing, fraude ou enganação</li>
  <li>Usar scripts automatizados, bots ou qualquer método de raspagem (scraping) que sobrecarregue os servidores do site</li>
  <li>Reproduzir, copiar, vender ou redistribuir o site ou seus componentes sem autorização expressa</li>
  <li>Tentar acessar áreas restritas, comprometer a segurança ou interferir no funcionamento do site</li>
  <li>Usar o serviço de forma que viole os termos de uso das plataformas de destino (Instagram, WhatsApp, etc.)</li>
</ul>

<h2>5. Propriedade Intelectual</h2>
<p>O design, o código-fonte, os textos, as imagens e demais elementos do {$site} são de propriedade de LetrasDiferentesOnline.com e estão protegidos pelas leis de direitos autorais aplicáveis. Os <strong>caracteres Unicode</strong> gerados pela ferramenta são parte de um padrão público internacional (ISO/IEC 10646) e não são de propriedade exclusiva do site — você pode usar livremente o texto gerado.</p>
<p>É proibida a reprodução total ou parcial do site, seu código ou seu conteúdo editorial sem autorização prévia e por escrito.</p>

<h2>6. Isenção de Responsabilidade</h2>
<p>O {$site} é fornecido \"no estado em que se encontra\" (\"as is\"), sem garantias expressas ou implícitas de qualquer tipo. Em particular:</p>
<ul>
  <li><strong>Compatibilidade</strong>: não garantimos que todos os caracteres Unicode gerados funcionarão em todas as plataformas, aplicativos ou dispositivos. A compatibilidade depende do suporte Unicode de cada plataforma de destino.</li>
  <li><strong>Disponibilidade</strong>: não garantimos disponibilidade ininterrupta do serviço. Manutenções, falhas técnicas ou causas de força maior podem tornar o site temporariamente indisponível.</li>
  <li><strong>Consequências do uso</strong>: não somos responsáveis por qualquer consequência decorrente do uso do texto gerado pelo usuário em plataformas de terceiros, incluindo penalizações, banimentos ou restrições impostas por essas plataformas.</li>
  <li><strong>Conteúdo gerado</strong>: não somos responsáveis pelo conteúdo textual inserido e gerado pelos usuários. A responsabilidade pelo uso do serviço é exclusivamente do usuário.</li>
</ul>

<h2>7. Limitação de Responsabilidade</h2>
<p>Na extensão máxima permitida pela lei aplicável, o {$site} não será responsável por danos diretos, indiretos, incidentais, especiais, consequenciais ou punitivos decorrentes do uso ou da impossibilidade de uso do serviço.</p>

<h2>8. Links para Sites de Terceiros</h2>
<p>O site pode conter links para sites e serviços de terceiros (Instagram, WhatsApp, Google, etc.). Esses links são fornecidos apenas para conveniência. Não temos controle sobre o conteúdo desses sites e não nos responsabilizamos por eles. O acesso a sites de terceiros é de inteira responsabilidade do usuário.</p>

<h2>9. Modificações no Serviço</h2>
<p>Reservamo-nos o direito de modificar, suspender ou encerrar o serviço, total ou parcialmente, a qualquer momento e sem aviso prévio. Também podemos alterar estes Termos de Uso a qualquer momento. Alterações entram em vigor imediatamente após a publicação no site. O uso continuado do site após alterações implica aceitação dos novos termos.</p>

<h2>10. Privacidade</h2>
<p>O uso do {$site} está também sujeito à nossa <a href=\"/politica-de-privacidade/\">Política de Privacidade</a>, que é parte integrante destes Termos de Uso.</p>

<h2>11. Lei Aplicável e Jurisdição</h2>
<p>Estes Termos de Uso são regidos pelas leis da República Federativa do Brasil. Qualquer conflito decorrente destes termos será submetido ao foro da comarca de São Paulo, Estado de São Paulo, com renúncia expressa a qualquer outro, por mais privilegiado que seja.</p>

<h2>12. Contato</h2>
<p>Para dúvidas ou solicitações relacionadas a estes Termos de Uso, entre em contato pelo e-mail: <a href=\"mailto:{$email}\">{$email}</a>.</p>
",
],

/* ════════════════════════════════════════════════════════════
   POLÍTICA DE COOKIES
════════════════════════════════════════════════════════════ */
'politica-de-cookies' => [
  'title' => 'Política de Cookies',
  'content' => "
<h2>1. O que são Cookies?</h2>
<p>Cookies são pequenos arquivos de texto armazenados no seu navegador quando você visita um site. Eles permitem que o site reconheça seu dispositivo e lembre de suas preferências entre visitas. Cookies de sessão são apagados quando você fecha o navegador; cookies persistentes permanecem por um período determinado.</p>

<h2>2. Como o {$site} Usa Cookies e Armazenamento Local</h2>
<p>Utilizamos dois mecanismos de armazenamento no lado do cliente:</p>

<h3>2.1 LocalStorage (armazenamento local do navegador)</h3>
<p>Não são cookies técnicos, mas funcionam de forma similar — armazenam dados diretamente no seu dispositivo, sem enviá-los ao servidor:</p>
<table class=\"legal-table\">
  <thead><tr><th>Chave</th><th>Conteúdo</th><th>Duração</th><th>Finalidade</th></tr></thead>
  <tbody>
    <tr><td><code>ld-theme</code></td><td>Preferência de tema: \"dark\" ou \"light\"</td><td>Permanente (até limpeza manual)</td><td>Manter sua preferência visual entre visitas</td></tr>
    <tr><td><code>ld-favorites</code></td><td>Lista de IDs dos estilos favoritados</td><td>Permanente (até limpeza manual)</td><td>Lembrar os estilos marcados como favoritos</td></tr>
    <tr><td><code>ld-history</code></td><td>Últimas 8 buscas realizadas</td><td>Permanente (até limpeza manual)</td><td>Exibir histórico de buscas recentes</td></tr>
  </tbody>
</table>
<p>Esses dados nunca são enviados ao servidor. Ficam exclusivamente no seu dispositivo.</p>

<h3>2.2 Cookies de Terceiros — Google Analytics</h3>
<p>Utilizamos o Google Analytics para entender como os usuários interagem com o site. Esses cookies coletam dados de forma anônima e agregada:</p>
<table class=\"legal-table\">
  <thead><tr><th>Cookie</th><th>Provedor</th><th>Duração</th><th>Finalidade</th></tr></thead>
  <tbody>
    <tr><td><code>_ga</code></td><td>Google Analytics</td><td>2 anos</td><td>Distinguir usuários únicos de forma anônima</td></tr>
    <tr><td><code>_ga_*</code></td><td>Google Analytics</td><td>2 anos</td><td>Armazenar estado da sessão</td></tr>
    <tr><td><code>_gid</code></td><td>Google Analytics</td><td>24 horas</td><td>Distinguir usuários únicos em sessão</td></tr>
  </tbody>
</table>
<p>O Google Analytics não identifica você pessoalmente. Os dados são usados exclusivamente para análise de tráfego e melhoria do site. <a href=\"https://policies.google.com/privacy\" target=\"_blank\" rel=\"noopener\">Saiba mais sobre a política de privacidade do Google</a>.</p>

<h2>3. Cookies Essenciais vs. Opcionais</h2>
<p>Os dados de <strong>tema, favoritos e histórico</strong> são armazenados localmente (não são cookies de servidor) e são essenciais para o funcionamento das funcionalidades do site. Você pode limpá-los a qualquer momento nas configurações do navegador.</p>
<p>Os <strong>cookies do Google Analytics</strong> são opcionais — o site funciona perfeitamente sem eles. Você pode desativá-los conforme descrito na seção 5 abaixo.</p>

<h2>4. Não Usamos</h2>
<p>O {$site} <strong>não utiliza</strong>:</p>
<ul>
  <li>Cookies de rastreamento para publicidade direcionada</li>
  <li>Cookies de redes sociais (Facebook Pixel, TikTok Pixel, etc.)</li>
  <li>Cookies de marketing ou retargeting</li>
  <li>Fingerprinting de dispositivo</li>
  <li>Qualquer tecnologia de rastreamento além do Google Analytics</li>
</ul>

<h2>5. Como Gerenciar seus Cookies</h2>
<p>Você tem controle total sobre os cookies. Veja como gerenciá-los nos principais navegadores:</p>
<ul>
  <li><strong>Google Chrome</strong>: Configurações → Privacidade e segurança → Cookies e outros dados de sites</li>
  <li><strong>Mozilla Firefox</strong>: Configurações → Privacidade e segurança → Cookies e dados de sites</li>
  <li><strong>Safari</strong>: Preferências → Privacidade → Gerenciar dados de sites</li>
  <li><strong>Microsoft Edge</strong>: Configurações → Privacidade, pesquisa e serviços → Cookies</li>
</ul>
<p>Para desativar especificamente o Google Analytics em todos os sites, use o <a href=\"https://tools.google.com/dlpage/gaoptout\" target=\"_blank\" rel=\"noopener\">complemento de desativação do Google Analytics</a>.</p>
<p>Para limpar os dados do <code>localStorage</code> (favoritos, histórico e tema): abra as Ferramentas do Desenvolvedor do seu navegador (F12) → Application → Local Storage → selecione o site → Delete.</p>

<h2>6. Alterações nesta Política</h2>
<p>Podemos atualizar esta Política de Cookies para refletir mudanças em nossos serviços ou por exigências legais. A data da última atualização está indicada abaixo. Recomendamos revisitar esta página periodicamente.</p>

<h2>7. Contato</h2>
<p>Para dúvidas sobre o uso de cookies, entre em contato: <a href=\"mailto:{$email}\">{$email}</a>.</p>
<p>Consulte também nossa <a href=\"/politica-de-privacidade/\">Política de Privacidade</a> e nossos <a href=\"/termos-de-uso/\">Termos de Uso</a>.</p>
",
],

]; // end $legal

/* ── CURRENT PAGE ── */
$page = $legal[$slug] ?? null;

if (!$page) {
  // Fallback: render normal WP content
  get_template_part('page');
  get_footer();
  exit;
}

/* ── Schema: Breadcrumb ── */
ld_schema_breadcrumb([
  ['name' => 'Letras Diferentes Online', 'url' => home_url('/')],
  ['name' => $page['title'], 'url' => get_permalink()],
]);
?>

<main>
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="Localização">
  <a href="<?php echo esc_url(home_url('/')); ?>">Início</a>
  <span aria-hidden="true">›</span>
  <span><?php echo esc_html($page['title']); ?></span>
</nav>

<!-- LEGAL HERO -->
<section class="plat-hero" style="padding-bottom:32px">
  <div class="plat-icon" aria-hidden="true">📄</div>
  <h1><?php echo esc_html($page['title']); ?></h1>
  <p style="color:var(--muted);font-size:.9rem">Última atualização: <?php echo esc_html($updated); ?></p>
</section>

<!-- LEGAL CONTENT -->
<div class="content-article">
  <div class="article-wrap legal-wrap">
    <?php echo wp_kses_post($page['content']); ?>
    <div class="legal-footer-links">
      <a href="<?php echo esc_url(home_url('/politica-de-privacidade/')); ?>">Política de Privacidade</a>
      <span aria-hidden="true">·</span>
      <a href="<?php echo esc_url(home_url('/termos-de-uso/')); ?>">Termos de Uso</a>
      <span aria-hidden="true">·</span>
      <a href="<?php echo esc_url(home_url('/politica-de-cookies/')); ?>">Política de Cookies</a>
    </div>
  </div>
</div>
</main>

<?php get_footer(); ?>
