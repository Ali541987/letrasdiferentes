<?php
/**
 * Template Name: Página de Plataforma
 * Letras Diferentes Online — Platform page (Instagram, WhatsApp, Free Fire, TikTok, etc.)
 */

get_header();

$slug = get_post_field('post_name', get_the_ID());

/* ── PLATFORM DATA MAP ── */
$platforms = [
    'letras-para-instagram' => [
        'icon'    => '📸',
        'name'    => 'Instagram',
        'title'   => 'Letras Diferentes para Instagram',
        'desc'    => 'Estilize seu nome, bio e mensagens com fontes especiais Unicode. Copie e cole em 1 clique.',
        'color'   => '#e1306c',
        'tips'    => [
            ['icon'=>'👤','title'=>'Nome de perfil','desc'=>'Use fontes cursivas ou em negrito no seu nome de exibição para se destacar nas pesquisas.'],
            ['icon'=>'📝','title'=>'Bio criativa','desc'=>'Combine estilos diferentes na bio para criar seções visualmente distintas e chamar atenção.'],
            ['icon'=>'📖','title'=>'Stories & posts','desc'=>'Adicione letras especiais nas legendas dos seus posts para destacar palavras importantes.'],
        ],
        'faq'     => [
            ['q'=>'Como colocar letras diferentes no Instagram?',
             'a'=>'Gere as letras no gerador acima, copie o estilo desejado e cole no campo de edição de perfil (nome ou bio) no aplicativo do Instagram. Funciona no Android e iPhone.'],
            ['q'=>'Posso usar letras diferentes no nome de usuário do Instagram?',
             'a'=>'O nome de usuário (@handle) do Instagram aceita apenas letras normais, números e underscores. Mas o nome de exibição e a bio aceitam caracteres Unicode. Use o gerador para personalizar esses campos.'],
            ['q'=>'Quais estilos de letra funcionam melhor no Instagram?',
             'a'=>'Estilos cursivos (𝒮𝒸𝓇𝒾𝓅𝓉), negrito (𝐍𝐞𝐠𝐫𝐢𝐭𝐨) e borbulha (Ⓑⓞⓡⓑⓤⓛⓗⓐ) são os mais populares no Instagram por ficarem bem visíveis em perfis e legendas.'],
            ['q'=>'As letras diferentes aparecem igual para todos os seguidores?',
             'a'=>'Sim. Como são caracteres Unicode padrão, qualquer pessoa que ver seu perfil — em qualquer dispositivo ou sistema operacional — verá as mesmas letras que você gerou. Não há necessidade de o seguidor ter qualquer aplicativo ou fonte instalada.'],
            ['q'=>'Posso usar letras diferentes nas hashtags do Instagram?',
             'a'=>'Não. As hashtags do Instagram só funcionam com letras e números do alfabeto latino padrão. Caracteres Unicode em hashtags fazem com que elas percam a função de descoberta. Use as letras especiais na bio, no nome de perfil e nas legendas dos posts.'],
        ],
        'schema_faq' => true,
        'article' => '<h2>O que são letras diferentes para Instagram?</h2>
<p>As letras diferentes para Instagram são caracteres Unicode que visualmente reproduzem fontes tipográficas — cursivas, em negrito, itálico, góticas, borbulha e muito mais — mas funcionam exatamente como texto comum. Isso significa que você pode copiar e colar essas letras diretamente no aplicativo do Instagram, sem instalar nenhum aplicativo adicional, criar conta em serviços externos ou pagar por planos premium.</p>
<p>O padrão Unicode, utilizado por todos os smartphones e computadores modernos, contém mais de 130.000 caracteres. Entre eles estão conjuntos matemáticos e especiais que visualmente reproduzem diferentes tipografias: o bloco Mathematical Script (a partir de U+1D400) produz letras cursivas e caligráficas; o Mathematical Fraktur gera letras góticas medievais; o Mathematical Bold cria textos em negrito. Nosso gerador de letras para Instagram converte qualquer texto que você digitar nesses caracteres em tempo real, apresentando mais de 25 estilos lado a lado para facilitar a escolha e a comparação.</p>
<h2>Como colocar letras diferentes no Instagram passo a passo</h2>
<p>Personalizar seu perfil ou legenda com fontes para Instagram é um processo simples e leva menos de um minuto. Siga estas etapas:</p>
<ol>
<li><strong>Digite o texto</strong> que deseja estilizar no campo de entrada do gerador acima. Pode ser seu nome, uma frase para a bio, uma palavra de destaque ou qualquer trecho que queira transformar.</li>
<li><strong>Explore os estilos disponíveis</strong>. Use as abas de filtro para visualizar apenas letras cursivas, góticas, em negrito, borbulha ou com efeitos especiais como espelho e contorno.</li>
<li><strong>Toque no card do estilo escolhido</strong> para copiar o texto automaticamente para a área de transferência. Um indicador visual confirma a cópia.</li>
<li><strong>Abra o Instagram</strong> no celular ou computador e acesse o campo desejado: nome de exibição, bio, legenda de publicação, comentário ou mensagem direta.</li>
<li><strong>Cole o texto</strong> pressionando e segurando o campo e selecionando "Colar". As letras aparecerão com o estilo gerado, prontas para salvar.</li>
</ol>
<p>O processo funciona igualmente bem em Android, iPhone e no Instagram Web sem nenhuma diferença de resultado. Não é necessário ter acesso root, jailbreak ou permissões especiais no dispositivo.</p>
<h2>Onde usar letras para Instagram</h2>
<p>As letras Unicode funcionam em quase todos os campos de texto do Instagram. O <strong>nome de exibição</strong> — visível abaixo da sua foto de perfil em buscas, feeds e na seção Explorar — é o local de maior impacto. Diferente do @usuário (que aceita apenas letras, números e underscores), o nome de exibição aceita qualquer caractere Unicode sem restrições.</p>
<p>A <a href="/letras-para-bio/"><strong>bio do Instagram</strong></a> tem limite de 150 caracteres e é lida pelos visitantes antes de qualquer outra informação do perfil. Letras personalizadas na bio criam hierarquia visual, organizam informações e comunicam personalidade de forma imediata. Nas <strong>legendas das publicações</strong>, letras em negrito Unicode destacam palavras-chave, enquanto fontes cursivas adicionam elegância a citações e textos motivacionais. Nos <strong>comentários</strong>, letras diferentes fazem você se destacar entre centenas de outras interações.</p>
<p>Uma restrição importante: as <strong>hashtags</strong> do Instagram só funcionam com letras e números do alfabeto padrão. Caracteres Unicode em hashtags anulam a função de descoberta, portanto evite usá-los nesse contexto.</p>
<h2>Os melhores estilos de fontes para Instagram</h2>
<p>Entre todos os estilos disponíveis, os mais populares no Instagram brasileiro são:</p>
<p><strong>Script Cursivo Bold (𝓐𝓑𝓒)</strong>: letras cursivas com traços espessos e personalidade marcante. Perfeitas para nomes de perfil de contas de beleza, moda, lifestyle e empreendedores digitais. Transmitem sofisticação e criatividade simultaneamente.</p>
<p><strong>Script Elegante (𝒜ℬ𝒞)</strong>: versão mais delicada do cursivo, com linhas finas e aspecto caligráfico refinado. Muito usada por fotógrafos, artistas e marcas premium que buscam visual de alto padrão.</p>
<p><strong>Negrito Unicode (𝗔𝗕𝗖)</strong>: excelente para nomes de perfil que precisam de forte presença visual. Alta legibilidade em telas pequenas e em qualquer fonte do sistema do seguidor.</p>
<p><strong>Borbulha (Ⓐ Ⓑ Ⓒ)</strong>: letras dentro de círculos com visual divertido. Popular entre criadores de conteúdo de humor, entretenimento e perfis jovens que querem leveza.</p>
<p><strong>Estético (A e s t é t i c o)</strong>: texto espaçado com um caractere de espaço entre cada letra, criando visual minimalista muito associado ao estilo "aesthetic". Perfeito para bios de fotografia, feeds curados e conteúdo artístico.</p>
<p><strong>Duplo Contorno (𝔸𝔹ℂ)</strong>: letras com linhas duplas e aparência geométrica. Bastante usada por perfis de design, arte digital, música e gaming. Veja também nossa curadoria de <a href="/letras-bonitas/">letras bonitas</a> para o Instagram por nicho.</p>
<h2>Letras personalizadas para bio do Instagram: estratégia visual</h2>
<p>A bio do Instagram com letras diferentes pode ser organizada em seções visuais bem definidas. Uma estrutura eficaz usa três camadas: uma linha principal em fonte cursiva com o nome ou nicho profissional, uma segunda linha em pequenas maiúsculas (ᴀʙᴄ) com localização ou área de atuação, e uma terceira linha em estilo neutro com o link ou chamada para ação. Símbolos Unicode como ✦, ◆, ★ e • funcionam como separadores visuais entre seções.</p>
<p>Ao combinar letras personalizadas com emojis relevantes ao seu nicho — 📸 para fotografia, 💄 para beleza, 🎵 para música, 🏋️ para fitness — você cria uma bio visualmente coerente que comunica identidade antes mesmo de o visitante processar o texto completo. Cada caractere Unicode conta como um único caractere no limite de 150 da bio, então você não perde espaço ao usar letras estilizadas.</p>
<h2>Modificador de letras para Instagram: entenda como funciona</h2>
<p>Um modificador de letras é qualquer ferramenta que converte texto padrão em caracteres Unicode estilizados. Existem dezenas de opções disponíveis — aplicativos, extensões de navegador e sites — mas todas funcionam com o mesmo princípio: substituem cada letra do seu texto pelo equivalente visual em um bloco Unicode específico.</p>
<p>Nosso <a href="/letras-personalizadas/">gerador de letras personalizadas</a> foi desenvolvido especificamente para o mercado brasileiro, com os 25+ estilos mais usados nas redes sociais do país. Funciona 100% no navegador, sem coleta de dados pessoais, sem cadastro e sem anúncios que interrompam o processo. Todos os caracteres gerados são compatíveis com Unicode 15.0, garantindo exibição correta em iPhones com iOS 16+, dispositivos Android com qualquer versão recente e no Instagram Web. O resultado aparece idêntico para qualquer seguidor que visitar seu perfil, independentemente do dispositivo ou sistema operacional que ele use.</p>
<h2>Letras bonitas para Instagram: quais são as tendências</h2>
<p>O uso de fontes personalizadas no Instagram continua evoluindo. As letras estéticas dominam perfis de moda, lifestyle e fotografia. As fontes cursivas Bold ganham espaço entre empreendedores e coaches digitais que usam o Instagram como vitrine de negócios. As <a href="/letras-goticas/">letras góticas Fraktur</a> estão em alta entre músicos, artistas e criadores de conteúdo voltados ao público jovem, especialmente em Reels. As letras em negrito Unicode se destacam em perfis educacionais e motivacionais, onde legibilidade e estilo precisam coexistir.</p>
<p>Uma tendência crescente é a tipografia mista na mesma bio: uma palavra em cursivo, outra em estético, criando efeito visual que chama atenção sem parecer excessivo. Nosso gerador facilita essa prática — gere o mesmo texto em múltiplos estilos, copie partes diferentes e combine-as antes de colar no Instagram para criar uma composição tipográfica única e personalizada.</p>',
    ],
    'letras-para-whatsapp' => [
        'icon'    => '💬',
        'name'    => 'WhatsApp',
        'title'   => 'Letras Diferentes para WhatsApp',
        'desc'    => 'Envie mensagens estilizadas, status e nome com fontes Unicode especiais no WhatsApp.',
        'color'   => '#25d366',
        'tips'    => [
            ['icon'=>'✉️','title'=>'Mensagens estilosas','desc'=>'Use negrito, itálico e outros estilos nas mensagens do WhatsApp para destacar partes importantes.'],
            ['icon'=>'📢','title'=>'Status diferente','desc'=>'Escreva seu status do WhatsApp com letras cursivas ou especiais para chamar atenção dos seus contatos.'],
            ['icon'=>'👤','title'=>'Nome de perfil','desc'=>'Personalize seu nome no WhatsApp com fontes diferentes para criar uma identidade única.'],
        ],
        'faq'     => [
            ['q'=>'Como usar letras diferentes no WhatsApp?',
             'a'=>'Gere as letras no gerador, copie e cole na mensagem, no status ou no campo de nome do perfil do WhatsApp. Funciona no app para Android, iPhone e WhatsApp Web.'],
            ['q'=>'O WhatsApp aceita caracteres especiais Unicode?',
             'a'=>'Sim! O WhatsApp suporta Unicode completo em mensagens, status e nome de perfil. Você pode enviar letras em negrito Unicode (𝐍), cursivo (𝒩), gótico (𝔑) e muito mais.'],
            ['q'=>'Posso formatar texto no WhatsApp de outra forma?',
             'a'=>'Além das letras Unicode do nosso gerador, o WhatsApp tem formatação nativa: *negrito*, _itálico_, ~tachado~ e `monospace`. Use os dois para criar mensagens ainda mais ricas.'],
            ['q'=>'As letras especiais aparecem corretamente para quem recebe as mensagens?',
             'a'=>'Sim. Caracteres Unicode são parte do padrão de texto universal e aparecem corretamente em qualquer dispositivo moderno — Android, iPhone, Windows e Mac — sem que o destinatário precise instalar nada.'],
            ['q'=>'Posso usar letras diferentes no nome de grupo do WhatsApp?',
             'a'=>'Sim! O nome de grupos do WhatsApp aceita caracteres Unicode. Você pode usar o gerador para criar nomes de grupo estilizados com letras cursivas, góticas ou em negrito.'],
        ],
        'schema_faq' => true,
        'article' => '<h2>Por que usar letras diferentes no WhatsApp?</h2>
<p>O WhatsApp é o aplicativo de mensagens mais usado no Brasil, com mais de 147 milhões de usuários ativos. Em um ambiente onde as conversas se misturam e as mensagens se acumulam rapidamente, usar letras diferentes é uma forma eficiente de se destacar — seja em grupos, no status ou na apresentação do seu perfil pessoal ou comercial.</p>
<p>As fontes para WhatsApp são caracteres Unicode que funcionam como texto normal: podem ser copiados, colados, encaminhados e lidos em qualquer dispositivo sem nenhuma instalação adicional. Ao contrário de imagens com texto, as letras Unicode são pesquisáveis, acessíveis para leitores de tela e têm tamanho de arquivo zero — ideais para uso em massa em grupos e listas de transmissão.</p>
<h2>Como usar letras para WhatsApp passo a passo</h2>
<p>Usar letras diferentes no WhatsApp é um processo de três etapas simples:</p>
<ol>
<li><strong>Gere as letras</strong>: digite seu texto no campo do gerador acima e escolha o estilo que deseja — cursivo, negrito, gótico, borbulha ou qualquer outro.</li>
<li><strong>Copie o texto estilizado</strong>: toque no card do estilo escolhido. O texto é copiado automaticamente para a área de transferência.</li>
<li><strong>Cole no WhatsApp</strong>: abra a conversa, o status ou as configurações de perfil, segure o campo de texto e selecione "Colar".</li>
</ol>
<p>O processo funciona no aplicativo para Android, iPhone e no WhatsApp Web. Não há diferença no resultado independentemente do dispositivo utilizado para gerar ou para receber as letras.</p>
<h2>Letras para status do WhatsApp</h2>
<p>O status do WhatsApp é visualizado por todos os seus contatos durante 24 horas e é uma das áreas com maior potencial de personalização. Usar letras cursivas ou estéticas no status cria uma apresentação diferenciada que seus contatos notam imediatamente ao acessar a aba de status.</p>
<p>Para o status, os estilos mais eficazes são os que mantêm boa legibilidade mesmo em telas pequenas: o <strong>Script Cursivo Bold (𝓐𝓑𝓒)</strong> é visualmente impactante e facilmente legível; o <strong>Negrito Unicode (𝗔𝗕𝗖)</strong> garante máxima legibilidade com estilo diferenciado; o <strong>Estético espaçado</strong> funciona bem para frases curtas e chamativas. Evite estilos muito elaborados como espelho ou inversão em status com texto longo — a legibilidade fica comprometida.</p>
<p>Empresas e autônomos que usam o WhatsApp Business podem usar letras diferentes no status para comunicar horários de funcionamento, promoções e novidades de forma mais chamativa do que texto puro, sem precisar criar imagens especiais para cada comunicado.</p>
<h2>Fontes para WhatsApp no nome de perfil e descrição</h2>
<p>O nome de perfil no WhatsApp aceita completamente caracteres Unicode, tornando-se um espaço excelente para personalização. Um nome estilizado com letras cursivas ou em negrito se destaca na lista de contatos dos seus amigos e é a primeira impressão que as pessoas têm ao receber uma mensagem sua.</p>
<p>Para perfis profissionais e contas do WhatsApp Business, a personalização do nome com fontes diferenciadas transmite cuidado com a identidade visual da marca. A descrição do perfil (que aparece quando alguém acessa seus detalhes) também aceita Unicode e pode ser usada para destacar informações como horário de atendimento, especialidades e links, usando letras em negrito para as informações mais importantes.</p>
<h2>Unicode vs. formatação nativa do WhatsApp</h2>
<p>O WhatsApp oferece dois sistemas de formatação de texto distintos que podem ser combinados para resultados ainda mais ricos. A <strong>formatação nativa</strong> usa símbolos especiais no início e no fim do trecho: *texto* fica em negrito, _texto_ em itálico, ~texto~ com tachado e `texto` em fonte monoespaçada. Essa formatação funciona apenas em mensagens enviadas, não em nome de perfil ou status.</p>
<p>As <strong>letras Unicode</strong> do nosso gerador, por outro lado, são caracteres independentes que funcionam em todos os campos — nome de perfil, status, grupos, mensagens e até no nome de contatos na sua agenda. Ao combinar os dois sistemas você tem o máximo de flexibilidade: use Unicode para nome e status, e a formatação nativa para destacar partes específicas de mensagens longas.</p>
<h2>Os melhores estilos de letras para WhatsApp</h2>
<p>Cada contexto de uso no WhatsApp pede um estilo diferente. Para <strong>nomes de perfil pessoal</strong>, o Script Cursivo e o Negrito Unicode são os mais usados por equilibrarem estilo e legibilidade. Para <strong>nomes de grupos</strong>, o estilo Borbulha é divertido e fácil de identificar na lista de conversas. Para <strong>mensagens importantes</strong> em grupos, o Duplo Contorno e o Negrito Unicode garantem que a informação se destaque no fluxo de mensagens. Para deixar suas conversas ainda mais expressivas, combine as letras com <a href="/simbolos/">símbolos para copiar e colar</a>.</p>
<p>Para <strong>status profissionais</strong> (WhatsApp Business), o Script Elegante transmite sofisticação, enquanto o Negrito garante leitura rápida. Para <strong>mensagens de boas-vindas automáticas</strong> em listas de transmissão, use estilos simples como negrito ou itálico Unicode que funcionam bem em qualquer tamanho de tela. O nosso gerador permite que você visualize o mesmo texto em todos os estilos simultaneamente, facilitando a escolha do melhor para cada situação. Para estilos cursivos — os mais elegantes para status e nome de perfil — veja nossa página dedicada de <a href="/letras-cursivas/">letras cursivas</a>.</p>
<h2>Letras para WhatsApp em grupos e listas de transmissão</h2>
<p>Em grupos com muitos participantes, as mensagens se acumulam rapidamente e a maioria é ignorada. Usar letras diferentes em mensagens importantes — como avisos, convites ou comunicados — aumenta significativamente a taxa de leitura, pois o texto se destaca visualmente no fluxo de mensagens comuns.</p>
<p>Para administradores de grupos grandes, criar mensagens de boas-vindas, regras do grupo ou avisos importantes com letras estilizadas estabelece uma identidade visual consistente e facilita a identificação de comunicados oficiais do grupo. Em listas de transmissão para negócios, letras diferentes nas chamadas para ação ("Acesse o link", "Garanta sua vaga") aumentam o destaque e o engajamento. O gerador de letras para WhatsApp permite criar esse conteúdo em segundos, com qualquer estilo que melhor represente a identidade da sua comunicação. Se você também usa letras especiais no <a href="/letras-para-instagram/">Instagram</a>, os mesmos caracteres Unicode funcionam identicamente nas duas plataformas.</p>',
    ],
    'letras-para-free-fire' => [
        'icon'    => '🔥',
        'name'    => 'Free Fire',
        'title'   => 'Letras Diferentes para Free Fire (Letras FF)',
        'desc'    => 'Deixe seu nick do Free Fire épico com fontes especiais, letras cursivas e góticas.',
        'color'   => '#ff6b00',
        'tips'    => [
            ['icon'=>'🎮','title'=>'Nick épico','desc'=>'Use fontes negrito ou gótico para criar um nick que impressiona nos lobbies e no ranking.'],
            ['icon'=>'⚔️','title'=>'Limite de caracteres','desc'=>'O Free Fire tem limite de caracteres no nick. Prefira estilos compactos como script cursivo e negrito.'],
            ['icon'=>'💎','title'=>'Testar antes de trocar','desc'=>'Cole o nick gerado em um bloco de notas ou grupo de teste antes de alterar seu nome oficial no FF.'],
        ],
        'faq'     => [
            ['q'=>'Como colocar letras diferentes no Free Fire?',
             'a'=>'Gere as letras no gerador, copie o estilo desejado e cole no campo de edição de nome do Free Fire no aplicativo. Vá em Perfil > ícone de lápis ao lado do nick > cole o novo nome.'],
            ['q'=>'Quais letras funcionam no Free Fire?',
             'a'=>'A maioria das fontes Unicode funciona no FF: negrito (𝐍), itálico (𝑁), script cursivo (𝒩), gótico (𝔑), borbulha (Ⓝ) e duplo contorno (ℕ). Alguns caracteres muito raros podem não aparecer — teste antes de trocar.'],
            ['q'=>'O nick com letras diferentes é permitido no Free Fire?',
             'a'=>'Sim! O uso de caracteres Unicode no nick é permitido e amplamente praticado na comunidade do Free Fire. Desde que não viole o código de conduta do jogo (como palavras ofensivas), qualquer estilo de letra é aceito.'],
            ['q'=>'Quantos caracteres o nick do Free Fire aceita?',
             'a'=>'O Free Fire aceita até 12 caracteres no nick. Alguns caracteres Unicode ocupam mais espaço visualmente, então teste o nick antes de confirmar a troca para garantir que caiba dentro do limite.'],
            ['q'=>'Como trocar o nick no Free Fire?',
             'a'=>'Acesse o menu de Perfil no Free Fire, toque no ícone de lápis ao lado do seu nome atual e cole o novo nick com as letras especiais geradas. A troca de nick consome uma Placa de Troca de Nick, disponível na loja do jogo ou em eventos.'],
        ],
        'schema_faq' => true,
        'article' => '<h2>Por que usar letras diferentes no nick do Free Fire?</h2>
<p>No Free Fire, o nick é sua identidade pública em todos os lobbies, no ranking e nas transmissões ao vivo. Com milhões de jogadores ativos no Brasil, ter um nick com letras diferentes é uma das formas mais rápidas de criar uma identidade memorável e profissional no jogo. Jogadores com nicks estilizados são percebidos como mais experientes e dedicados — o que pode fazer diferença na hora de entrar em clãs competitivos ou ser convidado para times.</p>
<p>As letras FF (letras para Free Fire) são caracteres Unicode que o jogo aceita no campo de nome do jogador. Elas aparecem exatamente como geradas para todos os outros jogadores que verem seu perfil ou encontrarem você em uma partida, sem que eles precisem ter qualquer configuração especial. Nosso gerador de nick FF oferece mais de 25 estilos testados e compatíveis com o Free Fire.</p>
<h2>Letras que funcionam no nick do Free Fire</h2>
<p>Nem todos os caracteres Unicode são exibidos corretamente no Free Fire. Com base em testes extensivos da comunidade brasileira de FF, os estilos com maior compatibilidade são:</p>
<p><strong>Negrito Unicode (𝐀𝐁𝐂)</strong>: excelente compatibilidade, visual forte e imponente. Um dos estilos mais usados por jogadores profissionais e streamers de Free Fire. Funciona tanto em letras maiúsculas quanto minúsculas.</p>
<p><strong>Negrito Itálico (𝑨𝑩𝑪)</strong>: combina a força do negrito com a elegância do itálico. Muito popular em nicks de jogadores de alto rank e em perfis de clãs competitivos.</p>
<p><strong><a href="/letras-goticas/">Gótico Fraktur</a> (𝔄𝔅𝔊)</strong>: o estilo mais procurado para criar nicks épicos e intimidadores no Free Fire. A tipografia medieval transmite poder e seriedade — ideal para líderes de clãs e jogadores competitivos.</p>
<p><strong>Script Cursivo (𝒩𝒾𝒸𝓀)</strong>: elegante e diferenciado, este estilo é ótimo para jogadores que querem um nick com personalidade única sem o aspecto agressivo do gótico.</p>
<p><strong>Duplo Contorno (𝔸𝔹ℂ)</strong>: letras com linhas duplas e visual geométrico. Alta compatibilidade com o Free Fire e muito visível nas telas de resultados de partida.</p>
<h2>Símbolos para nick do Free Fire</h2>
<p>Além das letras diferentes, os símbolos Unicode são amplamente usados na composição de nicks no Free Fire. Os símbolos para nick mais populares incluem: ★ (estrela), ♦ (diamante), ✦ (estrela decorativa), ⚡ (raio), ꧁ e ꧂ (decorações asiáticas muito usadas como moldura de nick), e ᪥ (símbolo de sol). Esses símbolos podem ser usados antes, depois ou intercalados com as letras do seu nome para criar uma composição visual única.</p>
<p>Símbolos como ꧁꧂ são especialmente populares no Free Fire brasileiro porque criam um efeito de "moldura" em torno do nome, fazendo com que o nick se destaque visualmente no lobby e no ranking. A página de Símbolos do nosso site oferece mais de 300 símbolos organizados por categoria, incluindo uma seção específica para nicks de Free Fire.</p>
<h2>Como trocar o nick no Free Fire com letras especiais</h2>
<p>O processo de trocar o nick do Free Fire com letras diferentes envolve alguns passos importantes:</p>
<ol>
<li><strong>Gere o nick</strong> no gerador acima. Digite o nome que deseja ter no Free Fire e escolha o estilo de letra que mais combina com seu estilo de jogo.</li>
<li><strong>Teste o nick</strong> antes de confirmar. Cole o texto gerado em um editor de notas para verificar a aparência e o número de caracteres. O Free Fire aceita até 12 caracteres.</li>
<li><strong>Copie o nick gerado</strong> tocando no card do estilo escolhido.</li>
<li><strong>Abra o Free Fire</strong> e acesse seu Perfil tocando na sua foto ou nome na tela inicial.</li>
<li><strong>Toque no ícone de lápis</strong> ao lado do seu nick atual para abrir o editor de nome.</li>
<li><strong>Apague o nick atual</strong> e cole o novo nick com as letras especiais.</li>
<li><strong>Confirme a troca</strong>. Você precisará de uma Placa de Troca de Nick, disponível na loja ou em eventos do jogo.</li>
</ol>
<h2>Nomes para Free Fire: estratégias para criar um nick épico</h2>
<p>Criar um bom nick para Free Fire vai além de apenas aplicar letras diferentes — envolve escolher uma combinação de nome, estilo tipográfico e símbolos que criem uma identidade coesa. Algumas estratégias populares entre os jogadores brasileiros:</p>
<p><strong>Nick com título de habilidade</strong>: combine um qualificativo como "Pro", "Elite", "Dark" ou "King" com seu apelido em letras góticas. Exemplo: 𝔇𝔞𝔯𝔨𝔓𝔯𝔬.</p>
<p><strong>Nick com moldura de símbolo</strong>: use os símbolos ꧁ e ꧂ como moldura e coloque seu nome em negrito no meio. Muito popular no Free Fire BR.</p>
<p><strong>Nick bilíngue estilizado</strong>: combine caracteres em português com letras em negrito ou cursivo, criando um nick que se destaca por ser único e personalizado para o jogador brasileiro.</p>
<h2>Gerador de nick FF: como aproveitar ao máximo</h2>
<p>Nosso gerador de letras FF foi otimizado especificamente para jogadores de Free Fire. Diferentemente de geradores genéricos, testamos todos os estilos disponíveis no Free Fire para garantir compatibilidade máxima. Os estilos marcados com maior compatibilidade no nosso gerador são os que funcionam de forma consistente tanto em dispositivos Android quanto em iOS.</p>
<p>Para <a href="/letras-personalizadas/">nick personalizado Free Fire</a>, recomendamos experimentar pelo menos 3 a 5 estilos diferentes antes de decidir. Cada estilo transmite uma personalidade diferente: o negrito passa força e seriedade; o cursivo transmite elegância; o gótico comunica poder e intimidação; o borbulha sugere descontração e bom humor. O estilo ideal é aquele que melhor representa como você quer ser percebido pela comunidade do Free Fire.</p>
<p>Lembre-se de que a troca de nick tem um custo (Placa de Troca de Nick), então vale dedicar um tempo extra para escolher o melhor estilo e garantir que o nick gerado caiba dentro do limite de 12 caracteres do Free Fire antes de confirmar a mudança. Para uso das mesmas letras nas redes sociais, veja nosso guia de <a href="/letras-para-instagram/">letras para Instagram</a> e <a href="/letras-bonitas/">letras bonitas</a>.</p>',
    ],
    'letras-para-tiktok' => [
        'icon'    => '🎵',
        'name'    => 'TikTok',
        'title'   => 'Letras Diferentes para TikTok',
        'desc'    => 'Destaque seu perfil e bio do TikTok com fontes especiais e letras Unicode únicas.',
        'color'   => '#ff0050',
        'tips'    => [
            ['icon'=>'🌟','title'=>'Nome do perfil','desc'=>'Um nome com letras cursivas ou estéticas se destaca nas pesquisas e na seção "Para Você" do TikTok.'],
            ['icon'=>'📱','title'=>'Bio impactante','desc'=>'Use a bio do TikTok com letras diferentes para organizar informações e criar um visual profissional.'],
            ['icon'=>'💬','title'=>'Legendas de vídeo','desc'=>'Adicione letras especiais nas legendas dos seus vídeos para destacar palavras-chave e hashtags importantes.'],
        ],
        'faq'     => [
            ['q'=>'Como usar letras diferentes no TikTok?',
             'a'=>'Gere as letras no gerador, copie e cole no campo de edição de nome ou bio do TikTok. Acesse seu perfil > Editar perfil > cole no campo "Nome" ou "Biografia".'],
            ['q'=>'Quais estilos de letra funcionam melhor no TikTok?',
             'a'=>'Estilos estéticos (A e s t é t i c o), cursivos (𝒯𝒾𝓀𝒯𝑜𝓀) e em negrito (𝗧𝗶𝗸𝗧𝗼𝗸) são muito populares no TikTok por ficarem bonitos na tela pequena do celular.'],
            ['q'=>'Posso usar letras diferentes nas hashtags do TikTok?',
             'a'=>'Não. Hashtags só funcionam com letras e números normais. Mas você pode usar letras diferentes nas legendas dos vídeos e na bio do perfil sem restrições.'],
            ['q'=>'As letras diferentes aparecem para os seguidores do TikTok?',
             'a'=>'Sim. Caracteres Unicode são universais — aparecem igualmente para todos os usuários do TikTok, independentemente do dispositivo (Android ou iPhone) ou do país.'],
            ['q'=>'Posso usar letras diferentes no nome de usuário do TikTok?',
             'a'=>'O @usuário do TikTok aceita apenas letras, números, underscores e pontos. O campo "Nome" (nome de exibição) aceita Unicode livremente — é onde você deve aplicar as letras especiais.'],
        ],
        'schema_faq' => true,
        'article' => '<h2>Letras diferentes para TikTok: como funcionam</h2>
<p>As letras diferentes para TikTok são caracteres do padrão Unicode que visualmente reproduzem diferentes estilos tipográficos — cursivo, negrito, estético, gótico e muito mais. Como parte do padrão universal de texto, esses caracteres funcionam em qualquer dispositivo sem necessidade de instalação de aplicativos, fontes especiais ou configurações adicionais.</p>
<p>O TikTok, assim como o Instagram e o WhatsApp, suporta completamente o Unicode nos campos de nome de exibição, biografia e legendas de vídeo. Isso significa que você pode personalizar seu perfil com fontes de letras para TikTok copiadas diretamente do nosso gerador, sem precisar de nenhuma ferramenta adicional. O processo é simples: gere, copie e cole — em menos de 30 segundos seu perfil já tem um visual completamente diferente.</p>
<h2>Como usar fontes para TikTok no nome e na bio</h2>
<p>Para aplicar letras diferentes no TikTok, siga este processo:</p>
<ol>
<li><strong>Gere o texto</strong> no gerador acima. Digite seu nome de perfil ou o texto da bio que deseja estilizar.</li>
<li><strong>Escolha o estilo</strong> que melhor combina com sua identidade no TikTok — use os filtros para navegar entre cursivo, negrito, estético e outros estilos.</li>
<li><strong>Copie o texto</strong> tocando no card do estilo escolhido. A cópia é automática.</li>
<li><strong>Abra o TikTok</strong> e acesse seu perfil. Toque em "Editar perfil".</li>
<li><strong>Cole o texto</strong> no campo "Nome" para o nome de exibição, ou no campo "Biografia" para a bio. Salve as alterações.</li>
</ol>
<p>O nome de exibição no TikTok aceita Unicode sem restrições. O @usuário (identificador único) aceita apenas letras, números, underscores e pontos — não use letras especiais nesse campo.</p>
<h2>Melhores estilos de letras bonitas para TikTok</h2>
<p>O TikTok tem uma estética visual muito específica, e certos estilos tipográficos funcionam melhor dentro da plataforma. Os mais populares entre criadores de conteúdo brasileiros são:</p>
<p><strong>Estético espaçado (A e s t é t i c o)</strong>: o estilo mais associado ao TikTok. O espaçamento entre letras cria uma aparência clean e moderna, muito usada por criadores de conteúdo de lifestyle, viagens e moda.</p>
<p><strong>Script Cursivo Bold (𝓣𝓲𝓴𝓣𝓸𝓴)</strong>: letras cursivas espessas e personalizadas. Popular entre criadores de conteúdo de beleza, gastronomia e humor que querem um perfil com personalidade marcante.</p>
<p><strong>Negrito Sans-Serif (𝗧𝗶𝗸𝗧𝗼𝗸)</strong>: visual limpo, legível e moderno. Funciona muito bem em telas pequenas de smartphone, garantindo que o nome seja facilmente lido mesmo em thumbnails pequenos.</p>
<p><strong>Letras pequenas (ᴛɪᴋᴛᴏᴋ)</strong>: pequenas maiúsculas que criam um efeito refinado e minimalista. Muito usado por perfis de conteúdo educacional, livros e nichos intelectuais no TikTok.</p>
<p><strong>Gótico Fraktur (𝔗𝔦𝔨𝔗𝔬𝔨)</strong>: estilo medieval e dramático. Popular entre criadores de conteúdo de gaming, música alternativa e estética dark.</p>
<h2>Letras para nome e bio do TikTok: estratégia de perfil</h2>
<p>Um perfil TikTok bem estruturado usa letras diferentes de forma estratégica, não apenas decorativa. No <strong>nome de exibição</strong>, o objetivo é criar uma identidade reconhecível — use um estilo tipográfico que reflita o tom do seu conteúdo: cursivo para nichos criativos, negrito para nichos informativos, estético para nichos de lifestyle.</p>
<p>Na <strong>bio do TikTok</strong>, você tem 80 caracteres para se apresentar. Use letras em negrito para destacar sua área de atuação e letras estéticas para o slogan ou chamada para ação. Para estratégias mais detalhadas de bio com letras especiais, confira nossa página de <a href="/letras-para-bio/">letras para bio do Instagram</a> — as mesmas técnicas se aplicam ao TikTok. Combine com emojis relevantes ao seu nicho para criar hierarquia visual mesmo dentro do limite de caracteres.</p>
<p>Nas <strong>legendas dos vídeos</strong>, letras diferentes podem ser usadas para destacar palavras-chave importantes no início da legenda — as primeiras palavras da legenda aparecem como preview antes de o usuário tocar em "mais". Usar negrito ou outro estilo diferenciado nessas palavras aumenta a taxa de engajamento com o texto completo.</p>
<h2>TikTok vs. Instagram: diferenças no uso de letras Unicode</h2>
<p>Embora ambas as plataformas suportem Unicode, existem diferenças importantes no comportamento e nas limitações. O TikTok tem um limite menor de caracteres na bio (80 vs. 150 do Instagram), exigindo maior seletividade na escolha de onde usar letras estilizadas. Por outro lado, o TikTok não exige que o nome de exibição seja único, o que dá mais liberdade criativa na escolha do estilo.</p>
<p>Outra diferença é o contexto de visualização: no TikTok, o nome do perfil aparece diretamente sobre os vídeos na seção "Para Você", com tamanho de texto menor do que no Instagram. Por isso, estilos com boa legibilidade em tamanho reduzido — como negrito, cursivo bold e pequenas maiúsculas — funcionam melhor no TikTok do que estilos muito elaborados ou com muitos ornamentos.</p>
<h2>Fontes de letras para TikTok: criadores e marcas</h2>
<p>Criadores de conteúdo e marcas que usam fontes de letras para TikTok de forma consistente constroem uma identidade visual mais forte na plataforma. Quando os seguidores veem sempre o mesmo estilo tipográfico associado ao criador — seja no nome, nos comentários ou nos títulos dos vídeos — cria-se reconhecimento imediato da identidade, mesmo antes de ver o rosto ou ouvir a voz.</p>
<p>Para marcas que usam o TikTok como canal de marketing, manter consistência entre o estilo tipográfico do perfil TikTok e de outras redes sociais (Instagram, WhatsApp Business) fortalece a identidade visual omnichannel. Nosso gerador permite criar o mesmo estilo tipográfico para múltiplas plataformas simultaneamente — gere o nome da marca em determinado estilo e use a mesma versão estilizada em todas as redes, de <a href="/letras-para-instagram/">Instagram</a> ao <a href="/letras-para-whatsapp/">WhatsApp</a>.</p>',
    ],
    'letras-para-facebook' => [
        'icon'    => '👤',
        'name'    => 'Facebook',
        'title'   => 'Letras Diferentes para Facebook',
        'desc'    => 'Personalize seu nome, bio e posts do Facebook com fontes Unicode especiais e bonitas.',
        'color'   => '#1877f2',
        'tips'    => [
            ['icon'=>'📝','title'=>'Posts e comentários','desc'=>'Destaque palavras importantes nos seus posts do Facebook usando letras em negrito ou itálico Unicode.'],
            ['icon'=>'👤','title'=>'Nome de perfil','desc'=>'O Facebook permite caracteres Unicode no nome de exibição. Adicione um toque especial com letras cursivas.'],
            ['icon'=>'📢','title'=>'Descrição da página','desc'=>'Se você tem uma página no Facebook, use letras diferentes na descrição para torná-la mais atraente.'],
        ],
        'faq'     => [
            ['q'=>'Como usar letras diferentes no Facebook?',
             'a'=>'Gere as letras no gerador acima, copie o estilo desejado e cole no campo de postagem, comentário, bio ou nome do perfil no Facebook. Funciona no app e na versão web.'],
            ['q'=>'O Facebook aceita letras Unicode no nome?',
             'a'=>'Sim, em parte. O Facebook aceita alguns caracteres Unicode no nome de exibição, mas pode ter restrições dependendo do estilo. Tente colar e veja o resultado — se não aceitar, experimente um estilo mais simples como negrito ou itálico.'],
            ['q'=>'Posso usar letras especiais em comentários do Facebook?',
             'a'=>'Sim! Os campos de comentários e posts do Facebook aceitam qualquer caractere Unicode. Usar letras diferentes em comentários faz você se destacar na seção de comentários de publicações populares.'],
            ['q'=>'Letras diferentes funcionam em páginas do Facebook?',
             'a'=>'Sim. A descrição de páginas do Facebook, publicações, comentários e o nome de exibição da página aceitam caracteres Unicode. Isso permite criar posts mais visuais sem precisar de imagens.'],
        ],
        'schema_faq' => true,
        'article' => '<h2>Como o Unicode funciona no Facebook — e por que muda tudo</h2>
<p>O Facebook, plataforma com mais de 3 bilhões de usuários ativos mensais operada pela Meta Platforms, processa internamente texto no padrão Unicode UTF-8 em todos os seus campos de entrada — publicações do feed, comentários, Messenger, histórias, descrições de perfil, páginas e grupos. Isso significa que caracteres dos blocos <strong>Mathematical Bold</strong> (U+1D400–U+1D433), <strong>Mathematical Italic</strong> (U+1D434–U+1D467), <strong>Mathematical Script</strong> (U+1D49C–U+1D4CF) e <strong>Mathematical Fraktur</strong> (U+1D504–U+1D537) são armazenados, indexados e exibidos pelo algoritmo EdgeRank da plataforma exatamente como qualquer outro texto.</p>
<p>A diferença prática é enorme: enquanto texto comum compete visualmente com dezenas de outras publicações no feed, texto com letras Unicode em negrito ou estilo cursivo cria hierarquia tipográfica nativa — sem imagens, sem carregamento adicional, sem impacto negativo no alcance orgânico. O algoritmo de relevância do Facebook não penaliza caracteres Unicode; na verdade, publicações mais visualmente distintas tendem a receber maior taxa de engajamento (curtidas, comentários, compartilhamentos), o que o EdgeRank interpreta como sinal positivo de qualidade de conteúdo.</p>
<h2>Letras diferentes no perfil e bio do Facebook</h2>
<p>O campo "Bio" e a seção "Sobre você" do perfil pessoal do Facebook aceitam caracteres Unicode sem restrição. Para personalizar seu perfil, gere o texto no nosso gerador de letras, copie o estilo desejado e cole diretamente no campo de edição do perfil. O resultado aparece instantaneamente para seus amigos e seguidores em qualquer dispositivo — Android, iOS, computador Windows ou Mac, sem configurações adicionais.</p>
<p>O Facebook aplica uma política de "nome real" (real name policy) que pode limitar o uso de caracteres exóticos no campo de nome principal. A solução é usar o campo <strong>"Outro nome"</strong> ou <strong>"Apelido"</strong> nas configurações de perfil, onde a política é significativamente mais flexível, ou concentrar as letras especiais na bio e nas publicações, onde não há restrições de nome real.</p>
<p>Para <strong>Páginas do Facebook</strong> — usadas por empresas, criadores de conteúdo, marcas e organizações — não existe política de nome real, o que permite maior liberdade para usar letras diferentes tanto no nome da página quanto na descrição curta exibida no cabeçalho. Usar <strong>Negrito Unicode (𝗔𝗕𝗖)</strong> nas palavras-chave da descrição curta melhora a escaneabilidade da proposta de valor da página para novos visitantes.</p>
<h2>Letras para posts, comentários e Facebook Reels</h2>
<p>O compositor de publicações do Facebook suporta completamente Unicode, tornando as letras diferentes uma ferramenta poderosa para criadores orgânicos. Em publicações informativas longas — o formato de maior alcance orgânico no Facebook — usar letras em negrito Unicode para os títulos e subtítulos cria a hierarquia visual de um artigo sem depender de formatação markdown ou HTML.</p>
<p>Em <strong>comentários</strong> em publicações populares com centenas de respostas, um comentário com letras cursivas ou em negrito se destaca visualmente no feed de comentários e recebe consistentemente mais curtidas e respostas do que comentários em texto puro. Esse efeito é especialmente forte em publicações virais de páginas com grande audiência.</p>
<p>Nos <strong>Facebook Reels</strong> — o formato de vídeo curto da Meta que compete diretamente com TikTok e Instagram Reels — as legendas e descrições dos vídeos aceitam Unicode, permitindo criar títulos mais atrativos que se destacam na aba de Reels. Nos <strong>Stories do Facebook</strong>, o campo de texto sobre a imagem ou vídeo também aceita caracteres Unicode, mas com limitação de espaço visual dependendo do layout.</p>
<h2>Facebook Marketplace e grupos: letras que vendem</h2>
<p>O <strong>Facebook Marketplace</strong>, utilizado por milhões de brasileiros para compra e venda de produtos usados e novos, permite o uso de letras Unicode nos títulos e descrições dos anúncios. Anúncios com o título em negrito Unicode — como <strong>𝗩𝗘𝗡𝗗𝗢</strong> ou <strong>𝗙𝗢𝗡𝗘 𝗡𝗢𝗩𝗢</strong> — se destacam visualmente na grade de listagens, aumentando a taxa de clique (CTR) em comparação com títulos em texto puro.</p>
<p>Nos <strong>Grupos do Facebook</strong>, especialmente grupos de compra e venda, grupos de suporte técnico e comunidades de nicho, administradores experientes usam letras diferentes para diferenciar comunicados oficiais de publicações de membros. Usar letras em negrito ou cursivas em pinned posts (publicações fixadas) e anúncios importantes facilita a identificação de conteúdo prioritário por membros novos e antigos.</p>
<h2>Estratégia de conteúdo: combinando estilos no Facebook</h2>
<p>A estratégia mais eficaz para criadores de conteúdo e empresas no Facebook combina diferentes estilos tipográficos Unicode para criar hierarquia visual consistente. Uma estrutura comprovada para publicações longas:</p>
<ul>
<li><strong>Título (linha 1)</strong>: Negrito Unicode (𝗔𝗕𝗖) — máxima visibilidade no feed, leitura rápida</li>
<li><strong>Subtítulo ou gancho emocional</strong>: Itálico Unicode (𝐴𝐵𝐶) — cria contraste e desperta curiosidade</li>
<li><strong>Corpo do texto</strong>: texto normal com palavras-chave pontuais em negrito Unicode</li>
<li><strong>CTA final</strong>: Script Cursivo (𝒜ℬ𝒞) para um toque mais pessoal e diferenciado</li>
</ul>
<p>Para quem usa letras diferentes no <a href="/letras-para-instagram/">Instagram</a> ou <a href="/letras-para-whatsapp/">WhatsApp</a>, a transição para o Facebook é imediata — os mesmos caracteres Unicode gerados para essas plataformas funcionam identicamente no Facebook, permitindo criar uma identidade visual consistente em toda a presença digital da marca ou perfil pessoal.</p>
<h2>Melhores estilos Unicode para o Facebook</h2>
<p><strong>Negrito Unicode (𝗔𝗕𝗖)</strong>: o estilo mais eficaz para o Facebook. Máxima legibilidade em qualquer dispositivo, tamanho de tela e modo de acessibilidade. Indispensável para posts informativos, avisos de grupos e cabeçalhos de publicações longas.</p>
<p><strong>Itálico Unicode (𝐴𝐵𝐶)</strong>: transmite ênfase sutil. Ideal para citações, frases de impacto, títulos de obras mencionadas e ganchos emocionais no início das publicações.</p>
<p><strong>Script Cursivo (𝒜ℬ𝒞)</strong>: adiciona personalidade e humanidade ao texto. Funciona melhor em publicações de cunho pessoal, afetivo e em páginas de lifestyle, bem-estar e cultura.</p>
<p><strong>Negrito Cursivo (𝓐𝓑𝓒)</strong>: combina o impacto visual do negrito com a elegância do cursivo. Excelente para nomes de perfil e página, e para o campo "Sobre" onde se deseja máxima distinção visual. Confira outros usos desse estilo na nossa página de <a href="/letras-cursivas/">letras cursivas</a>.</p>
<p><strong>Pequenas Maiúsculas (ᴀʙᴄ)</strong>: visual refinado e discreto. Perfeito para rodapé de publicações, créditos e informações secundárias que precisam se distinguir sem competir visualmente com o conteúdo principal.</p>',
    ],
    'letras-personalizadas' => [
        'icon'   => '🎨',
        'name'   => 'Letras Personalizadas',
        'title'  => 'Letras Personalizadas para Copiar e Colar',
        'desc'   => 'Gere letras personalizadas para nick, Instagram, Free Fire e Discord. 25+ estilos grátis — copie em 1 clique.',
        'color'  => '#7c3aed',
        'filter' => 'all',
        'tips'   => [
            ['icon'=>'🎮','title'=>'Para nick e jogos','desc'=>'Digite seu nome, escolha o estilo e cole no nick do Free Fire, Discord ou Mobile Legends. Estilos testados e compatíveis.'],
            ['icon'=>'📸','title'=>'Para Instagram e TikTok','desc'=>'Personalize nome e bio com cursivo, gótico ou duplo contorno. Cada letra Unicode conta como 1 caractere no limite da bio.'],
            ['icon'=>'💡','title'=>'Combine estilos','desc'=>'Gere o mesmo texto em vários estilos e misture partes de cada um. Primeira palavra em cursivo, segunda em negrito — crie combinações únicas.'],
        ],
        'schema_faq' => true,
        'faq'    => [
            ['q'=>'Como fazer letras personalizadas?',
             'a'=>'Digite seu texto no gerador acima. Em segundos aparecem mais de 25 estilos de letras personalizadas baseados no padrão Unicode. Toque no estilo desejado para copiar. Depois cole em qualquer app — WhatsApp, Instagram, Free Fire, Discord — sem instalar nada.'],
            ['q'=>'Qual o melhor site de letras personalizadas grátis?',
             'a'=>'O Letras Diferentes Online gera mais de 25 estilos de letras personalizadas baseados no Unicode Consortium — cursivo, gótico Fraktur, duplo contorno, negrito, estético e muito mais. Tudo grátis, sem cadastro, no navegador do celular ou computador.'],
            ['q'=>'Letras personalizadas para nick: como colocar no Free Fire?',
             'a'=>'Gere as letras aqui, copie o estilo escolhido e abra o Free Fire (Garena). Vá em Perfil, toque no lápis ao lado do nick, apague o nome atual e cole o novo. O Free Fire aceita a maioria dos caracteres Unicode em nomes de até 12 caracteres.'],
            ['q'=>'Como usar letras personalizadas no Instagram?',
             'a'=>'Copie o texto estilizado gerado aqui, abra o Instagram (Meta), toque em Editar perfil e cole no campo Nome ou Bio. O Instagram aceita qualquer caractere Unicode nesses campos sem restrição. Funciona em Android, iPhone e Instagram Web.'],
            ['q'=>'Letras personalizadas funcionam no iPhone e Android?',
             'a'=>'Sim. Como são caracteres do padrão Unicode, funcionam em qualquer sistema operacional moderno. No iPhone o visual é renderizado pelo Apple Color Emoji e fontes do iOS. No Android usa as fontes Noto (Google). O código do caractere é idêntico nos dois — apenas o desenho visual pode variar levemente.'],
            ['q'=>'O que é um gerador de letras personalizadas?',
             'a'=>'É uma ferramenta que converte texto normal em caracteres Unicode estilizados. Nosso gerador usa os blocos Mathematical Bold, Mathematical Script, Mathematical Fraktur e outros definidos pelo Unicode Consortium para produzir mais de 25 estilos diferentes a partir do texto que você digitar.'],
            ['q'=>'Como usar letras personalizadas no Discord?',
             'a'=>'Copie o texto gerado aqui e cole no campo de nome de usuário, no servidor de Discord (Discord Inc.) ou em mensagens. O Discord aceita caracteres Unicode em nomes de perfil e mensagens. Para servidores com restrições de caracteres especiais, use estilos mais simples como negrito ou itálico Unicode.'],
            ['q'=>'Letras personalizadas pequenas: o que são?',
             'a'=>'São os caracteres do bloco Modifier Letter Small Capitals (U+1D00 a U+1D2F) do Unicode, que reproduzem letras em tamanho reduzido com visual elegante e minimalista. Exemplo: ʟᴇᴛʀᴀꜱ ᴘᴇQᴜᴇɴᴀꜱ. São muito usadas em bios do Instagram e TikTok por criadores que preferem estética discreta.'],
        ],
        'article' => '<h2>O que são letras personalizadas e como funcionam</h2>
<p>Letras personalizadas são caracteres do padrão <strong>Unicode</strong>, mantido pelo <strong>Unicode Consortium</strong>, que visualmente reproduzem estilos tipográficos como cursivo, gótico, negrito e outros, mas funcionam como texto comum. Isso significa que você copia, cola e envia em qualquer app sem instalar fontes, sem pagar planos premium e sem precisar de acesso root no celular.</p>
<p>O padrão Unicode contém mais de 130.000 caracteres distribuídos em dezenas de blocos. Para personalização de texto, os blocos mais usados são o <strong>Mathematical Bold</strong> (U+1D400), o <strong>Mathematical Script</strong> (U+1D49C), o <strong>Mathematical Fraktur</strong> (U+1D504) e o <strong>Mathematical Double-Struck</strong> (U+1D538). Cada bloco contém versões estilizadas das 26 letras do alfabeto latino em maiúscula e minúscula. Nosso gerador converte qualquer texto que você digitar nesses blocos em tempo real, apresentando mais de 25 estilos lado a lado para facilitar a escolha.</p>

<h2>Letras personalizadas para nick: Free Fire, Discord e jogos</h2>
<p>Nos jogos, o nick é a identidade pública do jogador em lobbies, ranking e transmissões. O <strong>Free Fire</strong>, desenvolvido pela <strong>Garena</strong> e líder de downloads no Brasil, aceita caracteres Unicode no campo de nome (limite de 12 caracteres). Os estilos com melhor compatibilidade testada no FF são o Fraktur Gótico (𝔄𝔅𝔊), o Negrito Unicode (𝐀𝐁𝐂) e o Script Cursivo Bold (𝓐𝓑𝓒). Para colocar: gere aqui, copie, abra o Free Fire, vá em Perfil, toque no lápis e cole.</p>
<p>O <strong>Discord</strong>, plataforma de comunicação da <strong>Discord Inc.</strong> com mais de 500 milhões de usuários registrados, aceita Unicode em nomes de usuário e mensagens. Letras personalizadas no Discord são muito usadas por administradores de servidores para destacar avisos importantes, por membros que querem um nick único e por bots com nomes estilizados. O negrito Unicode é o estilo mais usado no Discord por manter alta legibilidade nos temas claro e escuro da plataforma.</p>
<p>No <strong>Mobile Legends</strong>, no <strong>PUBG Mobile</strong> e em outros títulos da Garena e de desenvolvedoras asiáticas, a compatibilidade com Unicode costuma ser alta. Sempre teste o nick gerado antes de confirmar a troca para garantir que todos os caracteres aparecem corretamente no jogo específico.</p>

<h2>Letras personalizadas para Instagram e TikTok</h2>
<p>O <strong>Instagram</strong>, pertencente à <strong>Meta Platforms</strong>, aceita qualquer caractere Unicode no nome de exibição e na bio (limite de 150 caracteres). O nome de exibição é o campo de maior impacto visual: aparece nas pesquisas, no feed de seguidores e na seção Explorar. Uma letra personalizada cursiva ou em duplo contorno nesse campo cria diferenciação imediata em relação a nomes em texto comum.</p>
<p>Na bio, a estratégia mais eficaz combina camadas tipográficas: primeira linha em Script Cursivo Bold (𝓐𝓑𝓒) para o nome ou nicho, segunda linha em Pequenas Maiúsculas (ᴀʙᴄ) para especialidade ou localização, terceira linha em texto normal para o link ou CTA. Cada letra Unicode conta como um caractere no limite de 150, sem penalidade por usar estilos personalizados.</p>
<p>O <strong>TikTok</strong>, da <strong>ByteDance</strong>, tem limite de 80 caracteres na bio e aceita Unicode no nome de exibição sem restrição. O estilo Estético Espaçado (Fullwidth Latin, U+FF21) é muito popular no TikTok por criar visual clean e moderno associado à estética da plataforma. Para o <strong>WhatsApp</strong> (Meta), os mesmos caracteres funcionam em mensagens, status e nome de perfil, sem necessidade de nenhuma configuração adicional.</p>

<h2>Como criar letras personalizadas em 3 passos</h2>
<p>O processo completo leva menos de 30 segundos:</p>
<ol>
<li><strong>Digite o texto</strong> no campo do gerador acima. Pode ser seu nome, apelido, nick de jogo, frase para bio ou qualquer palavra que queira personalizar.</li>
<li><strong>Escolha o estilo</strong>. Use os filtros por categoria — Cursivo, Gótico, Borbulha, Especial — para navegar entre os 25+ estilos disponíveis. Todos aparecem lado a lado para comparação direta.</li>
<li><strong>Copie e cole</strong>. Toque no card do estilo escolhido para copiar o texto personalizado. Abra o app de destino e cole com um toque longo seguido de "Colar". Pronto.</li>
</ol>
<p>O gerador funciona diretamente no navegador do celular ou computador, sem cadastro, sem instalação de aplicativo e sem limite de usos. Todo o processamento acontece localmente — seu texto nunca é enviado a servidores externos.</p>

<h2>Os 25+ estilos de letras personalizadas disponíveis</h2>
<p><strong>Script Cursivo Bold (𝓐𝓑𝓒)</strong>: o estilo mais popular no Brasil. Traços espessos e fluidos inspirados na caligrafia Spencerian americana do século XIX. Perfeito para bio do Instagram, nome de perfil e mensagens especiais no WhatsApp.</p>
<p><strong>Script Elegante (𝒜ℬ𝒞)</strong>: versão de traço fino do cursivo. Máxima sofisticação para perfis de beleza, moda e lifestyle premium.</p>
<p><strong>Fraktur Gótico (𝔄𝔅𝔊)</strong>: tipografia medieval alemã digitalizada pelo Unicode Consortium. O estilo mais procurado para nicks épicos no Free Fire e perfis de gaming, música e cultura alternativa.</p>
<p><strong>Duplo Contorno (𝔸𝔹ℂ)</strong>: letras construídas com linhas paralelas duplas, originalmente usadas em notação matemática para representar conjuntos como ℕ, ℤ e ℝ. Visual único e moderno.</p>
<p><strong>Negrito Unicode (𝗔𝗕𝗖)</strong>: versão em negrito do alfabeto padrão. Máxima legibilidade com forte presença visual — essencial para posts de Facebook, títulos e comunicados em grupos de WhatsApp.</p>
<p><strong>Letras Pequenas (ᴀʙᴄ)</strong>: pequenas maiúsculas do bloco Modifier Letter Small Capitals. Visual refinado e minimalista, muito usado em bios do TikTok e Instagram por criadores de conteúdo com estética clean.</p>
<p><strong>Borbulha (Ⓐ Ⓑ Ⓒ)</strong>: letras dentro de círculos com visual divertido. Popular em perfis de humor, entretenimento e conteúdo jovem.</p>
<p><strong>Estético Espaçado</strong>: letras em largura dupla com espaçamento ampliado, associado ao movimento aesthetic nas redes sociais. Muito eficaz para frases curtas e slogans de bio.</p>

<h2>Letras personalizadas no celular: iPhone e Android</h2>
<p>Qualquer caractere Unicode gerado aqui funciona em Android e iPhone sem configuração adicional. No <strong>Android</strong>, o visual é renderizado pelas fontes <strong>Noto</strong> do Google, o conjunto tipográfico mais completo disponível para o padrão Unicode. No <strong>iPhone</strong> (iOS da Apple), a renderização usa as fontes nativas do sistema — o resultado visual pode ser levemente diferente do Android, mas o caractere é idêntico e o significado é o mesmo.</p>
<p>Em ambas as plataformas, as letras personalizadas geradas aqui aparecem corretamente para quem recebe o texto, independentemente do dispositivo do destinatário. Não há necessidade de o receptor ter qualquer configuração especial, app instalado ou permissão habilitada. Para quem usa <a href="/letras-para-free-fire/">Free Fire</a> em Android ou iPhone, os estilos compatíveis são os mesmos nos dois sistemas. E para personalização de perfis em <a href="/letras-para-instagram/">Instagram</a>, <a href="/letras-para-whatsapp/">WhatsApp</a> ou qualquer rede social, os caracteres Unicode criados aqui funcionam de forma idêntica seja qual for o sistema operacional do seu celular.</p>',
    ],

    'tipos-de-letras' => [
        'icon'       => '🔤',
        'name'       => 'Tipos de Letras',
        'title'      => 'Tipos de Letras para Copiar e Colar',
        'desc'       => 'Conheça todos os tipos de letras e gere estilos Unicode para copiar e colar. Gerador grátis com 25+ fontes: cursivo, gótico, negrito, borbulha e muito mais.',
        'color'      => '#1e40af',
        'filter'     => 'all',
        'schema_faq' => true,
        'tips'       => [
            ['icon'=>'📚','title'=>'Os 4 tipos do alfabeto','desc'=>'Bastão maiúscula, bastão minúscula, cursiva maiúscula e cursiva minúscula formam os 4 tipos de letras ensinados nas escolas brasileiras. Cada um tem traçado e função próprios.'],
            ['icon'=>'🖋','title'=>'Serif ou sans-serif?','desc'=>'Letras com serifa (Times New Roman, Garamond) são clássicas e formais. Letras sem serifa (Arial, Helvetica) são modernas e limpas. A escolha depende do contexto: impresso ou digital, formal ou casual.'],
            ['icon'=>'✨','title'=>'Unicode para copiar e colar','desc'=>'Nosso gerador converte qualquer texto em 25+ tipos de letras Unicode — cursivo, gótico Fraktur, negrito, borbulha, duplo contorno — prontos para colar no Instagram, WhatsApp, Free Fire e Discord.'],
        ],
        'faq'        => [
            ['q'=>'Quais são os tipos de letras?',
             'a'=>'Os principais tipos de letras são cinco: (1) Serif, com pequenos traços nas extremidades dos caracteres, como Times New Roman e Garamond; (2) Sans-serif, sem traços, como Arial e Helvetica; (3) Script e cursiva, que imitam escrita à mão; (4) Display e decorativa, para títulos e cartazes; (5) Monospace, com largura fixa por caractere, como Courier New. Para personalização digital, existem ainda os estilos Unicode para copiar e colar em redes sociais e jogos.'],
            ['q'=>'Quais são os 4 tipos de letras do alfabeto?',
             'a'=>'Na tradição escolar brasileira, os 4 tipos de letras do alfabeto são: letra bastão maiúscula (A, B, C), letra bastão minúscula (a, b, c), letra cursiva maiúscula e letra cursiva minúscula. Esses quatro tipos são a base do ensino de escrita no Brasil e aparecem nos alfabetos para imprimir usados por professores do fundamental I.'],
            ['q'=>'Qual a diferença entre tipo de letra e fonte?',
             'a'=>'Tipo de letra (typeface) é a família tipográfica com identidade visual própria, como Helvetica ou Garamond. Fonte (font) é uma variação específica dentro dessa família: peso, tamanho e estilo — Helvetica Bold 12pt, por exemplo. Popularmente os dois termos são usados como sinônimos, mas na tipografia técnica são conceitos distintos.'],
            ['q'=>'Como fazer tipos de letras diferentes para copiar?',
             'a'=>'Use o gerador acima: digite o texto, escolha o estilo (cursivo, gótico, negrito, borbulha e outros) e toque no card para copiar. Cole em qualquer app — Instagram, WhatsApp, Free Fire, Discord — sem instalar nada. Os estilos são baseados no padrão Unicode e funcionam em Android, iPhone e computador.'],
            ['q'=>'Tipos de letras para tatuagem: quais são os mais usados?',
             'a'=>'Os tipos de letras mais usados em tatuagens são: Script (cursiva fluida desenhada à mão), Old English ou Blackletter (gótico medieval, popular em costelas e torso), lettering artístico feito pelo tatuador, sans-serif minimalista e serif clássico. Para visualizar o estilo gótico antes de tatuar, use o filtro Fraktur Gótico no gerador desta página.'],
            ['q'=>'Qual o melhor site para gerar tipos de letras grátis?',
             'a'=>'O Letras Diferentes Online é um dos geradores de tipos de letras Unicode mais completos do Brasil, com 25+ estilos: cursivo, gótico Fraktur, duplo contorno, negrito, estético, borbulha e muito mais. Tudo grátis, sem cadastro, no celular ou computador. Basta digitar, escolher o estilo e copiar.'],
            ['q'=>'Tipos de letras para Instagram: quais funcionam melhor?',
             'a'=>'No Instagram, os tipos de letras Unicode mais usados são: Script Cursivo Bold (𝓐𝓑𝓒) para bio e nome de perfil, Negrito Unicode (𝗔𝗕𝗖) para posts e destaques, Duplo Contorno (𝔸𝔹ℂ) para nicks artísticos e Estético Espaçado para bios minimalistas. Todos funcionam no nome de exibição e na bio — limite de 150 caracteres.'],
            ['q'=>'Tipos de letras cursivas: o que são e como usar?',
             'a'=>'Letras cursivas Unicode são caracteres do bloco Mathematical Script (U+1D49C) que reproduzem escrita cursiva e caligráfica. Existem dois estilos principais: Script Elegante (𝒜ℬ𝒞) com traços finos, e Script Cursivo Bold (𝓐𝓑𝓒) com traços espessos. Use no Instagram, WhatsApp, TikTok e Free Fire sem precisar instalar nenhuma fonte.'],
        ],
        'article'    => '<h2>Quais são os tipos de letras? Guia completo</h2>
<p>Os tipos de letras se dividem em cinco famílias tipográficas reconhecidas por tipógrafos e designers no mundo inteiro. As <strong>letras serif</strong> têm pequenos traços perpendiculares nas extremidades dos caracteres — chamados de serifas — que guiam o olho ao longo da linha de texto. Esse recurso as torna referência em jornais, livros e documentos formais por séculos. A Times New Roman, criada pelo tipógrafo britânico Stanley Morison para o jornal The Times em 1931, e a Garamond, desenvolvida pelo tipógrafo francês <strong>Claude Garamond</strong> no século XVI, são os dois exemplos mais citados em cursos de tipografia. A <strong>Adobe Systems</strong>, por meio do Adobe Fonts (antigo Typekit), e o <strong>Google Fonts</strong> (Google LLC) mantêm centenas de variações de fontes serif disponíveis gratuitamente para designers e desenvolvedores.</p>
<p>As <strong>letras sans-serif</strong> eliminam as serifas, produzindo caracteres limpos, geométricos e de leitura rápida em telas. A Helvetica, criada pelo designer suíço <strong>Max Miedinger</strong> em 1957 para a fundição Haas Type Foundry, é a fonte sem serifa mais influente do século XX. Arial, Futura e a San Francisco da <strong>Apple Inc.</strong> pertencem à mesma família. As letras sans-serif dominam interfaces digitais, aplicativos e redes sociais: o Instagram da <strong>Meta Platforms</strong> usa variação do Optimistic Display; o Android do <strong>Google</strong> usa Roboto.</p>
<p>As <strong>letras script e cursivas</strong> imitam a escrita à mão, com traços fluidos. As <strong>letras display e decorativas</strong> são criadas para títulos e cartazes de impacto — Bebas Neue, Impact e Lobster são os exemplos mais conhecidos no design brasileiro. As <strong>fontes monospace</strong> têm largura fixa por caractere, padrão em editores de código: Courier New, Monaco e JetBrains Mono são referências. E para personalização imediata sem instalar fontes, existe a categoria prática dos <strong>tipos de letras Unicode</strong> — caracteres copiáveis que funcionam em qualquer app moderno.</p>

<h2>Os 4 tipos de letras do alfabeto: bastão e cursiva</h2>
<p>Na tradição pedagógica brasileira, estabelecida como referência pelo <strong>Ministério da Educação (MEC)</strong> para o processo de alfabetização, os professores do ensino fundamental I ensinam quatro tipos de letras do alfabeto organizados em dois pares.</p>
<p><strong>Letra bastão maiúscula</strong>: traços retos e sem conexão entre caracteres. A, B, C, D. É a primeira ensinada por ter traçado mais simples e reconhecimento visual imediato. Aparece em placas, sinalizações e materiais de referência para leitura.</p>
<p><strong>Letra bastão minúscula</strong>: versão em letras pequenas do mesmo estilo reto. a, b, c, d. Forma a base da leitura em livros didáticos, jornais e materiais impressos de uso cotidiano no Brasil.</p>
<p><strong>Letra cursiva maiúscula</strong>: estilo com traços arredondados e fluidos, conectados entre as letras de uma palavra. Historicamente associada à escrita formal e assinaturas. Exige maior controle motor e coordenação, razão pela qual costuma ser ensinada a partir do 2º ano do fundamental.</p>
<p><strong>Letra cursiva minúscula</strong>: a versão minúscula do estilo cursivo, base da escrita manual cotidiana nas escolas brasileiras. Os "alfabetos com 4 tipos de letras para imprimir" — amplamente usados por professores e disponíveis em plataformas educacionais — mostram os quatro estilos lado a lado para referência dos alunos.</p>
<p>Para usos digitais, o Script Elegante Unicode (𝒜ℬ𝒞) reproduz visualmente a cursiva fina, enquanto o Script Cursivo Bold (𝓐𝓑𝓒) representa a cursiva de traço espesso. Ambos estão disponíveis no gerador acima para copiar e colar em qualquer plataforma.</p>

<h2>Tipos de letras para design: serif, sans-serif, script e display</h2>
<p>No design gráfico e no branding, o tipo de letra é uma decisão estratégica que comunica valores antes mesmo de o texto ser lido. Cada família transmite uma personalidade diferente.</p>
<p><strong>Serif</strong>: autoridade, tradição e sofisticação. Padrão de logotipos de marcas de luxo, veículos de imprensa e instituições financeiras. A Caslon, criada pelo tipógrafo inglês <strong>William Caslon</strong> no século XVIII, foi a fonte base dos primeiros documentos impressos nos Estados Unidos. A <strong>Google Fonts</strong> oferece Playfair Display, Merriweather e Lora como referências serif gratuitas de alta qualidade.</p>
<p><strong>Sans-serif</strong>: modernidade, clareza e neutralidade. O padrão de interfaces digitais desde os anos 1990. A <strong>Apple Inc.</strong> usa San Francisco; o <strong>Google</strong> usa Product Sans; a <strong>Microsoft</strong> usa Segoe UI no Windows. Helvetica e Arial continuam sendo as referências mais reconhecíveis globalmente.</p>
<p><strong>Script e cursiva</strong>: personalidade humana, criatividade e afeto. Muito usadas em branding de gastronomia, beleza, moda artesanal e pequenos negócios. Brush Script, Pacifico e Dancing Script — disponível gratuitamente no <strong>Google Fonts</strong> — são exemplos amplamente usados no design brasileiro. Nosso gerador de tipos de letras produz equivalentes Unicode do estilo script para uso imediato em redes sociais.</p>
<p><strong>Display e decorativa</strong>: impacto visual máximo para títulos, capas e cartazes. Bebas Neue, Impact e Lobster são as mais usadas em conteúdo digital brasileiro. Ferramentas como <strong>Canva</strong> e o <strong>Adobe Express</strong> (Adobe Systems) oferecem acesso direto a fontes display para criadores sem formação técnica em design.</p>
<p><strong>Monospace</strong>: legibilidade técnica com largura fixa. Padrão em editores de código como Visual Studio Code da <strong>Microsoft</strong>, terminais e documentação técnica. Courier New, Monaco e JetBrains Mono são as referências do segmento.</p>

<h2>Tipos de letras Unicode para copiar e colar</h2>
<p>O <strong>Unicode Consortium</strong>, organização sem fins lucrativos fundada em 1991 com sede em Mountain View, Califórnia, é responsável pelo padrão de caracteres usado em todos os sistemas operacionais modernos. A versão Unicode 16.0, lançada em 2024, define mais de 149.813 caracteres, incluindo blocos inteiros com letras estilizadas que reproduzem visualmente diferentes tipos de fontes tipográficas — sem precisar instalar nenhuma fonte no dispositivo.</p>
<p>Os blocos mais usados para personalização de tipos de letras são:</p>
<p><strong>Mathematical Bold (U+1D400)</strong>: produz letras em negrito — 𝐀𝐁𝐂𝐃. Aceito sem restrições no Instagram e Facebook da <strong>Meta Platforms</strong>, no WhatsApp da Meta, no Discord da <strong>Discord Inc.</strong> e no Free Fire da <strong>Garena</strong>.</p>
<p><strong>Mathematical Script (U+1D49C)</strong>: gera letras cursivas elegantes — 𝒜ℬ𝒞𝒟. O tipo de letra mais procurado para bio e nome de perfil no Instagram. Script Elegante tem traço fino; Script Bold (U+1D4D0) tem traço espesso.</p>
<p><strong>Mathematical Fraktur (U+1D504)</strong>: letras góticas medievais baseadas na tipografia Fraktur alemã — 𝔄𝔅𝔊𝔇. Um dos tipos de letras mais buscados para nicks no Free Fire e em jogos de gaming da <strong>Garena</strong>, Supercell e Riot Games.</p>
<p><strong>Mathematical Double-Struck (U+1D538)</strong>: letras com traço duplo — 𝔸𝔹ℂ𝔻. Originalmente criadas para notação matemática de conjuntos numéricos (ℕ, ℤ, ℝ), ganharam uso popular em identidades visuais digitais.</p>
<p>No iPhone, os caracteres Unicode são renderizados pelas fontes nativas do iOS da <strong>Apple Inc.</strong>, incluindo San Francisco e o conjunto <strong>Apple Color Emoji</strong>. No Android, as fontes <strong>Noto</strong> do Google garantem cobertura completa do padrão Unicode. O visual pode variar levemente entre plataformas, mas o caractere é o mesmo e qualquer pessoa que receba o texto verá o mesmo estilo, independentemente do dispositivo.</p>

<h2>Tipos de letras para tatuagem e cartaz</h2>
<p>A escolha do tipo de letra certo define o resultado final tanto em tatuagens quanto em peças gráficas. Para <strong>tatuagens</strong>, os estilos mais usados no Brasil são:</p>
<p><strong>Script e lettering</strong>: caligrafia fluida desenhada à mão pelo tatuador, adaptada ao corpo e à proposta do cliente. O estilo mais escolhido no Brasil para frases, nomes e citações em costelas, braços e pescoço. Artistas como Sailor Jerry e Ed Hardy popularizaram o script tatuado no Ocidente, e o lettering chegou ao Brasil como arte urbana nos anos 2000.</p>
<p><strong>Old English e Blackletter</strong>: o tipo gótico medieval Fraktur, muito usado em tatuagens de peito, costas e torso. Comunica força, identidade e peso visual imediato. Para visualizar o estilo digitalmente antes de decidir a tatuagem, selecione o filtro Gótico Fraktur no gerador acima e veja como o seu nome ou frase fica nesse tipo de letra.</p>
<p><strong>Sans-serif minimalista</strong>: tendência crescente de tatuagens de traço fino e tipografia limpa, muito alinhada ao minimalismo contemporâneo. Arial Narrow, Futura Light e suas variações são as referências mais consultadas.</p>
<p>Para <strong>cartazes e materiais impressos</strong>, a regra base é o contraste tipográfico: um tipo display de impacto para o título principal, um serif ou sans-serif limpo para o corpo do texto e as informações secundárias. A hierarquia tipográfica — tamanhos diferentes para título, subtítulo e corpo — é o fundamento do design de cartazes ensinado em cursos como os da <strong>ESPM</strong> e da <strong>FAUUSP</strong>. Para letras de título com estilo próprio sem precisar de software de design, use os estilos do gerador desta página.</p>

<h2>Como gerar tipos de letras diferentes online em 3 passos</h2>
<p>O gerador de tipos de letras funciona direto no navegador, sem instalação e sem cadastro. Todo o processamento acontece localmente — o texto que você digitar nunca é enviado a nenhum servidor externo.</p>
<ol>
<li><strong>Digite o texto</strong> no campo acima. Pode ser seu nome, nick para jogos, frase para bio do Instagram, palavra para cartaz ou qualquer texto que queira transformar em um tipo de letra diferente.</li>
<li><strong>Escolha o estilo</strong>. Os filtros por categoria — Cursivo, Gótico, Negrito, Borbulha, Especial — mostram apenas os tipos de letras de cada grupo. Todos os 25+ estilos aparecem ao mesmo tempo para comparação direta antes de decidir.</li>
<li><strong>Copie e cole</strong>. Toque no card do tipo de letra escolhido para copiar automaticamente para a área de transferência. Abra o app de destino — <a href="/letras-para-instagram/">Instagram</a>, <a href="/letras-para-whatsapp/">WhatsApp</a>, <a href="/letras-para-free-fire/">Free Fire</a> ou qualquer outro — e cole com um toque longo seguido de "Colar".</li>
</ol>
<p>O gerador é compatível com Android, iPhone, Windows e Mac. Os caracteres gerados seguem o padrão Unicode 16.0 do <strong>Unicode Consortium</strong> e funcionam em qualquer aplicativo, sistema ou dispositivo moderno. Para usos específicos por plataforma, acesse nossas páginas dedicadas: <a href="/letras-cursivas/">letras cursivas</a> para o estilo caligráfico, <a href="/letras-goticas/">letras góticas</a> para o estilo medieval, <a href="/letras-personalizadas/">letras personalizadas</a> para nicks e bio, e <a href="/simbolos/">símbolos para copiar</a> para decoração adicional.</p>',
    ],

    /* Style pages */
    'letras-cursivas' => [
        'icon'    => '𝓒',
        'name'    => 'Letras Cursivas',
        'title'   => 'Letras Cursivas para Copiar e Colar',
        'desc'    => 'Fontes cursivas e script em Unicode para Instagram, WhatsApp e TikTok. Elegantes e prontas para colar.',
        'color'   => '#a855f7',
        'tips'    => [
            ['icon'=>'𝒮','title'=>'Script Elegante','desc'=>'O estilo Script Elegante (𝒜ℬ𝒞) é perfeito para bio do Instagram, nome de perfil e mensagens românticas.'],
            ['icon'=>'𝓢','title'=>'Script Cursivo','desc'=>'O Script Cursivo (𝓐𝓑𝓒) é mais decorativo e cheio de personalidade. Ótimo para nicks e bios criativas.'],
            ['icon'=>'ᴀ','title'=>'Pequenas Maiúsculas','desc'=>'As Pequenas Maiúsculas (ᴀʙᴄ) dão um ar elegante e minimalista, ótimo para textos sofisticados.'],
        ],
        'faq'     => [
            ['q'=>'O que são letras cursivas Unicode?',
             'a'=>'São caracteres do bloco Mathematical Script do Unicode (U+1D400 e seguintes) que visualmente parecem letras escritas à mão em estilo cursivo ou caligráfico.'],
            ['q'=>'As letras cursivas funcionam no Instagram?',
             'a'=>'Sim! O Instagram aceita completamente letras cursivas Unicode no nome de perfil e na bio. São um dos estilos mais populares para perfis criativos.'],
            ['q'=>'Qual a diferença entre Script Elegante e Script Cursivo Bold?',
             'a'=>'O Script Elegante (𝒜ℬ𝒞) tem traços mais finos e aparência caligráfica delicada. O Script Cursivo Bold (𝓐𝓑𝓒) tem traços mais espessos e presença visual mais forte. Ambos são estilos cursivos, mas com personalidades distintas.'],
            ['q'=>'Letras cursivas funcionam no Free Fire?',
             'a'=>'Sim! O Script Cursivo é amplamente suportado no Free Fire e é um dos estilos favoritos para nicks elegantes e diferenciados no jogo.'],
            ['q'=>'Posso usar letras cursivas para copiar no WhatsApp?',
             'a'=>'Sim, o WhatsApp aceita completamente letras cursivas Unicode em mensagens, status e nome de perfil. O resultado aparece igual para todos os contatos que receberem o texto.'],
        ],
        'schema_faq' => true,
        'filter'  => 'cursivo',
        'article' => '<h2>O que são letras cursivas Unicode?</h2>
<p>As letras cursivas Unicode são caracteres especiais pertencentes ao bloco "Mathematical Script" do padrão Unicode, identificado nos intervalos U+1D400 a U+1D7FF. Esses caracteres foram originalmente incluídos no Unicode para representação de notação matemática avançada, mas se tornaram amplamente populares para personalização de texto em redes sociais, aplicativos de mensagem e jogos online, pois visualmente reproduzem com fidelidade estilos de caligrafia e escrita cursiva.</p>
<p>Ao contrário das fontes tipográficas tradicionais — que precisam ser instaladas no dispositivo para serem exibidas corretamente — as letras cursivas Unicode funcionam como qualquer outro caractere de texto. Elas são renderizadas pela fonte padrão do sistema em formato cursivo, garantindo que apareçam identicamente em qualquer dispositivo moderno: Android, iPhone, computadores com Windows ou Mac, tablets e até relógios inteligentes.</p>
<h2>Os tipos de letras cursivas disponíveis</h2>
<p>Existem vários estilos de letras cursivas dentro do padrão Unicode, cada um com características visuais distintas:</p>
<p><strong>Script Elegante (𝒜ℬ𝒞𝒟)</strong>: o estilo caligráfico clássico com traços finos e ornamentados. Visualmente remete à caligrafia inglesa tradicional, com ascendentes e descendentes bem marcados. Ideal para contextos que exigem elegância e sofisticação: bio de Instagram, nome de perfil, mensagens formais e personalização de documentos digitais.</p>
<p><strong>Script Cursivo Bold (𝓐𝓑𝓒𝓓)</strong>: a versão em negrito do estilo cursivo, com traços bem mais espessos que criam forte presença visual. Mantém o charme do cursivo mas com maior legibilidade em tamanhos menores de texto. Muito usado por empreendedores, criadores de conteúdo e influenciadores que querem uma identidade tipográfica marcante.</p>
<p><strong>Pequenas Maiúsculas (ᴀʙᴄᴅ)</strong>: embora tecnicamente não sejam letras cursivas, as pequenas maiúsculas criam um efeito elegante e refinado frequentemente associado ao estilo cursivo formal. Perfeitas para textos que precisam de distinção visual sutil sem o impacto visual das letras cursivas tradicionais.</p>
<h2>Alfabeto cursivo: maiúsculas e minúsculas</h2>
<p>O alfabeto cursivo Unicode inclui versões maiúsculas e minúsculas para todas as letras do alfabeto latino. As maiúsculas cursivas (𝒜, ℬ, 𝒞, 𝒟, ℰ, ℱ, 𝒢, ℋ, ℐ, 𝒥, 𝒦, ℒ, ℳ, 𝒩, 𝒪, 𝒫, 𝒬, ℛ, 𝒮, 𝒯, 𝒰, 𝒱, 𝒲, 𝒳, 𝒴, 𝒵) e as minúsculas cursivas (𝒶, 𝒷, 𝒸, 𝒹, ℯ, 𝒻, ℊ, 𝒽, 𝒾, 𝒿, 𝓀, 𝓁, 𝓂, 𝓃, ℴ, 𝓅, 𝓆, 𝓇, 𝓈, 𝓉, 𝓊, 𝓋, 𝓌, 𝓍, 𝓎, 𝓏) compõem um alfabeto completo para personalização.</p>
<p>O nosso gerador de letras cursivas para copiar converte automaticamente todo o texto que você digitar — incluindo letras maiúsculas, minúsculas, números e pontuação — para o estilo cursivo selecionado. Caracteres sem equivalente no bloco cursivo Unicode (como alguns sinais de pontuação) são mantidos em seu formato original, garantindo que o texto seja sempre legível e coerente.</p>
<h2>Como usar letras cursivas no Instagram e redes sociais</h2>
<p>As letras cursivas para Instagram são o estilo mais usado na plataforma para personalização de bio e nome de perfil. Perfis de nichos como beleza, moda, gastronomia, decoração, lifestyle, fotografia e empreendedorismo usam massivamente o estilo cursivo para comunicar elegância e cuidado com a estética visual.</p>
<p>No <a href="/letras-para-instagram/"><strong>Instagram</strong></a>, o Script Elegante funciona melhor para nomes e frases curtas na bio. O Script Cursivo Bold é preferido para nomes de perfil que precisam de maior legibilidade em tamanhos pequenos. No <a href="/letras-para-whatsapp/"><strong>WhatsApp</strong></a>, o cursivo é muito usado em mensagens de ocasiões especiais, convites e anúncios. No <strong>TikTok</strong>, o estilo cursivo aparece em nomes de perfis criativos e bios de criadores de conteúdo de lifestyle. No <a href="/letras-para-free-fire/"><strong>Free Fire e outros jogos</strong></a>, as letras cursivas compõem nicks elegantes e diferenciados, muito populares entre jogadores que preferem um estilo refinado ao invés do <a href="/letras-goticas/">estilo gótico</a> ou pesado.</p>
<h2>Letras cursivas bonitas: por que são as mais procuradas</h2>
<p>Dentre todos os estilos de letras especiais disponíveis em Unicode, as letras cursivas são as que mais evocam beleza, elegância e personalidade. A associação do estilo cursivo com a escrita à mão caligráfica — historicamente vista como arte e habilidade refinada — confere às letras cursivas Unicode um valor estético que outros estilos como negrito ou borbulha não conseguem replicar.</p>
<p>Letras cursivas bonitas para copiar são procuradas para uma variedade enorme de usos além das redes sociais: personalização de assinaturas digitais, criação de logotipos textuais simples, decoração de apresentações e documentos digitais, e até personalização de perfis em plataformas de jogos que aceitam Unicode. A versatilidade do estilo cursivo — que funciona bem em contextos formais e informais, em textos curtos e longos — explica sua popularidade consistente ao longo do tempo.</p>
<h2>Caligrafia cursiva vs. letras cursivas Unicode: entenda a diferença</h2>
<p>É importante distinguir dois conceitos relacionados mas diferentes: a <strong>caligrafia cursiva</strong> é a arte de escrever à mão em estilo conectado e fluido, estudada e praticada por calígrafos e artistas. As <strong>letras cursivas Unicode</strong> são caracteres digitais que visualmente imitam esse estilo, mas são texto computacional — não arte manual.</p>
<p>A caligrafia cursiva real, como a ensinada em escolas e praticada em atividades pedagógicas (atividades de letra cursiva, alfabeto cursivo para imprimir), usa as fontes manuscritas tradicionais. As letras cursivas do nosso gerador são ideais para uso digital — redes sociais, aplicativos de mensagem e jogos — mas não substituem o aprendizado da caligrafia cursiva para fins educacionais ou artísticos. Para quem pratica caligrafia e também quer personalizar suas redes sociais, as letras cursivas Unicode são um complemento digital perfeito à habilidade manual desenvolvida no papel.</p>',
    ],
    'letras-goticas' => [
        'icon'    => '𝔊',
        'name'    => 'Letras Góticas',
        'title'   => 'Letras Góticas para Copiar e Colar',
        'desc'    => 'Fontes góticas Fraktur em Unicode para Free Fire, Instagram e mais. Copie em 1 clique.',
        'color'   => '#6b21a8',
        'tips'    => [
            ['icon'=>'𝔄','title'=>'Fraktur Clássico','desc'=>'O estilo Fraktur (𝔄𝔅𝔊) é a fonte gótica medieval tradicional, muito usada no Free Fire para nicks épicos.'],
            ['icon'=>'𝕬','title'=>'Fraktur Negrito','desc'=>'O Fraktur Negrito (𝕬𝕭𝕮) é mais denso e impactante, ideal para nicks de jogos e perfis agressivos.'],
            ['icon'=>'𝔸','title'=>'Duplo Contorno','desc'=>'O estilo Duplo Contorno (𝔸𝔹ℂ) tem linhas duplas e um visual único, muito popular no Instagram.'],
        ],
        'faq'     => [
            ['q'=>'O que são letras góticas Unicode?',
             'a'=>'São caracteres do bloco Mathematical Fraktur do Unicode — uma tipografia gótica medieval digitalizada. Funcionam como texto normal em qualquer plataforma que suporte Unicode.'],
            ['q'=>'Letras góticas funcionam no Free Fire?',
             'a'=>'Sim! O Free Fire suporta fontes góticas Fraktur no nick. São muito populares entre jogadores pela estética épica que criam.'],
            ['q'=>'Qual a diferença entre Fraktur e fonte medieval?',
             'a'=>'Fraktur é um estilo específico de tipografia gótica alemã do século XV, caracterizado por ângulos agudos e traços quebrados. "Fonte medieval" é um termo genérico que pode se referir ao Fraktur e a outros estilos góticos da Idade Média. No contexto do Unicode, Fraktur é o nome técnico do bloco que contém as letras góticas.'],
            ['q'=>'Letras góticas funcionam no Instagram?',
             'a'=>'Sim! O Instagram aceita totalmente as letras góticas Fraktur Unicode no nome de perfil, na bio e nas legendas. São populares entre perfis de música, arte, gaming e cultura alternativa.'],
            ['q'=>'Posso usar letras góticas em tatuagens?',
             'a'=>'As letras góticas Unicode são ótimas para visualizar como uma tatuagem em estilo Fraktur ficaria, mas para a tatuagem em si você precisará de um tatuador que trabalhe com caligrafia gótica. Use nosso gerador para gerar uma prévia do texto antes de levar ao tatuador.'],
        ],
        'schema_faq' => true,
        'filter'  => 'gotico',
        'article' => '<h2>A origem das letras góticas: Fraktur e a Idade Média</h2>
<p>As letras góticas têm uma história rica que remonta ao século XII, quando monges europeus desenvolveram novos estilos de escrita para acomodar a crescente demanda por manuscritos religiosos e acadêmicos. A tipografia gótica, caracterizada por ângulos agudos, traços quebrados e alta densidade visual, surgiu como uma evolução mais compacta e eficiente da caligrafia carolíngia — permitindo que mais texto coubesse em cada página de pergaminho.</p>
<p>O Fraktur, o estilo de letra gótica mais amplamente usado e que deu origem às fontes góticas digitais atuais, foi desenvolvido na Alemanha no início do século XVI e se tornou a tipografia oficial dos documentos alemães até meados do século XX. O nome "Fraktur" vem do latim <em>fractura</em>, referindo-se à aparência "quebrada" dos traços das letras. No padrão Unicode moderno, o bloco Mathematical Fraktur (iniciando em U+1D504) preserva digitalmente este estilo histórico, tornando-o acessível para qualquer dispositivo.</p>
<h2>Tipos de fontes góticas disponíveis no Unicode</h2>
<p>O padrão Unicode oferece três variações principais de letras góticas Fraktur, cada uma com características visuais e aplicações distintas:</p>
<p><strong>Fraktur Clássico (𝔄𝔅𝔊𝔇𝔈)</strong>: o estilo gótico medieval original, com traços finos e angulares que criam a aparência característica da tipografia medieval. É o estilo mais autêntico historicamente e o mais reconhecível como "letra gótica". Muito usado no Free Fire, em nicks de jogos de fantasia e em perfis de música metal e rock.</p>
<p><strong>Fraktur Negrito (𝕬𝕭𝕮𝕯𝕰)</strong>: a versão em negrito do Fraktur, com traços mais espessos que aumentam o impacto visual. Mantém toda a estética gótica com maior presença visual — ideal para nicks que precisam se destacar em lobbies de jogos e para perfis com estética dark ou heavy.</p>
<p><strong>Duplo Contorno (𝔸𝔹ℂ𝔻𝔼)</strong>: tecnicamente parte do bloco Mathematical Double-Struck, este estilo usa linhas duplas paralelas para formar cada letra, criando um visual geométrico e único que é frequentemente categorizado com as letras góticas pela comunidade. É um dos estilos mais versáteis — funciona bem em contextos formais e informais e tem excelente legibilidade mesmo em tamanhos reduzidos.</p>
<h2>Letras góticas para Free Fire e jogos online</h2>
<p>No universo dos jogos online brasileiros, especialmente no Free Fire, as letras góticas são o estilo mais procurado para composição de nicks. A estética épica e intimidadora do Fraktur é a escolha natural de jogadores competitivos, líderes de clãs e streamers que querem um nick com impacto visual imediato.</p>
<p>O Fraktur Clássico e o Fraktur Negrito têm excelente compatibilidade com o <a href="/letras-para-free-fire/">Free Fire</a>, aparecendo corretamente tanto em dispositivos Android quanto em iOS. A combinação de letras góticas com símbolos Unicode específicos — como ★, ⚔️ e as molduras ꧁꧂ — cria nicks altamente personalizados e reconhecíveis na comunidade do jogo.</p>
<p>Além do Free Fire, as letras góticas são compatíveis com outros jogos populares no Brasil que aceitam Unicode no campo de nome: Mobile Legends, PUBG Mobile e Garena produtos em geral. Para cada jogo, recomendamos testar o nick gerado em um ambiente de teste antes de confirmar a troca do nome oficial.</p>
<h2>Alfabeto gótico para copiar: como usar o gerador</h2>
<p>O gerador de letras góticas converte instantaneamente qualquer texto que você digitar nos três estilos Fraktur disponíveis. Para copiar o alfabeto gótico completo ou qualquer palavra em fonte gótica, basta digitar o texto desejado e tocar no card do estilo escolhido. O texto é copiado automaticamente e está pronto para colar em qualquer aplicativo.</p>
<p>Cada letra do alfabeto tem seu equivalente gótico em maiúscula e minúscula: A→𝔄/𝔞, B→𝔅/𝔟, C→ℭ/𝔠, D→𝔇/𝔡 e assim por diante até o Z. Números e a maioria dos sinais de pontuação não têm equivalentes no bloco Fraktur Unicode e são mantidos em seu formato original no texto gerado.</p>
<h2>Fonte medieval: entenda a relação com as letras góticas</h2>
<p>O termo "fonte medieval" é frequentemente usado como sinônimo de letra gótica, mas tecnicamente engloba vários estilos tipográficos históricos além do Fraktur. A escrita medieval incluía estilos como o uncial, o semi-uncial, a letra carolina e diversas formas de gótico (textura, rotunda, bastarda). No contexto digital e de geração de letras para redes sociais, "fonte medieval" e "letra gótica" geralmente se referem ao mesmo estilo Fraktur disponível no Unicode.</p>
<p>Para fins de personalização em redes sociais e jogos, a distinção histórica entre os sub-estilos de letras medievais é menos relevante do que a compatibilidade e o impacto visual. O Fraktur Unicode é a representação digital mais acessível e amplamente suportada da tipografia gótica medieval, funcionando em praticamente todos os dispositivos e plataformas que suportam o padrão Unicode moderno.</p>
<h2>Letras góticas para Instagram e tatuagens: usos criativos</h2>
<p>No <a href="/letras-para-instagram/">Instagram</a>, as letras góticas são populares em perfis de nichos específicos: música (especialmente rock, metal e rap), arte urbana e graffiti, cultura alternativa e dark, gaming e esports, moda streetwear e lifestyle alternativo. A estética Fraktur associada a esses nichos cria reconhecimento instantâneo de identidade para seguidores familiarizados com a cultura visual. Se procura algo mais suave, conheça também nossas <a href="/letras-cursivas/">letras cursivas</a> e a coleção de <a href="/letras-bonitas/">letras bonitas</a>.</p>
<p>Para tatuagens, as letras góticas Unicode funcionam como excelente ferramenta de visualização. Antes de tatuar um nome, frase ou palavra em estilo gótico, você pode usar o gerador para ver como o texto ficaria nesse estilo tipográfico e decidir se é o visual desejado. Leve o resultado para seu tatuador com as especificações do estilo — Fraktur Clássico, Fraktur Negrito ou Duplo Contorno — e discuta as adaptações necessárias para o traço manual de uma tatuagem de qualidade. A caligrafia gótica de tatuagem requer habilidade artística específica que vai além da simples reprodução do Unicode digital.</p>',
    ],
    'letras-bonitas' => [
        'icon'    => '✨',
        'name'    => 'Letras Bonitas',
        'title'   => 'Letras Bonitas para Copiar e Colar',
        'desc'    => '25+ estilos de letras bonitas e diferentes para Instagram, WhatsApp e mais. Copie em 1 clique.',
        'color'   => '#ec4899',
        'tips'    => [],
        'faq'     => [
            ['q'=>'O que são letras bonitas para copiar e colar?',
             'a'=>'São letras geradas com caracteres Unicode que ficam visualmente bonitas e diferentes das letras normais. Podem ser cursivas, em negrito, borbulha, góticas ou com efeitos especiais.'],
            ['q'=>'Onde posso usar letras bonitas?',
             'a'=>'Em qualquer lugar que aceite texto Unicode: Instagram (nome, bio, legendas), WhatsApp (mensagens, status, nome), Free Fire (nick), TikTok (bio, nome), Facebook, Discord e muito mais.'],
            ['q'=>'As letras bonitas aparecem igual para todos?',
             'a'=>'Sim. Por serem caracteres Unicode padrão, aparecem corretamente em qualquer dispositivo moderno sem que o receptor precise ter nada instalado.'],
            ['q'=>'Qual estilo de letra é considerado o mais bonito?',
             'a'=>'Depende do contexto! O Script Cursivo (𝓐𝓑𝓒) é o favorito para bio do Instagram. O Fraktur Gótico (𝔄𝔅𝔊) é o mais épico para Free Fire. O Duplo Contorno (𝔸𝔹ℂ) é muito elegante para uso geral. Experimente diferentes estilos no gerador!'],
            ['q'=>'Posso combinar diferentes estilos de letras bonitas?',
             'a'=>'Sim! Você pode gerar o mesmo texto em diferentes estilos e combinar partes de cada um. Por exemplo, colocar o nome em cursivo e a profissão em negrito na bio do Instagram.'],
        ],
        'schema_faq' => true,
        'filter'  => 'all',
        'article' => '<h2>O que são letras bonitas para copiar e colar?</h2>
<p>Letras bonitas para copiar e colar são caracteres especiais do padrão Unicode — especificamente dos blocos <strong>Mathematical Script</strong> (U+1D49C a U+1D4CF), <strong>Mathematical Bold Script</strong> (U+1D4D0 a U+1D503), <strong>Mathematical Double-Struck</strong> (U+1D538 a U+1D56B) e <strong>Letterlike Symbols</strong> (U+2100 a U+214F) — que visualmente reproduzem estilos tipográficos elegantes como cursivo, negrito, duplo contorno, estético e muito mais.</p>
<p>Como fazem parte do padrão Unicode 15.0, adotado universalmente por Android, iOS, Windows, macOS e Linux, essas letras funcionam em qualquer aplicativo que suporte texto: Instagram, WhatsApp, TikTok, Free Fire, Facebook, Discord, Telegram e centenas de outros. Diferente de fontes tipográficas instaladas localmente — como as famílias Helvetica, Garamond, Bodoni ou Century Gothic — as letras bonitas Unicode não precisam de instalação e são renderizadas pela fonte de sistema padrão de cada dispositivo em formato estilizado.</p>
<h2>Os estilos de letras mais bonitas — guia completo</h2>
<p><strong>Script Cursivo Bold — 𝓐𝓑𝓒 (Mathematical Bold Script, U+1D4D0+)</strong>: o estilo mais popular no Brasil. Traços espessos e fluidos inspirados na caligrafia Spencerian americana do século XIX, desenvolvida por Platt Rogers Spencer. Universalmente considerado o mais bonito para bio e nome de perfil no Instagram por combinar elegância estética com boa legibilidade em telas de smartphone.</p>
<p><strong>Script Elegante — 𝒜ℬ𝒞 (Mathematical Script, U+1D49C+)</strong>: versão de traço fino do cursivo, inspirada na caligrafia Copperplate e na escrita cursiva inglesa clássica. Transmite sofisticação máxima — muito usado por perfis de moda, beleza, gastronomia fina e consultores premium.</p>
<p><strong>Duplo Contorno — 𝔸𝔹ℂ (Mathematical Double-Struck, U+1D538+)</strong>: letras construídas com linhas paralelas duplas, originalmente usadas em notação matemática para representar conjuntos numéricos (ℕ, ℤ, ℚ, ℝ, ℂ). Criaram estética própria nas redes sociais por seu visual único e moderno — um dos estilos mais bonitos e versáteis.</p>
<p><strong>Negrito Unicode — 𝗔𝗕𝗖 (Mathematical Bold, U+1D400+)</strong>: versão em negrito do alfabeto latino padrão. Máxima legibilidade combinada com forte presença visual. Ideal para títulos, nomes de perfil e qualquer contexto onde clareza e impacto são igualmente importantes.</p>
<p><strong>Estético Espaçado — A e s t é t i c o (Fullwidth Latin, U+FF21+)</strong>: letras em largura dupla com espaçamento ampliado, associadas ao movimento "aesthetic" e "vaporwave" das redes sociais. Muito bonito para frases curtas, slogans e textos de bio com proposta minimalista e artística.</p>
<h2>Letras bonitas para Instagram — onde o impacto é maior</h2>
<p>O Instagram é a plataforma onde letras bonitas geram maior retorno visual. Com mais de 134 milhões de usuários brasileiros ativos, a competição por atenção no feed e na seção Explorar é intensa. Uma <a href="/letras-para-instagram/">bio do Instagram</a> com letras cursivas ou em duplo contorno cria diferenciação imediata em relação a perfis com texto comum.</p>
<p>Para o <strong>nome de exibição</strong>, o objetivo é máximo impacto em poucas letras. O Duplo Contorno e o Script Cursivo Bold criam nomes de perfil memoráveis, visíveis mesmo em thumbnails de 40px na grade de seguidores. Para a <strong>bio</strong> — limitada a 150 caracteres — o Script Elegante e as Pequenas Maiúsculas (ᴀʙᴄ) são os estilos mais bonitos que mantêm alta legibilidade no espaço reduzido. Confira nossa página dedicada a <a href="/letras-para-bio/">letras para bio do Instagram</a> para estratégias avançadas de formatação.</p>
<h2>Letras bonitas para WhatsApp — status e mensagens</h2>
<p>No WhatsApp, as letras bonitas têm dois usos principais: personalização do perfil e enriquecimento de mensagens especiais. Para o <strong>status do WhatsApp</strong>, letras em cursivo ou estético criam uma apresentação visual muito mais atraente do que texto comum — especialmente importante para empreendedores e criadores que usam o status como vitrine de conteúdo.</p>
<p>Para <strong>mensagens especiais</strong> — aniversários, declarações, convites, votos de felicidades — letras bonitas em cursivo adicionam um toque artesanal e personalizado que texto comum não consegue transmitir. Em grupos do WhatsApp, mensagens com letras estilizadas são lidas com muito mais frequência do que mensagens em texto puro, por se destacarem visualmente no histórico de mensagens. Veja todos os recursos em nossa página de <a href="/letras-para-whatsapp/">letras para WhatsApp</a>.</p>
<h2>Como escolher a letra bonita certa para cada contexto</h2>
<p>A escolha do estilo ideal depende de três fatores: a plataforma de destino, o tom da comunicação e a legibilidade necessária no tamanho de exibição. Guia rápido:</p>
<ul>
<li><strong>Elegância e sofisticação</strong>: Script Cursivo Bold ou Script Elegante — perfis de beleza, moda, gastronomia, lifestyle premium e consultores</li>
<li><strong>Força e presença</strong>: Negrito Unicode ou Fraktur Gótico — gaming, esportes, fitness e posicionamentos assertivos</li>
<li><strong>Modernidade criativa</strong>: Duplo Contorno ou Estético Espaçado — design, arte, música e criadores de conteúdo visual</li>
<li><strong>Diversão e jovialidade</strong>: Borbulha (🅐🅑🅒) ou estilos com inversão e espelho — humor, entretenimento e conteúdo para público jovem</li>
<li><strong>Minimalismo refinado</strong>: Pequenas Maiúsculas (ᴀʙᴄ) ou Itálico Unicode — perfis que valorizam sutileza e elegância discreta</li>
</ul>
<h2>Letras bonitas para copiar — tatuar e uso offline</h2>
<p>Além das redes sociais, as letras bonitas Unicode são muito usadas como referência visual para tatuagens e artes manuais. O estilo Script Cursivo Bold é uma das principais referências para tatuadores que trabalham com caligrafia e lettering, pois reproduz digitalmente o traço da escrita Spencerian que inspira muitos designs de tatuagem. O Script Elegante é usado como referência para tatuagens de estilo fino line (fine line tattoo), onde a delicadeza do traço é o elemento central do design.</p>
<p>Para nicks em jogos como <a href="/letras-para-free-fire/">Free Fire</a>, PUBG Mobile e Fortnite, as <a href="/letras-personalizadas/">letras bonitas personalizadas</a> cursivas são populares entre jogadoras que preferem um estilo mais elegante ao visual intimidador das letras góticas. Nicks com Script Cursivo Bold se destacam nos lobbies e nas tabelas de pontuação por criarem contraste visual imediato com os nicks em texto puro da maioria dos jogadores.</p>',
    ],
    'letras-para-bio' => [
        'icon'    => '📝',
        'name'    => 'Letras para Bio',
        'title'   => 'Letras Diferentes para Bio do Instagram',
        'desc'    => 'Crie uma bio do Instagram incrível com letras cursivas, góticas e especiais para copiar e colar.',
        'color'   => '#a855f7',
        'tips'    => [
            ['icon'=>'📐','title'=>'Organize com linhas','desc'=>'Use letras diferentes para criar seções na bio: 𝓝𝓸𝓶𝓮 em cursivo, localização em monospace, etc.'],
            ['icon'=>'✨','title'=>'Misture estilos','desc'=>'Combine estilos diferentes na mesma bio: uma linha em negrito, outra em cursivo, para criar contraste visual.'],
            ['icon'=>'📏','title'=>'Fique atento ao limite','desc'=>'A bio do Instagram tem 150 caracteres. Cada letra Unicode conta como 1 caractere, mas alguns estilos usam 2 pontos de código.'],
        ],
        'faq'     => [
            ['q'=>'Como colocar letras diferentes na bio do Instagram?',
             'a'=>'Gere as letras no gerador, copie o estilo desejado e cole no campo "Biografia" nas configurações do seu perfil do Instagram. Você pode misturar diferentes estilos na mesma bio.'],
            ['q'=>'Quais estilos ficam melhores na bio?',
             'a'=>'Para bio do Instagram, os estilos mais bonitos são Script Cursivo (𝓐𝓑𝓒), Script Elegante (𝒜ℬ𝒞), Pequenas Maiúsculas (ᴀʙᴄ) e Estético (A e s t é t i c o).'],
            ['q'=>'Letras diferentes ocupam mais caracteres na bio?',
             'a'=>'Não! Cada letra Unicode conta como apenas 1 caractere no limite de 150 da bio do Instagram, exatamente como as letras normais. Você tem o mesmo espaço disponível independentemente do estilo escolhido.'],
            ['q'=>'Posso misturar emojis com letras diferentes na bio?',
             'a'=>'Sim! Emojis e letras Unicode se combinam perfeitamente na bio do Instagram. A mistura de estilos tipográficos com emojis relevantes ao seu nicho cria bio visualmente ricas e organizadas.'],
            ['q'=>'Como criar separadores de seção na bio do Instagram?',
             'a'=>'Use símbolos Unicode como ✦, ◆, ★, ·, | ou ─ para separar seções da bio. Esses símbolos são neutros visualmente e criam divisões claras entre diferentes informações.'],
        ],
        'schema_faq' => true,
        'filter'  => 'cursivo',
        'article' => '<h2>Bio do Instagram: o campo de texto mais valioso de 134 milhões de perfis</h2>
<p>A bio do Instagram é o único campo de texto de perfil que combina identidade, proposta de valor e chamada para ação em 150 caracteres visíveis para qualquer pessoa que acesse seu perfil, mesmo sem ser seguidora. Com 134 milhões de usuários ativos no Brasil e mais de 2 bilhões globalmente, o Instagram processa esses 150 caracteres como texto Unicode UTF-8 completo. Isso significa que os blocos <strong>Mathematical Script</strong> (U+1D49C–U+1D4CF) e <strong>Mathematical Bold Script</strong> (U+1D4D0–U+1D503) — que visualmente reproduzem escrita cursiva e caligráfica — são armazenados e exibidos pela plataforma exatamente como qualquer texto comum.</p>
<p>O algoritmo de relevância do Instagram lê o campo de bio como texto indexável. Embora caracteres Unicode estilizados não sejam indexados como palavras-chave de busca interna, sua presença na bio impacta indiretamente a taxa de conversão de visita em seguidor: bios com hierarquia tipográfica bem definida são percebidas como mais profissionais e credíveis, aumentando consistentemente a conversão de visitante em seguidor dentro do mesmo nicho.</p>
<h2>Unicode na bio: quais blocos funcionam e como identificá-los</h2>
<p>O Instagram aceita todos os blocos Unicode modernos no campo de bio. Os mais usados para personalização visual são:</p>
<p><strong>Mathematical Script (𝒜ℬ𝒞 — U+1D49C+)</strong>: baseado na caligrafia Copperplate e na tradição da escrita cursiva inglesa do século XVIII. Traços finos, ornamentados e elegantes — o estilo mais sofisticado disponível em Unicode. Ideal para perfis premium, consultores e marcas de luxo.</p>
<p><strong>Mathematical Bold Script (𝓐𝓑𝓒 — U+1D4D0+)</strong>: versão de traço espesso do Mathematical Script, inspirada na caligrafia Spencerian americana desenvolvida por Platt Rogers Spencer no século XIX. O estilo mais popular no Instagram brasileiro por combinar elegância com legibilidade adequada em tamanhos reduzidos. Perfeito para nomes de perfil e primeiras linhas de bio.</p>
<p><strong>Modifier Letter Small Capital (ᴀʙᴄ — U+1D00–U+1D2F)</strong>: caracteres de tamanho reduzido derivados das letras maiúsculas. Criam o efeito de "pequenas maiúsculas" — refinado e discreto. Funcionam como tipografia secundária para especialidade, localização ou funções complementares na bio.</p>
<p><strong>Mathematical Double-Struck (𝔸𝔹ℂ — U+1D538+)</strong>: letras com linhas paralelas duplas, criando estética geométrica moderna. Visual único que se destaca sem competir agressivamente com outros elementos da bio.</p>
<p><strong>Fullwidth Latin (Ａ ｅ ｓ ｔ é ｔ ｉ ｃ ｏ — U+FF21+)</strong>: letras de largura dupla com espaçamento ampliado, associadas ao movimento aesthetic e vaporwave das redes sociais. Muito eficaz para frases curtas e slogans minimalistas.</p>
<h2>Como estruturar uma bio com letras diferentes — hierarquia tipográfica em 3 camadas</h2>
<p>A estrutura mais eficaz para uma bio do Instagram com letras diferentes usa hierarquia visual com três camadas tipográficas distintas:</p>
<p><strong>Linha 1 — Identidade principal (Mathematical Bold Script)</strong>: nome ou posicionamento em letras cursivas espessas. Alta legibilidade, forte presença visual. Exemplo: 𝓔𝓶𝓹𝓻𝓮𝓮𝓷𝓭𝓮𝓭𝓸𝓻𝓪 𝓓𝓲𝓰𝓲𝓽𝓪𝓵</p>
<p><strong>Linha 2 — Especialidade (Pequenas Maiúsculas)</strong>: área de atuação ou diferencial em caracteres compactos. Complementa sem competir com a linha principal. Exemplo: ᴍᴀʀᴋᴇᴛɪɴɢ · ᴄᴏɴᴛᴇúᴅᴏ · ʙʀᴀɴᴅɪɴɢ</p>
<p><strong>Linha 3 — CTA</strong>: chamada para ação em texto normal para máxima legibilidade. Links de bio gerenciados por ferramentas como <strong>Linktree</strong>, <strong>Beacons</strong>, <strong>Milkshake</strong> ou <strong>Shorby</strong> — que criam páginas com múltiplos links a partir do único slot disponível no perfil.</p>
<p>Entre as linhas, use separadores Unicode como ✦ ─ · ◆ para criar divisão visual clara consumindo apenas 1–2 caracteres por separador dentro do limite total de 150.</p>
<h2>Fontes para bio do Instagram: guia por nicho</h2>
<p>A escolha do estilo tipográfico ideal para a bio depende do nicho e da persona do perfil:</p>
<p><strong>Empreendedorismo, coaching e negócios digitais</strong>: Script Bold (𝓐𝓑𝓒) na linha principal + Pequenas Maiúsculas (ᴀʙᴄ) para credenciais. Transmite autoridade com personalidade.</p>
<p><strong>Beleza, moda e lifestyle</strong>: Script Elegante (𝒜ℬ𝒞) para o nome + Negrito Unicode para serviços. Máxima elegância visual para nichos premium.</p>
<p><strong>Fotografia, arte e design</strong>: Estético Espaçado (Fullwidth Latin, U+FF21+) para frases + Pequenas Maiúsculas para nicho. Visual artístico e minimalista associado à estética de alta qualidade.</p>
<p><strong>Gaming, música e cultura alternativa</strong>: Fraktur Gótico combinado com negrito Unicode. Estética que comunica identidade cultural imediata e nicho específico.</p>
<p><strong>Educação, medicina e conteúdo informativo</strong>: Negrito Unicode (𝗔𝗕𝗖) para nomes e títulos. Alta legibilidade como prioridade absoluta, com diferenciação visual discreta.</p>
<h2>Link-in-bio: como letras diferentes completam sua estratégia de perfil</h2>
<p>A bio do Instagram permite apenas um link externo no campo dedicado. Ferramentas de link-in-bio como <strong>Linktree</strong>, <strong>Beacons</strong>, <strong>Milkshake</strong> e <strong>Shorby</strong> criam páginas intermediárias com múltiplos links — site, loja, YouTube, newsletter, WhatsApp — a partir desse único URL disponível. As letras diferentes na bio trabalham em sinergia com essas ferramentas: enquanto a hierarquia tipográfica guia os olhos do visitante pela bio, o link-in-bio converte esse interesse em ação concreta.</p>
<p>Uma bio otimizada combina letras cursivas no nome, pequenas maiúsculas na especialidade e uma frase direta antes do link. O uso consistente do mesmo estilo tipográfico na bio do Instagram e na página de link-in-bio cria identidade visual coerente em toda a jornada do seguidor — do feed ao clique no link.</p>
<h2>Instagram Creator Studio e Professional Dashboard: métricas da bio</h2>
<p>Contas profissionais do Instagram — Criador de Conteúdo e Empresa — têm acesso ao <strong>Instagram Creator Studio</strong> e ao <strong>Professional Dashboard</strong>, ferramentas que oferecem análises detalhadas sobre alcance, impressões e ações na bio. Essas métricas revelam quantos visitantes tocam no link da bio, quantos seguem após visitar o perfil e de quais fontes de tráfego eles chegam.</p>
<p>Para contas profissionais, a bio com letras diferentes tem impacto mensurável na taxa de conversão. Perfis que aplicam hierarquia tipográfica na bio — com letras cursivas no nome e elementos visuais claros para o CTA — registram taxas de conversão de visitante em seguidor superiores a perfis com bio em texto puro dentro do mesmo nicho. O Professional Dashboard permite comparar esses dados antes e depois de uma atualização de bio com letras especiais.</p>
<h2>Letras pequenas e superscript na bio: minimalismo sofisticado</h2>
<p>As letras pequenas — Pequenas Maiúsculas (U+1D00–U+1D2F) e Superscript Latin (U+2070+) — são o estilo mais discreto para personalização de bio. Diferente dos estilos cursivos que chamam atenção imediata, as letras pequenas criam um efeito refinado que comunica sofisticação sem impacto visual excessivo.</p>
<p>Esse estilo é especialmente eficaz em dois perfis opostos: criadores minimalistas de alta estética (fotografia, arte, moda premium) e profissionais de credibilidade (médicos, advogados, professores) onde a prioridade é autoridade, não decoração. Em ambos os casos, as Pequenas Maiúsculas funcionam como camada tipográfica secundária que organiza informação sem distrair do conteúdo principal.</p>
<h2>Como criar a bio perfeita: processo passo a passo</h2>
<p>Para criar uma bio do Instagram com letras diferentes que gere resultados reais, siga este roteiro:</p>
<p><strong>1. Defina as três informações essenciais</strong>: quem você é, o que você faz e o que o visitante deve fazer. Cada uma merece uma linha dedicada dentro dos 150 caracteres disponíveis.</p>
<p><strong>2. Escolha a hierarquia tipográfica</strong>: use nosso gerador de letras — 25+ estilos lado a lado — para testar combinações. Para estilos cursivos na linha principal, confira nossa curadoria de <a href="/letras-cursivas/">letras cursivas</a> com os melhores estilos caligráficos do Unicode. Para letras com elegância visual máxima, veja também os estilos em nossa página de <a href="/letras-bonitas/">letras bonitas</a>.</p>
<p><strong>3. Construa a bio iterativamente</strong>: gere a primeira linha no estilo escolhido, cole na bio do Instagram, conte os caracteres restantes, gere a segunda linha. Repita até preencher os 150 caracteres estrategicamente.</p>
<p><strong>4. Teste em diferentes dispositivos</strong>: a bio aparece levemente diferente em iPhone e Android. Acesse seu perfil de um segundo dispositivo ou use o Instagram Web para verificar a aparência antes de finalizar.</p>
<p><strong>5. Atualize sazonalmente</strong>: bios com letras diferentes atualizadas com frequência — para campanhas, lançamentos ou datas especiais — mantêm o perfil relevante e sinalizam atividade ao algoritmo. Para estratégias avançadas de perfil além da bio, consulte nosso <a href="/letras-para-instagram/">guia completo de letras para Instagram</a>.</p>',
    ],
];

