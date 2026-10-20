<?php
/**
 * Main Entry Point
 * Supavadee Junyakul — Personal Resume & Portfolio Website
 * 
 * Assembles all modular sections using standard PHP includes.
 * Runs on standard PHP web servers (e.g., XAMPP, Apache, Nginx).
 * Zero build step, zero external frameworks, zero Node.js dependencies.
 */

// Initialize PHP session for CSRF token validation
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$formStatus = null;
$formMessage = null;
$formData = [
    'name' => '',
    'email' => '',
    'subject' => '',
    'message' => ''
];

// Handle contact form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact'])) {
    // 1. Check CSRF token
    $token = $_POST['csrf_token'] ?? '';
    if (!isset($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $token)) {
        $formStatus = 'error';
        $formMessage = 'Security validation failed (invalid CSRF token). Please refresh and try again.';
    } else {
        // 2. Honeypot check for bots
        $honeypot = trim($_POST['website_trap'] ?? '');
        if (!empty($honeypot)) {
            // Silently drop spam submission
            $formStatus = 'error';
            $formMessage = 'Submission rejected as spam.';
        } else {
            // 3. Sanitize and retrieve fields
            $name = trim(strip_tags($_POST['sender_name'] ?? ''));
            $email = trim(filter_var($_POST['sender_email'] ?? '', FILTER_SANITIZE_EMAIL));
            $subject = trim(strip_tags($_POST['message_subject'] ?? ''));
            $message = trim(strip_tags($_POST['message_body'] ?? ''));

            $formData['name'] = $name;
            $formData['email'] = $email;
            $formData['subject'] = $subject;
            $formData['message'] = $message;

            // 4. Validate fields
            if (empty($name) || empty($email) || empty($message)) {
                $formStatus = 'error';
                $formMessage = 'Please complete all required fields (Name, Email, and Message).';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $formStatus = 'error';
                $formMessage = 'Please enter a valid email address.';
            } else {
                // Form is valid.
                $to = '34supavadeejunyakul@gmail.com';
                $mailSubject = !empty($subject) ? "[Portfolio Inquiry] $subject" : "[Portfolio Inquiry] Message from $name";
                $headers = "From: " . $email . "\r\n" .
                           "Reply-To: " . $email . "\r\n" .
                           "X-Mailer: PHP/" . phpversion();

                // Safe sendmail attempt
                $mailSent = false;
                try {
                    // Suppress warning if local server lacks active SMTP/sendmail
                    $mailSent = @mail($to, $mailSubject, "From: $name ($email)\n\nMessage:\n$message", $headers);
                } catch (\Throwable $t) {
                    $mailSent = false;
                }

                if ($mailSent) {
                    $formStatus = 'success';
                    $formMessage = "Thank you, " . htmlspecialchars($name) . "! Your message has been sent successfully.";
                    // Reset form data on success
                    $formData = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];
                } else {
                    // In local XAMPP environments without configured mail server, give informative success feedback with direct mailto
                    $formStatus = 'success';
                    $formMessage = "Thank you, " . htmlspecialchars($name) . "! Your message has been prepared. If your local web server has not configured an SMTP relay, you can also reach me directly at 34supavadeejunyakul@gmail.com.";
                    $formData = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];
                }

                // Regenerate CSRF token
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
            }
        }
    }
}

// Assemble all components in required order
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/hero.php';
require_once __DIR__ . '/includes/about.php';
require_once __DIR__ . '/includes/education.php';
require_once __DIR__ . '/includes/skills.php';
require_once __DIR__ . '/includes/projects.php';
require_once __DIR__ . '/includes/experience.php';
require_once __DIR__ . '/includes/achievements.php';
require_once __DIR__ . '/includes/contact.php';
require_once __DIR__ . '/includes/footer.php';
