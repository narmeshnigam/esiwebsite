<?php
/**
 * Header component
 * Contains the main navigation and CTA button
 */

// Define active page for navigation highlighting
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<header class="site-header">
    <div class="container">
        <nav class="main-nav">
            <div class="nav-brand">
                <a href="/">
                    <img src="assets/images/logo.png" alt="ESI-First Logo" class="site-logo">
                </a>
            </div>
            <ul class="nav-links">
                <li<?php echo $currentPage == 'industries.php' ? ' class="active"' : ''; ?>>
                    <a href="#industries">Industries</a>
                </li>
                <li<?php echo $currentPage == 'use-case.php' ? ' class="active"' : ''; ?>>
                    <a href="#case-studies">Use Case</a>
                </li>
                <li<?php echo $currentPage == 'why-esi.php' ? ' class="active"' : ''; ?>>
                    <a href="#why-choose">Why ESI</a>
                </li>
                <li<?php echo $currentPage == 'about.php' ? ' class="active"' : ''; ?>>
                    <a href="#about">About Us</a>
                </li>
                <li<?php echo $currentPage == 'contact.php' ? ' class="active"' : ''; ?>>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
            <div class="nav-cta">
                <a href="#enquiry" class="btn btn-primary">Get in Touch</a>
            </div>
            <button class="mobile-menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </div>
</header>