/* ── CURRENT PLATFORM ── */
$p = $platforms[$slug] ?? [
    'icon'  => '✨',
    'name'  => get_the_title(),
    'title' => get_the_title(),
    'desc'  => get_the_excerpt(),
    'tips'  => [],
    'faq'   => [],
    'schema_faq' => false,
    'filter'=> 'all',
    'article' => '',
];

/* ── Schema: FAQ ── */
if (!empty($p['faq']) && $p['schema_faq']) {
    ld_schema_faq($p['faq']);
}

/* ── Schema: Breadcrumb ── */
ld_schema_breadcrumb([
    ['name' => 'Letras Diferentes Online', 'url' => home_url('/')],
    ['name' => $p['title'], 'url' => get_permalink()],
]);

/* ── Schema: Software ── */
ld_schema_software(
    'Gerador de Letras para ' . $p['name'],
    'Gerador de letras diferentes grátis para ' . $p['name'] . ' — 25+ estilos para copiar e colar.',
    get_permalink()
);
?>

<main>
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="Localização">
  <a href="<?php echo esc_url(home_url('/')); ?>">Início</a>
  <span aria-hidden="true">›</span>
  <span><?php echo esc_html($p['title']); ?></span>
</nav>

<!-- PLATFORM HERO -->
<section class="plat-hero">
  <div class="plat-icon" aria-hidden="true"><?php echo esc_html($p['icon']); ?></div>
  <h1><?php echo esc_html($p['title']); ?></h1>
  <p><?php echo esc_html($p['desc']); ?></p>
