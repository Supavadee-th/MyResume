<?php
/**
 * Featured Projects Section & Modal Component
 * Supavadee Junyakul — Personal Resume & Portfolio Website
 */
$aiPhotos = getGalleryImages('AI-Assisted Diabetic');
$smartFarmPhotos = getGalleryImages('Smart Farm');
$ebikePhotos = getGalleryImages('E-Bike');

$aiCover = 'assets/images/AI-Assisted%20Diabetic/NSC2026.jpg';
$smartFarmCover = $smartFarmPhotos[0] ?? '';
$ebikeCover = $ebikePhotos[0] ?? '';
?>
<!-- Section 05 — Featured Projects -->
<section class="section" id="projects">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <span>Portfolio Highlights</span>
      </div>
      <h2 class="section-title">Featured <span class="highlight">Projects</span></h2>
      <p class="section-subtitle">Selected projects combining software, intelligent systems, and hardware integration.</p>
    </div>

    <div class="projects-grid">
      <!-- Project 01: AI Neuropathy Screening (Featured) -->
      <article class="project-card featured-project">
        <div class="project-featured-ribbon">
          <span class="badge badge-accent">NSC 2026 · 4th Place Award</span>
        </div>

        <div class="project-visual-header project-cover-media" <?php if (!empty($aiPhotos)): ?>data-gallery-title="AI-Assisted Diabetic Neuropathy Screening Application" data-gallery-images="<?php echo htmlspecialchars(json_encode($aiPhotos), ENT_QUOTES, 'UTF-8'); ?>" role="button" tabindex="0" aria-label="View AI Neuropathy Screening project photos"<?php endif; ?>>
          <?php if (!empty($aiCover)): ?>
            <img src="<?php echo htmlspecialchars($aiCover); ?>" alt="AI-Assisted Diabetic Neuropathy Screening Application" class="project-cover-img" loading="lazy">
            <span class="illustration-caption">Click to view <?php echo count($aiPhotos); ?> photos</span>
          <?php endif; ?>
        </div>

        <div class="project-body">
          <div class="project-meta">
            <span class="project-category">Artificial Intelligence · Healthcare</span>
            <span class="project-year">2026</span>
          </div>

          <h3 class="project-title">AI-Assisted Diabetic Neuropathy Screening Application</h3>

          <p class="project-desc">
            A telehealth mobile application for diabetic neuropathy screening that received a development grant and won the 4th Place Award at the National Software Contest 2026 (NSC 2026).
          </p>

          <div class="project-contributions">
            <h4>Key Contributions:</h4>
            <ul>
              <li>Co-developed a telehealth mobile app with hierarchical cloud architecture.</li>
              <li>Integrated AI vision models (CNN, YOLOv8) and Confusion Matrix evaluation.</li>
              <li>Implemented dynamic QR code serialization and automated PDF medical reports.</li>
            </ul>
          </div>

          <div class="project-tags">
            <span class="tag">Flutter &amp; Dart</span>
            <span class="tag">Firebase</span>
            <span class="tag">Python</span>
            <span class="tag">YOLOv8 &amp; CNN</span>
            <span class="tag">OpenCV &amp; TensorFlow</span>
          </div>

          <div class="project-footer">
            <button type="button" class="btn btn-primary btn-sm" data-modal-target="project-ai-neuropathy">
              <span>View Details</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            </button>
            <?php if (!empty($aiPhotos)): ?>
              <button type="button" class="btn btn-photos btn-sm" data-gallery-title="AI-Assisted Diabetic Neuropathy Screening Application" data-gallery-images="<?php echo htmlspecialchars(json_encode($aiPhotos), ENT_QUOTES, 'UTF-8'); ?>">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                <span>View Photos (<?php echo count($aiPhotos); ?>)</span>
              </button>
            <?php endif; ?>
            <a href="https://github.com/Supavadee-th" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm" title="View developer profile on GitHub">
              <span>GitHub</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
          </div>
        </div>
      </article>

      <!-- Project 02: Smart Farm IoT & Fuzzy Logic -->
      <article class="project-card">
        <div class="project-visual-header project-cover-media" <?php if (!empty($smartFarmPhotos)): ?>data-gallery-title="Smart Farm Environmental Monitoring & Data Logging System" data-gallery-images="<?php echo htmlspecialchars(json_encode($smartFarmPhotos), ENT_QUOTES, 'UTF-8'); ?>" role="button" tabindex="0" aria-label="View Smart Farm project photos"<?php endif; ?>>
          <?php if (!empty($smartFarmCover)): ?>
            <img src="<?php echo htmlspecialchars($smartFarmCover); ?>" alt="Smart Farm Environmental Monitoring System" class="project-cover-img" loading="lazy">
            <span class="illustration-caption">Click to view <?php echo count($smartFarmPhotos); ?> photos</span>
          <?php endif; ?>
        </div>

        <div class="project-body">
          <div class="project-meta">
            <span class="project-category">IoT · Smart Agriculture · Automation</span>
            <span class="project-year">2025</span>
          </div>

          <h3 class="project-title">Smart Farm Environmental Monitoring &amp; Data Logging System</h3>

          <p class="project-desc">
            An automated irrigation and environmental monitoring system designed to optimize water usage through ESP32 and Fuzzy Logic Control.
          </p>

          <div class="project-contributions">
            <h4>Key Contributions:</h4>
            <ul>
              <li>Built an automated irrigation system using ESP32 and Fuzzy Logic.</li>
              <li>Integrated DHT22 and LDR sensors for environmental monitoring.</li>
              <li>Implemented real-time environmental data logging.</li>
            </ul>
          </div>

          <div class="project-tags">
            <span class="tag">ESP32</span>
            <span class="tag">DHT22</span>
            <span class="tag">LDR</span>
            <span class="tag">Fuzzy Logic</span>
            <span class="tag">IoT</span>
            <span class="tag">Wokwi</span>
          </div>

          <div class="project-footer">
            <button type="button" class="btn btn-primary btn-sm" data-modal-target="project-smart-farm">
              <span>View Details</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            </button>
            <?php if (!empty($smartFarmPhotos)): ?>
              <button type="button" class="btn btn-photos btn-sm" data-gallery-title="Smart Farm Environmental Monitoring & Data Logging System" data-gallery-images="<?php echo htmlspecialchars(json_encode($smartFarmPhotos), ENT_QUOTES, 'UTF-8'); ?>">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                <span>View Photos (<?php echo count($smartFarmPhotos); ?>)</span>
              </button>
            <?php endif; ?>
            <a href="https://github.com/Supavadee-th" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm" title="View developer profile on GitHub">
              <span>GitHub</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
          </div>
        </div>
      </article>

      <!-- Project 03: Electric Bicycle (E-Bike) Control System -->
      <article class="project-card">
        <div class="project-visual-header project-cover-media" <?php if (!empty($ebikePhotos)): ?>data-gallery-title="Electric Bicycle (E-Bike) Control System" data-gallery-images="<?php echo htmlspecialchars(json_encode($ebikePhotos), ENT_QUOTES, 'UTF-8'); ?>" role="button" tabindex="0" aria-label="View E-Bike project photos"<?php endif; ?>>
          <?php if (!empty($ebikeCover)): ?>
            <img src="<?php echo htmlspecialchars($ebikeCover); ?>" alt="Electric Bicycle (E-Bike) Control System" class="project-cover-img" loading="lazy">
            <span class="illustration-caption">Click to view <?php echo count($ebikePhotos); ?> photos</span>
          <?php endif; ?>
        </div>

        <div class="project-body">
          <div class="project-meta">
            <span class="project-category">Electronics · Embedded Control</span>
            <span class="project-year">2023</span>
          </div>

          <h3 class="project-title">Electric Bicycle (E-Bike) Control System</h3>

          <p class="project-desc">
            A customized electronic control and battery management system developed to convert a standard bicycle into an electric bicycle.
          </p>

          <div class="project-contributions">
            <h4>Key Contributions:</h4>
            <ul>
              <li>Developed a customized electronic control circuit and battery management system.</li>
              <li>Integrated a DC motor with an electronic controller.</li>
              <li>Performed hardware troubleshooting to support performance and safety.</li>
            </ul>
          </div>

          <div class="project-tags">
            <span class="tag">Electronics</span>
            <span class="tag">DC Motor</span>
            <span class="tag">Electronic Controller</span>
            <span class="tag">Battery Management</span>
            <span class="tag">Troubleshooting</span>
          </div>

          <div class="project-footer">
            <button type="button" class="btn btn-primary btn-sm" data-modal-target="project-ebike">
              <span>View Details</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            </button>
            <?php if (!empty($ebikePhotos)): ?>
              <button type="button" class="btn btn-photos btn-sm" data-gallery-title="Electric Bicycle (E-Bike) Control System" data-gallery-images="<?php echo htmlspecialchars(json_encode($ebikePhotos), ENT_QUOTES, 'UTF-8'); ?>">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                <span>View Photos (<?php echo count($ebikePhotos); ?>)</span>
              </button>
            <?php endif; ?>
            <a href="https://github.com/Supavadee-th" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm" title="View developer profile on GitHub">
              <span>GitHub</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Accessible Project Details Modal Dialog -->
