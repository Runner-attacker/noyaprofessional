# NOYA Professional — PHP Website

A modular PHP website for NOYA Professional hair care (marketed by Tishka Exim).
The header and footer are **server-side includes**, so they appear on every page
and you edit them in just one place.

## Folder Structure

```
noya-website/
├── index.php                  ← Home page (content only)
├── includes/
│   ├── config.php             ← Site settings + nav/footer menu data (EDIT HERE)
│   ├── header.php             ← Shared header  (<head>, nav, opens <body>)
│   └── footer.php             ← Shared footer  (footer, closes </body></html>)
└── assets/
    ├── css/styles.css         ← All styles
    └── js/script.js           ← All interactions
```

## How to Run

PHP needs a server (it cannot run by double-clicking the file).

**Option A — PHP built-in server (simplest):**
```bash
cd noya-website
php -S localhost:8000
```
Then open: http://localhost:8000

**Option B — XAMPP / WAMP / MAMP:**
Copy the `noya-website` folder into your `htdocs` (or `www`) directory,
start Apache, then visit http://localhost/noya-website/

## Why the header/footer now show correctly

The previous version used JavaScript `fetch()`, which browsers block on the
`file://` protocol — that's why nothing appeared when opening the file directly.
PHP `include` runs on the **server** and stitches the pages together before they
reach the browser, so the header and footer always render.

## Adding a New Page

Create e.g. `treatments.php`:

```php
<?php $page_title = 'Treatments'; include 'includes/header.php'; ?>

  <!-- your page content here -->

<?php include 'includes/footer.php'; ?>
```

The header, footer, nav menu, and active-link highlighting all work automatically.

## Editing Navigation or Footer Links

Open `includes/config.php` and edit the `$NAV_ITEMS` and `$FOOTER_COLS` arrays.
Changes apply to **every page** instantly.
