<?php
/**
 * SLA & Escalation Matrix Page
 * Signals reliability and process maturity; reduces perceived risk for enterprises
 */

$pageTitle = "SLA & Escalation Matrix — SecureIndia Service Standards";
$pageDescription = "Our service level agreements and escalation matrix for electrical safety inspections. Transparent processes, guaranteed response times, and reliability standards.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="SLA, Service Level Agreement, Escalation Matrix, Response Times, Process Maturity, Reliability Standards">
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
    <meta property="og:url" content="https://secureindia.co.in/sla.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>SLA & Escalation Matrix</h1>
                <p class="subtitle">Transparent service standards and escalation processes for reliable service delivery</p>
                <div class="coming-soon-message">
                    <i class="fas fa-clock"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're documenting our comprehensive service level agreements, escalation matrix, and process standards to demonstrate our reliability and process maturity, reducing perceived risk for enterprise clients.</p>
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