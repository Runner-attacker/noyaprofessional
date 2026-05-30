<?php
/**
 * ╔══════════════════════════════════════════════╗
 * ║  NOYA PROFESSIONAL — Home Page               ║
 * ║  File: index.php                             ║
 * ╚══════════════════════════════════════════════╝
 *
 * Each section lives in includes/sections/<name>.php
 * To update a section, edit only that file and re-upload it.
 *
 * To build a NEW page, copy this pattern:
 *   1. <?php $page_title = 'Your Title'; include __DIR__ . '/includes/header.php'; ?>
 *   2. ...your page content...
 *   3. <?php include __DIR__ . '/includes/footer.php'; ?>
 */

$page_title = 'Complete Hair Solution';
include __DIR__ . '/includes/header.php';

// Load section functions
include __DIR__ . '/includes/sections/hero.php';
include __DIR__ . '/includes/sections/marquee.php';
include __DIR__ . '/includes/sections/about.php';
include __DIR__ . '/includes/sections/products.php';
include __DIR__ . '/includes/sections/photo_feature.php';
include __DIR__ . '/includes/sections/treatments.php';
include __DIR__ . '/includes/sections/homecare.php';
include __DIR__ . '/includes/sections/gallery.php';
include __DIR__ . '/includes/sections/ingredients.php';
include __DIR__ . '/includes/sections/promise.php';
include __DIR__ . '/includes/sections/photo_cta.php';

// Render sections — comment out any you don't need, or reorder freely
section_hero();
section_marquee();
section_about();
section_products();
section_photo_feature();
section_treatments();
section_homecare();
section_gallery();
section_ingredients();
section_promise();
section_photo_cta();

include __DIR__ . '/includes/footer.php';
