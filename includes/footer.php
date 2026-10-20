<?php
/**
 * Footer Component
 * Supavadee Junyakul — Personal Resume & Portfolio Website
 */
$currentYear = date('Y');
?>
  </main>

  <!-- Section 11 — Footer -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand">
          <h3>SUPAVADEE</h3>
          <p>Computer Science · Software · IoT</p>
        </div>

        <nav class="footer-nav" aria-label="Footer Navigation">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#education">Education</a>
          <a href="#skills">Skills</a>
          <a href="#projects">Projects</a>
          <a href="#experience">Experience</a>
          <a href="#achievements">Achievements</a>
          <a href="#contact">Contact</a>
        </nav>
      </div>

      <div class="footer-bottom">
        <div>
          &copy; <?php echo $currentYear; ?> Supavadee Junyakul. All rights reserved.
        </div>

        <div class="footer-social-links">
          <a href="https://github.com/Supavadee-th" target="_blank" rel="noopener noreferrer" title="Supavadee on GitHub">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
            <span>GitHub</span>
          </a>
          <span>•</span>
          <a href="mailto:34supavadeejunyakul@gmail.com" title="Send email">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <span>Email</span>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Accessible Photo Gallery Lightbox Modal -->
  <div class="modal-overlay lightbox-overlay" id="photoLightboxModal" role="dialog" aria-modal="true" aria-hidden="true" aria-labelledby="lightboxTitle">
    <div class="lightbox-window">
      <div class="lightbox-header">
        <div class="lightbox-title-group">
          <h3 id="lightboxTitle">Project Photos</h3>
          <span class="lightbox-counter" id="lightboxCounter">1 / 1</span>
        </div>
        <button type="button" class="modal-close-btn" id="lightboxCloseBtn" aria-label="Close photo gallery">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>
      </div>

      <div class="lightbox-stage">
        <button type="button" class="lightbox-nav-btn prev" id="lightboxPrevBtn" aria-label="Previous photo">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg>
        </button>

        <div class="lightbox-image-container">
          <img id="lightboxMainImage" src="" alt="Project photo preview">
        </div>

        <button type="button" class="lightbox-nav-btn next" id="lightboxNextBtn" aria-label="Next photo">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
      </div>

      <div class="lightbox-thumbnails" id="lightboxThumbnails" role="tablist" aria-label="Photo thumbnails"></div>
    </div>
  </div>

  <!-- Toast Notification element for copy clipboard -->
  <div class="toast-notice" id="toastNotice" role="status" aria-live="polite">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
    <span class="toast-text">Copied to clipboard!</span>
  </div>

  <!-- Vanilla JavaScript -->
  <script src="assets/js/script.js?v=<?php echo @filemtime(dirname(__DIR__) . '/assets/js/script.js') ?: time(); ?>"></script>
</body>
</html>
