<?php
/**
 * ╔══════════════════════════════════════════════╗
 * ║  ANIMATED HERO — Reusable PHP Component      ║
 * ║  File: components/animated-hero.php          ║
 * ╚══════════════════════════════════════════════╝
 *
 * Drop-in animated hero section. Pure HTML/PHP — no React,
 * no TypeScript, no Tailwind. Animations via CSS keyframes
 * and vanilla JS.
 *
 * USAGE
 * ─────
 * 1. Link the stylesheet in your <head>:
 *      <link rel="stylesheet" href="assets/css/animated-hero.css">
 *    (adjust path depth — e.g. ../assets/... from /pages/)
 *
 * 2. Include the component where you want the section:
 *      <?php include 'components/animated-hero.php'; ?>
 *
 * 3. Load the script before </body>:
 *      <script src="assets/js/animated-hero.js"></script>
 *
 * CUSTOMISATION
 * ─────────────
 * Rotating words  → animated-hero.js  (WORDS array)
 * Colors / sizes  → animated-hero.css (CSS custom properties)
 * Text content    → edit the HTML below directly
 *
 * ROTATING WORDS (default, change every 2 s):
 *   amazing · new · wonderful · beautiful · smart
 */
?>

<section class="ah-section" aria-label="Hero">
  <div class="ah-container">

    <!-- ══════════ CONTENT (left column) ══════════ -->
    <div class="ah-content">

      <!-- Eyebrow badge -->
      <div class="ah-badge" role="text">
        <svg class="ah-badge-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M8 1l1.88 3.81 4.2.61-3.04 2.96.72 4.18L8 10.51l-3.76 1.98.72-4.18L1.92 5.42l4.2-.61z"/>
        </svg>
        Introducing something new
      </div>

      <!-- Headline + animated word -->
      <div class="ah-headline">
        <h1 class="ah-title">This is something</h1>

        <!-- The word-stage clips overflow so exit/enter stays within line bounds -->
        <div class="ah-word-line" aria-label="that is amazing">
          <span class="ah-word-prefix">that is</span>
          <div class="ah-word-stage">
            <span id="animated-hero-word" class="ah-word" aria-live="polite" aria-atomic="true">
              amazing
            </span>
          </div>
        </div>
      </div>

      <!-- Description -->
      <p class="ah-desc">
        Managing a small business today is already tough. Avoid further complications
        by ditching outdated, tedious trade methods. Our goal is to streamline SMB trade,
        making it easier and faster than ever.
      </p>

      <!-- CTA buttons -->
      <div class="ah-actions" role="group" aria-label="Call to action">

        <!-- Primary — solid dark -->
        <a href="#" class="ah-btn ah-btn--primary">
          <svg class="ah-btn-icon" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0
              015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29
              3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
          </svg>
          Read our launch article
        </a>

        <!-- Secondary — outlined -->
        <a href="#" class="ah-btn ah-btn--outline">
          <svg class="ah-btn-icon" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54
              1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0
              011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
          </svg>
          Jump on a call
        </a>

        <!-- Ghost — text + arrow -->
        <a href="#" class="ah-btn ah-btn--ghost">
          Sign up here
          <svg class="ah-btn-icon" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010
              1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1
              1 0 010-1.414z" clip-rule="evenodd"/>
          </svg>
        </a>

      </div><!-- /.ah-actions -->

      <!-- Social proof -->
      <div class="ah-social-proof">
        <div class="ah-avatars" aria-hidden="true">
          <div class="ah-avatar" style="background: #6366f1;"></div>
          <div class="ah-avatar" style="background: #8b5cf6;"></div>
          <div class="ah-avatar" style="background: #ec4899;"></div>
          <div class="ah-avatar" style="background: #f59e0b;"></div>
        </div>
        <p class="ah-social-text">
          Join <strong>2,000+</strong> businesses already onboard
        </p>
      </div>

    </div><!-- /.ah-content -->


    <!-- ══════════ VISUAL (right column) ══════════ -->
    <div class="ah-visual" aria-hidden="true">

      <!-- Spinning dashed rings (decorative) -->
      <div class="ah-visual-ring"></div>
      <div class="ah-visual-ring ah-visual-ring-2"></div>

      <!-- Glowing blobs -->
      <div class="ah-blob ah-blob-1"></div>
      <div class="ah-blob ah-blob-2"></div>
      <div class="ah-blob ah-blob-3"></div>

      <!-- Floating stat card — top left -->
      <div class="ah-float-card ah-float-card-1">
        <div class="ah-card-icon ah-card-icon--green">
          <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0
              11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1
              1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
              clip-rule="evenodd"/>
          </svg>
        </div>
        <div class="ah-card-body">
          <span class="ah-card-value">+127%</span>
          <span class="ah-card-label">Revenue Growth</span>
        </div>
      </div>

      <!-- Floating stat card — bottom right -->
      <div class="ah-float-card ah-float-card-2">
        <div class="ah-card-icon ah-card-icon--amber">
          <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0
              01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0
              011.12-.38z" clip-rule="evenodd"/>
          </svg>
        </div>
        <div class="ah-card-body">
          <span class="ah-card-value">3× Faster</span>
          <span class="ah-card-label">Trade Processing</span>
        </div>
      </div>

    </div><!-- /.ah-visual -->

  </div><!-- /.ah-container -->
</section>
