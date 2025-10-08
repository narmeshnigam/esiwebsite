// Scroll-triggered elements
document.addEventListener('DOMContentLoaded', function() {
    // Scroll Trigger CTA
    const scrollCTA = document.createElement('div');
    scrollCTA.className = 'scroll-cta';
    scrollCTA.innerHTML = `
        <div class="scroll-cta-content">
            <p>Ready for a professional safety inspection?</p>
            <a href="#contact" class="btn btn-primary btn-sm">Get Your Compliance Report</a>
        </div>
    `;
    document.body.appendChild(scrollCTA);

    // Show/Hide Scroll CTA based on scroll position
    let lastScroll = 0;
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        const scrollTrigger = window.innerHeight * 0.3; // 30% of viewport height

        if (currentScroll > scrollTrigger) {
            scrollCTA.classList.add('visible');
        } else {
            scrollCTA.classList.remove('visible');
        }

        // Hide when scrolling up
        if (currentScroll < lastScroll) {
            scrollCTA.classList.remove('visible');
        }

        lastScroll = currentScroll;
    });

    // Exit Intent
    let exitShown = false;
    document.addEventListener('mouseleave', (e) => {
        if (e.clientY < 0 && !exitShown) {
            showExitPopup();
            exitShown = true;
        }
    });

    function showExitPopup() {
        const exitPopup = document.createElement('div');
        exitPopup.className = 'exit-popup';
        exitPopup.innerHTML = `
            <div class="exit-popup-content">
                <button class="close-popup">&times;</button>
                <h3>Wait! Don't Risk Your Safety</h3>
                <p>Get a free initial consultation with our safety experts.</p>
                <form class="exit-form">
                    <input type="email" placeholder="Your Email" required>
                    <input type="tel" placeholder="Phone Number" required>
                    <button type="submit" class="btn btn-primary">Book Free Consultation</button>
                </form>
            </div>
        `;
        document.body.appendChild(exitPopup);

        // Close popup handler
        exitPopup.querySelector('.close-popup').addEventListener('click', () => {
            exitPopup.remove();
        });

        // Form submission
        exitPopup.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            // Handle form submission
            exitPopup.innerHTML = `
                <div class="exit-popup-content">
                    <h3>Thank You!</h3>
                    <p>We'll contact you within 24 hours to schedule your consultation.</p>
                </div>
            `;
            setTimeout(() => exitPopup.remove(), 3000);
        });
    }

    // Highlight CTA buttons on scroll
    const ctaButtons = document.querySelectorAll('.btn-primary');
    function highlightCTA() {
        ctaButtons.forEach(btn => {
            const rect = btn.getBoundingClientRect();
            if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                btn.classList.add('pulse');
            } else {
                btn.classList.remove('pulse');
            }
        });
    }
    window.addEventListener('scroll', highlightCTA);
});