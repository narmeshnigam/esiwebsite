// Quote Form Interactive Features
(function () {
  const d = document;

  // Multi-step form functionality
  function initMultiStepForm() {
    const form = d.getElementById('quote-form-main');
    const steps = d.querySelectorAll('.form-step');
    const progressSteps = d.querySelectorAll('.progress-step');
    let currentStep = 1;
    const totalSteps = steps.length;

    function showStep(stepNumber) {
      // Hide all steps
      steps.forEach(step => step.classList.remove('active'));
      progressSteps.forEach(progress => {
        progress.classList.remove('active');
        if (parseInt(progress.dataset.step) < stepNumber) {
          progress.classList.add('completed');
        } else {
          progress.classList.remove('completed');
        }
      });

      // Show current step
      const targetStep = d.querySelector(`[data-step="${stepNumber}"]`);
      const targetProgress = d.querySelector(`.progress-step[data-step="${stepNumber}"]`);
      
      if (targetStep) targetStep.classList.add('active');
      if (targetProgress) targetProgress.classList.add('active');

      currentStep = stepNumber;
    }

    function validateStep(stepNumber) {
      const step = d.querySelector(`.form-step[data-step="${stepNumber}"]`);
      const requiredFields = step.querySelectorAll('input[required], select[required]');
      let isValid = true;

      requiredFields.forEach(field => {
        if (!field.value.trim()) {
          field.style.borderColor = '#dc3545';
          isValid = false;
        } else {
          field.style.borderColor = '#e1e5e9';
        }
      });

      return isValid;
    }

    // Next step button handlers
    d.addEventListener('click', (e) => {
      if (e.target.classList.contains('next-step')) {
        if (validateStep(currentStep)) {
          if (currentStep < totalSteps) {
            showStep(currentStep + 1);
          }
        } else {
          // Show validation message
          showNotification('Please fill all required fields', 'error');
        }
      }
    });

    // Previous step button handlers
    d.addEventListener('click', (e) => {
      if (e.target.classList.contains('prev-step')) {
        if (currentStep > 1) {
          showStep(currentStep - 1);
        }
      }
    });

    // Form submission
    if (form) {
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        if (validateStep(currentStep)) {
          // Show loading state
          const submitBtn = d.querySelector('.submit-quote');
          const originalText = submitBtn.innerHTML;
          submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
          submitBtn.disabled = true;

          // Simulate form submission (replace with actual submission logic)
          setTimeout(() => {
            showNotification('Quote request submitted successfully! We\'ll contact you within 24 hours.', 'success');
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            // Optionally redirect or reset form
          }, 2000);
        }
      });
    }
  }

  // File upload functionality
  function initFileUpload() {
    const fileUpload = d.getElementById('file_upload');
    const uploadArea = d.querySelector('.file-upload-area');
    const placeholder = d.querySelector('.upload-placeholder');

    if (!fileUpload || !uploadArea) return;

    // Drag and drop handlers
    uploadArea.addEventListener('dragover', (e) => {
      e.preventDefault();
      uploadArea.style.borderColor = 'var(--primary-color)';
      uploadArea.style.backgroundColor = 'rgba(var(--primary-color), 0.05)';
    });

    uploadArea.addEventListener('dragleave', (e) => {
      e.preventDefault();
      uploadArea.style.borderColor = '#ddd';
      uploadArea.style.backgroundColor = 'transparent';
    });

    uploadArea.addEventListener('drop', (e) => {
      e.preventDefault();
      uploadArea.style.borderColor = '#ddd';
      uploadArea.style.backgroundColor = 'transparent';
      
      const files = e.dataTransfer.files;
      handleFiles(files);
    });

    // File input change
    fileUpload.addEventListener('change', (e) => {
      handleFiles(e.target.files);
    });

    function handleFiles(files) {
      if (files.length > 0) {
        let fileNames = [];
        for (let i = 0; i < files.length; i++) {
          fileNames.push(files[i].name);
        }
        placeholder.innerHTML = `
          <i class="fas fa-check-circle" style="color: var(--primary-color);"></i>
          <span>${files.length} file(s) selected</span>
          <small>${fileNames.join(', ')}</small>
        `;
      }
    }
  }

  // Help chat widget
  function initHelpChat() {
    const chatToggle = d.getElementById('chat-toggle');
    const chatPopup = d.getElementById('chat-popup');
    const chatClose = d.getElementById('chat-close');

    if (!chatToggle || !chatPopup) return;

    chatToggle.addEventListener('click', () => {
      chatPopup.classList.toggle('active');
    });

    if (chatClose) {
      chatClose.addEventListener('click', () => {
        chatPopup.classList.remove('active');
      });
    }

    // Close chat when clicking outside
    d.addEventListener('click', (e) => {
      if (!e.target.closest('.help-chat-widget')) {
        chatPopup.classList.remove('active');
      }
    });
  }

  // Conditional form logic
  function initConditionalLogic() {
    const facilityType = d.getElementById('facility_type');
    
    if (facilityType) {
      facilityType.addEventListener('change', (e) => {
        const type = e.target.value;
        const loadGroup = d.querySelector('label[for="load_capacity"]').parentElement;
        const panelsGroup = d.querySelector('label[for="panels"]').parentElement;
        
        // Show/hide fields based on facility type
        if (type === 'residential') {
          loadGroup.style.display = 'none';
          panelsGroup.style.display = 'block';
        } else if (type === 'industrial') {
          loadGroup.style.display = 'block';
          panelsGroup.style.display = 'block';
        } else {
          loadGroup.style.display = 'block';
          panelsGroup.style.display = 'block';
        }
      });
    }
  }

  // Smooth scrolling for form anchors
  function initSmoothScroll() {
    d.addEventListener('click', (e) => {
      const link = e.target.closest('a[href^="#"]');
      if (!link) return;
      
      const href = link.getAttribute('href');
      if (href === '#') return;
      
      const target = d.querySelector(href);
      if (!target) return;
      
      e.preventDefault();
      
      const headerHeight = 80;
      const targetPos = target.offsetTop - headerHeight;
      
      window.scrollTo({
        top: targetPos,
        behavior: 'smooth'
      });
    });
  }

  // Form validation helpers
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  function validatePhone(phone) {
    const re = /^[\+]?[1-9][\d]{0,15}$/;
    return re.test(phone.replace(/\s/g, ''));
  }

  // Enhanced validation
  function initEnhancedValidation() {
    const emailField = d.getElementById('email');
    const phoneField = d.getElementById('phone');

    if (emailField) {
      emailField.addEventListener('blur', (e) => {
        const email = e.target.value;
        if (email && !validateEmail(email)) {
          e.target.style.borderColor = '#dc3545';
          showNotification('Please enter a valid email address', 'error');
        } else {
          e.target.style.borderColor = '#e1e5e9';
        }
      });
    }

    if (phoneField) {
      phoneField.addEventListener('blur', (e) => {
        const phone = e.target.value;
        if (phone && !validatePhone(phone)) {
          e.target.style.borderColor = '#dc3545';
          showNotification('Please enter a valid phone number', 'error');
        } else {
          e.target.style.borderColor = '#e1e5e9';
        }
      });
    }
  }

  // Notification system
  function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existing = d.querySelector('.notification');
    if (existing) existing.remove();

    const notification = d.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
      <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : 'fa-info-circle'}"></i>
      <span>${message}</span>
      <button class="notification-close">&times;</button>
    `;

    // Add styles
    notification.style.cssText = `
      position: fixed;
      top: 20px;
      right: 20px;
      background: ${type === 'success' ? '#d4edda' : type === 'error' ? '#f8d7da' : '#d1ecf1'};
      color: ${type === 'success' ? '#155724' : type === 'error' ? '#721c24' : '#0c5460'};
      padding: 12px 16px;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      z-index: 10000;
      display: flex;
      align-items: center;
      gap: 8px;
      max-width: 400px;
      animation: slideIn 0.3s ease;
    `;

    d.body.appendChild(notification);

    // Auto remove after 5 seconds
    setTimeout(() => {
      if (notification.parentNode) {
        notification.remove();
      }
    }, 5000);

    // Close button
    const closeBtn = notification.querySelector('.notification-close');
    closeBtn.addEventListener('click', () => notification.remove());
  }

  // Add slide-in animation
  const style = d.createElement('style');
  style.textContent = `
    @keyframes slideIn {
      from { transform: translateX(100%); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }
  `;
  d.head.appendChild(style);

  // Form analytics (optional)
  function trackFormProgress() {
    const steps = d.querySelectorAll('.form-step');
    steps.forEach((step, index) => {
      const stepNumber = index + 1;
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // Track step view (replace with your analytics)
            console.log(`Step ${stepNumber} viewed`);
          }
        });
      });
      observer.observe(step);
    });
  }

  // Initialize all features
  function init() {
    initMultiStepForm();
    initFileUpload();
    initHelpChat();
    initConditionalLogic();
    initSmoothScroll();
    initEnhancedValidation();
    trackFormProgress();
  }

  // Start when DOM is loaded
  if (d.readyState === 'loading') {
    d.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();