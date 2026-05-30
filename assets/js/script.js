/* =============================================
   NOYA PROFESSIONAL — assets/js/script.js

   Note: With the PHP version, the header & footer
   are injected SERVER-SIDE (via PHP include), so
   no fetch loader is needed. All elements already
   exist in the DOM on page load.

   SECTIONS:
   1. Custom Cursor      4. Scroll Reveal       7. Product Filter
   2. Sticky Nav         5. Treatment Steps     8. Mobile Menu
   3. (active link = PHP) 6. Tab Switcher
   ============================================= */

document.addEventListener('DOMContentLoaded', () => {
  initCursor();
  initNav();
  initReveal();
  initTreatmentSteps();
  initTabs();
  initProductFilter();
  initMobileMenu();
});


/* ── 1. CUSTOM CURSOR ── */
function initCursor() {
  const cursor = document.getElementById('cursor');
  const ring   = document.getElementById('cursor-ring');
  if (!cursor || !ring) return;

  let mX = 0, mY = 0, rX = 0, rY = 0;
  document.addEventListener('mousemove', e => {
    mX = e.clientX; mY = e.clientY;
    cursor.style.left = mX + 'px';
    cursor.style.top  = mY + 'px';
  });
  (function loop() {
    rX += (mX - rX) * 0.12;
    rY += (mY - rY) * 0.12;
    ring.style.left = rX + 'px';
    ring.style.top  = rY + 'px';
    requestAnimationFrame(loop);
  })();

  const sel = 'a, button, .product-card, .care-card, .gallery-item, .ingredient-row, .promise-card';
  document.addEventListener('mouseover', e => {
    if (e.target.closest(sel)) {
      cursor.style.width = '6px';  cursor.style.height = '6px';
      ring.style.width = '52px';   ring.style.height = '52px';
      ring.style.borderColor = 'rgba(201,168,76,0.85)';
    }
  });
  document.addEventListener('mouseout', e => {
    if (e.target.closest(sel)) {
      cursor.style.width = '10px'; cursor.style.height = '10px';
      ring.style.width = '36px';   ring.style.height = '36px';
      ring.style.borderColor = 'rgba(201,168,76,0.5)';
    }
  });
}


/* ── 2. STICKY NAV ── */
function initNav() {
  const nav = document.getElementById('nav');
  if (!nav) return;
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 60);
  });
}


/* ── 4. SCROLL REVEAL ── */
function initReveal() {
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('in'); obs.unobserve(e.target); }
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
}


/* ── 5. TREATMENT STEP STAGGER ── */
function initTreatmentSteps() {
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.querySelectorAll('.treatment-step').forEach((s, i) => {
          setTimeout(() => s.classList.add('in'), i * 75);
        });
      }
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.treatment-steps').forEach(el => obs.observe(el));
}


/* ── 6. TAB SWITCHER ── */
function initTabs() {
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      const panel = document.getElementById('tab-' + btn.dataset.tab);
      if (!panel) return;
      panel.classList.add('active');
      panel.querySelectorAll('.treatment-step').forEach(s => s.classList.remove('in'));
      panel.querySelectorAll('.treatment-step').forEach((s, i) => {
        setTimeout(() => s.classList.add('in'), i * 75);
      });
    });
  });

  setTimeout(() => {
    const first = document.querySelector('#tab-botoplex');
    if (first) first.querySelectorAll('.treatment-step').forEach((s, i) => {
      setTimeout(() => s.classList.add('in'), i * 75 + 400);
    });
  }, 400);
}


/* ── 7. PRODUCT FILTER ── */
function initProductFilter() {
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const f = btn.dataset.filter;
      document.querySelectorAll('.product-card').forEach(card => {
        card.style.display = (f === 'all' || card.dataset.category === f) ? '' : 'none';
      });
    });
  });
}


/* ── 8. MOBILE MENU ── */
function initMobileMenu() {
  const toggle = document.getElementById('menu-toggle');
  const menu   = document.getElementById('mobile-menu');
  if (!toggle || !menu) return;

  toggle.addEventListener('click', () => {
    toggle.classList.toggle('active');
    menu.classList.toggle('open');
  });
  /* close on link click */
  menu.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      toggle.classList.remove('active');
      menu.classList.remove('open');
    });
  });
}
