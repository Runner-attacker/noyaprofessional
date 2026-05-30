<?php
/**
 * ╔══════════════════════════════════════════════╗
 * ║  NOYA PROFESSIONAL — Animated Hero Page      ║
 * ║  File: animated-hero.php                     ║
 * ╚══════════════════════════════════════════════╝
 *
 * Renders the animated hero component inside the full
 * NOYA site layout (nav + footer). Component logic lives
 * in components/animated-hero.php.
 *
 * CSS: assets/css/animated-hero.css
 * JS:  assets/js/animated-hero.js  (auto-injected via $extra_js)
 */

require_once __DIR__ . '/includes/config.php';   // defines ASSETS before we use it

$page_title = 'Animated Hero';
$extra_css  = [ASSETS . '/css/animated-hero.css'];
$extra_js   = [ASSETS . '/js/animated-hero.js'];

include __DIR__ . '/includes/header.php';
?>

<?php include __DIR__ . '/components/animated-hero.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
