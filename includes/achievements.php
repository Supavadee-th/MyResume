<?php
/**
 * Achievements & Activities Section Component
 * Supavadee Junyakul — Personal Resume & Portfolio Website
 */
$nscPhotos = getGalleryImages('AI-Assisted Diabetic');
$committeePhotos = getGalleryImages('Committee Member');
?>
<!-- Section 07 — Achievements & Activities -->
<section class="section" id="achievements">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <span>Honors &amp; Leadership</span>
      </div>
      <h2 class="section-title">Achievements &amp; <span class="highlight">Activities</span></h2>
      <p class="section-subtitle">National-level competition recognition, algorithmic problem solving, and faculty leadership.</p>
    </div>

    <div class="achievements-grid">
      <!-- Achievement 01: NSC 2026 (Featured Card with #FFDBFD & #C9BEFF) -->
      <div class="achievement-featured-card">
        <div class="achievement-badge-top">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <span>National Software Contest 2026 (NSC 2026)</span>
        </div>

        <h3 class="achievement-featured-title">4th Place Award Winner &amp; Grant Recipient</h3>
        <div class="achievement-org">National Science and Technology Development Agency (NSTDA)</div>

        <ul class="achievement-details-list">
          <li>
            <strong>4th Place Award (National Level):</strong> Won 4th Place in the national competition in the <em>Health, Disability, and Elderly Programs category</em>.
          </li>
          <li>
            <strong>Research &amp; Project Grant:</strong> Awarded a competitive project development grant to support intelligent health technology research and implementation.
          </li>
          <li>
            <strong>Featured Innovation:</strong> <em>AI-Assisted Diabetic Neuropathy Screening Application</em>, utilizing deep learning (CNN &amp; YOLOv8) and quantitative metric evaluation.
          </li>
        </ul>

        <div style="margin-top:auto; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px; z-index:1;">
          <div style="display:flex; align-items:center; gap:10px; flex-wrap:wrap;">
            <span class="badge badge-accent">Year: 2026</span>
            <span class="badge badge-sage">4th Place National Award</span>
          </div>
          <?php if (!empty($nscPhotos)): ?>
            <button type="button" class="btn btn-primary btn-sm" data-gallery-title="National Software Contest 2026 (NSC 2026)" data-gallery-images="<?php echo htmlspecialchars(json_encode($nscPhotos), ENT_QUOTES, 'UTF-8'); ?>">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
              <span>View Photos (<?php echo count($nscPhotos); ?>)</span>
            </button>
          <?php endif; ?>
        </div>
      </div>

      <!-- Side Stack: Achievement 02 & Activity 03 -->
      <div class="achievements-side-stack">
        <!-- Achievement 02: P.J.N.K Competition -->
        <div class="achievement-standard-card">
          <div class="achievement-header-inline">
            <span class="badge badge-sage">Competition · 2025</span>
            <span style="font-size:0.75rem; font-weight:700; color:var(--color-primary);">Programming</span>
          </div>
          <h3 class="achievement-title-standard">University Representative</h3>
          <div style="font-size:0.9375rem; font-weight:600; color:var(--color-primary); margin-bottom:8px;">
            The 46th P.J.N.K. Academic Skills Competition
          </div>
          <div class="achievement-standard-desc">
            <p>
              Represented Phetchaburi Rajabhat University in the prestigious Programming category hosted at Muban Chombueng Rajabhat University.
            </p>
            <ul>
              <li>Solved complex coding challenges and algorithm design under strict time constraints.</li>
              <li>Demonstrated solid problem-solving composure and C/C++ programming capabilities.</li>
            </ul>
          </div>
        </div>

        <!-- Activity 03: Student Club Committee -->
        <div class="achievement-standard-card">
          <div class="achievement-header-inline">
            <span class="badge badge-cream">Leadership · 2025</span>
            <span style="font-size:0.75rem; font-weight:700; color:var(--color-text-muted);">Faculty Service</span>
          </div>
          <h3 class="achievement-title-standard">Committee Member — Academic Department</h3>
          <div style="font-size:0.9375rem; font-weight:600; color:var(--color-primary); margin-bottom:8px;">
            Student Club, Faculty of Information Technology
          </div>
          <div class="achievement-standard-desc">
            <p>
              Served on the executive committee of the IT Faculty Student Club, actively driving departmental academic initiatives.
            </p>
            <ul>
              <li>Coordinated faculty-wide academic events and technical seminars.</li>
              <li>Supported smooth execution of collaborative events involving both students and professors.</li>
            </ul>
          </div>

          <?php if (!empty($committeePhotos)): ?>
            <div class="card-action-footer">
              <button type="button" class="btn btn-photos btn-sm" data-gallery-title="Committee Member — Student Club, Faculty of IT" data-gallery-images="<?php echo htmlspecialchars(json_encode($committeePhotos), ENT_QUOTES, 'UTF-8'); ?>">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                <span>View Photos (<?php echo count($committeePhotos); ?>)</span>
              </button>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
