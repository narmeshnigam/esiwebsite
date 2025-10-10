<?php
/**
 * Case Studies - Index Page
 * Proof wins deals; shows measurable risk reduction, claim approvals, and audit closures by sector
 */

$pageTitle = "Case Studies — SecureIndia (ESI‑First)";
$pageDescription = "Real-world electrical safety inspection case studies. See how we've helped clients reduce risks, pass audits, and ensure compliance across industries.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Case Studies, Success Stories, Risk Reduction, Audit Closure, Electrical Safety Results">
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
    <meta property="og:url" content="https://secureindia.co.in/case-studies.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Case Studies</h1>
                <p class="subtitle">Real-world success stories and measurable results from our electrical safety inspections</p>
                <div class="coming-soon-message">
                    <i class="fas fa-chart-line"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're compiling detailed case studies showcasing measurable risk reduction, successful claim approvals, and audit closures across different sectors. This will provide concrete proof of our inspection effectiveness.</p>
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