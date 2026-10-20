<?php
/**
 * Hero Section Component
 * Supavadee Junyakul — Personal Resume & Portfolio Website
 */
$resumePdf = 'assets/files/Resume_Supavadee_Junyakul.pdf';
$portfolioPdf = 'assets/files/Portfolio_Supavadee_Junyakul.pdf';
?>
<!-- Section 01 — Hero / Introduction -->
<section class="hero-section" id="home">
  <div class="container">
    <div class="hero-grid">
      <!-- Left Column: Introduction & CTAs -->
      <div class="hero-content">
        <div class="hero-eyebrow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          <span>COMPUTER SCIENCE STUDENT · SOFTWARE &amp; IoT</span>
        </div>

        <h1 class="hero-title">
          Hi, I'm <span class="name-highlight">Supavadee Junyakul</span>
        </h1>

        <div class="hero-headline">
          Bridging <span class="accent-mark">Software Development</span> and Hardware Innovation.
        </div>

        <p class="hero-desc">
          Motivated fourth-year Computer Science student with a background in Electronics Technology. Interested in Software Engineering for Automation and IoT Development, with hands-on experience in web development, embedded systems, sensor integration, and AI-assisted applications.
        </p>

        <!-- Internship Highlight Callout -->
        <div class="hero-internship-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
          <div>
            <strong>Internship Objective:</strong> Seeking a 4-month internship in Software Engineering (Automation) or IoT Development.
          </div>
        </div>

        <!-- Call to Actions -->
        <div class="hero-cta-group">
          <a href="#projects" class="btn btn-primary">
            <span>Explore My Projects</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>

          <a href="#contact" class="btn btn-accent">
            <span>Contact Me</span>
          </a>

          <a href="<?php echo htmlspecialchars($resumePdf); ?>" download="Resume_Supavadee_Junyakul.pdf" class="btn btn-secondary">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            <span>Resume PDF</span>
          </a>

          <a href="<?php echo htmlspecialchars($portfolioPdf); ?>" download="Portfolio_Supavadee_Junyakul.pdf" class="btn btn-secondary">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            <span>Portfolio PDF</span>
          </a>
        </div>

        <!-- Social & Verified Profile Links -->
        <div class="hero-social-links">
          <span>Verified Profile:</span>
          <a href="https://github.com/Supavadee-th" target="_blank" rel="noopener noreferrer" class="hero-social-btn" title="Visit Supavadee's GitHub Profile">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
            <span>github.com/Supavadee-th</span>
          </a>
        </div>
      </div>

      <!-- Right Column: Visual Frame with Real Profile Photo & Electronics Badges -->
      <div class="hero-visual">
        <div class="hero-card-frame">
          <!-- Floating Chip 1: ESP32 / IoT -->
          <div class="floating-chip chip-esp32">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
            <span>ESP32 &amp; IoT</span>
          </div>

          <!-- Profile Image with Circuit Accent -->
          <div class="hero-image-wrapper">
            <img src="assets/images/profile.png" alt="Supavadee Junyakul — Computer Science Student" onerror="this.onerror=null; this.parentElement.innerHTML='<div style=\'text-align:center; padding:40px; color:var(--color-primary);\'><svg width=\'64\' height=\'64\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'1.5\' style=\'margin:0 auto 12px;\'><rect x=\'4\' y=\'4\' width=\'16\' height=\'16\' rx=\'2\'/><path d=\'M9 9h6v6H9z\'/></svg><strong>Supavadee Junyakul</strong><p style=\'font-size:0.8125rem; color:var(--color-text-muted); margin-top:4px;\'>Software &amp; IoT</p></div>';">
            
            <!-- Live Availability Tag -->
            <div class="hero-tech-badge">
              <div>
                <span class="status-dot"></span>
                <span class="tech-role">Internship Candidate</span>
              </div>
              <span class="tech-title">4-Month Period</span>
            </div>
          </div>

          <!-- Floating Chip 2: AI & Computer Vision -->
          <div class="floating-chip chip-ai">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><circle cx="12" cy="12" r="3"/></svg>
            <span>AI · YOLOv8 · CNN</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Full-Width 3 Highlight Cards Row -->
    <div class="hero-highlights">
      <div class="highlight-card">
        <span class="highlight-label">Academic Excellence</span>
        <div class="highlight-value">GPA: 3.94 <span style="font-size:0.875rem; font-weight:600; color:var(--color-text-muted);">/ 4.00</span></div>
        <span style="font-size:0.75rem; color:var(--color-text-muted); font-weight:500;">B.Sc. Computer Science (Electronics Cert: 3.96)</span>
      </div>

      <div class="highlight-card featured">
        <span class="highlight-label">National Recognition</span>
        <div class="highlight-value" style="font-size:1.125rem;">NSC 2026: 4th Place Award</div>
        <span style="font-size:0.75rem; color:var(--color-text-muted); font-weight:600;">National Finalist &amp; Grant Recipient (NSTDA)</span>
      </div>

      <div class="highlight-card">
        <span class="highlight-label">Technical Specialty</span>
        <div class="highlight-value" style="font-size:1.0625rem; color:var(--color-text);">Software · Automation · IoT</div>
        <span style="font-size:0.75rem; color:var(--color-text-muted); font-weight:500;">ESP32, Web Systems &amp; AI Vision</span>
      </div>
    </div>
  </div>
</section>
