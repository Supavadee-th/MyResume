# Supavadee Junyakul — Personal Resume & Portfolio Website

A fast, modern, and accessible Personal Resume & Portfolio website for **Supavadee Junyakul**, a 4th-year Computer Science student at Phetchaburi Rajabhat University applying for a 4-month internship in **Software Engineering (Automation)** or **IoT Development**.

---

## 1. Technology Architecture

Strictly built in accordance with the project guidelines:
* **HTML5**: Semantic document layout (`<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`).
* **CSS3**: Pure custom design system using CSS Grid, Flexbox, custom properties (`:root`), animations, and media queries.
* **Vanilla JavaScript**: Lightweight interactions without dependencies (hamburger menu, active section tracking with `IntersectionObserver`, accessible modal dialogs with keyboard trap and restoration, copy-to-clipboard).
* **PHP**: Server-side modular composition, secure CSRF token handling, input sanitization, and contact form processing.

> **Zero External Frameworks**: No React, Vue, Angular, Next.js, Tailwind CSS, Bootstrap, jQuery, TypeScript, or Node/npm build steps required.

---

## 2. Brand Identity & Design System

* **Primary Indigo (`#6367FF`)**: Header, primary buttons, section titles, and footer.
* **Periwinkle Blue (`#8494FF`)**: Skill tags, category icons, flow diagram highlights, and soft badges.
* **Soft Lavender (`#C9BEFF`)**: Badges, national contest highlights, and accent CTA buttons.
* **Blush Pink (`#FFDBFD`)**: Highlight cards, featured NSC 2026 4th Place Award achievement background.
* **Dark Text (`#1E1E38`)** & **Muted Text (`#5E607E`)**: Clean typographic contrast.
* **Border (`#E4E2F5`)**: Crisp card borders and dividers.

---

## 3. Project Directory Structure

```
664244103_Resume_Website/
├── index.php                     # Main application entry point & form processor
├── README.md                     # Documentation and deployment guide
├── assets/
│   ├── css/
│   │   └── style.css             # Complete custom CSS3 design system
│   ├── js/
│   │   └── script.js             # Vanilla JavaScript interactions & modal logic
│   ├── images/
│   │   ├── profile.png           # Extracted official portrait photo
│   │   └── README.txt            # Image guide and dimensions
│   └── files/
│       ├── Resume_Supavadee_Junyakul.pdf  # Downloadable official resume PDF
│       └── README.txt            # Resume PDF guide
└── includes/
    ├── header.php                # Meta, Open Graph, fonts, sticky navbar & menu
    ├── hero.php                  # Section 01: Introduction & highlight cards
    ├── about.php                 # Section 02: Narrative & 4 interest cards
    ├── education.php             # Section 03: University & Vocational college
    ├── skills.php                # Section 04: 4 categories of technical skills
    ├── projects.php              # Section 05: 3 featured projects & modal dialog
    ├── experience.php            # Section 06: PM 2.5 web developer & intern
    ├── achievements.php          # Section 07: NSC 2026, P.J.N.K., student club
    ├── languages.php             # Section 08: Thai, English, Chinese
    ├── contact.php               # Section 09 & 10: Contact cards & internship CTA
    └── footer.php                # Section 11: Brand, links, dynamic copyright
```

---

## 4. How to Run on Local XAMPP

1. **Start Apache**: Open the XAMPP Control Panel and click **Start** next to **Apache**.
2. **Directory Placement**: Ensure the project folder is placed in:
   ```
   C:\xampp\htdocs\664244103_Resume_Website\
   ```
3. **Open in Web Browser**:
   Navigate to:
   ```
   http://localhost/664244103_Resume_Website/
   ```
4. **Verification**:
   - Verify smooth scrolling across all sections.
   - Test the **Download Resume** button (downloads `Resume_Supavadee_Junyakul.pdf`).
   - Test **View Details** buttons on each project card to verify the accessible modal popup and press `Esc` to close.
   - Click the **Copy** button on the email card to copy `34supavadeejunyakul@gmail.com` to the clipboard.

---

## 5. Customization & Maintenance Guide

### How to update Personal Information
Open `includes/contact.php`, `includes/hero.php`, or `includes/header.php` to update any contact details, phone number, or email address.

### How to update Profile Photo
Replace `assets/images/profile.png` with your new image. If using a different file format (e.g. `profile.jpg`), update the reference in `includes/hero.php`:
```html
<img src="assets/images/profile.jpg" alt="Supavadee Junyakul">
```

### How to update the Resume PDF
Place the new PDF in `assets/files/` named `Resume_Supavadee_Junyakul.pdf`. All three download buttons across the navigation, hero, and CTA sections link to this exact path.

### Optional PHP Mail Configuration
The contact form in `includes/contact.php` and `index.php` processes messages securely with:
* CSRF Token validation
* Honeypot bot protection
* Server-side input sanitization

To enable actual outbound email from `mail()` on local XAMPP:
1. Open `php.ini` in `xampp/php/php.ini`.
2. Configure `SMTP` (e.g. `smtp.gmail.com` or local mailcatcher) and `smtp_port = 587`.
3. Configure `sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"` in `php.ini` and set your credentials in `xampp/sendmail/sendmail.ini`.
4. If no mail server is configured, the form gracefully alerts the sender that messages can be sent directly to `34supavadeejunyakul@gmail.com`.
