<?php
/**
 * ╔══════════════════════════════════════════════╗
 * ║  NOYA PROFESSIONAL — Typography System       ║
 * ║  File: typography.php                        ║
 * ╚══════════════════════════════════════════════╝
 *
 * Full typography specimen page inside the NOYA site layout.
 * typography.css is already loaded globally via header.php.
 * $body_class = 'typo-page' activates semantic h1–p auto-styles.
 */

$page_title = 'Typography System';
$body_class = 'typo-page';

include __DIR__ . '/includes/header.php';
?>

<style>
/* ── Demo scaffolding (scoped to this page only) ────────────────── */
:root {
  --demo-bg:      #fdfcf9;
  --demo-surface: #ffffff;
  --demo-border:  #ede8e1;
  --demo-section: #f5f2ed;
  --demo-code:    #f0ebe4;
  --demo-ink:     #1a1208;
  --demo-muted:   #9c8e82;
  --demo-accent:  #c9922a;
  --demo-radius:  12px;
  --demo-max:     1120px;
  --demo-pad:     clamp(20px, 5vw, 64px);
}

/* Clear the fixed NOYA nav */
.typo-page-wrap  { padding-top: 88px; background: var(--demo-bg); }

/* Page header banner */
.typo-page-banner {
  background:     var(--demo-ink);
  padding:        40px var(--demo-pad);
  display:        flex;
  align-items:    center;
  justify-content:space-between;
  flex-wrap:      wrap;
  gap:            16px;
}
.typo-page-banner-title {
  font-family:    'Playfair Display', serif;
  font-size:      clamp(1.5rem, 3vw, 2.25rem);
  font-weight:    700;
  font-style:     italic;
  color:          #fff;
  letter-spacing: -0.02em;
}
.typo-page-banner-title span { color: var(--demo-accent); }
.typo-page-banner-fonts {
  display:  flex;
  gap:      8px;
  flex-wrap:wrap;
}
.typo-page-banner-chip {
  font-family:    'Inter', sans-serif;
  font-size:      10px;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color:          rgba(255,255,255,0.5);
  padding:        5px 12px;
  border:         1px solid rgba(255,255,255,0.15);
  border-radius:  100px;
}

/* Shared demo layout */
.demo-page     { max-width: var(--demo-max); margin: 0 auto; }

.demo-section  {
  padding:       56px var(--demo-pad);
  border-bottom: 1px solid var(--demo-border);
}
.demo-section:nth-child(even) { background: var(--demo-section); }
.demo-section:last-child      { border-bottom: none; }

.demo-section-header {
  display:       flex;
  align-items:   baseline;
  gap:           16px;
  margin-bottom: 36px;
  padding-bottom:14px;
  border-bottom: 1px solid var(--demo-border);
}
.demo-section-num   { font-size:10px; font-weight:700; letter-spacing:.2em; text-transform:uppercase; color:var(--demo-accent); flex-shrink:0; }
.demo-section-title { font-size:13px; font-weight:600; letter-spacing:.06em; text-transform:uppercase; color:var(--demo-muted); font-family:'Inter',sans-serif; }

.demo-class {
  display:      inline-block;
  font-family:  'Courier New', monospace;
  font-size:    11px;
  background:   var(--demo-code);
  color:        #6b4c1a;
  padding:      3px 8px;
  border-radius:4px;
  vertical-align:middle;
  margin-left:  8px;
}

.demo-row { display:flex; align-items:baseline; gap:24px; margin-bottom:30px; }
.demo-row:last-child { margin-bottom:0; }
.demo-row-label { min-width:80px; font-size:10px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--demo-muted); flex-shrink:0; padding-top:4px; font-family:'Inter',sans-serif; }
.demo-row-content { flex:1; }
.demo-meta { font-size:11px; color:var(--demo-muted); margin-top:6px; font-family:'Courier New',monospace; }

/* Font family cards */
.demo-font-grid { display:grid; grid-template-columns:1fr 1fr; gap:20px; }
@media(max-width:640px){ .demo-font-grid{ grid-template-columns:1fr; } }

