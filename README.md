# Letras Diferentes Online — WordPress Theme

Custom WordPress theme powering **[LetrasDiferentesOnline.com](https://letrasdiferentesonline.com)** — a free online generator that converts any text into 28+ fancy Unicode letter styles for Instagram, WhatsApp, Free Fire, TikTok and more.

🔗 **Live site:** [https://letrasdiferentesonline.com](https://letrasdiferentesonline.com)

---

## ✨ Features

- **28+ letter styles** — cursive, gothic (Fraktur), bold, bubble, small caps, aesthetic, mirror and more
- **One-click copy** — generate and copy to clipboard instantly, no signup
- **Favorites & history** — save your favorite styles and revisit recent text (localStorage)
- **Share links** — share a pre-filled generator link via `?t=` URL parameter
- **300+ symbols** — dedicated symbols page for nicks and bios
- **Dark / light mode** — no-flash theme toggle with system preference detection
- **Mobile-first** — designed for 375px first, fully responsive
- **SEO-optimized** — Rank Math integration, JSON-LD schema, clean semantic markup
- **Fast** — self-hosted assets, minimal JS, no jQuery, no render-blocking resources

## 🛠️ Tech

- WordPress (classic PHP templates)
- Vanilla JavaScript (no framework, no build step)
- Pure CSS with custom properties (dark/light theming)
- Unicode Mathematical Alphanumeric Symbols for text conversion

## 📂 Structure

```
├── assets/
│   ├── css/main.css        # All styles (dark + light themes)
│   ├── js/converter.js     # Unicode style conversion engine (28 styles)
│   └── js/app.js           # UI: generator, copy, filters, favorites, history
├── inc/schema.php          # JSON-LD schema helpers (SoftwareApplication, FAQ, HowTo)
├── page-templates/         # Platform, symbols, blog, legal page templates
├── front-page.php          # Homepage with generator + SEO content
├── functions.php           # Theme setup, enqueue, meta
└── header.php / footer.php # Site chrome + navigation
```

## 🌐 About

Built for the Brazilian market, where "letras diferentes" (fancy/stylized text) is searched over 750,000 times per month. The tool is especially popular with gamers customizing Free Fire nicknames and creators styling their Instagram and TikTok profiles.

Try it live → **[letrasdiferentesonline.com](https://letrasdiferentesonline.com)**

## 📄 License

GNU General Public License v2 or later — same as WordPress.

---

Made with 💜 for the Brazilian creator and gaming community.
