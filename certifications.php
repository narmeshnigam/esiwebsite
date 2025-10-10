<?php
/**
 * Certifications & Licenses Page
 * Compliance-driven buyers need proof; downloadable copies speed vendor onboarding
 */

$pageTitle = "Certifications & Licenses — SecureIndia Compliance Documentation";
$pageDescription = "Official certifications, licenses, and compliance documentation for SecureIndia. Downloadable copies for vendor onboarding and due diligence processes.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Certifications, Licenses, Compliance Documentation, NABL Certificate, C-License, BEE Registration, ISO Certification">
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
    <meta property="og:url" content="https://secureindia.co.in/certifications.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Certifications & Licenses</h1>
                <p class="subtitle">Official compliance documentation and certifications for vendor verification</p>
                <div class="coming-soon-message">
                    <i class="fas fa-certificate"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're organizing all our certifications, licenses, and compliance documentation with downloadable copies to speed up vendor onboarding and provide the proof compliance-driven buyers need for their due diligence processes.</p>
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