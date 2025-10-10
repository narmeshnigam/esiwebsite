<?php
/**
 * Report Samples & Templates Page
 * Shows exact deliverables (findings, photos, risk ratings, BoQ recommendations) to set expectations and justify value
 */

$pageTitle = "Report Samples & Templates — SecureIndia Inspection Deliverables";
$pageDescription = "Sample electrical safety inspection reports showing findings, photos, risk ratings, and BoQ recommendations. See exactly what deliverables you'll receive.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Report Samples, Inspection Templates, Deliverables, Risk Ratings, BoQ Recommendations, Sample Reports">
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
    <meta property="og:url" content="https://secureindia.co.in/reports.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Report Samples & Templates</h1>
                <p class="subtitle">See exactly what deliverables you'll receive from our electrical safety inspections</p>
                <div class="coming-soon-message">
                    <i class="fas fa-file-alt"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're preparing sample inspection reports showcasing our findings format, photo documentation, risk ratings, and BoQ recommendations to help you understand exactly what deliverables you'll receive and justify the value of our services.</p>
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