<?php
/**
 * Experience Section Component
 * Supavadee Junyakul — Personal Resume & Portfolio Website
 */
$pm25Photos = getGalleryImages('PM 2.5 Air Quality');
$maintenancePhotos = getGalleryImages('Maintenance Intern');
?>
<!-- Section 06 — Experience -->
<section class="section section-alt" id="experience">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
        <span>Practical Track Record</span>
      </div>
      <h2 class="section-title">Professional <span class="highlight">Experience</span></h2>
      <p class="section-subtitle">Practical experience in software development and engineering environments.</p>
    </div>

    <div class="experience-timeline">
      <!-- Experience 01: PM 2.5 Web Developer -->
      <div class="experience-item">
        <div class="experience-dot" aria-hidden="true"></div>
        <div class="experience-card">
          <div class="experience-header">
            <div>
              <h3 class="experience-role">Student Web Developer (Contract)</h3>
              <div class="experience-org">PM 2.5 Air Quality Monitoring Project — Phetchaburi</div>
            </div>
            <span class="experience-year">2026</span>
          </div>

          <p class="experience-desc">
            Co-developed a PM 2.5 monitoring web application for Phetchaburi, helping present environmental information through a responsive web interface.
          </p>

          <div class="experience-responsibilities">
            <h4>Key Responsibilities:</h4>
            <ul>
              <li>Co-developed the application using PHP, JavaScript, and MySQL.</li>
              <li>Built responsive interfaces using HTML, CSS, and Bootstrap.</li>
              <li>Visualized live environmental metrics clearly for local monitoring and public transparency.</li>
            </ul>
          </div>

          <div class="project-tags">
            <span class="tag">PHP</span>
            <span class="tag">JavaScript</span>
            <span class="tag">MySQL</span>
            <span class="tag">HTML</span>
            <span class="tag">CSS</span>
            <span class="tag">Bootstrap</span>
          </div>

          <?php if (!empty($pm25Photos)): ?>
            <div class="card-action-footer">
              <button type="button" class="btn btn-photos btn-sm" data-gallery-title="PM 2.5 Air Quality Monitoring Project — Phetchaburi" data-gallery-images="<?php echo htmlspecialchars(json_encode($pm25Photos), ENT_QUOTES, 'UTF-8'); ?>">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                <span>View Photos (<?php echo count($pm25Photos); ?>)</span>
              </button>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <!-- Experience 02: Maintenance Intern -->
      <div class="experience-item">
        <div class="experience-dot" aria-hidden="true"></div>
        <div class="experience-card">
          <div class="experience-header">
            <div>
              <h3 class="experience-role">Maintenance Intern</h3>
              <div class="experience-org">B.K.J Advanced Process Co., Ltd.</div>
            </div>
            <span class="experience-year">2023</span>
          </div>

          <p class="experience-desc">
            Supported factory maintenance operations through troubleshooting, repair, and preventative maintenance activities.
          </p>

          <div class="experience-responsibilities">
            <h4>Key Responsibilities:</h4>
            <ul>
              <li>Troubleshot and repaired factory tools and internal electrical systems to minimize downtime.</li>
              <li>Conducted routine preventative maintenance to support facility safety and operational efficiency.</li>
            </ul>
          </div>

          <div class="project-tags">
            <span class="tag">Electrical Systems</span>
            <span class="tag">Factory Equipment Maintenance</span>
            <span class="tag">Preventative Inspection</span>
            <span class="tag">Safety Compliance</span>
          </div>

          <?php if (!empty($maintenancePhotos)): ?>
            <div class="card-action-footer">
              <button type="button" class="btn btn-photos btn-sm" data-gallery-title="Maintenance Intern — B.K.J Advanced Process Co., Ltd." data-gallery-images="<?php echo htmlspecialchars(json_encode($maintenancePhotos), ENT_QUOTES, 'UTF-8'); ?>">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                <span>View Photos (<?php echo count($maintenancePhotos); ?>)</span>
              </button>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
