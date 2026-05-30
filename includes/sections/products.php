<?php
function section_products() { ?>
  <section class="products" id="products">
    <div class="section-inner">
      <div class="products-head">
        <div>
          <div class="eyebrow">Product Range</div>
          <h2 class="section-title">Professional <em>Treatments</em></h2>
        </div>
        <div class="filter-row">
          <button class="filter-btn active" data-filter="all">All</button>
          <button class="filter-btn" data-filter="treatment">Treatments</button>
          <button class="filter-btn" data-filter="care">Care</button>
        </div>
      </div>
      <div class="products-grid">

        <div class="product-card card-mint reveal" data-category="treatment">
          <div class="product-img">
            <img src="https://images.unsplash.com/photo-1631390162710-5855e1d8a5e0?w=600&q=80&auto=format&fit=crop" alt="Clarifying Shampoo">
            <div class="product-img-overlay"></div>
          </div>
          <div class="product-body">
            <span class="product-tag">Pre-Treatment</span>
            <div class="product-name">Clarifying Shampoo</div>
            <div class="product-desc">Deep cleans the hair follicle and removes heavy metal buildups, oil, and residue. The essential first step for all professional hair treatments.</div>
            <div class="product-pills">
              <span class="product-pill">Deep Cleansing</span>
              <span class="product-pill">Detoxify Scalp</span>
              <span class="product-pill">All Hair Types</span>
            </div>
            <a href="#treatments" class="product-link">Learn More <span class="product-link-arr"></span></a>
          </div>
        </div>

        <div class="product-card card-blue reveal" data-category="treatment">
          <div class="product-img">
            <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=600&q=80&auto=format&fit=crop" alt="Boto-Plex Treatment">
            <div class="product-img-overlay"></div>
          </div>
          <div class="product-body">
            <span class="product-tag">Signature Treatment</span>
            <div class="product-name">Boto-Plex Treatment</div>
            <div class="product-desc">Revolutionary procedure utilizing advanced nanotechnology with hydrolyzed keratin, collagen and milk protein. Seals the cuticle for unparalleled shine.</div>
            <div class="product-pills">
              <span class="product-pill">Formaldehyde Free</span>
              <span class="product-pill">Molecular Repair</span>
              <span class="product-pill">Frizz Control</span>
            </div>
            <a href="#treatments" class="product-link">Learn More <span class="product-link-arr"></span></a>
          </div>
        </div>

        <div class="product-card card-blush reveal" data-category="treatment">
          <div class="product-img">
            <img src="https://images.unsplash.com/photo-1607779097040-26e80aa78e66?w=600&q=80&auto=format&fit=crop" alt="Nano-Plex Treatment">
            <div class="product-img-overlay"></div>
          </div>
          <div class="product-body">
            <span class="product-tag">Advanced Treatment</span>
            <div class="product-name">Nano-Plex Treatment</div>
            <div class="product-desc">Next-generation nano-treatment infused with amino acids that penetrate deep into the hair shaft to repair, restructure and intensively soften.</div>
            <div class="product-pills">
              <span class="product-pill">Nano Delivery</span>
              <span class="product-pill">Amino Acids</span>
              <span class="product-pill">Restructuring</span>
            </div>
            <a href="#treatments" class="product-link">Learn More <span class="product-link-arr"></span></a>
          </div>
        </div>

        <div class="product-card card-sand reveal" data-category="treatment">
          <div class="product-img">
            <img src="https://images.unsplash.com/photo-1560869713-7d0a29430803?w=600&q=80&auto=format&fit=crop" alt="Nanoplastia Treatment">
            <div class="product-img-overlay"></div>
          </div>
          <div class="product-body">
            <span class="product-tag">Premium Treatment</span>
            <div class="product-name">Nanoplastia</div>
            <div class="product-desc">Luxury nano-plastia treatment combining the power of hydrolyzed collagen, keratin and milk protein for transformative, long-lasting smoothing results.</div>
            <div class="product-pills">
              <span class="product-pill">Cuticle Sealing</span>
              <span class="product-pill">Long Lasting</span>
              <span class="product-pill">Keratin + Collagen</span>
            </div>
            <a href="#treatments" class="product-link">Learn More <span class="product-link-arr"></span></a>
          </div>
        </div>

        <div class="product-card card-blush reveal" data-category="care">
          <div class="product-img">
            <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=600&q=80&auto=format&fit=crop" alt="Conditioning Mask">
            <div class="product-img-overlay"></div>
          </div>
          <div class="product-body">
            <span class="product-tag">Salon Care</span>
            <div class="product-name">Conditioning Mask</div>
            <div class="product-desc">Replenishing mask with Hyaluronic Acid and Argan Oil that restores elasticity, moisture and manageability. Repairs, nourishes, adds radiant shine.</div>
            <div class="product-pills">
              <span class="product-pill">Hyaluronic Acid</span>
              <span class="product-pill">Argan Oil</span>
              <span class="product-pill">Color Safe</span>
            </div>
            <a href="#homecare" class="product-link">Learn More <span class="product-link-arr"></span></a>
          </div>
        </div>

        <div class="product-card card-sage reveal" data-category="care">
          <div class="product-img">
            <img src="https://images.unsplash.com/photo-1612817288484-6f916006741a?w=600&q=80&auto=format&fit=crop" alt="Collagen Hair Spa">
            <div class="product-img-overlay"></div>
          </div>
          <div class="product-body">
            <span class="product-tag">Deep Incell Spa</span>
            <div class="product-name">Collagen Hair Spa</div>
            <div class="product-desc">Biotin &amp; Collagen rich spa enriched with Wheat Protein, Vitamin-E and Flaxseed Oil. Promotes growth, restores shine and strengthens from root to tip.</div>
            <div class="product-pills">
              <span class="product-pill">Wheat Protein</span>
              <span class="product-pill">Vitamin-E</span>
              <span class="product-pill">Sulfate Free</span>
            </div>
            <a href="#homecare" class="product-link">Learn More <span class="product-link-arr"></span></a>
          </div>
        </div>

      </div>
    </div>
  </section>
<?php }
