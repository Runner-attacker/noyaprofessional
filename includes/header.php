<?php
/**
 * ╔══════════════════════════════════════════════╗
 * ║  NOYA PROFESSIONAL — Shared Header           ║
 * ║  File: includes/header.php                   ║
 * ╚══════════════════════════════════════════════╝
 *
 * Opens <html>, <head>, <body> and renders the nav.
 * Include at the top of every page:
 *
 *     <?php $page_title = 'Page Name'; include 'includes/header.php'; ?>
 *
 * Optional variables you can set BEFORE including:
 *   $page_title  — appended to the browser title
 *   $body_class  — extra class on <body> for page-specific styling
 */

require_once __DIR__ . '/config.php';

$current   = current_page();
$title     = isset($page_title) ? $page_title . ' — ' . SITE_NAME : SITE_NAME . ' — Complete Hair Solution';
$bodyClass = isset($body_class) ? $body_class : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="<?= SITE_NAME ?> — luxury professional hair care. Advanced nanotechnology treatments, formaldehyde free. Marketed by <?= SITE_MARKETER ?>.">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@200;300;400;500;600&display=swap" rel="stylesheet">

  <!-- Global Stylesheet -->
  <link rel="stylesheet" href="<?= ASSETS ?>/css/styles.css">
</head>
<body class="<?= htmlspecialchars($bodyClass) ?>">

  <!-- Custom cursor elements -->
  <div class="cursor" id="cursor"></div>
  <div class="cursor-ring" id="cursor-ring"></div>

  <!-- ===================== NAV ===================== -->
  <nav id="nav">

    <!-- Logo -->
    <a href="index.php" class="nav-logo">
      <span class="nav-logo-text">NOYA</span>
      <span class="nav-logo-sub">Professional</span>
    </a>

    <!-- Navigation Links (generated from $NAV_ITEMS in config.php) -->
    <ul class="nav-links">
      <?php foreach ($NAV_ITEMS as $item):
        $isActive = ($item['page'] === $current && strpos($item['href'], '#') === false);
      ?>
        <li>
          <a href="<?= $item['href'] ?>" class="<?= $isActive ? 'nav-active' : '' ?>">
            <?= htmlspecialchars($item['label']) ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <!-- CTA Button -->
    <button class="nav-cta">Contact Us</button>

    <!-- Mobile Hamburger -->
    <button class="menu-toggle" id="menu-toggle" aria-label="Open menu">
      <span></span><span></span><span></span>
    </button>

  </nav>

  <!-- Mobile slide-in menu -->
  <div class="mobile-menu" id="mobile-menu">
    <?php foreach ($NAV_ITEMS as $item): ?>
      <a href="<?= $item['href'] ?>"><?= htmlspecialchars($item['label']) ?></a>
    <?php endforeach; ?>
    <button class="nav-cta" style="margin-top:24px;">Contact Us</button>
  </div>

  <!-- ============ PAGE CONTENT STARTS BELOW ============ -->