</section>
<!-- /PLATFORM HERO -->

<!-- GENERATOR -->
<section class="generator-section" id="gerador" aria-label="Gerador de letras para <?php echo esc_attr($p['name']); ?>">
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
      <button id="ld-fav-toggle" class="gen-tool-btn js-fav-toggle" title="Mostrar favoritos" data-empty-hint="Clique ❤️ nos estilos para salvar">❤️ Favoritos <span id="ld-fav-count"></span></button>
      <button id="ld-share" class="gen-tool-btn js-share" title="Compartilhar link">🔗 Compartilhar</button>
      <button id="ld-history-toggle" class="gen-tool-btn js-history" title="Histórico" data-empty-hint="Textos digitados aparecem aqui">🕐 Histórico</button>
    </div>

    <div class="gen-filters" role="tablist" aria-label="Filtrar estilos">
      <span class="filter-label">Filtrar:</span>
      <button class="js-filter-btn <?php echo ($p['filter'] ?? 'all') === 'all' ? 'is-active' : ''; ?>"
              data-filter="all" role="tab">Todos</button>
      <button class="js-filter-btn <?php echo ($p['filter'] ?? '') === 'clasico' ? 'is-active' : ''; ?>"
              data-filter="clasico" role="tab">Clássico</button>
      <button class="js-filter-btn <?php echo ($p['filter'] ?? '') === 'cursivo' ? 'is-active' : ''; ?>"
              data-filter="cursivo" role="tab">Cursivo</button>
      <button class="js-filter-btn <?php echo ($p['filter'] ?? '') === 'gotico' ? 'is-active' : ''; ?>"
              data-filter="gotico" role="tab">Gótico</button>
      <button class="js-filter-btn" data-filter="bolinha" role="tab">Borbulha</button>
      <button class="js-filter-btn" data-filter="especial" role="tab">Especial</button>
      <button class="js-filter-btn" data-filter="efeito" role="tab">Efeitos</button>
    </div>

    <div class="gen-grid-wrap">
      <div class="ld-meta-row">
        <span class="ld-meta-row-title">Resultados para <?php echo esc_html($p['name']); ?></span>
        <span id="ld-counter"></span>
      </div>
      <div id="ld-grid" role="list" aria-label="Estilos de letras"></div>
    </div>

  </div>
