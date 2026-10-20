<?php
/**
 * Header & Navigation Component
 * Supavadee Junyakul — Personal Resume & Portfolio Website
 */
$resumePdfPath = 'assets/files/Resume_Supavadee_Junyakul.pdf';
$portfolioPdfPath = 'assets/files/Portfolio_Supavadee_Junyakul.pdf';

/**
 * Dynamically scans a subfolder inside assets/images/ and returns URL-safe image paths.
 * Automatically picks up any new images added to the folder in the future.
 */
if (!function_exists('getGalleryImages')) {
    function getGalleryImages(string $folderName): array {
        $baseDir = dirname(__DIR__) . '/assets/images/' . $folderName;
        if (!is_dir($baseDir)) {
            return [];
        }
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp', 'gif', 'avif'];
        $files = scandir($baseDir);
        $images = [];
        if ($files !== false) {
            natcasesort($files);
            foreach ($files as $file) {
                if ($file === '.' || $file === '..') {
                    continue;
                }
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowedExtensions, true)) {
                    $images[] = 'assets/images/' . rawurlencode($folderName) . '/' . rawurlencode($file);
                }
            }
        }
        return array_values($images);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Supavadee Junyakul | Software &amp; IoT Portfolio</title>
  <meta name="description" content="Explore Supavadee Junyakul's portfolio, featuring software development, IoT, embedded systems, AI-assisted applications, and engineering experience.">
  <meta name="keywords" content="Supavadee Junyakul, Portfolio, Resume, Computer Science, Software Engineering, IoT, ESP32, Automation, AI, YOLOv8">
  <meta name="author" content="Supavadee Junyakul">

  <!-- Open Graph / Social Meta -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Supavadee Junyakul | Software &amp; IoT Portfolio">
  <meta property="og:description" content="Fourth-year Computer Science student with an Electronics background seeking a 4-month internship in Software Engineering for Automation or IoT Development.">
  <meta property="og:image" content="assets/images/profile.png">

  <!-- SVG Favicon with SJ Monogram -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%236367FF'/%3E%3Ctext x='50%25' y='55%25' font-family='Arial, sans-serif' font-weight='800' font-size='16' fill='%23FFDBFD' dominant-baseline='middle' text-anchor='middle'%3ESJ%3C/text%3E%3C/svg%3E">

  <!-- Typography: Google Fonts (Manrope, Inter, Noto Sans Thai) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@600;700;800&family=Noto+Sans+Thai:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS Design System -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo @filemtime(dirname(__DIR__) . '/assets/css/style.css') ?: time(); ?>">
</head>
<body>
  <!-- Interactive Tech Network / IoT Nodes Background Canvas -->
  <canvas id="techNetworkCanvas" class="tech-network-canvas" aria-hidden="true"></canvas>

  <!-- Sticky Navigation Bar -->
  <header class="navbar" id="navbar">
    <div class="container nav-container">
      <!-- Brand Logo -->
      <a href="#home" class="nav-logo" aria-label="Supavadee Junyakul Home">
        <span class="nav-logo-badge">SJ</span>
        <span>SUPAVADEE</span>
      </a>

      <!-- Desktop & Mobile Navigation Links -->
      <nav class="nav-menu-wrapper" id="navMenuWrapper" aria-label="Main Navigation">
        <ul class="nav-links">
          <li><a href="#home" class="nav-link active">Home</a></li>
          <li><a href="#about" class="nav-link">About</a></li>
          <li><a href="#education" class="nav-link">Education</a></li>
          <li><a href="#skills" class="nav-link">Skills</a></li>
          <li><a href="#projects" class="nav-link">Projects</a></li>
          <li><a href="#experience" class="nav-link">Experience</a></li>
          <li><a href="#achievements" class="nav-link">Achievements</a></li>
          <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>

      </nav>

      <!-- Hamburger Button (Mobile) -->
      <button class="nav-hamburger" id="navHamburger" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="navMenuWrapper">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>
  <main id="mainContent">
