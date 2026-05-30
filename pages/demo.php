<?php
/**
 * Redirects to the site-integrated version of the animated hero page.
 * The full page (with NOYA nav, footer, and brand styles) lives at:
 *   animated-hero.php (project root)
 */
header('Location: ../animated-hero.php', true, 301);
exit;
