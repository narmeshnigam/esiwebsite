<?php
/**
 * Insurance Compliance Guide Page
 * Aligns to insurance renewal/claims triggers; reduces friction with TPAs and risk managers
 */

$pageTitle = "Insurance Compliance Guide — SecureIndia Electrical Safety & Insurance";
$pageDescription = "How electrical safety inspections align with insurance requirements, renewal triggers, and claims processes. Guidance for TPAs and risk managers.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Insurance Compliance, Insurance Renewal, Claims Process, TPA Guidelines, Risk Management, Insurance Requirements">
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
    <meta property="og:url" content="https://secureindia.co.in/insurance.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Insurance Compliance Guide</h1>
                <p class="subtitle">How electrical safety inspections align with insurance requirements and claims processes</p>
                <div class="coming-soon-message">
                    <i class="fas fa-shield-alt"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're creating a comprehensive guide that explains how our electrical safety inspections align with insurance renewal triggers and claims processes, reducing friction with TPAs and risk managers while ensuring compliance requirements are met.</p>
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