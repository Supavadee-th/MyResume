/**
 * Supavadee Junyakul — Personal Resume & Portfolio Website
 * Vanilla JavaScript (No Frameworks, No Dependencies)
 * Handles:
 * - Mobile navigation menu & accessibility
 * - Navbar scroll state
 * - Active navigation link highlighting (IntersectionObserver)
 * - Accessible Project Detail Modal (Esc key, focus trap & restore, backdrop click)
 * - Copy Email to Clipboard with fallback and Toast notification
 */

document.addEventListener('DOMContentLoaded', () => {
  // ----------------- 1. DOM Elements -----------------
  const navbar = document.querySelector('.navbar');
  const navHamburger = document.querySelector('.nav-hamburger');
  const navMenu = document.querySelector('.nav-menu-wrapper');
  const navLinks = document.querySelectorAll('.nav-link');
  const sections = document.querySelectorAll('section[id]');
  const copyEmailBtns = document.querySelectorAll('.copy-email-btn');
  const toastNotice = document.getElementById('toastNotice');
  const projectModal = document.getElementById('projectModal');
  const modalCloseBtn = document.getElementById('modalCloseBtn');
  const modalTitle = document.getElementById('modalTitle');
  const modalCategory = document.getElementById('modalCategory');
  const modalYear = document.getElementById('modalYear');
  const modalOverview = document.getElementById('modalOverview');
  const modalObjectives = document.getElementById('modalObjectives');
  const modalContributions = document.getElementById('modalContributions');
  const modalTechTags = document.getElementById('modalTechTags');
  const modalArchitecture = document.getElementById('modalArchitecture');
  const modalLearnings = document.getElementById('modalLearnings');

  let lastActiveElement = null;

  // ----------------- 2. Sticky Navbar Shadow -----------------
  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  }, { passive: true });

  // ----------------- 3. Mobile Hamburger Menu -----------------
  if (navHamburger && navMenu) {
    const toggleMenu = (open) => {
      const isOpen = open !== undefined ? open : !navMenu.classList.contains('open');
      navHamburger.classList.toggle('open', isOpen);
      navMenu.classList.toggle('open', isOpen);
      navHamburger.setAttribute('aria-expanded', String(isOpen));
      document.body.style.overflow = isOpen ? 'hidden' : '';
    };

    navHamburger.addEventListener('click', () => toggleMenu());

    // Close menu when clicking nav links
    navLinks.forEach((link) => {
      link.addEventListener('click', () => {
        if (navMenu.classList.contains('open')) {
          toggleMenu(false);
        }
      });
    });

    // Close on Escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navMenu.classList.contains('open')) {
        toggleMenu(false);
      }
    });
  }

  // ----------------- 4. Active Navigation State -----------------
  const observerOptions = {
    root: null,
    rootMargin: '-20% 0px -70% 0px',
    threshold: 0
  };

  const navObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const id = entry.target.getAttribute('id');
        navLinks.forEach((link) => {
          if (link.getAttribute('href') === `#${id}`) {
            link.classList.add('active');
          } else {
            link.classList.remove('active');
          }
        });
      }
    });
  }, observerOptions);

  sections.forEach((sec) => navObserver.observe(sec));

  // ----------------- 5. Project Modal Data & Interaction -----------------
  const projectDetailsData = {
    'project-ai-neuropathy': {
      title: 'AI-Assisted Diabetic Neuropathy Screening Application',
      category: 'Artificial Intelligence · Healthcare Technology',
      year: '2026',
      badge: 'NSC 2026 4th Place Award Winner & Grant Recipient',
      overview: 'Developed as part of a research and development project that received a project development grant, represented the Western Region, and won the 4th Place Award at the 28th National Software Contest 2026 (NSC 2026) in the Health, Disability, and Elderly Programs category.',
      objectives: [
        'Build a telehealth mobile application with a hierarchical cloud architecture for home-based foot screening and community health management.',
        'Implement deep learning architectures (CNN, YOLOv8) for anatomical keypoint detection and sensory classification.',
        'Provide seamless clinical handoff through dynamic QR code serialization and automated PDF medical reports.'
      ],
      contributions: [
        'Co-developed a telehealth mobile application using Flutter, Dart, and Firebase with a hierarchical cloud architecture.',
        'Integrated AI vision models (CNN, YOLOv8, OpenCV, TensorFlow) for anatomical keypoint detection and image classification.',
        'Applied a Confusion Matrix algorithm to evaluate sensory assessment reliability using Accuracy, Precision, and Sensitivity metrics.',
        'Implemented dynamic QR code serialization and automated PDF medical report generation for healthcare providers.'
      ],
      techTags: ['Flutter', 'Dart', 'Firebase', 'Python', 'YOLOv8', 'CNN', 'OpenCV', 'TensorFlow', 'Confusion Matrix'],
      architecture: `
        <div style="display:flex; flex-direction:column; gap:12px;">
          <div style="font-weight:700; font-size:0.875rem; color:var(--color-primary);">Screening & Evaluation Workflow:</div>
          <div class="flow-diagram-container" style="flex-wrap:wrap; gap:8px;">
            <div class="flow-step-box">Sensory Assessment & Visual Input</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">Pre-processing & Normalization</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">CNN / YOLOv8 Feature Extraction</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box accent-step">Confusion Matrix & Metrics Evaluation</div>
          </div>
          <p style="font-size:0.8125rem; color:var(--color-text-muted); margin-top:8px;">
            <em>Note: Conceptual research prototype for academic research and competition evaluation. Not certified for independent medical diagnostics.</em>
          </p>
        </div>
      `,
      learnings: 'Gained practical expertise in deploying computer vision architectures (YOLOv8, CNN), balancing precision vs. sensitivity in critical assessment scenarios, and defending research methodologies in high-stakes national competitions.'
    },

    'project-smart-farm': {
      title: 'Smart Farm Environmental Monitoring & Data Logging System',
      category: 'IoT · Smart Agriculture · Automation',
      year: '2025',
      badge: 'Academic Engineering Project',
      overview: 'An automated irrigation and environmental monitoring system designed to optimize water distribution using an ESP32 microcontroller, environmental sensors, and Fuzzy Logic Control algorithms.',
      objectives: [
        'Automate farm irrigation based on continuous environmental factors rather than static timers.',
        'Integrate multi-sensor inputs to capture accurate ambient moisture, temperature, and light intensity.',
        'Implement real-time environmental data logging for analysis and simulation.'
      ],
      contributions: [
        'Built an automated irrigation system driven by ESP32 microcontroller and Fuzzy Logic control.',
        'Integrated DHT22 (temperature & humidity) and LDR (light-dependent resistor) sensors for ambient monitoring.',
        'Designed rule-based fuzzy membership sets to evaluate irrigation water output dynamically.',
        'Simulated and verified circuit performance using the Wokwi simulation platform before physical breadboard deployment.',
        'Implemented real-time environmental data logging for tracking conditions over time.'
      ],
      techTags: ['ESP32', 'DHT22', 'LDR Sensor', 'Fuzzy Logic Control', 'IoT', 'Wokwi', 'C/C++'],
      architecture: `
        <div style="display:flex; flex-direction:column; gap:12px;">
          <div style="font-weight:700; font-size:0.875rem; color:var(--color-primary);">System Architecture Pipeline:</div>
          <div class="flow-diagram-container" style="flex-wrap:wrap; gap:8px;">
            <div class="flow-step-box">Sensors (DHT22 Temp/Humidity + LDR Light)</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">ESP32 Microcontroller Core</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">Fuzzy Logic Inference Engine</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box accent-step">Automated Irrigation & Data Logging</div>
          </div>
        </div>
      `,
      learnings: 'Learned microcontroller hardware interfacing, analog-to-digital conversion calibration, fuzzy rule tuning for smoother actuator control, and debugging asynchronous sensor data streams.'
    },

    'project-ebike': {
      title: 'Electric Bicycle (E-Bike) Control System',
      category: 'Electronics · Embedded Control · Hardware Integration',
      year: '2023',
      badge: 'Hardware & Electronics Engineering',
      overview: 'A customized electronic control and battery management system developed to convert a standard manual bicycle into a functional, safe electric bicycle (E-Bike).',
      objectives: [
        'Design and wire an electrical drive control system suited for standard bicycle conversion.',
        'Integrate high-torque DC motor drive with throttle feedback and safety shutoffs.',
        'Incorporate battery management circuitry for safe power distribution.'
      ],
      contributions: [
        'Developed customized electronic control circuitry and battery management system integration.',
        'Integrated DC motor drive with electronic controller for throttle regulation.',
        'Performed comprehensive hardware troubleshooting, wiring continuity checks, and electrical safety verification.',
        'Ensured mechanical and electrical integration reliability through systematic maintenance and testing.'
      ],
      techTags: ['Electronics', 'DC Motor', 'Electronic Controller', 'Battery Management', 'Troubleshooting', 'Wiring Safety'],
      architecture: `
        <div style="display:flex; flex-direction:column; gap:12px;">
          <div style="font-weight:700; font-size:0.875rem; color:var(--color-primary);">Hardware Power & Control Loop:</div>
          <div class="flow-diagram-container" style="flex-wrap:wrap; gap:8px;">
            <div class="flow-step-box">Battery Pack & BMS</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">Electronic Speed Controller</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">DC Drive Motor</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box accent-step">Throttle & Brake Safety Sensors</div>
          </div>
        </div>
      `,
      learnings: 'Deepened hands-on electrical troubleshooting skills, high-current circuit safety practices, motor driver commutation, and practical diagnostic methodology for embedded hardware systems.'
    }
  };

  const openProjectModal = (projectId, triggerBtn) => {
    const data = projectDetailsData[projectId];
    if (!data || !projectModal) return;

    lastActiveElement = triggerBtn;

    modalTitle.textContent = data.title;
    modalCategory.textContent = data.category;
    modalYear.textContent = data.year;
    modalOverview.textContent = data.overview;

    // Objectives
    modalObjectives.innerHTML = data.objectives
      .map(item => `<li>${escapeHtml(item)}</li>`)
      .join('');

    // Contributions
    modalContributions.innerHTML = data.contributions
      .map(item => `<li>${escapeHtml(item)}</li>`)
      .join('');

    // Tech Tags
    modalTechTags.innerHTML = data.techTags
      .map(tag => `<span class="tag tag-highlight">${escapeHtml(tag)}</span>`)
      .join('');

    // Architecture
    modalArchitecture.innerHTML = data.architecture;

    // Learnings
    modalLearnings.textContent = data.learnings;

    projectModal.classList.add('active');
    projectModal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';

    // Focus close button for accessibility
    setTimeout(() => {
      modalCloseBtn?.focus();
    }, 50);
  };

  const closeProjectModal = () => {
    if (!projectModal) return;
    projectModal.classList.remove('active');
    projectModal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';

    // Restore focus to original trigger button
    if (lastActiveElement && typeof lastActiveElement.focus === 'function') {
      lastActiveElement.focus();
    }
  };

  // Attach event listeners to "View Details" buttons
  document.querySelectorAll('[data-modal-target]').forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = btn.getAttribute('data-modal-target');
      openProjectModal(targetId, btn);
    });
  });

  if (modalCloseBtn) {
    modalCloseBtn.addEventListener('click', closeProjectModal);
  }

  if (projectModal) {
    projectModal.addEventListener('click', (e) => {
      if (e.target === projectModal) {
        closeProjectModal();
      }
    });

    // Keyboard support: Escape closes modal, Tab traps focus
    document.addEventListener('keydown', (e) => {
      if (!projectModal.classList.contains('active')) return;

      if (e.key === 'Escape') {
        closeProjectModal();
        return;
      }

      if (e.key === 'Tab') {
        const focusableElements = projectModal.querySelectorAll(
          'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
        );
        const firstElement = focusableElements[0];
        const lastElement = focusableElements[focusableElements.length - 1];

        if (e.shiftKey) {
          if (document.activeElement === firstElement) {
            e.preventDefault();
            lastElement.focus();
          }
        } else {
          if (document.activeElement === lastElement) {
            e.preventDefault();
            firstElement.focus();
          }
        }
      }
    });
  }

  // ----------------- 6. Copy Email to Clipboard -----------------
  const emailAddress = '34supavadeejunyakul@gmail.com';

  const showToast = (message) => {
    if (!toastNotice) return;
    toastNotice.querySelector('.toast-text').textContent = message;
    toastNotice.classList.add('show');
    setTimeout(() => {
      toastNotice.classList.remove('show');
    }, 3500);
  };

  copyEmailBtns.forEach((btn) => {
    btn.addEventListener('click', async (e) => {
      e.preventDefault();
      try {
        if (navigator.clipboard && window.isSecureContext) {
          await navigator.clipboard.writeText(emailAddress);
        } else {
          // Fallback for older or non-https environments
          const textArea = document.createElement('textarea');
          textArea.value = emailAddress;
          textArea.style.position = 'fixed';
          textArea.style.left = '-999999px';
          textArea.style.top = '-999999px';
          document.body.appendChild(textArea);
          textArea.focus();
          textArea.select();
          document.execCommand('copy');
          textArea.remove();
        }
        showToast('Email address copied to clipboard!');
        btn.innerHTML = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Copied!`;
        setTimeout(() => {
          btn.innerHTML = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg> Copy Email`;
        }, 2000);
      } catch (err) {
        showToast('Could not copy automatically. Email: ' + emailAddress);
      }
    });
  });

  // ----------------- 7. Photo Gallery Lightbox Modal -----------------
  const lightboxModal = document.getElementById('photoLightboxModal');
  const lightboxCloseBtn = document.getElementById('lightboxCloseBtn');
  const lightboxTitle = document.getElementById('lightboxTitle');
  const lightboxCounter = document.getElementById('lightboxCounter');
  const lightboxMainImage = document.getElementById('lightboxMainImage');
  const lightboxPrevBtn = document.getElementById('lightboxPrevBtn');
  const lightboxNextBtn = document.getElementById('lightboxNextBtn');
  const lightboxThumbnails = document.getElementById('lightboxThumbnails');

  let currentGalleryImages = [];
  let currentGalleryIndex = 0;
  let currentGalleryTitle = '';
  let lastLightboxTrigger = null;

  const updateLightboxSlide = (index) => {
    if (!currentGalleryImages.length || !lightboxMainImage) return;
    const total = currentGalleryImages.length;
    currentGalleryIndex = (index + total) % total;

    const imgUrl = currentGalleryImages[currentGalleryIndex];
    lightboxMainImage.src = imgUrl;
    lightboxMainImage.alt = `${currentGalleryTitle} — Photo ${currentGalleryIndex + 1} of ${total}`;

    if (lightboxCounter) {
      lightboxCounter.textContent = `${currentGalleryIndex + 1} / ${total}`;
    }

    // Update active thumbnail
    if (lightboxThumbnails) {
      const thumbBtns = lightboxThumbnails.querySelectorAll('.lightbox-thumb-btn');
      thumbBtns.forEach((btn, idx) => {
        btn.classList.toggle('active', idx === currentGalleryIndex);
        btn.setAttribute('aria-selected', String(idx === currentGalleryIndex));
      });
    }
  };

  const openLightboxModal = (title, images, triggerBtn) => {
    if (!lightboxModal || !Array.isArray(images) || images.length === 0) return;

    lastLightboxTrigger = triggerBtn;
    currentGalleryTitle = title || 'Project Photos';
    currentGalleryImages = images;
    currentGalleryIndex = 0;

    if (lightboxTitle) {
      lightboxTitle.textContent = currentGalleryTitle;
    }

    const hasMultiple = images.length > 1;
    lightboxPrevBtn?.classList.toggle('hidden', !hasMultiple);
    lightboxNextBtn?.classList.toggle('hidden', !hasMultiple);
    lightboxThumbnails?.classList.toggle('hidden', !hasMultiple);

    // Render thumbnails
    if (lightboxThumbnails) {
      lightboxThumbnails.innerHTML = images
        .map(
          (src, idx) => `
          <button type="button" class="lightbox-thumb-btn ${idx === 0 ? 'active' : ''}" data-thumb-index="${idx}" role="tab" aria-selected="${idx === 0 ? 'true' : 'false'}" aria-label="View photo ${idx + 1}">
            <img src="${escapeHtml(src)}" alt="Thumbnail ${idx + 1}">
          </button>
        `
        )
        .join('');

      lightboxThumbnails.querySelectorAll('.lightbox-thumb-btn').forEach((thumbBtn) => {
        thumbBtn.addEventListener('click', () => {
          const idx = parseInt(thumbBtn.getAttribute('data-thumb-index'), 10);
          if (!Number.isNaN(idx)) {
            updateLightboxSlide(idx);
          }
        });
      });
    }

    updateLightboxSlide(0);

    lightboxModal.classList.add('active');
    lightboxModal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';

    setTimeout(() => {
      lightboxCloseBtn?.focus();
    }, 50);
  };

  const closeLightboxModal = () => {
    if (!lightboxModal) return;
    lightboxModal.classList.remove('active');
    lightboxModal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';

    if (lastLightboxTrigger && typeof lastLightboxTrigger.focus === 'function') {
      lastLightboxTrigger.focus();
    }
  };

  // Attach click listeners to all [data-gallery-images] buttons
  document.querySelectorAll('[data-gallery-images]').forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const title = btn.getAttribute('data-gallery-title') || 'Project Photos';
      const rawJson = btn.getAttribute('data-gallery-images') || '[]';
      try {
        const images = JSON.parse(rawJson);
        openLightboxModal(title, images, btn);
      } catch (err) {
        console.error('Failed to parse gallery images:', err);
      }
    });
  });

  lightboxCloseBtn?.addEventListener('click', closeLightboxModal);

  lightboxPrevBtn?.addEventListener('click', () => {
    updateLightboxSlide(currentGalleryIndex - 1);
  });

  lightboxNextBtn?.addEventListener('click', () => {
    updateLightboxSlide(currentGalleryIndex + 1);
  });

  if (lightboxModal) {
    lightboxModal.addEventListener('click', (e) => {
      if (e.target === lightboxModal) {
        closeLightboxModal();
      }
    });

    document.addEventListener('keydown', (e) => {
      if (!lightboxModal.classList.contains('active')) return;

      if (e.key === 'Escape') {
        closeLightboxModal();
      } else if (e.key === 'ArrowLeft' && currentGalleryImages.length > 1) {
        e.preventDefault();
        updateLightboxSlide(currentGalleryIndex - 1);
      } else if (e.key === 'ArrowRight' && currentGalleryImages.length > 1) {
        e.preventDefault();
        updateLightboxSlide(currentGalleryIndex + 1);
      }
    });
  }

  // ----------------- 8. Interactive Tech Network / IoT Nodes Canvas -----------------
  const networkCanvas = document.getElementById('techNetworkCanvas');
  if (networkCanvas && networkCanvas.getContext) {
    const ctx = networkCanvas.getContext('2d');
    let width = 0;
    let height = 0;
    let nodes = [];
    let animationFrameId = null;

    const palette = [
      { r: 99, g: 103, b: 255 },  // #6367FF Primary Indigo
      { r: 132, g: 148, b: 255 }, // #8494FF Periwinkle Blue
      { r: 165, g: 150, b: 255 }, // #A596FF Soft Lavender
      { r: 222, g: 148, b: 235 }  // Soft Blush Pink-Lavender
    ];

    const mouse = {
      x: null,
      y: null,
      radius: 175
    };

    const createNodes = () => {
      const area = width * height;
      const count = Math.min(Math.max(Math.floor(area / 21000), 26), 68);
      nodes = [];

      for (let i = 0; i < count; i++) {
        const color = palette[i % palette.length];
        const isHub = i % 6 === 0;
        nodes.push({
          x: Math.random() * width,
          y: Math.random() * height,
          vx: (Math.random() - 0.5) * 0.55,
          vy: (Math.random() - 0.5) * 0.55,
          radius: isHub ? 3.4 : 2 + Math.random() * 1.4,
          isHub,
          pulsePhase: Math.random() * Math.PI * 2,
          color
        });
      }
    };

    const resizeCanvas = () => {
      const dpr = Math.min(window.devicePixelRatio || 1, 2);
      width = window.innerWidth;
      height = window.innerHeight;
      networkCanvas.width = width * dpr;
      networkCanvas.height = height * dpr;
      ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
      createNodes();
    };

    const drawNetwork = () => {
      ctx.clearRect(0, 0, width, height);
      const maxLinkDist = 148;

      // Update positions and draw links
      for (let i = 0; i < nodes.length; i++) {
        const n1 = nodes[i];
        n1.x += n1.vx;
        n1.y += n1.vy;
        n1.pulsePhase += 0.025;

        // Soft bounce on viewport edges
        if (n1.x < 0 || n1.x > width) n1.vx *= -1;
        if (n1.y < 0 || n1.y > height) n1.vy *= -1;

        // Connect nearby nodes
        for (let j = i + 1; j < nodes.length; j++) {
          const n2 = nodes[j];
          const dx = n1.x - n2.x;
          const dy = n1.y - n2.y;
          const dist = Math.hypot(dx, dy);

          if (dist < maxLinkDist) {
            const alpha = (1 - dist / maxLinkDist) * 0.24;
            ctx.beginPath();
            ctx.moveTo(n1.x, n1.y);
            ctx.lineTo(n2.x, n2.y);
            ctx.strokeStyle = `rgba(99, 103, 255, ${alpha.toFixed(3)})`;
            ctx.lineWidth = 1;
            ctx.stroke();
          }
        }

        // Connect node to mouse cursor if nearby
        if (mouse.x !== null && mouse.y !== null) {
          const mdx = mouse.x - n1.x;
          const mdy = mouse.y - n1.y;
          const mDist = Math.hypot(mdx, mdy);

          if (mDist < mouse.radius) {
            const mAlpha = (1 - mDist / mouse.radius) * 0.42;
            ctx.beginPath();
            ctx.moveTo(n1.x, n1.y);
            ctx.lineTo(mouse.x, mouse.y);
            ctx.strokeStyle = `rgba(99, 103, 255, ${mAlpha.toFixed(3)})`;
            ctx.lineWidth = 1.25;
            ctx.stroke();

            // Gentle attraction toward cursor
            if (mDist > 45) {
              n1.x += (mdx / mDist) * 0.28;
              n1.y += (mdy / mDist) * 0.28;
            }
          }
        }

        // Draw outer pulse halo for IoT Hub nodes
        if (n1.isHub) {
          const pulseRadius = n1.radius + 4 + Math.sin(n1.pulsePhase) * 2;
          ctx.beginPath();
          ctx.arc(n1.x, n1.y, pulseRadius, 0, Math.PI * 2);
          ctx.fillStyle = `rgba(${n1.color.r}, ${n1.color.g}, ${n1.color.b}, 0.14)`;
          ctx.fill();
        }

        // Draw core node
        ctx.beginPath();
        ctx.arc(n1.x, n1.y, n1.radius, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(${n1.color.r}, ${n1.color.g}, ${n1.color.b}, 0.62)`;
        ctx.fill();
      }

      animationFrameId = requestAnimationFrame(drawNetwork);
    };

    window.addEventListener('resize', resizeCanvas);

    window.addEventListener('mousemove', (e) => {
      mouse.x = e.clientX;
      mouse.y = e.clientY;
    });

    window.addEventListener('mouseleave', () => {
      mouse.x = null;
      mouse.y = null;
    });

    document.addEventListener('visibilitychange', () => {
      if (document.hidden) {
        if (animationFrameId) {
          cancelAnimationFrame(animationFrameId);
          animationFrameId = null;
        }
      } else if (!animationFrameId) {
        animationFrameId = requestAnimationFrame(drawNetwork);
      }
    });

    resizeCanvas();
    drawNetwork();
  }

  // Utility helper
  function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
  }
});
