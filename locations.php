<?php
/**
 * Locations We Serve Page
 * NCR + metro city pages improve local SEO and trust ("near me" + quick response) for urgent inspections
 */

$pageTitle = "Locations We Serve — SecureIndia (ESI‑First)";
$pageDescription = "Electrical safety inspection services across NCR and major metro cities. Local presence for quick response times and urgent inspections.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Safety Near Me, NCR Inspection Services, Metro City Coverage, Local Electrical Audit, Quick Response">
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
    <meta property="og:url" content="https://secureindia.co.in/locations.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Locations We Serve</h1>
                <p class="subtitle">Comprehensive coverage across NCR and major metro cities for quick response times</p>
                <div class="coming-soon-message">
                    <i class="fas fa-map-marker-alt"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're creating detailed location pages for all our service areas including NCR and major metro cities, featuring local contact information, response times, and area-specific service capabilities for urgent inspections.</p>
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