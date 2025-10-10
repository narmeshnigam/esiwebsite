<?php
/**
 * Data Security & Confidentiality Page
 * Addresses PII/site sensitivity concerns; essential for BFSI, healthcare, and data centers
 */

$pageTitle = "Data Security & Confidentiality — SecureIndia Information Protection";
$pageDescription = "SecureIndia's data security protocols and confidentiality measures. Protecting PII and site-sensitive information for BFSI, healthcare, and data center clients.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Data Security, Confidentiality, PII Protection, Information Security, BFSI Compliance, Healthcare Data Protection">
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
    <meta property="og:url" content="https://secureindia.co.in/data-security.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Data Security & Confidentiality</h1>
                <p class="subtitle">Comprehensive information protection protocols for sensitive environments</p>
                <div class="coming-soon-message">
                    <i class="fas fa-lock"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're documenting our comprehensive data security protocols and confidentiality measures to address PII and site sensitivity concerns, essential for BFSI, healthcare, and data center clients who require the highest levels of information protection.</p>
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