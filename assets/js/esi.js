// ESI Page Interactive Features
(function () {
  const d = document;

  // Sticky CTA Bar
  function initStickyBar() {
    const stickyBar = d.getElementById('sticky-cta');
    const finalCTA = d.getElementById('final-cta');
    
    if (!stickyBar || !finalCTA) return;

    function toggleStickyBar() {
      const ctaRect = finalCTA.getBoundingClientRect();
      const isVisible = ctaRect.top > window.innerHeight;
      stickyBar.classList.toggle('visible', isVisible);
    }

    window.addEventListener('scroll', toggleStickyBar);
    toggleStickyBar(); // Initial check
  }

  // FAQ Accordion
  function initFAQAccordion() {
    d.addEventListener('click', (e) => {
      if (!e.target.classList.contains('faq-question')) return;
      
      const question = e.target;
      const faqNumber = question.getAttribute('data-faq');
      const answer = d.querySelector(`[data-answer="${faqNumber}"]`);
      
      if (!answer) return;

      // Close other FAQs
      d.querySelectorAll('.faq-question.active').forEach(q => {
        if (q !== question) {
          q.classList.remove('active');
          const num = q.getAttribute('data-faq');
          const a = d.querySelector(`[data-answer="${num}"]`);
          if (a) a.classList.remove('active');
        }
      });

      // Toggle current FAQ
      question.classList.toggle('active');
      answer.classList.toggle('active');
    });
  }

  // Tabbed Deliverables Section
  function initDeliverableTabs() {
    d.addEventListener('click', (e) => {
      if (!e.target.classList.contains('tab-btn')) return;
      
      const btn = e.target;
      const tabKey = btn.getAttribute('data-tab');
      const panel = d.querySelector(`[data-panel="${tabKey}"]`);
      
      if (!panel) return;

      // Remove active from all tabs and panels
      d.querySelectorAll('.tab-btn.active').forEach(b => b.classList.remove('active'));
      d.querySelectorAll('.tab-panel.active').forEach(p => p.classList.remove('active'));

      // Activate current tab and panel
      btn.classList.add('active');
      panel.classList.add('active');
    });
  }

  // Timeline Animation on Scroll
  function initTimelineAnimation() {
    const timelineSteps = d.querySelectorAll('.timeline-step');
    
    if (!timelineSteps.length) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateX(0)';
        }
      });
    }, { threshold: 0.3 });

    timelineSteps.forEach((step, index) => {
      step.style.opacity = '0';
      step.style.transform = 'translateX(-30px)';
      step.style.transition = `opacity 0.6s ease ${index * 0.2}s, transform 0.6s ease ${index * 0.2}s`;
      observer.observe(step);
    });
  }

  // Smooth Scroll for Anchor Links
  function initSmoothScroll() {
    d.addEventListener('click', (e) => {
      const link = e.target.closest('a[href^="#"]');
      if (!link) return;
      
      const href = link.getAttribute('href');
      if (href === '#') return;
      
      const target = d.querySelector(href);
      if (!target) return;
      
      e.preventDefault();
      
      const headerHeight = 80; // Adjust based on header height
      const targetPos = target.offsetTop - headerHeight;
      
      window.scrollTo({
        top: targetPos,
        behavior: 'smooth'
      });
    });
  }

  // Equipment Item Hover Effects
  function initEquipmentHovers() {
    const equipmentItems = d.querySelectorAll('.equipment-item');
    
    equipmentItems.forEach(item => {
      item.addEventListener('mouseenter', () => {
        item.style.transform = 'translateY(-5px)';
        item.style.boxShadow = '0 8px 25px rgba(0, 0, 0, 0.15)';
      });
      
      item.addEventListener('mouseleave', () => {
        item.style.transform = 'translateY(0)';
        item.style.boxShadow = 'none';
      });
    });
  }

  // Pillar Animation on Scroll
  function initPillarAnimation() {
    const pillars = d.querySelectorAll('.pillar');
    
    if (!pillars.length) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, { threshold: 0.2 });

    pillars.forEach((pillar, index) => {
      pillar.style.opacity = '0';
      pillar.style.transform = 'translateY(30px)';
      pillar.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
      observer.observe(pillar);
    });
  }

  // Case Studies Animation
  function initCaseStudiesAnimation() {
    const cases = d.querySelectorAll('.case-highlight');
    
    if (!cases.length) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'scale(1)';
        }
      });
    }, { threshold: 0.3 });

    cases.forEach((caseItem, index) => {
      caseItem.style.opacity = '0';
      caseItem.style.transform = 'scale(0.9)';
      caseItem.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
      observer.observe(caseItem);
    });
  }

  // Pricing Card Hover Effects
  function initPricingHovers() {
    const pricingCards = d.querySelectorAll('.pricing-card:not(.featured)');
    
    pricingCards.forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-8px) scale(1.02)';
        card.style.boxShadow = '0 12px 30px rgba(0, 0, 0, 0.15)';
      });
      
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0) scale(1)';
        card.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.1)';
      });
    });
  }

  // Initialize all features when DOM is ready
  function init() {
    initStickyBar();
    initFAQAccordion();
    initDeliverableTabs();
    initTimelineAnimation();
    initSmoothScroll();
    initEquipmentHovers();
    initPillarAnimation();
    initCaseStudiesAnimation();
    initPricingHovers();
  }

  // Start when DOM is loaded
  if (d.readyState === 'loading') {
    d.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();