.demo-font-card { background:var(--demo-surface); border:1px solid var(--demo-border); border-radius:var(--demo-radius); padding:32px 28px 24px; }
.demo-font-card-third { grid-column:1/-1; background:linear-gradient(135deg,#1a1208 0%,#2e2012 100%); border-color:transparent; padding:24px 28px; }
.demo-font-specimen  { font-size:clamp(4rem,10vw,7rem); line-height:1; margin-bottom:16px; user-select:none; }
.demo-font-name      { font-size:11px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--demo-accent); margin-bottom:4px; font-family:'Inter',sans-serif; }
.demo-font-role      { font-size:12px; color:var(--demo-muted); margin-bottom:14px; font-family:'Inter',sans-serif; }
.demo-font-weights   { display:flex; gap:8px; flex-wrap:wrap; }
.demo-weight-chip    { font-size:10px; letter-spacing:.06em; padding:4px 10px; background:var(--demo-code); border-radius:100px; color:var(--demo-ink); }

/* Type scale */
.demo-scale-row  { display:flex; align-items:center; gap:20px; padding:12px 0; border-bottom:1px solid var(--demo-border); }
.demo-scale-row:last-child { border-bottom:none; }
.demo-scale-token{ min-width:90px; font-size:10px; font-weight:700; letter-spacing:.14em; text-transform:uppercase; color:var(--demo-muted); flex-shrink:0; font-family:'Inter',sans-serif; }
.demo-scale-val  { min-width:52px; font-size:10px; color:var(--demo-accent); font-family:'Courier New',monospace; flex-shrink:0; }
.demo-scale-text { flex:1; overflow:hidden; white-space:nowrap; text-overflow:ellipsis; }

/* Buttons */
.demo-btn-row { display:flex; align-items:center; flex-wrap:wrap; gap:14px; margin-bottom:28px; }
.demo-btn { display:inline-flex; align-items:center; gap:8px; text-decoration:none; border-radius:8px; cursor:pointer; transition:opacity .2s; }
.demo-btn:hover { opacity:.8; }
.demo-btn-primary { background:var(--demo-ink); color:#fff; padding:13px 26px; }
.demo-btn-outline { border:2px solid var(--demo-ink); color:var(--demo-ink); padding:11px 24px; }
.demo-btn-ghost   { color:var(--demo-accent); padding:13px 0; font-weight:600; letter-spacing:.04em; }
.demo-btn-pill    { background:var(--demo-accent); color:#fff; padding:10px 22px; border-radius:100px; }
.demo-btn-sm-pill { border:1px solid var(--demo-border); color:var(--demo-ink); padding:7px 16px; border-radius:100px; background:var(--demo-surface); }

/* In-context cards */
.demo-context-grid { display:grid; grid-template-columns:1fr 1fr 1fr; gap:20px; }
@media(max-width:900px){ .demo-context-grid{ grid-template-columns:1fr 1fr; } }
@media(max-width:580px){ .demo-context-grid{ grid-template-columns:1fr; } }

.demo-ctx-card        { background:var(--demo-surface); border:1px solid var(--demo-border); border-radius:var(--demo-radius); padding:28px 24px; }
.demo-ctx-card--dark  { background:var(--demo-ink); border-color:transparent; }
.demo-ctx-card--accent{ background:linear-gradient(135deg,#fef3c7 0%,#fde68a 100%); border-color:rgba(201,146,42,.2); }
.demo-ctx-sep         { width:40px; height:1px; background:var(--demo-border); margin:18px 0; }
.demo-ctx-card--dark .demo-ctx-sep { background:rgba(255,255,255,.15); }

/* Helpers */
.mt-4  { margin-top: 4px;  } .mt-8  { margin-top:  8px; }
.mt-12 { margin-top:12px;  } .mt-16 { margin-top: 16px; }
.mt-24 { margin-top:24px;  } .mb-8  { margin-bottom: 8px; }
.mb-12 { margin-bottom:12px;} .mb-16{ margin-bottom:16px; }
.mb-24 { margin-bottom:24px;} .mb-28{ margin-bottom:28px; }
.mb-32 { margin-bottom:32px;}
</style>

<!-- ────────────────────────────────────────────────────────
     PAGE CONTENT STARTS
     ──────────────────────────────────────────────────────── -->
<div class="typo-page-wrap">

  <!-- Banner -->
  <div class="typo-page-banner">
    <div class="typo-page-banner-title">NOYA <span>Typography</span> System</div>
    <div class="typo-page-banner-fonts">
      <span class="typo-page-banner-chip">Playfair Display — Headings</span>
      <span class="typo-page-banner-chip">Inter — Body / UI</span>
      <span class="typo-page-banner-chip">Cormorant Garamond — Editorial</span>
    </div>
  </div>

  <div class="demo-page">


    <!-- ════════════════════════════════════════════════════════
         §1  FONT FAMILIES
         ════════════════════════════════════════════════════════ -->
    <section class="demo-section">
      <div class="demo-section-header">
        <span class="demo-section-num">01</span>
        <span class="demo-section-title">Font Families</span>
      </div>

      <div class="demo-font-grid">

        <div class="demo-font-card">
          <div class="demo-font-specimen" style="font-family:'Playfair Display',serif; font-weight:700; color:#1a1208;">Aa</div>
          <div class="demo-font-name">Playfair Display</div>
          <div class="demo-font-role">Display headings · Serif elegance · Editorial titles</div>
          <div class="demo-font-weights">
            <span class="demo-weight-chip" style="font-family:'Playfair Display',serif; font-weight:400;">Regular 400</span>
            <span class="demo-weight-chip" style="font-family:'Playfair Display',serif; font-weight:500;">Medium 500</span>
            <span class="demo-weight-chip" style="font-family:'Playfair Display',serif; font-weight:700;">Bold 700</span>
            <span class="demo-weight-chip" style="font-family:'Playfair Display',serif; font-weight:900;">Black 900</span>
            <span class="demo-weight-chip" style="font-family:'Playfair Display',serif; font-style:italic;">Italic</span>
          </div>
          <p class="type-caption mt-12" style="font-family:'Playfair Display',serif; font-style:italic; font-size:13px; line-height:1.6; color:#6b5d4f;">
            "Luxury Professional Hair Care — where science meets beauty."
          </p>
        </div>

        <div class="demo-font-card">
          <div class="demo-font-specimen" style="font-family:'Inter',sans-serif; font-weight:700; color:#1a1208;">Aa</div>
          <div class="demo-font-name">Inter</div>
          <div class="demo-font-role">Body text · UI copy · Buttons · Labels · Navigation</div>
          <div class="demo-font-weights">
            <span class="demo-weight-chip" style="font-family:'Inter',sans-serif; font-weight:300;">Light 300</span>
            <span class="demo-weight-chip" style="font-family:'Inter',sans-serif; font-weight:400;">Regular 400</span>
            <span class="demo-weight-chip" style="font-family:'Inter',sans-serif; font-weight:500;">Medium 500</span>
            <span class="demo-weight-chip" style="font-family:'Inter',sans-serif; font-weight:600;">Semibold 600</span>
            <span class="demo-weight-chip" style="font-family:'Inter',sans-serif; font-weight:700;">Bold 700</span>
          </div>
          <p class="type-caption mt-12" style="font-family:'Inter',sans-serif; font-size:13px; line-height:1.6; color:#6b5d4f;">
            Advanced nanotechnology delivering transformative results — readable at every size.
          </p>
        </div>

        <div class="demo-font-card demo-font-card-third">
          <div style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:14px;">
            <div>
              <div class="demo-font-name" style="color:rgba(201,146,42,.9);">Cormorant Garamond — Editorial Accent (3rd Family)</div>
              <div class="demo-font-role" style="color:rgba(255,255,255,.4);">Pull quotes · Brand taglines · Occasional large italic moments only</div>
            </div>
            <div class="demo-font-weights">
              <span class="demo-weight-chip" style="background:rgba(255,255,255,.08); color:rgba(255,255,255,.6); font-family:'Cormorant Garamond',serif; font-weight:300;">Light 300</span>
              <span class="demo-weight-chip" style="background:rgba(255,255,255,.08); color:rgba(255,255,255,.6); font-family:'Cormorant Garamond',serif; font-weight:400;">Regular 400</span>
              <span class="demo-weight-chip" style="background:rgba(255,255,255,.08); color:rgba(255,255,255,.6); font-family:'Cormorant Garamond',serif; font-style:italic;">Italic</span>
            </div>
          </div>
          <p style="font-family:'Cormorant Garamond',serif; font-size:clamp(1.75rem,3.5vw,2.75rem); font-style:italic; font-weight:300; line-height:1.35; color:rgba(255,255,255,.9); margin-top:18px;">
            "Hair is not just about appearance — it is the crown you never take off."
          </p>
        </div>

      </div>
    </section>


    <!-- ════════════════════════════════════════════════════════
         §2  TYPE SCALE
         ════════════════════════════════════════════════════════ -->
    <section class="demo-section">
      <div class="demo-section-header">
        <span class="demo-section-num">02</span>
        <span class="demo-section-title">Type Scale — Tokens &amp; Sizes</span>
      </div>

      <div class="demo-scale-row">
        <span class="demo-scale-token">Display</span>
        <span class="demo-scale-val">56–112px</span>
        <span class="demo-scale-text type-display" style="font-size:clamp(2rem,5vw,3.5rem);">Luminous Hair</span>
      </div>
      <div class="demo-scale-row">
        <span class="demo-scale-token">H1 / 6xl</span>
        <span class="demo-scale-val">44–72px</span>
        <span class="demo-scale-text type-h1" style="font-size:clamp(1.75rem,4vw,2.75rem);">NOYA Professional</span>
      </div>
      <div class="demo-scale-row">
        <span class="demo-scale-token">H2 / 5xl</span>
        <span class="demo-scale-val">32–56px</span>
        <span class="demo-scale-text type-h2" style="font-size:clamp(1.5rem,3vw,2.25rem);">Treatment Philosophy</span>
      </div>
      <div class="demo-scale-row">
        <span class="demo-scale-token">H3 / 4xl</span>
        <span class="demo-scale-val">26–40px</span>
        <span class="demo-scale-text type-h3" style="font-size:clamp(1.25rem,2.5vw,1.875rem);">Boto-Plex Transformation</span>
      </div>
      <div class="demo-scale-row">
        <span class="demo-scale-token">H4 / 3xl</span>
        <span class="demo-scale-val">22–32px</span>
        <span class="demo-scale-text type-h4" style="font-size:clamp(1.125rem,2vw,1.625rem);">Advanced Nanotechnology</span>
      </div>
      <div class="demo-scale-row">
        <span class="demo-scale-token">H5 / 2xl</span>
        <span class="demo-scale-val">24px</span>
        <span class="demo-scale-text type-h5">Premium Ingredients</span>
      </div>
      <div class="demo-scale-row">
        <span class="demo-scale-token">H6 / xl</span>
        <span class="demo-scale-val">18px</span>
        <span class="demo-scale-text type-h6">Formaldehyde Free Formula</span>
      </div>
      <div class="demo-scale-row">
        <span class="demo-scale-token">Lead / lg</span>
        <span class="demo-scale-val">16–20px</span>
        <span class="demo-scale-text type-lead">Delivering transformative results with zero compromise.</span>
      </div>
      <div class="demo-scale-row">
        <span class="demo-scale-token">Body / base</span>
        <span class="demo-scale-val">16px</span>
        <span class="demo-scale-text type-body">Revolutionary treatments crafted with hydrolyzed keratin, collagen and milk protein.</span>
      </div>
      <div class="demo-scale-row">
        <span class="demo-scale-token">Body SM / sm</span>
        <span class="demo-scale-val">14px</span>
        <span class="demo-scale-text type-body-sm">Marketed by Tishka Exim. Suitable for all hair types including damaged, virgin and henna-coated.</span>
      </div>
      <div class="demo-scale-row">
        <span class="demo-scale-token">Caption / xs</span>
        <span class="demo-scale-val">12px</span>
        <span class="demo-scale-text type-caption">*Results may vary. Single sitting application for professional use only.</span>
      </div>
      <div class="demo-scale-row">
        <span class="demo-scale-token">Label / 2xs</span>
        <span class="demo-scale-val">10px</span>
        <span class="demo-scale-text type-label">Pre-Treatment · Professional Use Only</span>
      </div>
    </section>


    <!-- ════════════════════════════════════════════════════════
         §3  HEADINGS H1 – H6
         ════════════════════════════════════════════════════════ -->
    <section class="demo-section">
      <div class="demo-section-header">
        <span class="demo-section-num">03</span>
        <span class="demo-section-title">Heading Hierarchy — H1 through H6</span>
      </div>

      <div class="mb-32">
        <span class="demo-class">.type-h1</span>
        <p class="type-eyebrow mt-16 mb-12">Display · Playfair Display Bold · −0.025em tracking</p>
        <h1 class="type-h1">Luminous Hair.<br><em>Extraordinary</em> You.</h1>
        <p class="demo-meta mt-8">clamp(2.75rem, 6vw, 4.5rem) · weight 700 · line-height 1.1</p>
      </div>

      <div class="mb-32" style="padding-top:24px; border-top:1px solid var(--demo-border);">
        <span class="demo-class">.type-h2</span>
        <p class="type-eyebrow mt-16 mb-12">Section · Playfair Display Bold · −0.02em tracking</p>
        <h2 class="type-h2">Where Science <em>Meets</em> Beauty</h2>
        <p class="demo-meta mt-8">clamp(2rem, 4.5vw, 3.5rem) · weight 700 · line-height 1.1</p>
      </div>

      <div class="mb-32" style="padding-top:24px; border-top:1px solid var(--demo-border);">
        <span class="demo-class">.type-h3</span>
        <p class="type-eyebrow mt-16 mb-12">Sub-section · Playfair Display Semibold · −0.015em</p>
        <h3 class="type-h3">Boto-Plex Transformation System</h3>
        <p class="demo-meta mt-8">clamp(1.625rem, 3.2vw, 2.5rem) · weight 600 · line-height 1.25</p>
      </div>

      <div class="mb-32" style="padding-top:24px; border-top:1px solid var(--demo-border);">
        <span class="demo-class">.type-h4</span>
        <p class="type-eyebrow mt-16 mb-12">Card title · Playfair Display Semibold · −0.01em</p>
        <h4 class="type-h4">Advanced Nano Delivery Technology</h4>
        <p class="demo-meta mt-8">clamp(1.375rem, 2.2vw, 2rem) · weight 600 · line-height 1.25</p>
      </div>

      <div class="mb-32" style="padding-top:24px; border-top:1px solid var(--demo-border);">
        <span class="demo-class">.type-h5</span>
        <p class="type-eyebrow mt-16 mb-12">List heading · Inter Semibold · switches to sans-serif</p>
        <h5 class="type-h5">Premium Keratin &amp; Collagen Ingredients</h5>
        <p class="demo-meta mt-8">1.5rem / 24px · weight 600 · line-height 1.25</p>
      </div>

      <div style="padding-top:24px; border-top:1px solid var(--demo-border);">
        <span class="demo-class">.type-h6</span>
        <p class="type-eyebrow mt-16 mb-12">Micro heading · Inter Semibold · wide tracking</p>
        <h6 class="type-h6">100% Formaldehyde Free — All Hair Types</h6>
        <p class="demo-meta mt-8">1.125rem / 18px · weight 600 · letter-spacing 0.04em</p>
      </div>
    </section>


    <!-- ════════════════════════════════════════════════════════
         §4  BODY TEXT
         ════════════════════════════════════════════════════════ -->
    <section class="demo-section">
      <div class="demo-section-header">
        <span class="demo-section-num">04</span>
        <span class="demo-section-title">Body Text — Lead, Body, Body SM</span>
      </div>

      <div class="demo-row">
        <span class="demo-row-label">Lead</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-lead</span>
          <p class="type-lead mt-12 typo-measure">NOYA Professional is built on the belief that every hair type deserves transformative, professional-grade results. Our formulations harness advanced nanotechnology to deliver ingredients deep into the hair shaft.</p>
          <p class="demo-meta mt-8">16–20px · Inter 300 · line-height 1.75 · use for intro paragraphs</p>
        </div>
      </div>

      <div class="demo-row">
        <span class="demo-row-label">Body</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-body</span>
          <p class="type-body mt-12 typo-measure">Revolutionary treatments crafted with advanced nanotechnology, hydrolyzed keratin, collagen and milk protein — delivering transformative results with zero compromise. Developed for professional salon use and thoughtfully crafted for home maintenance.</p>
          <p class="type-body typo-measure">The Boto-Plex procedure seals the cuticle for unparalleled shine while the Nano-Plex system repairs from within. Both are 100% formaldehyde free, sulphate free and safe for all hair types.</p>
          <p class="demo-meta mt-8">16px · Inter 400 · line-height 1.75 · default paragraph</p>
        </div>
      </div>

      <div class="demo-row">
        <span class="demo-row-label">Body SM</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-body-sm</span>
          <p class="type-body-sm mt-12 typo-measure">After 24 hours, use NOYA Replenishing Shampoo and Conditioner. Avoid contact with water for the first 24 hours post-treatment. Reserve Clarifying Shampoo for pre-treatment use only — not for daily washing.</p>
          <p class="demo-meta mt-8">14px · Inter 400 · line-height 1.6 · secondary copy, fine print</p>
        </div>
      </div>
    </section>


    <!-- ════════════════════════════════════════════════════════
         §5  EDITORIAL & ACCENT
         ════════════════════════════════════════════════════════ -->
    <section class="demo-section">
      <div class="demo-section-header">
        <span class="demo-section-num">05</span>
        <span class="demo-section-title">Editorial &amp; Accent — Eyebrow, Editorial, Quote, Tagline</span>
      </div>

      <div class="demo-row mb-28">
        <span class="demo-row-label">Eyebrow</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-eyebrow</span>
          <p class="type-eyebrow mt-12">Professional Treatment Range</p>
          <p class="demo-meta mt-8">10px · Inter 600 · letter-spacing 0.16em · uppercase · accent colour</p>
        </div>
      </div>

      <!-- Eyebrow + heading pairing as used in production -->
      <div style="padding:28px; background:var(--demo-surface); border:1px solid var(--demo-border); border-radius:var(--demo-radius); margin-bottom:28px;">
        <p class="type-eyebrow mb-12">Our Philosophy</p>
        <h2 class="type-h2">Where science<br>meets <em>beauty</em></h2>
        <p class="type-caption mt-8" style="color:var(--demo-muted);">← Eyebrow + H2 — standard section opener pattern</p>
      </div>

      <div class="demo-row mb-28">
        <span class="demo-row-label">Editorial</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-editorial</span>
          <p class="type-editorial mt-12 typo-measure">"Repair at the molecular level, not just coating the surface."</p>
          <p class="demo-meta mt-8">30–48px · Cormorant Garamond 300 italic · use sparingly</p>
        </div>
      </div>

      <div class="demo-row mb-28">
        <span class="demo-row-label">Quote</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-quote</span>
          <blockquote class="type-quote mt-12 typo-measure">"Hair is not just about appearance — it is the crown you never take off. We engineer every product to make yours extraordinary."</blockquote>
          <p class="demo-meta mt-8">20–30px · Playfair Display 400 italic · testimonials, pull quotes</p>
        </div>
      </div>

      <div class="demo-row">
        <span class="demo-row-label">Tagline</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-tagline</span>
          <p class="type-tagline mt-12">Complete Hair Solution — Thinking Beyond The Box</p>
          <p class="demo-meta mt-8">24–40px · Cormorant Garamond 400 italic · brand phrases</p>
        </div>
      </div>
    </section>


    <!-- ════════════════════════════════════════════════════════
         §6  UI TEXT
         ════════════════════════════════════════════════════════ -->
    <section class="demo-section">
      <div class="demo-section-header">
        <span class="demo-section-num">06</span>
        <span class="demo-section-title">UI Text — Labels, Captions, Tags, Price, Nav</span>
      </div>

      <div class="demo-row">
        <span class="demo-row-label">Label</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-label</span>
          <p class="type-label mt-12">Pre-Treatment · Professional Salon Use Only</p>
          <p class="demo-meta mt-8">10px · Inter 600 · letter-spacing 0.14em · uppercase · form labels, metadata</p>
        </div>
      </div>

      <div class="demo-row">
        <span class="demo-row-label">Caption</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-caption</span>
          <p class="type-caption mt-12">*For optimal results, follow the professional application guide included with each treatment kit. Not for daily use.</p>
          <p class="demo-meta mt-8">12px · Inter 400 · muted colour · image captions, footnotes</p>
        </div>
      </div>

      <div class="demo-row">
        <span class="demo-row-label">Tag</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-tag</span>
          <div style="display:flex; gap:8px; flex-wrap:wrap; margin-top:12px;">
            <span class="type-tag" style="background:#e4f5f0; color:#3b8b70; padding:5px 12px; border-radius:100px;">Formaldehyde Free</span>
            <span class="type-tag" style="background:#fdf0f0; color:#c97070; padding:5px 12px; border-radius:100px;">Pre-Treatment</span>
            <span class="type-tag" style="background:#f5edd4; color:#9c7845; padding:5px 12px; border-radius:100px;">All Hair Types</span>
            <span class="type-tag" style="background:#eef4e4; color:#607848; padding:5px 12px; border-radius:100px;">Sulphate Free</span>
          </div>
          <p class="demo-meta mt-8">10px · Inter 600 · letter-spacing 0.1em · uppercase · product badges</p>
        </div>
      </div>

      <div class="demo-row">
        <span class="demo-row-label">Price</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-price</span>
          <p class="type-price mt-12">₹ 2,499</p>
          <p class="demo-meta mt-8">28–40px · Playfair Display 400 italic · tabular-nums · product pricing</p>
        </div>
      </div>

      <div class="demo-row">
        <span class="demo-row-label">Nav</span>
        <div class="demo-row-content">
          <span class="demo-class">.type-nav</span>
          <div style="display:flex; gap:28px; flex-wrap:wrap; margin-top:12px;">
            <a href="#" class="type-nav" style="text-decoration:none; color:var(--typo-c-dark);">Products</a>
            <a href="#" class="type-nav" style="text-decoration:none; color:var(--typo-c-dark);">Treatments</a>
            <a href="#" class="type-nav" style="text-decoration:none; color:var(--typo-c-dark);">Home Care</a>
            <a href="#" class="type-nav" style="text-decoration:none; color:var(--typo-c-accent);">Ingredients</a>
          </div>
          <p class="demo-meta mt-8">14px · Inter 500 · letter-spacing 0.04em · uppercase · navigation links</p>
        </div>
      </div>
    </section>


    <!-- ════════════════════════════════════════════════════════
         §7  BUTTONS
         ════════════════════════════════════════════════════════ -->
    <section class="demo-section">
      <div class="demo-section-header">
        <span class="demo-section-num">07</span>
        <span class="demo-section-title">Button Typography — 3 Sizes × 3 Styles</span>
      </div>

      <p class="type-label mb-16">Primary — solid fill</p>
      <div class="demo-btn-row mb-24">
        <a href="#" class="demo-btn demo-btn-primary type-btn-lg">Explore Products</a>
        <a href="#" class="demo-btn demo-btn-primary type-btn">Book Treatment</a>
        <a href="#" class="demo-btn demo-btn-primary type-btn-sm">Contact Us</a>
      </div>

      <p class="type-label mb-16">Secondary — outlined</p>
      <div class="demo-btn-row mb-24">
        <a href="#" class="demo-btn demo-btn-outline type-btn-lg">View Treatments</a>
        <a href="#" class="demo-btn demo-btn-outline type-btn">Learn More</a>
        <a href="#" class="demo-btn demo-btn-outline type-btn-sm">Details</a>
      </div>

      <p class="type-label mb-16">Ghost &amp; Pill</p>
      <div class="demo-btn-row mb-24">
        <a href="#" class="demo-btn demo-btn-ghost type-btn-lg">Read our story →</a>
        <a href="#" class="demo-btn demo-btn-pill type-btn">Jump on a call</a>
        <a href="#" class="demo-btn demo-btn-sm-pill type-btn-sm">Sign up free</a>
      </div>

      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(190px,1fr)); gap:14px; margin-top:8px;">
        <div style="padding:16px; background:var(--demo-code); border-radius:8px;"><p class="type-label mb-8">type-btn-lg</p><p class="type-caption">16px · Inter 600 · ls 0.04em</p></div>
        <div style="padding:16px; background:var(--demo-code); border-radius:8px;"><p class="type-label mb-8">type-btn</p><p class="type-caption">14px · Inter 600 · ls 0.04em</p></div>
        <div style="padding:16px; background:var(--demo-code); border-radius:8px;"><p class="type-label mb-8">type-btn-sm</p><p class="type-caption">12px · Inter 600 · ls 0.08em · uppercase</p></div>
      </div>
    </section>


    <!-- ════════════════════════════════════════════════════════
         §8  IN CONTEXT
         ════════════════════════════════════════════════════════ -->
    <section class="demo-section">
      <div class="demo-section-header">
        <span class="demo-section-num">08</span>
        <span class="demo-section-title">In Context — Real-World Usage Examples</span>
      </div>

      <div class="demo-context-grid">

        <!-- Hero snippet — full width -->
        <div class="demo-ctx-card demo-ctx-card--dark" style="grid-column:1/-1;">
          <p class="type-eyebrow" style="color:rgba(201,146,42,.8);">Complete Hair Solution</p>
          <h1 class="type-h1 mt-16" style="color:#fff; font-size:clamp(2rem,5vw,3.5rem);">Thinking <em style="color:#c9922a;">Beyond</em><br>The Box</h1>
          <p class="type-lead mt-16 typo-measure" style="color:rgba(255,255,255,.55);">Revolutionary treatments crafted with advanced nanotechnology, hydrolyzed keratin, collagen and milk protein — delivering transformative results with zero compromise.</p>
          <div style="display:flex; align-items:center; gap:12px; flex-wrap:wrap; margin-top:24px;">
            <a href="index.php#products" class="demo-btn demo-btn-pill type-btn" style="background:#c9922a; color:#fff; padding:13px 28px; border-radius:10px;">Explore Products</a>
            <a href="index.php#treatments" class="demo-btn demo-btn-ghost type-btn" style="color:rgba(255,255,255,.65);">View Treatments →</a>
          </div>
          <p class="type-caption mt-16" style="color:rgba(255,255,255,.2);">← type-eyebrow + type-h1 + type-lead + type-btn</p>
        </div>

        <!-- Product card -->
        <div class="demo-ctx-card">
          <span class="type-tag" style="background:#e4f5f0; color:#3b8b70; padding:5px 12px; border-radius:100px;">Signature Treatment</span>
          <h4 class="type-h4 mt-16">Boto-Plex Treatment</h4>
          <p class="type-body-sm mt-8">Revolutionary procedure utilizing advanced nanotechnology with hydrolyzed keratin, collagen and milk protein.</p>
          <div class="demo-ctx-sep"></div>
          <p class="type-price" style="font-size:1.75rem;">₹ 2,499</p>
          <p class="type-caption mt-4">Single session · All hair types</p>
          <a href="index.php#treatments" class="demo-btn demo-btn-primary type-btn mt-16" style="padding:11px 22px; border-radius:8px;">Learn More</a>
          <p class="type-caption mt-24" style="color:var(--demo-muted);">← type-tag + type-h4 + type-body-sm + type-price + type-btn</p>
        </div>

        <!-- Testimonial -->
        <div class="demo-ctx-card demo-ctx-card--accent">
          <p class="type-eyebrow" style="color:#9c7845;">Client Story</p>
          <blockquote class="type-quote mt-16" style="font-size:1.125rem; color:#2e2012;">"My hair has never felt this silky — even after years of damage. The Boto-Plex treatment was genuinely transformative."</blockquote>
          <div class="demo-ctx-sep" style="background:rgba(201,146,42,.3);"></div>
          <p class="type-h6" style="color:#2e2012;">Priya Sharma</p>
          <p class="type-caption mt-4" style="color:#9c7845;">Mumbai — NOYA Certified Salon</p>
          <p class="type-caption mt-24" style="color:rgba(156,120,69,.6);">← type-eyebrow + type-quote + type-h6 + type-caption</p>
        </div>

        <!-- Ingredient card -->
        <div class="demo-ctx-card">
          <p class="type-eyebrow">Key Ingredient</p>
          <h3 class="type-h3 mt-12" style="font-size:1.625rem;">Hydrolyzed<br>Keratin</h3>
          <p class="type-body mt-12">The building block of hair structure. Penetrates the cortex to reinforce the hair's natural protein matrix, restoring strength and resilience from within.</p>
          <div class="demo-ctx-sep"></div>
          <div style="display:flex; gap:8px; flex-wrap:wrap;">
            <span class="type-tag" style="background:#f5edd4; color:#9c7845; padding:5px 12px; border-radius:100px;">Structural Repair</span>
            <span class="type-tag" style="background:#eef4e4; color:#607848; padding:5px 12px; border-radius:100px;">Cortex-Deep</span>
          </div>
          <p class="type-caption mt-24" style="color:var(--demo-muted);">← type-eyebrow + type-h3 + type-body + type-tag</p>
        </div>

        <!-- Section header mock — 2-column wide -->
        <div class="demo-ctx-card demo-ctx-card--dark" style="grid-column:span 2;">
          <div style="max-width:540px; margin:0 auto; text-align:center; padding:8px 0 20px;">
            <p class="type-eyebrow typo-center" style="color:rgba(201,146,42,.8);">Step-by-Step Guide</p>
            <h2 class="type-h2 mt-16" style="color:#fff; font-size:clamp(1.75rem,4vw,2.75rem);">Treatment <em style="color:#c9922a;">Protocols</em></h2>
            <p class="type-lead mt-16 typo-center" style="color:rgba(255,255,255,.45); max-width:460px; margin-left:auto; margin-right:auto;">Professional-grade procedures designed for certified salon use, achievable in a single session for lasting transformation.</p>
            <div style="display:flex; gap:8px; justify-content:center; flex-wrap:wrap; margin-top:20px;">
              <a href="index.php#treatments" class="demo-btn demo-btn-sm-pill type-btn-sm" style="background:rgba(255,255,255,.08); color:rgba(255,255,255,.7); border-color:rgba(255,255,255,.15);">Boto-Plex</a>
              <a href="index.php#treatments" class="demo-btn demo-btn-sm-pill type-btn-sm" style="background:rgba(201,146,42,.15); color:#c9922a; border-color:rgba(201,146,42,.3);">Nano-Plex</a>
              <a href="index.php#treatments" class="demo-btn demo-btn-sm-pill type-btn-sm" style="background:rgba(255,255,255,.08); color:rgba(255,255,255,.7); border-color:rgba(255,255,255,.15);">Nanoplastia</a>
            </div>
          </div>
          <p class="type-caption typo-center mt-12" style="color:rgba(255,255,255,.18);">← type-eyebrow + type-h2 + type-lead + type-btn-sm tabs</p>
        </div>

      </div>
    </section>


    <!-- ════════════════════════════════════════════════════════
         §9  COLOR TOKENS
         ════════════════════════════════════════════════════════ -->
    <section class="demo-section">
      <div class="demo-section-header">
        <span class="demo-section-num">09</span>
        <span class="demo-section-title">Text Color Tokens</span>
      </div>

      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(165px,1fr)); gap:14px;">
        <?php
        $colors = [
          ['hex' => '#1a1208', 'label' => 'Ink',       'var' => '--typo-c-ink',    'use' => 'Display & H1–H4 headings'],
          ['hex' => '#2e2416', 'label' => 'Dark',      'var' => '--typo-c-dark',   'use' => 'H5–H6, body paragraphs'],
          ['hex' => '#6b5d4f', 'label' => 'Mid',       'var' => '--typo-c-mid',    'use' => 'Lead text, secondary copy'],
          ['hex' => '#9c8e82', 'label' => 'Muted',     'var' => '--typo-c-muted',  'use' => 'Captions, placeholders'],
          ['hex' => '#c4b5a8', 'label' => 'Light',     'var' => '--typo-c-light',  'use' => 'Decorative, disabled'],
          ['hex' => '#c9922a', 'label' => 'Accent Gold','var' => '--typo-c-accent', 'use' => 'Eyebrows, links, italic em'],
        ];
        foreach ($colors as $c): ?>
          <div style="padding:18px; background:var(--demo-surface); border:1px solid var(--demo-border); border-radius:10px;">
            <div style="width:100%; height:36px; border-radius:6px; background:<?= $c['hex'] ?>; margin-bottom:12px;"></div>
            <p class="type-h6" style="color:<?= $c['hex'] ?>; font-size:14px; margin-bottom:3px;"><?= $c['label'] ?></p>
            <p class="type-caption" style="font-family:'Courier New',monospace; color:var(--demo-muted); margin-bottom:5px;"><?= $c['hex'] ?></p>
            <p class="type-caption"><?= $c['use'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>


    <!-- ════════════════════════════════════════════════════════
         §10  QUICK REFERENCE
         ════════════════════════════════════════════════════════ -->
    <section class="demo-section">
      <div class="demo-section-header">
        <span class="demo-section-num">10</span>
        <span class="demo-section-title">Quick Reference — Class Cheatsheet</span>
      </div>

      <div style="display:grid; grid-template-columns:1fr 1fr; gap:24px;">
        <div>
          <p class="type-label mb-12">Headings &amp; Display</p>
          <?php
          $h = [
            '.type-display' => 'Hero headline  · Playfair 700 · clamp 56–112px',
            '.type-h1'      => 'Page title      · Playfair 700 · clamp 44–72px',
            '.type-h2'      => 'Section title   · Playfair 700 · clamp 32–56px',
            '.type-h3'      => 'Sub-section     · Playfair 600 · clamp 26–40px',
            '.type-h4'      => 'Card title      · Playfair 600 · clamp 22–32px',
            '.type-h5'      => 'List heading    · Inter 600   · 24px',
            '.type-h6'      => 'Micro heading   · Inter 600   · 18px',
          ];
          foreach ($h as $cls => $desc): ?>
            <div style="padding:9px 0; border-bottom:1px solid var(--demo-border);">
              <span style="font-family:'Courier New',monospace; font-size:12px; color:#c9922a; font-weight:700;"><?= $cls ?></span>
              <span class="type-caption" style="display:block; margin-top:2px;"><?= $desc ?></span>
            </div>
          <?php endforeach; ?>
        </div>

        <div>
          <p class="type-label mb-12">Body, UI &amp; Editorial</p>
          <?php
          $b = [
            '.type-eyebrow'   => '10px · Inter 600 · ls 0.16em · uppercase · accent',
            '.type-editorial' => '30–48px · Cormorant Garamond 300 italic',
            '.type-quote'     => '20–30px · Playfair 400 italic · testimonials',
            '.type-tagline'   => '24–40px · Cormorant 400 italic · brand phrases',
            '.type-lead'      => '16–20px · Inter 300 · lh 1.75',
            '.type-body'      => '16px    · Inter 400 · lh 1.75',
            '.type-body-sm'   => '14px    · Inter 400 · lh 1.6',
            '.type-label'     => '10px    · Inter 600 · ls 0.14em · uppercase',
            '.type-caption'   => '12px    · Inter 400 · muted',
            '.type-tag'       => '10px    · Inter 600 · ls 0.1em · badges',
            '.type-price'     => '28–40px · Playfair 400 italic · tabular-nums',
            '.type-nav'       => '14px    · Inter 500 · ls 0.04em',
            '.type-btn'       => '14px    · Inter 600 · ls 0.04em',
            '.type-btn-lg'    => '16px    · Inter 600 · ls 0.04em',
            '.type-btn-sm'    => '12px    · Inter 600 · ls 0.08em · uppercase',
          ];
          foreach ($b as $cls => $desc): ?>
            <div style="padding:9px 0; border-bottom:1px solid var(--demo-border);">
              <span style="font-family:'Courier New',monospace; font-size:12px; color:#c9922a; font-weight:700;"><?= $cls ?></span>
              <span class="type-caption" style="display:block; margin-top:2px;"><?= $desc ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

  </div><!-- /.demo-page -->
</div><!-- /.typo-page-wrap -->

<?php include __DIR__ . '/includes/footer.php'; ?>