</section>
<!-- /GENERATOR -->

<?php ld_ad(LD_AD_BELOW_GENERATOR); ?>

<?php if (!empty($p['tips'])) : ?>
<!-- TIPS -->
<section class="tips-section">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Dicas para o <?php echo esc_html($p['name']); ?></h2>
    </div>
    <div class="tips-grid">
      <?php foreach ($p['tips'] as $tip) : ?>
        <div class="tip-card">
          <div class="tip-card-icon"><?php echo esc_html($tip['icon']); ?></div>
          <p class="tip-card-title"><?php echo esc_html($tip['title']); ?></p>
          <p class="tip-card-desc"><?php echo esc_html($tip['desc']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- /TIPS -->
<?php endif; ?>

<?php if (!empty($p['faq'])) : ?>
<!-- FAQ -->
<section class="faq-section" id="faq">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Perguntas sobre letras para <?php echo esc_html($p['name']); ?></h2>
    </div>
    <div class="faq-list">
      <?php foreach ($p['faq'] as $faq) : ?>
        <details class="faq-item">
          <summary><?php echo esc_html($faq['q']); ?></summary>
          <div class="faq-body"><?php echo wp_kses_post($faq['a']); ?></div>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- /FAQ -->
<?php endif; ?>

<?php if (!empty($p['article'])) : ?>
<!-- ARTICLE CONTENT -->
<article class="content-article">
  <div class="article-wrap">
    <?php echo wp_kses_post($p['article']); ?>
    <div class="article-back-cta">
      <a href="#gerador">✨ Usar o gerador agora</a>
    </div>
  </div>
</article>
<!-- /ARTICLE CONTENT -->
<?php elseif (get_the_content()) : ?>
<div class="content-article">
  <?php the_content(); ?>
</div>
<?php endif; ?>

<?php ld_ad(LD_AD_MID_CONTENT); ?>

<!-- INTERNAL LINKS -->
<?php ld_ad(LD_AD_BEFORE_LINKS); ?>
<section class="links-section">
  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Explore outros estilos</h2>
    </div>
    <div class="links-grid">
      <a class="links-card" href="<?php echo esc_url(home_url('/')); ?>">🏠 Todos os estilos</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-personalizadas/')); ?>">🎨 Letras Personalizadas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/tipos-de-letras/')); ?>">🔤 Tipos de Letras</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-cursivas/')); ?>">𝓒 Letras Cursivas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-goticas/')); ?>">𝔊 Letras Góticas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-bonitas/')); ?>">✨ Letras Bonitas</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-instagram/')); ?>">📸 Instagram</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-whatsapp/')); ?>">💬 WhatsApp</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-free-fire/')); ?>">🔥 Free Fire</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letras-para-tiktok/')); ?>">🎵 TikTok</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/simbolos/')); ?>">✦ Símbolos</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/simbolos-para-nick/')); ?>">⚔ Símbolos para Nick</a>
      <a class="links-card" href="<?php echo esc_url(home_url('/letra-pequena/')); ?>">ᴬ Letra Pequena</a>
    </div>
  </div>
</section>
<!-- /INTERNAL LINKS -->
</main>

<?php get_footer(); ?>
