/**
 * LetrasDiferentesOnline.com — Unicode Font Converter Engine
 * 25+ styles for Instagram, WhatsApp, Free Fire, TikTok and more
 */

'use strict';

const LDConverter = (() => {

  /* ── SOURCE ALPHABETS ── */
  const SRC_L = 'abcdefghijklmnopqrstuvwxyz';
  const SRC_U = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  const SRC_N = '0123456789';

  /* ── UNICODE FONT MAPS ── */
  const MAPS = {
    bold:        { l:'𝐚𝐛𝐜𝐝𝐞𝐟𝐠𝐡𝐢𝐣𝐤𝐥𝐦𝐧𝐨𝐩𝐪𝐫𝐬𝐭𝐮𝐯𝐰𝐱𝐲𝐳', u:'𝐀𝐁𝐂𝐃𝐄𝐅𝐆𝐇𝐈𝐉𝐊𝐋𝐌𝐍𝐎𝐏𝐐𝐑𝐒𝐓𝐔𝐕𝐖𝐗𝐘𝐙', n:'𝟎𝟏𝟐𝟑𝟒𝟓𝟔𝟕𝟖𝟗' },
    italic:      { l:'𝑎𝑏𝑐𝑑𝑒𝑓𝑔ℎ𝑖𝑗𝑘𝑙𝑚𝑛𝑜𝑝𝑞𝑟𝑠𝑡𝑢𝑣𝑤𝑥𝑦𝑧', u:'𝐴𝐵𝐶𝐷𝐸𝐹𝐺𝐻𝐼𝐽𝐾𝐿𝑀𝑁𝑂𝑃𝑄𝑅𝑆𝑇𝑈𝑉𝑊𝑋𝑌𝑍', n:'0123456789' },
    boldItalic:  { l:'𝒂𝒃𝒄𝒅𝒆𝒇𝒈𝒉𝒊𝒋𝒌𝒍𝒎𝒏𝒐𝒑𝒒𝒓𝒔𝒕𝒖𝒗𝒘𝒙𝒚𝒛', u:'𝑨𝑩𝑪𝑫𝑬𝑭𝑮𝑯𝑰𝑱𝑲𝑳𝑴𝑵𝑶𝑷𝑸𝑹𝑺𝑻𝑼𝑽𝑾𝑿𝒀𝒁', n:'0123456789' },
    script:      { l:'𝒶𝒷𝒸𝒹ℯ𝒻ℊ𝒽𝒾𝒿𝓀𝓁𝓂𝓃ℴ𝓅𝓆𝓇𝓈𝓉𝓊𝓋𝓌𝓍𝓎𝓏', u:'𝒜ℬ𝒞𝒟ℰℱ𝒢ℋℐ𝒥𝒦ℒℳ𝒩𝒪𝒫𝒬ℛ𝒮𝒯𝒰𝒱𝒲𝒳𝒴𝒵', n:'0123456789' },
    boldScript:  { l:'𝓪𝓫𝓬𝓭𝓮𝓯𝓰𝓱𝓲𝓳𝓴𝓵𝓶𝓷𝓸𝓹𝓺𝓻𝓼𝓽𝓾𝓿𝔀𝔁𝔂𝔃', u:'𝓐𝓑𝓒𝓓𝓔𝓕𝓖𝓗𝓘𝓙𝓚𝓛𝓜𝓝𝓞𝓟𝓠𝓡𝓢𝓣𝓤𝓥𝓦𝓧𝓨𝓩', n:'0123456789' },
    fraktur:     { l:'𝔞𝔟𝔠𝔡𝔢𝔣𝔤𝔥𝔦𝔧𝔨𝔩𝔪𝔫𝔬𝔭𝔮𝔯𝔰𝔱𝔲𝔳𝔴𝔵𝔶𝔷', u:'𝔄𝔅ℭ𝔇𝔈𝔉𝔊ℌℑ𝔍𝔎𝔏𝔐𝔑𝔒𝔓𝔔ℜ𝔖𝔗𝔘𝔙𝔚𝔛𝔜ℨ', n:'0123456789' },
    boldFraktur: { l:'𝖆𝖇𝖈𝖉𝖊𝖋𝖌𝖍𝖎𝖏𝖐𝖑𝖒𝖓𝖔𝖕𝖖𝖗𝖘𝖙𝖚𝖛𝖜𝖝𝖞𝖟', u:'𝕬𝕭𝕮𝕯𝕰𝕱𝕲𝕳𝕴𝕵𝕶𝕷𝕸𝕹𝕺𝕻𝕼𝕽𝕾𝕿𝖀𝖁𝖂𝖃𝖄𝖅', n:'0123456789' },
    doubleStruck:{ l:'𝕒𝕓𝕔𝕕𝕖𝕗𝕘𝕙𝕚𝕛𝕜𝕝𝕞𝕟𝕠𝕡𝕢𝕣𝕤𝕥𝕦𝕧𝕨𝕩𝕪𝕫', u:'𝔸𝔹ℂ𝔻𝔼𝔽𝔾ℍ𝕀𝕁𝕂𝕃𝕄ℕ𝕆ℙℚℝ𝕊𝕋𝕌𝕍𝕎𝕏𝕐ℤ', n:'𝟘𝟙𝟚𝟛𝟜𝟝𝟞𝟟𝟠𝟡' },
    sans:        { l:'𝖺𝖻𝖼𝖽𝖾𝖿𝗀𝗁𝗂𝗃𝗄𝗅𝗆𝗇𝗈𝗉𝗊𝗋𝗌𝗍𝗎𝗏𝗐𝗑𝗒𝗓', u:'𝖠𝖡𝖢𝖣𝖤𝖥𝖦𝖧𝖨𝖩𝖪𝖫𝖬𝖭𝖮𝖯𝖰𝖱𝖲𝖳𝖴𝖵𝖶𝖷𝖸𝖹', n:'0123456789' },
    sansBold:    { l:'𝗮𝗯𝗰𝗱𝗲𝗳𝗴𝗵𝗶𝗷𝗸𝗹𝗺𝗻𝗼𝗽𝗾𝗿𝘀𝘁𝘂𝘃𝘄𝘅𝘆𝘇', u:'𝗔𝗕𝗖𝗗𝗘𝗙𝗚𝗛𝗜𝗝𝗞𝗟𝗠𝗡𝗢𝗣𝗤𝗥𝗦𝗧𝗨𝗩𝗪𝗫𝗬𝗭', n:'𝟬𝟭𝟮𝟯𝟰𝟱𝟲𝟳𝟴𝟵' },
    sansItalic:  { l:'𝘢𝘣𝘤𝘥𝘦𝘧𝘨𝘩𝘪𝘫𝘬𝘭𝘮𝘯𝘰𝘱𝘲𝘳𝘴𝘵𝘶𝘷𝘸𝘹𝘺𝘻', u:'𝘈𝘉𝘊𝘋𝘌𝘍𝘎𝘏𝘐𝘑𝘒𝘓𝘔𝘕𝘖𝘗𝘘𝘙𝘚𝘛𝘜𝘝𝘞𝘟𝘠𝘡', n:'0123456789' },
    sansBoldIt:  { l:'𝙖𝙗𝙘𝙙𝙚𝙛𝙜𝙝𝙞𝙟𝙠𝙡𝙢𝙣𝙤𝙥𝙦𝙧𝙨𝙩𝙪𝙫𝙬𝙭𝙮𝙯', u:'𝘼𝘽𝘾𝘿𝙀𝙁𝙂𝙃𝙄𝙅𝙆𝙇𝙈𝙉𝙊𝙋𝙌𝙍𝙎𝙏𝙐𝙑𝙒𝙓𝙔𝙕', n:'0123456789' },
    mono:        { l:'𝚊𝚋𝚌𝚍𝚎𝚏𝚐𝚑𝚒𝚓𝚔𝚕𝚖𝚗𝚘𝚙𝚚𝚛𝚜𝚝𝚞𝚟𝚠𝚡𝚢𝚣', u:'𝙰𝙱𝙲𝙳𝙴𝙵𝙶𝙷𝙸𝙹𝙺𝙻𝙼𝙽𝙾𝙿𝚀𝚁𝚂𝚃𝚄𝚅𝚆𝚇𝚈𝚉', n:'𝟶𝟷𝟸𝟹𝟺𝟻𝟼𝟽𝟾𝟿' },
    fullwidth:   { l:'ａｂｃｄｅｆｇｈｉｊｋｌｍｎｏｐｑｒｓｔｕｖｗｘｙｚ', u:'ＡＢＣＤＥＦＧＨＩＪＫＬＭＮＯＰＱＲＳＴＵＶＷＸＹＺ', n:'０１２３４５６７８９' },
    bubble:      { l:'ⓐⓑⓒⓓⓔⓕⓖⓗⓘⓙⓚⓛⓜⓝⓞⓟⓠⓡⓢⓣⓤⓥⓦⓧⓨⓩ', u:'ⒶⒷⒸⒹⒺⒻⒼⒽⒾⒿⓀⓁⓂⓃⓄⓅⓆⓇⓈⓉⓊⓋⓌⓍⓎⓏ', n:'⓪①②③④⑤⑥⑦⑧⑨' },
    squaredBlk:  { l:'abcdefghijklmnopqrstuvwxyz', u:'🅰🅱🅲🅳🅴🅵🅶🅷🅸🅹🅺🅻🅼🅽🅾🅿🆀🆁🆂🆃🆄🆅🆆🆇🆈🆉', n:'0123456789' },
  };

  /* ── SMALL CAPS ── */
  const SMALL_CAPS = {
    a:'ᴀ',b:'ʙ',c:'ᴄ',d:'ᴅ',e:'ᴇ',f:'ꜰ',g:'ɢ',h:'ʜ',i:'ɪ',j:'ᴊ',
    k:'ᴋ',l:'ʟ',m:'ᴍ',n:'ɴ',o:'ᴏ',p:'ᴘ',q:'ǫ',r:'ʀ',s:'ꜱ',t:'ᴛ',
    u:'ᴜ',v:'ᴠ',w:'ᴡ',x:'x',y:'ʏ',z:'ᴢ',
  };

  /* ── SUPERSCRIPT ── */
  const SUPERSCRIPT = {
    a:'ᵃ',b:'ᵇ',c:'ᶜ',d:'ᵈ',e:'ᵉ',f:'ᶠ',g:'ᵍ',h:'ʰ',i:'ⁱ',j:'ʲ',
    k:'ᵏ',l:'ˡ',m:'ᵐ',n:'ⁿ',o:'ᵒ',p:'ᵖ',q:'q',r:'ʳ',s:'ˢ',t:'ᵗ',
    u:'ᵘ',v:'ᵛ',w:'ʷ',x:'ˣ',y:'ʸ',z:'ᶻ',
    A:'ᴬ',B:'ᴮ',C:'ᶜ',D:'ᴰ',E:'ᴱ',F:'ᶠ',G:'ᴳ',H:'ᴴ',I:'ᴵ',J:'ᴶ',
    K:'ᴷ',L:'ᴸ',M:'ᴹ',N:'ᴺ',O:'ᴼ',P:'ᴾ',Q:'Q',R:'ᴿ',S:'ˢ',T:'ᵀ',
    U:'ᵁ',V:'ⱽ',W:'ᵂ',X:'ˣ',Y:'ʸ',Z:'ᶻ',
    '0':'⁰','1':'¹','2':'²','3':'³','4':'⁴','5':'⁵','6':'⁶','7':'⁷','8':'⁸','9':'⁹',
  };

  /* ── UPSIDE DOWN MAP ── */
  const FLIP_MAP = {
    a:'ɐ',b:'q',c:'ɔ',d:'p',e:'ǝ',f:'ɟ',g:'ƃ',h:'ɥ',i:'ᴉ',j:'ɾ',
    k:'ʞ',l:'l',m:'ɯ',n:'u',o:'o',p:'d',q:'b',r:'ɹ',s:'s',t:'ʇ',
    u:'n',v:'ʌ',w:'ʍ',x:'x',y:'ʎ',z:'z',
    A:'∀',B:'ꓭ',C:'Ɔ',D:'ꓷ',E:'Ǝ',F:'Ⅎ',G:'ꓨ',H:'H',I:'I',J:'ꓩ',
    K:'ꓘ',L:'˥',M:'W',N:'N',O:'O',P:'Ԁ',Q:'ꓤ',R:'ꓤ',S:'S',T:'ꓕ',
    U:'∩',V:'Λ',W:'M',X:'X',Y:'⅄',Z:'Z',
    '0':'0','1':'Ɩ','2':'ᄅ','3':'Ɛ','4':'ᔭ','5':'ϛ','6':'9','7':'ㄥ','8':'8','9':'6',
    '!':'¡','?':'¿',',':'\'','.':'˙','\'':',','(':')',')':'(',
  };

  /* ── COMBINING CHARS ── */
  const STRIKE    = '̶';
  const UNDERLINE = '̲';
  const OVERLINE  = '̅';
  const DBL_UNDER = '̳';
  const TILDE_CMB = '̃';

  /* ── ZALGO ABOVE/BELOW CHARS ── */
  const ZALGO_ABOVE = ['̍','̎','̄','̅','̿','̑','̆','̐','͒','͗','͑','̇','̈','̊','͂','̓','̈́','͊','͋','͌','̃','̂','̌','͐','̀','́','̋','̏','̒','̓','̔','̽','̉','ͣ','ͤ','ͥ','ͦ','ͧ','ͨ','ͩ','ͪ','ͫ','ͬ','ͭ','ͮ','ͯ','̾','͛','͆','̚'];
  const ZALGO_BELOW = ['̖','̗','̘','̙','̜','̝','̞','̟','̠','̤','̥','̦','̩','̪','̫','̬','̭','̮','̯','̰','̱','̲','̳','̹','̺','̻','̼','ͅ','͇','͈','͉','͍','͎','͓','͔','͕','͖','͙','͚','̣'];

  /* ── HELPER: split string into Unicode code points (handles surrogates) ── */
  function toChars(str) {
    return [...str];
  }

  /* ── HELPER: split a Unicode map string into array of graphemes ── */
  function mapToArray(str) {
    return toChars(str);
  }

  /* ── HELPER: map a char through a font map ── */
  function mapChar(ch, map) {
    const li = SRC_L.indexOf(ch);
    if (li !== -1) return mapToArray(map.l)[li] || ch;
    const ui = SRC_U.indexOf(ch);
    if (ui !== -1) return mapToArray(map.u)[ui] || ch;
    const ni = SRC_N.indexOf(ch);
    if (ni !== -1) return mapToArray(map.n)[ni] || ch;
    return ch;
  }

  /* ── HELPER: apply a font map to full text ── */
  function applyMap(text, map) {
    return toChars(text).map(ch => mapChar(ch, map)).join('');
  }

  /* ── CONVERT: specific style ── */
  function convert(text, style) {
    if (!text) return '';

    switch (style) {
      /* Unicode math font maps */
      case 'bold':        return applyMap(text, MAPS.bold);
      case 'italic':      return applyMap(text, MAPS.italic);
      case 'boldItalic':  return applyMap(text, MAPS.boldItalic);
      case 'script':      return applyMap(text, MAPS.script);
      case 'boldScript':  return applyMap(text, MAPS.boldScript);
      case 'fraktur':     return applyMap(text, MAPS.fraktur);
      case 'boldFraktur': return applyMap(text, MAPS.boldFraktur);
      case 'doubleStruck':return applyMap(text, MAPS.doubleStruck);
      case 'sans':        return applyMap(text, MAPS.sans);
      case 'sansBold':    return applyMap(text, MAPS.sansBold);
      case 'sansItalic':  return applyMap(text, MAPS.sansItalic);
      case 'sansBoldIt':  return applyMap(text, MAPS.sansBoldIt);
      case 'mono':        return applyMap(text, MAPS.mono);
      case 'fullwidth':   return applyMap(text, MAPS.fullwidth);
      case 'bubble':      return applyMap(text, MAPS.bubble);
      case 'squaredBlk':  return applyMap(text, MAPS.squaredBlk);

      /* Small caps */
      case 'smallCaps':
        return toChars(text).map(ch => {
          const lc = ch.toLowerCase();
          return SMALL_CAPS[lc] || (ch === ch.toUpperCase() && ch !== ch.toLowerCase() ? ch : ch);
        }).join('');

      /* Superscript */
      case 'superscript':
        return toChars(text).map(ch => SUPERSCRIPT[ch] || ch).join('');

      /* Upside down */
      case 'flip':
        return toChars(text).map(ch => FLIP_MAP[ch] || ch).reverse().join('');

      /* Mirror (reverse without flipping chars) */
      case 'mirror':
        return toChars(text).reverse().join('');

      /* Aesthetic (spaced) */
      case 'aesthetic':
        return toChars(text).join(' ');

      /* Uppercase / Lowercase */
      case 'upper': return text.toUpperCase();
      case 'lower': return text.toLowerCase();

      /* Combining char styles */
      case 'strikethrough':
        return toChars(text).map(ch => ch === ' ' ? ch : ch + STRIKE).join('');
      case 'underline':
        return toChars(text).map(ch => ch === ' ' ? ch : ch + UNDERLINE).join('');
      case 'dblUnderline':
        return toChars(text).map(ch => ch === ' ' ? ch : ch + DBL_UNDER).join('');
      case 'overline':
        return toChars(text).map(ch => ch === ' ' ? ch : ch + OVERLINE).join('');

      /* Zalgo light */
      case 'zalgo': {
        return toChars(text).map(ch => {
          if (ch === ' ') return ch;
          let out = ch;
          const na = Math.floor(Math.random() * 3) + 1;
          const nb = Math.floor(Math.random() * 2) + 1;
          for (let i = 0; i < na; i++) out += ZALGO_ABOVE[Math.floor(Math.random() * ZALGO_ABOVE.length)];
          for (let i = 0; i < nb; i++) out += ZALGO_BELOW[Math.floor(Math.random() * ZALGO_BELOW.length)];
          return out;
        }).join('');
      }

      default: return text;
    }
  }

  /* ── STYLE DEFINITIONS ── */
  const STYLES = [
    /* id              name                     category     label (preview) */
    { id:'bold',        name:'Negrito',          cat:'clasico',  emoji:'𝐀𝐁𝐂' },
    { id:'italic',      name:'Itálico',          cat:'clasico',  emoji:'𝐴𝐵𝐶' },
    { id:'boldItalic',  name:'Negrito Itálico',  cat:'clasico',  emoji:'𝑨𝑩𝑪' },
    { id:'sans',        name:'Sans Serif',       cat:'clasico',  emoji:'𝖠𝖡𝖢' },
    { id:'sansBold',    name:'Sans Negrito',     cat:'clasico',  emoji:'𝗔𝗕𝗖' },
    { id:'sansItalic',  name:'Sans Itálico',     cat:'clasico',  emoji:'𝘈𝘉𝘊' },
    { id:'sansBoldIt',  name:'Sans Bold Itálico',cat:'clasico',  emoji:'𝘼𝘽𝘾' },
    { id:'mono',        name:'Monospace',        cat:'clasico',  emoji:'𝙰𝙱𝙲' },
    { id:'fullwidth',   name:'Largo',            cat:'clasico',  emoji:'ＡＢＣ' },
    { id:'script',      name:'Script Elegante',  cat:'cursivo',  emoji:'𝒜ℬ𝒞' },
    { id:'boldScript',  name:'Script Cursivo',   cat:'cursivo',  emoji:'𝓐𝓑𝓒' },
    { id:'smallCaps',   name:'Pequenas Maiúsc.',  cat:'cursivo',  emoji:'ᴀʙᴄ' },
    { id:'superscript', name:'Sobrescrito',      cat:'especial', emoji:'ᴬᴮᶜ' },
    { id:'aesthetic',   name:'Estético',         cat:'especial', emoji:'A B C' },
    { id:'upper',       name:'MAIÚSCULAS',        cat:'especial', emoji:'ABC' },
    { id:'lower',       name:'minúsculas',        cat:'especial', emoji:'abc' },
    { id:'fraktur',     name:'Gótico',            cat:'gotico',   emoji:'𝔄𝔅ℭ' },
    { id:'boldFraktur', name:'Gótico Negrito',    cat:'gotico',   emoji:'𝕬𝕭𝕮' },
    { id:'doubleStruck',name:'Duplo',             cat:'gotico',   emoji:'𝔸𝔹ℂ' },
    { id:'bubble',      name:'Borbulha',          cat:'bolinha',  emoji:'ⒶⒷⒸ' },
    { id:'squaredBlk',  name:'Quadrado Preto',    cat:'bolinha',  emoji:'🅰🅱🅲' },
    { id:'strikethrough',name:'Tachado',          cat:'efeito',   emoji:'A̶B̶C̶' },
    { id:'underline',   name:'Sublinhado',        cat:'efeito',   emoji:'A̲B̲C̲' },
    { id:'dblUnderline',name:'Duplo Sublinhado',  cat:'efeito',   emoji:'A̳B̳C̳' },
    { id:'overline',    name:'Sobrelineado',      cat:'efeito',   emoji:'A̅B̅C̅' },
    { id:'flip',        name:'Invertido',         cat:'efeito',   emoji:'ɐqɔ' },
    { id:'mirror',      name:'Espelhado',         cat:'efeito',   emoji:'CBA' },
    { id:'zalgo',       name:'Zalgo / Glitch',    cat:'efeito',   emoji:'Z͌a̎l̂g̊o' },
  ];

  /* ── CONVERT ALL: returns array of {id, name, cat, emoji, result} ── */
  function convertAll(text) {
    if (!text || !text.trim()) return STYLES.map(s => ({ ...s, result: '' }));
    return STYLES.map(s => ({ ...s, result: convert(text, s.id) }));
  }

  /* ── PUBLIC API ── */
  return { convert, convertAll, STYLES };

})();
