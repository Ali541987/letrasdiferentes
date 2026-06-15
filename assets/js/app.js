/**
 * LetrasDiferentesOnline.com — App UI
 * Handles: generator, copy, filter, favorites, history, share, theme, mobile
 */

'use strict';

(function () {

  /* ── ELEMENTS ── */
  const input         = document.getElementById('ld-input');
  const grid          = document.getElementById('ld-grid');
  const filterBtns    = document.querySelectorAll('.js-filter-btn');
  const counterEl     = document.getElementById('ld-counter');
  const clearBtn      = document.getElementById('ld-clear');
  const charCountEl   = document.getElementById('ld-char-count');
  const favToggleBtn  = document.getElementById('ld-fav-toggle');
  const favCountEl    = document.getElementById('ld-fav-count');
  const shareBtn      = document.getElementById('ld-share');
  const historyBtn    = document.getElementById('ld-history-toggle');

  /* initialise filter from whichever tab is already marked active in HTML (platform pages) */
  const _initActiveBtn = document.querySelector('.js-filter-btn.is-active');
  let currentFilter = _initActiveBtn ? (_initActiveBtn.dataset.filter || 'all') : 'all';
  let lastText      = '';
  let showFavs      = false;
  let showHistory   = false;

  /* ── STORAGE KEYS ── */
  const FAV_KEY  = 'ld-favorites';
  const HIST_KEY = 'ld-history';

  /* ── FAVORITES ── */
  function getFavs()        { try { return JSON.parse(localStorage.getItem(FAV_KEY) || '[]'); } catch { return []; } }
  function saveFavs(arr)    { try { localStorage.setItem(FAV_KEY, JSON.stringify(arr)); } catch {} }
  function isFav(id)        { return getFavs().includes(id); }
  function toggleFav(id) {
    const favs = getFavs();
    const idx  = favs.indexOf(id);
    if (idx === -1) favs.push(id); else favs.splice(idx, 1);
    saveFavs(favs);
    updateFavCount();
    return idx === -1; // true = added
  }

  function updateFavCount() {
    const n = getFavs().length;
    if (favCountEl) favCountEl.textContent = n > 0 ? `(${n})` : '';
  }

  /* ── HISTORY ── */
  function getHistory()     { try { return JSON.parse(localStorage.getItem(HIST_KEY) || '[]'); } catch { return []; } }
  function addHistory(text) {
    if (!text.trim()) return;
    let hist = getHistory().filter(t => t !== text);
    hist.unshift(text);
    if (hist.length > 8) hist = hist.slice(0, 8);
    try { localStorage.setItem(HIST_KEY, JSON.stringify(hist)); } catch {}
  }

  /* ── HELPERS ── */
  function escAttr(str) { return String(str).replace(/&/g,'&amp;').replace(/"/g,'&quot;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }
  function escHtml(str) { return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

  /* ── TOAST ── */
  function showToast(msg, type = 'success') {
    let t = document.getElementById('ld-toast');
    if (!t) {
      t = document.createElement('div');
      t.id = 'ld-toast';
      document.body.appendChild(t);
    }
    t.className = `ld-toast ld-toast--${type}`;
    t.textContent = msg;
    t.classList.add('show');
    clearTimeout(t._timer);
    t._timer = setTimeout(() => t.classList.remove('show'), 2200);
  }

  /* ── COPY TO CLIPBOARD ── */
  function copyText(text, btn) {
    if (!text) return;
    navigator.clipboard.writeText(text).then(() => {
      if (btn) {
        btn.classList.add('copied');
        const orig = btn.innerHTML;
        btn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Copiado!';
        setTimeout(() => { btn.classList.remove('copied'); btn.innerHTML = orig; }, 1800);
      }
      showToast('✅ Copiado para a área de transferência!');
    }).catch(() => {
      const ta = document.createElement('textarea');
      ta.value = text;
      ta.style.cssText = 'position:fixed;opacity:0;pointer-events:none';
      document.body.appendChild(ta);
      ta.select();
      document.execCommand('copy');
      document.body.removeChild(ta);
      showToast('✅ Copiado!');
    });
  }

  /* ── BUILD CARD HTML ── */
  function buildCard(r, idx) {
    const fav = isFav(r.id);
    return `
      <div class="ld-card js-card" data-text="${escAttr(r.result)}" data-id="${escAttr(r.id)}" style="animation-delay:${idx * 20}ms" role="listitem" tabindex="0" aria-label="${escAttr(r.name)}">
        <button class="ld-fav-btn js-fav-btn ${fav ? 'is-fav' : ''}" data-id="${escAttr(r.id)}" aria-label="${fav ? 'Remover favorito' : 'Adicionar favorito'}" title="Favorito">♥</button>
        <div class="ld-card-label">${escHtml(r.name)}<span class="ld-card-cat">${escHtml(r.emoji || '')}</span></div>
        <div class="ld-card-result">${escHtml(r.result || '—')}</div>
        <button class="ld-copy-btn js-copy-btn" aria-label="Copiar ${escAttr(r.name)}" tabindex="-1">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
          Copiar
        </button>
      </div>`;
  }

  /* ── RENDER GENERATOR CARDS ── */
  function render(text) {
    if (!grid) return; // guard: page has no generator (e.g. símbolos, platform pages)
    if (charCountEl) {
      const len = text.length;
      charCountEl.textContent = `${len}/80`;
      charCountEl.className = 'char-count' + (len >= 80 ? ' danger' : len >= 60 ? ' warn' : '');
    }

    const results = LDConverter.convertAll(text);
    let filtered  = currentFilter === 'all' ? results : results.filter(r => r.cat === currentFilter);

    if (showFavs) {
      const favIds = getFavs();
      filtered = results.filter(r => favIds.includes(r.id));
    }

    if (!text.trim() && !showHistory) {
      const hist = getHistory();
      if (hist.length) {
        grid.innerHTML = `
          <div class="ld-history-bar">
            <span class="ld-history-label">🕐 Buscas recentes</span>
            ${hist.map(t => `<button class="js-chip ld-hist-chip" data-text="${escAttr(t)}">${escHtml(t)}</button>`).join('')}
          </div>
          <p class="ld-placeholder">✨ Digite um texto acima para ver os estilos</p>`;
      } else {
        grid.innerHTML = '<p class="ld-placeholder">✨ Digite um texto acima para ver os estilos</p>';
      }
      if (counterEl) counterEl.textContent = '';
      return;
    }

    if (showHistory) {
      const hist = getHistory();
      grid.innerHTML = hist.length
        ? `<div class="ld-history-bar full"><span class="ld-history-label">🕐 Histórico</span>${hist.map(t => `<button class="js-chip ld-hist-chip" data-text="${escAttr(t)}">${escHtml(t)}</button>`).join('')}</div>`
        : '<p class="ld-placeholder">Seu histórico aparecerá aqui.</p>';
      return;
    }

    if (showFavs && filtered.length === 0) {
      grid.innerHTML = '<p class="ld-placeholder">❤️ Clique no coração de qualquer estilo para salvar favoritos.</p>';
      return;
    }

    if (filtered.length === 0) {
      grid.innerHTML = '<p class="ld-placeholder">Nenhum estilo nesta categoria.</p>';
      return;
    }

    grid.innerHTML = filtered.map((r, i) => buildCard(r, i)).join('');
    if (counterEl) counterEl.textContent = `${filtered.length} estilos`;
  }

  /* ── CLICK ON GRID (event delegation) ── */
  if (grid) grid.addEventListener('click', e => {
    const favBtn  = e.target.closest('.js-fav-btn');
    const copyBtn = e.target.closest('.js-copy-btn');
    const histChip = e.target.closest('.ld-hist-chip');
    const card    = e.target.closest('.js-card');

    if (histChip) {
      const text = histChip.dataset.text;
      if (input) { input.value = text; lastText = text; }
      showHistory = false;
      render(text);
      input && input.focus();
      return;
    }

    if (favBtn) {
      e.stopPropagation();
      const id  = favBtn.dataset.id;
      const added = toggleFav(id);
      favBtn.classList.toggle('is-fav', added);
      favBtn.setAttribute('aria-label', added ? 'Remover favorito' : 'Adicionar favorito');
      showToast(added ? '❤️ Adicionado aos favoritos!' : '🗑️ Removido dos favoritos.', added ? 'success' : 'info');
      return;
    }

    if (!card) return;
    const text = card.dataset.text;
    const btn  = copyBtn || card.querySelector('.js-copy-btn');
    copyText(text, btn);
    card.classList.add('flash');
    setTimeout(() => card.classList.remove('flash'), 400);
    addHistory(lastText);
  });

  if (grid) grid.addEventListener('keydown', e => {
    if (e.key === 'Enter' || e.key === ' ') {
      const card = e.target.closest('.js-card');
      if (card) { e.preventDefault(); card.click(); }
    }
  });

  /* ── INPUT ── */
  if (input) {
    input.addEventListener('input', () => {
      const text = input.value;
      if (text !== lastText) { lastText = text; showHistory = false; render(text); }
    });

    /* Pre-fill from URL ?t= parameter */
    try {
      const urlText = new URLSearchParams(window.location.search).get('t');
      if (urlText) { input.value = urlText; lastText = urlText; render(urlText); }
    } catch {}

    if (window.innerWidth >= 768) setTimeout(() => input.focus(), 300);
  }

  /* ── CLEAR BUTTON ── */
  if (clearBtn) {
    clearBtn.addEventListener('click', () => {
      if (input) { input.value = ''; input.focus(); }
      lastText = ''; showHistory = false; render('');
    });
  }

  /* ── TRENDING / CHIP BUTTONS ── */
  document.addEventListener('click', e => {
    const chip = e.target.closest('.js-chip');
    if (!chip || chip.classList.contains('ld-hist-chip')) return;
    const text = chip.dataset.text;
    if (input) { input.value = text; lastText = text; }
    showHistory = false;
    render(text);
    const gen = document.getElementById('gerador');
    if (gen) gen.scrollIntoView({ behavior: 'smooth', block: 'start' });
    input && input.focus();
    addHistory(text);
  });

  /* ── FILTER TABS ── */
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      currentFilter = btn.dataset.filter;
      filterBtns.forEach(b => b.classList.toggle('is-active', b === btn));
      showFavs = false;
      render(lastText);
    });
  });

  /* ── FAVORITES TOGGLE ── */
  if (favToggleBtn) {
    favToggleBtn.addEventListener('click', () => {
      showFavs    = !showFavs;
      showHistory = false;
      favToggleBtn.classList.toggle('is-active', showFavs);
      render(lastText);
    });
  }

  /* ── HISTORY TOGGLE ── */
  if (historyBtn) {
    historyBtn.addEventListener('click', () => {
      showHistory = !showHistory;
      showFavs    = false;
      historyBtn.classList.toggle('is-active', showHistory);
      render(lastText);
    });
  }

  /* ── SHARE LINK ── */
  if (shareBtn) {
    shareBtn.addEventListener('click', () => {
      const text = input ? input.value : '';
      const url  = text.trim()
        ? `${location.origin}${location.pathname}?t=${encodeURIComponent(text)}`
        : location.href;
      const fallback = () => {
        const ta = document.createElement('textarea');
        ta.value = url; ta.style.cssText = 'position:fixed;opacity:0;pointer-events:none';
        document.body.appendChild(ta); ta.select();
        try { document.execCommand('copy'); showToast('🔗 Link copiado! Compartilhe com seus amigos.'); }
        catch { prompt('Copie o link abaixo:', url); }
        document.body.removeChild(ta);
      };
      if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(url).then(() => {
          showToast('🔗 Link copiado! Compartilhe com seus amigos.');
        }).catch(fallback);
      } else {
        fallback();
      }
    });
  }

  /* ── INITIAL RENDER + FAV COUNT ── */
  render('');
  updateFavCount();

  /* ── DARK / LIGHT MODE TOGGLE ── */
  const themeToggle = document.querySelector('.js-theme-toggle');
  const themeIcon   = document.querySelector('.js-theme-icon');
  const html        = document.documentElement;

  function applyTheme(theme) {
    html.dataset.theme = theme;
    if (themeIcon) themeIcon.textContent = theme === 'dark' ? '🌙' : '☀️';
    try { localStorage.setItem('ld-theme', theme); } catch {}
  }

  (function () {
    const saved = localStorage.getItem('ld-theme');
    const pref  = window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark';
    applyTheme(saved || pref);
  })();

  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      applyTheme(html.dataset.theme === 'dark' ? 'light' : 'dark');
    });
  }

  /* ── MOBILE HAMBURGER ── */
  const hamburger = document.querySelector('.js-nav-toggle');
  const navMenu   = document.querySelector('.js-nav-menu');
  if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
      const open = hamburger.getAttribute('aria-expanded') === 'true';
      hamburger.setAttribute('aria-expanded', String(!open));
      hamburger.classList.toggle('is-open', !open);
      navMenu.classList.toggle('is-open', !open);
    });
    document.addEventListener('click', e => {
      if (!e.target.closest('.site-nav')) {
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.classList.remove('is-open');
        navMenu.classList.remove('is-open');
      }
    });
  }

  /* ── STATIC QUICK-COPY BUTTONS ── */
  document.querySelectorAll('.js-quick-copy').forEach(btn => {
    btn.addEventListener('click', () => {
      const text = btn.dataset.text || btn.closest('[data-text]')?.dataset.text;
      if (text) copyText(text, btn);
    });
  });

  /* ── SMOOTH SCROLL ── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.getElementById(a.getAttribute('href').slice(1));
      if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });

  /* ── BACK-TO-TOP ── */
  const btt = document.getElementById('ld-back-top');
  if (btt) {
    window.addEventListener('scroll', () => { btt.classList.toggle('visible', window.scrollY > 500); }, { passive: true });
    btt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  /* ── MOBILE STICKY CTA ── */
  const stickyCta = document.getElementById('ld-sticky-cta');
  if (stickyCta) {
    const genSection = document.getElementById('gerador') || document.querySelector('.gen-box');
    let ctaHidden = false;

    window.addEventListener('scroll', () => {
      if (!genSection) { stickyCta.classList.add('visible'); return; }
      const rect = genSection.getBoundingClientRect();
      // Show sticky CTA when generator is scrolled out of view
      const genVisible = rect.bottom > 0 && rect.top < window.innerHeight;
      stickyCta.classList.toggle('visible', !genVisible);
    }, { passive: true });
  }

  /* ── DARK MODE ICON — sync on load ── */
  (function () {
    if (themeIcon) {
      themeIcon.textContent = html.dataset.theme === 'dark' ? '🌙' : '☀️';
    }
  })();

})();

/* ── COOKIE CONSENT (LGPD) ── */
(function () {
  'use strict';
  var KEY = 'ld-cookie-consent';
  var banner = document.getElementById('ld-cookie-consent');
  if (!banner) return;
  var choice = null;
  try { choice = localStorage.getItem(KEY); } catch (e) {}
  if (!choice) { banner.hidden = false; }
  function setChoice(val) {
    try { localStorage.setItem(KEY, val); } catch (e) {}
    banner.hidden = true;
  }
  var a = banner.querySelector('.js-cookie-accept');
  var d = banner.querySelector('.js-cookie-decline');
  if (a) a.addEventListener('click', function () { setChoice('accepted'); });
  if (d) d.addEventListener('click', function () { setChoice('declined'); });
})();
