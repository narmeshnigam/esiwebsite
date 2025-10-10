<?php
/**
 * Industries We Serve - Index Page
 * Buyers self-identify by industry; boosts SEO breadth and improves relevance in discovery
 */

$pageTitle = "Industries We Serve — SecureIndia (ESI‑First)";
$pageDescription = "Electrical safety inspection services across all industries. Specialized expertise for manufacturing, healthcare, hospitality, data centers, and more.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Industries, Manufacturing Safety, Healthcare Electrical Audit, Hotel Safety Inspection, Data Center Compliance">
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
    <meta property="og:url" content="https://secureindia.co.in/industries.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Industries We Serve</h1>
                <p class="subtitle">Specialized electrical safety inspection services across all major industries</p>
                <div class="coming-soon-message">
                    <i class="fas fa-tools"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're building comprehensive industry-specific content to better serve your needs. This page will feature detailed information about our services across manufacturing, healthcare, hospitality, data centers, and more.</p>
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