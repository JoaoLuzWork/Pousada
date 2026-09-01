# 🏡 Pousada Silvestre — Guesthouse Website

Website for Pousada Silvestre, a guesthouse in Tramandaí, Rio Grande do Sul, Brazil. Built in plain PHP with no framework and no database — it is an informational site whose call to action is a WhatsApp link to the booking desk.

*The site copy is in Portuguese; this README is in English.*

---

## 📖 About

Pousada Silvestre is a public-facing informational website for a small family-run guesthouse. Rather than a full booking engine, the site's job is to present the property, tell its story, and hand the visitor over to WhatsApp to check availability directly with the owner.

The project was built from scratch in plain PHP, with a hand-written stylesheet, minimal JavaScript, and a small amount of server-side device detection so mobile and desktop each get their own dedicated markup.

---

## 🛠️ Tech Stack

| Layer            | Technology                                                         |
| ---------------- | ------------------------------------------------------------------ |
| Back-end         | PHP (no framework)                                                 |
| Front-end        | HTML, CSS (single hand-written stylesheet, no preprocessor)        |
| Interactivity    | Vanilla JavaScript (one function, mobile nav toggle)               |
| Carousels        | [Swiper](https://swiperjs.com/) — loaded from the jsDelivr CDN     |
| Fonts            | Google Fonts (Anton, Libre Baskerville, Oswald, Roboto, Roboto Condensed) |
| Storage          | None — no database                                                 |

No build step, no package manager, nothing to install.

---

## 🚀 Running Locally

PHP's built-in server is enough:

```bash
php -S localhost:8000
```

Then open <http://localhost:8000>. The CDN and font requests mean you need to be **online** for the carousels and typefaces to look right.

---

## 📂 Project Structure

```
.
├── index.php              Home page
├── sobre.php              About page + photo gallery
├── header.php             <head>, logo, nav bar, mobile menu drawer
├── footer.php             Address, social links, opening hours, Swiper init
├── src/
│   └── dispositivo.php    Device detection — sets $dispositivo
├── style/
│   └── style.css          Whole stylesheet (~840 lines)
├── script.js              Mobile nav toggle
└── img/                   Logos, SVG shapes and photography (56 files)
```

---

## 🔧 How It Works

**Shared layout.** Each page is a sandwich: `include 'header.php'`, the page's own markup, then `include 'footer.php'`. `header.php` in turn includes `src/dispositivo.php` first, so the device is known before anything renders.

**Device detection.** `src/dispositivo.php` inspects `$_SERVER['HTTP_USER_AGENT']` for iPhone, iPad, iPod, Android, BlackBerry, webOS, Symbian and Windows Phone, and sets one variable:

```php
$dispositivo = "mobile";      // or "computador"
```

Every page then branches on it and echoes a completely separate block of markup for each case — mobile and desktop don't share a template, **they share a stylesheet**. `index.php`, `sobre.php` and `footer.php` all follow this pattern.

**Carousels.** Swiper is initialised once in `footer.php` for every `.mySwiper` element on the page: 3.5-second autoplay that survives interaction, arrows, and clickable pagination dots where the markup includes them.

**Mobile navigation.** `script.js` exposes a single `Bar()` function, wired to the header button. It flips the drawer's visibility and swaps the icon between the hamburger and a cross, tracking state in a `cond` counter.

---

## 📄 Pages

### `index.php` — Home
A photo carousel of the property, then three sections introducing:
- 🛏️ The rooms (*Acomodações*)
- 🌳 The shared outdoor deck and barbecue area (*Área de convivência*)
- 🍳 The shared kitchen (*Cozinha*)

Ends in the availability button that opens WhatsApp.

### `sobre.php` — About
The guesthouse's story and location: minutes from Tramandaí's town centre, 50 m from a large supermarket, under 15 minutes to the beach, **open since 2020 with 30+ years of experience behind it**. Below that, a gallery — a Swiper carousel on mobile, a 15-image grid on desktop.

---

## 🎨 Design

The palette lives in CSS custom properties at the top of the stylesheet:

| Token                | Value       |
| -------------------- | ----------- |
| `--darkBlue`         | `#185F8F`   |
| `--Blue`             | `#3282B8`   |
| `--ligthBlue`        | `#87CFFF`   |
| `--darkBlue-shadow`  | `#185f8fc5` |

Layout is fluid between roughly **375 px** and **1040 px**, with two media queries handling the edges: one at `max-width: 700px` and one at `min-width: 1700px` for very wide screens. Decorative SVG "blobs" and wave dividers sit behind several sections.

---

## ⚠️ Known Limitations

Things worth knowing before picking this up again.

- **The admin area described in the old README does not exist in this repo.** There is no `admin/` folder here, and the login it mentions is not implemented — it was still planned work. **Remove those credentials from the repository:** even for an unbuilt feature, a username and password in a public README is a habit worth not having. If the admin area gets built, it needs sessions, hashed passwords and a real access check — not just an unlinked URL, which anyone can type as easily as you can.
- **Device detection is user-agent sniffing.** It has three problems: `strpos()` returns `0` when the match sits at the very start of the string, which PHP reads as false, so a UA beginning with `BlackBerry` is treated as a desktop; the `== true` at the end of the condition binds only to `$windowsphone`, not to the whole chain; and the file will emit a notice if `HTTP_USER_AGENT` is missing. Using `!== false` on each check fixes the first two. Longer term, CSS media queries alone would let one template serve both layouts.
- **Markup is duplicated per device.** The room, deck and kitchen copy is written out twice in `index.php`, and the about text twice in `sobre.php`, so any wording change has to be made in both places. Assigning the text to variables once, above the branch, would remove that.
- **`footer.php` has a typo:** `<footer lass='footer_Pc'>` should be `class`, so the desktop footer never receives its class.
- **Images are unoptimised.** `img/` is about 36 MB, and the mobile layout loads the same full-size PNGs as desktop. Compressing them and serving WebP would be the single biggest win for load time.
- **`alt` attributes are empty.** Every `<img>` has `alt=''`, which hides the photography from screen readers and search engines.
- **`&nbsp` is missing its semicolon** throughout — it happens to render in browsers, but `&nbsp;` is the correct entity.

---

## 🔮 Possible Next Steps

- [ ] Fix the `strpos` checks in `dispositivo.php`, or drop the branch and go CSS-only
- [ ] Pull the duplicated copy into variables so each text exists once
- [ ] Compress the photography and add `loading="lazy"` to gallery images
- [ ] Write real `alt` text for each image
- [ ] Build the admin area properly if it is still wanted — sessions, hashed passwords, and a redirect for anyone not logged in

---

## 👤 Author

**João Pedro Luz**

- GitHub: [@JoaoLuzWork](https://github.com/JoaoLuzWork)
- Email: <joao.pedro.luz.work@gmail.com>
- Location: Dublin, Ireland

🌐 Live site: **[pousadasilvestre.net](https://pousadasilvestre.net)**

---

## 📄 License

This project is open source and available for personal and educational use.
