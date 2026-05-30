  <!-- ============ PAGE CONTENT ENDS ABOVE ============ -->

<?php
/**
 * ╔══════════════════════════════════════════════╗
 * ║  NOYA PROFESSIONAL — Shared Footer           ║
 * ║  File: includes/footer.php                   ║
 * ╚══════════════════════════════════════════════╝
 *
 * Renders the footer, closes <body> and <html>.
 * Include at the bottom of every page:
 *
 *     <?php include 'includes/footer.php'; ?>
 *
 * Pulls footer columns from $FOOTER_COLS in config.php.
 */
require_once __DIR__ . '/config.php';
?>

  <!-- ===================== FOOTER ===================== -->
  <footer>
    <div class="footer-top">

      <!-- Brand Column -->
      <div class="footer-brand-col">
        <div class="footer-brand-logo">NOYA</div>
        <div class="footer-brand-tag">
          "Complete Hair Solution<br>Thinking Beyond The Box"
        </div>
        <div class="footer-mktd">Marketed By <strong><?= SITE_MARKETER ?></strong></div>

        <!-- Social Icons -->
        <div class="footer-socials">
          <a href="#" class="footer-social-link" aria-label="Instagram">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/></svg>
          </a>
          <a href="#" class="footer-social-link" aria-label="Facebook">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
          </a>
          <a href="#" class="footer-social-link" aria-label="YouTube">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="currentColor" stroke="none"/></svg>
          </a>
          <a href="#" class="footer-social-link" aria-label="WhatsApp">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
          </a>
        </div>
      </div>

      <!-- Link Columns (generated from $FOOTER_COLS in config.php) -->
      <?php foreach ($FOOTER_COLS as $colTitle => $links): ?>
        <div>
          <div class="footer-col-label"><?= htmlspecialchars($colTitle) ?></div>
          <ul class="footer-links">
            <?php foreach ($links as $link): ?>
              <li><a href="<?= $link['href'] ?>"><?= htmlspecialchars($link['label']) ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>

    </div><!-- /footer-top -->

    <!-- Footer Bottom Bar -->
    <div class="footer-bottom">
      <div class="footer-copy">
        &copy; <?= date('Y') ?> <?= SITE_NAME ?>. Marketed by <?= ucwords(strtolower(SITE_MARKETER)) ?>. All rights reserved.
      </div>
      <div class="footer-bottom-links">
        <a href="#">Privacy Policy</a>
        <span class="footer-divider">&middot;</span>
        <a href="#">Terms of Use</a>
        <span class="footer-divider">&middot;</span>
        <a href="#">Sitemap</a>
      </div>
      <div class="footer-bottom-tag"><?= SITE_TAGLINE ?></div>
    </div>

  </footer>

  <!-- Global Script -->
  <script src="<?= ASSETS ?>/js/script.js"></script>

</body>
</html>
