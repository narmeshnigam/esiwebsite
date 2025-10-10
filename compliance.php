<?php
/**
 * Compliance Standards & Regulations (Index) Page
 * Organizes all regulatory mappings (IE Rules, CEA, NBC, IS standards) for high-authority SEO and trust
 */

$pageTitle = "Compliance Standards & Regulations — SecureIndia Regulatory Guide";
$pageDescription = "Comprehensive guide to electrical safety compliance standards including IE Rules, CEA guidelines, NBC standards, and IS specifications for regulatory compliance.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Compliance Standards, IE Rules, CEA Guidelines, NBC Standards, IS Specifications, Regulatory Compliance, Electrical Safety Regulations">
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
    <meta property="og:url" content="https://secureindia.co.in/compliance.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Compliance Standards & Regulations</h1>
                <p class="subtitle">Comprehensive guide to electrical safety compliance standards and regulatory requirements</p>
                <div class="coming-soon-message">
                    <i class="fas fa-gavel"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're organizing comprehensive information about all regulatory mappings including IE Rules, CEA guidelines, NBC standards, and IS specifications to provide authoritative guidance on electrical safety compliance requirements.</p>
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