<?php
/**
 * Contact Us Page
 * Multiple channels (phone, WhatsApp, email, form), mapped to SLA and region; reduces drop-offs for high-intent users
 */

$pageTitle = "Contact Us — SecureIndia (ESI‑First)";
$pageDescription = "Get in touch with our electrical safety inspection experts. Multiple contact options including phone, WhatsApp, email, and online form with regional support.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Contact SecureIndia, Electrical Safety Inspection Contact, Phone Support, WhatsApp Support, Regional Office">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/contact.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Contact Us</h1>
                <p class="subtitle">Multiple ways to reach our electrical safety inspection experts</p>
                <div class="coming-soon-message">
                    <i class="fas fa-headset"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're building a comprehensive contact page with multiple communication channels, regional office details, SLA information, and dedicated support for different inquiry types to ensure quick response times.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <?php include_once 'sections/cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/main.js" defer></script>
</body>
</html>