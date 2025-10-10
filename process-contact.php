<?php
/**
 * Contact Form Processor
 * Handles contact form submissions
 */

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// Get form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$inquiry_type = $_POST['inquiry_type'] ?? '';
$message = trim($_POST['message'] ?? '');
$urgent = isset($_POST['urgent']) ? 'Yes' : 'No';
$site_visit = isset($_POST['site_visit']) ? 'Yes' : 'No';

// Basic validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Valid email is required';
}

if (empty($phone)) {
    $errors[] = 'Phone number is required';
}

if (empty($inquiry_type)) {
    $errors[] = 'Please select an inquiry type';
}

if (empty($message)) {
    $errors[] = 'Message is required';
}

// If there are errors, redirect back with errors
if (!empty($errors)) {
    $error_message = implode(', ', $errors);
    header('Location: contact.php?error=' . urlencode($error_message));
    exit;
}

// Prepare email content
$to = 'hi@secureindia.online';
$subject = 'New Contact Form Submission - ' . ucfirst($inquiry_type);

$email_body = "
New contact form submission from SecureIndia website:

Name: {$name}
Email: {$email}
Phone: {$phone}
Inquiry Type: {$inquiry_type}
Urgent: {$urgent}
Site Visit Requested: {$site_visit}

Message:
{$message}

---
Submitted: " . date('Y-m-d H:i:s') . "
IP Address: " . $_SERVER['REMOTE_ADDR'] . "
";

$headers = "From: {$email}\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
$mail_sent = mail($to, $subject, $email_body, $headers);

// Log the submission (you can implement file logging or database storage here)
$log_entry = date('Y-m-d H:i:s') . " - Contact form submission from {$name} ({$email}) - Type: {$inquiry_type}\n";
file_put_contents('logs/contact_submissions.log', $log_entry, FILE_APPEND | LOCK_EX);

// Redirect with success message
if ($mail_sent) {
    header('Location: contact.php?success=1');
} else {
    header('Location: contact.php?error=' . urlencode('There was an error sending your message. Please try again or call us directly.'));
}

exit;
?>