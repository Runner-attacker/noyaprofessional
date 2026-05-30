<?php
/**
 * ╔══════════════════════════════════════════════╗
 * ║  NOYA PROFESSIONAL — Site Configuration      ║
 * ║  File: includes/config.php                   ║
 * ╚══════════════════════════════════════════════╝
 *
 * Central place for all site-wide settings.
 * Edit values here once — they apply across every page.
 */

/* ---- Brand ---- */
define('SITE_NAME',     'NOYA Professional');
define('SITE_TAGLINE',  'Complete Hair Solution — Thinking Beyond The Box');
define('SITE_MARKETER', 'TISHKA EXIM');

/* ---- WhatsApp Floating Button ----
 * Number: international format, digits only — no +, no spaces, no dashes.
 * Example India +91 98765 43210 → '919876543210'
 */
define('WHATSAPP_NUMBER',  '919876543210');
define('WHATSAPP_MESSAGE', 'Hello NOYA Professional! I\'d like to know more about your hair treatments and products.');

/* ---- Paths (relative to web root) ---- */
/*
 * BASE_URL: relative path used for links and assets.
 * Leave as '' (empty) when all pages sit in the same folder — this makes
 * assets load correctly no matter what subfolder the site is hosted in
 * (e.g. htdocs/noyaprofessional/ OR htdocs/anything-else/).
 */
define('BASE_URL', '');                  // relative paths — works in any subfolder
define('ASSETS',   'assets');            // css / js / images (relative to current page)

/* ---- Navigation menu (single source of truth) ----
 * Add/remove/reorder items here and every page updates.
 * 'page' = filename (used to auto-highlight the active link)
 * 'href' = link target
 */
$NAV_ITEMS = [
    ['label' => 'Home',        'href' => 'index.php',              'page' => 'index'],
    ['label' => 'About',       'href' => 'index.php#about',        'page' => 'index'],
    ['label' => 'Products',    'href' => 'index.php#products',     'page' => 'index'],
    ['label' => 'Treatments',  'href' => 'index.php#treatments',   'page' => 'index'],
    ['label' => 'Home Care',   'href' => 'index.php#homecare',     'page' => 'index'],
    ['label' => 'Ingredients', 'href' => 'index.php#ingredients',  'page' => 'index'],
];

/* ---- Footer link columns ---- */
$FOOTER_COLS = [
    'Treatments' => [
        ['label' => 'Boto-Plex',          'href' => 'index.php#treatments'],
        ['label' => 'Nano-Plex',          'href' => 'index.php#treatments'],
        ['label' => 'Nanoplastia',        'href' => 'index.php#treatments'],
        ['label' => 'Clarifying Shampoo', 'href' => 'index.php#products'],
        ['label' => 'Collagen Hair Spa',  'href' => 'index.php#products'],
    ],
    'Home Care' => [
        ['label' => 'Replenishing Shampoo',     'href' => 'index.php#homecare'],
        ['label' => 'Replenishing Conditioner', 'href' => 'index.php#homecare'],
        ['label' => 'Hair Serum',               'href' => 'index.php#homecare'],
        ['label' => 'Heat Protector',           'href' => 'index.php#homecare'],
        ['label' => 'Argan Oil',                'href' => 'index.php#homecare'],
        ['label' => 'Dandruff Shampoo',         'href' => 'index.php#homecare'],
    ],
    'Information' => [
        ['label' => 'About NOYA',         'href' => 'index.php#about'],
        ['label' => 'Key Ingredients',    'href' => 'index.php#ingredients'],
        ['label' => 'Treatment Guide',    'href' => 'index.php#treatments'],
        ['label' => 'Professional Use',   'href' => '#'],
        ['label' => 'Salon Locator',      'href' => '#'],
        ['label' => 'Contact Distributor','href' => '#'],
    ],
];

/* ---- Helper: detect current page slug for active-link highlighting ---- */
function current_page() {
    $file = basename($_SERVER['PHP_SELF']);     // e.g. "index.php"
    return pathinfo($file, PATHINFO_FILENAME);  // e.g. "index"
}