<div class="modal-overlay" id="projectModal" role="dialog" aria-modal="true" aria-hidden="true" aria-labelledby="modalTitle">
  <div class="modal-window">
    <div class="modal-header">
      <div class="modal-title-group">
        <h2 id="modalTitle">Project Title</h2>
        <div class="modal-subtitle">
          <span id="modalCategory" class="badge badge-primary">Category</span>
          <span>•</span>
          <span id="modalYear">Year</span>
        </div>
      </div>
      <button type="button" class="modal-close-btn" id="modalCloseBtn" aria-label="Close project details">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>

    <div class="modal-content-area">
      <!-- Section: Overview -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
          Overview
        </h3>
        <p id="modalOverview" style="font-size:0.9375rem; line-height:1.7;"></p>
      </div>

      <!-- Section: Objectives -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="12 6 12 12 16 14"/></svg>
          Objectives
        </h3>
        <ul id="modalObjectives" style="padding-left:20px; font-size:0.9375rem; line-height:1.6; color:var(--color-text-muted);"></ul>
      </div>

      <!-- Section: Key Contributions -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          My Contributions
        </h3>
        <ul id="modalContributions" style="padding-left:20px; font-size:0.9375rem; line-height:1.6; color:var(--color-text-muted);"></ul>
      </div>

      <!-- Section: Technologies Used -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/></svg>
          Technologies Used
        </h3>
        <div id="modalTechTags" class="project-tags"></div>
      </div>

      <!-- Section: System Architecture & Workflow -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/></svg>
          System Architecture &amp; Workflow
        </h3>
        <div id="modalArchitecture" class="modal-architecture-diagram"></div>
      </div>

      <!-- Section: Challenges and Learnings -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          Technical Learnings
        </h3>
        <p id="modalLearnings" style="font-size:0.9375rem; line-height:1.7; color:var(--color-text-muted);"></p>
      </div>
    </div>
  </div>
</div>
