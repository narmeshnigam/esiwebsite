<?php
/**
 * Download Center Page
 * Central place for brochures, licenses, SoPs, vendor forms—shortens procurement cycles
 */

$pageTitle = "Download Center — SecureIndia Documents & Resources";
$pageDescription = "Download brochures, licenses, standard operating procedures, vendor forms, and other essential documents for procurement and vendor onboarding.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Downloads, Brochures, Licenses, SOP, Vendor Forms, Procurement Documents, Resources">
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
    <meta property="og:url" content="https://secureindia.co.in/downloads.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Download Center</h1>
                <p class="subtitle">Essential documents and resources for procurement and vendor onboarding</p>
                <div class="coming-soon-message">
                    <i class="fas fa-download"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're creating a central download hub for all essential documents including brochures, licenses, standard operating procedures, vendor forms, and other resources to shorten procurement cycles and simplify vendor onboarding.</p>
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