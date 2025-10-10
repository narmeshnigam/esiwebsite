<?php
/**
 * Inspection Methodology Page
 * Transparently explains the step-by-step process, instruments, safety protocols, and acceptance criteria
 */

$pageTitle = "Inspection Methodology — SecureIndia Electrical Safety Process";
$pageDescription = "Detailed explanation of our electrical safety inspection methodology, step-by-step process, instruments used, safety protocols, and acceptance criteria.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Inspection Methodology, Safety Process, Instruments, Safety Protocols, Acceptance Criteria, Step-by-step Process">
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
    <meta property="og:url" content="https://secureindia.co.in/methodology.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Inspection Methodology</h1>
                <p class="subtitle">Transparent explanation of our comprehensive electrical safety inspection process</p>
                <div class="coming-soon-message">
                    <i class="fas fa-cogs"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're documenting our complete inspection methodology including step-by-step processes, instruments used, safety protocols, and acceptance criteria to provide full transparency about how we conduct electrical safety inspections.</p>
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