/* ================================================================
   ANIMATED HERO — animated-hero.js
   Rotates words every 2000ms with slide/fade transitions.
   Pure ES6+, no dependencies.
   ================================================================ */

(function () {
  'use strict';

  /* ── Config ──────────────────────────────────────────────────── */
  const WORDS    = ['amazing', 'new', 'wonderful', 'beautiful', 'smart'];
  const INTERVAL = 2000;   // ms between each word change
  const EXIT_MS  = 350;    // must match CSS ahWordOut duration
  const ENTER_MS = 450;    // must match CSS ahWordIn duration

  let currentIndex = 0;
  let timer        = null;

  /* ── Core rotation function ──────────────────────────────────── */
  function rotateWord() {
    const el = document.getElementById('animated-hero-word');
    if (!el) return;

    // Step 1 — animate current word out (slide up + fade)
    el.classList.add('word-exit');

    setTimeout(function () {
      // Step 2 — swap the text while hidden mid-animation
      currentIndex = (currentIndex + 1) % WORDS.length;
      el.textContent = WORDS[currentIndex];

      // Keep the aria-label on the line element in sync for screen readers
      var line = el.closest('.ah-word-line');
      if (line) {
        line.setAttribute('aria-label', 'that is ' + WORDS[currentIndex]);
      }

      // Step 3 — animate new word in (slide up from below + fade)
      el.classList.remove('word-exit');
      el.classList.add('word-enter');

      setTimeout(function () {
        el.classList.remove('word-enter');
      }, ENTER_MS);

    }, EXIT_MS);
  }

  /* ── Pause when tab is hidden (saves CPU) ────────────────────── */
  function handleVisibility() {
    if (document.hidden) {
      clearInterval(timer);
    } else {
      timer = setInterval(rotateWord, INTERVAL);
    }
  }

  /* ── Init ────────────────────────────────────────────────────── */
  function init() {
    var el = document.getElementById('animated-hero-word');
    if (!el) return;   // component not on this page — exit quietly

    // Set initial aria-label
    var line = el.closest('.ah-word-line');
    if (line) {
      line.setAttribute('aria-label', 'that is ' + WORDS[currentIndex]);
    }

    // Start rotation
    timer = setInterval(rotateWord, INTERVAL);

    // Pause in background tabs
    document.addEventListener('visibilitychange', handleVisibility);
  }

  /* ── Wait for DOM ────────────────────────────────────────────── */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();
