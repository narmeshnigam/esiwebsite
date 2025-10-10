// Interactions for Services Overview page
(function () {
  const d = document;

  // Compare services mini-tool
  const compareBar = d.getElementById('compare-bar');
  const selectedWrap = d.getElementById('compare-selected');
  const openBtn = d.getElementById('compare-open');
  const clearBtn = d.getElementById('compare-clear');
  const hideBtn = d.getElementById('compare-hide');

  const selected = new Set();

  function updateBar() {
    if (!compareBar) return;
    selectedWrap.innerHTML = '';
    selected.forEach((name) => {
      const badge = d.createElement('span');
      badge.className = 'compare-badge';
      badge.textContent = name;
      badge.setAttribute('data-name', name);
      const rm = d.createElement('button');
      rm.className = 'compare-remove';
      rm.innerHTML = '&times;';
      rm.addEventListener('click', () => {
        selected.delete(name);
        updateBar();
        updateToggles();
      });
      badge.appendChild(rm);
      selectedWrap.appendChild(badge);
    });

    const has = selected.size > 0;
    compareBar.classList.toggle('active', has);

    if (openBtn) {
      openBtn.classList.toggle('disabled', selected.size < 2);
      openBtn.setAttribute('aria-disabled', String(selected.size < 2));
      // build query string for compare page
      const params = new URLSearchParams();
      Array.from(selected).forEach((s) => params.append('s', s));
      openBtn.href = '/compare-services.php?' + params.toString();
    }
  }

  function updateToggles() {
    d.querySelectorAll('.compare-toggle').forEach((btn) => {
      const name = btn.getAttribute('data-service');
      if (!name) return;
      const active = selected.has(name);
      btn.classList.toggle('active', active);
      btn.textContent = active ? 'Remove' : 'Compare';
    });
  }

  d.addEventListener('click', (e) => {
    const t = e.target;

    // compare toggle
    if (t.classList && t.classList.contains('compare-toggle')) {
      const name = t.getAttribute('data-service');
      if (name) {
        if (selected.has(name)) selected.delete(name); else selected.add(name);
        updateBar();
        updateToggles();
      }
    }

    // modal open triggers
    if (t.classList && t.classList.contains('modal-trigger')) {
      const key = t.getAttribute('data-modal');
      const modal = d.getElementById('modal-' + key);
      if (modal) {
        modal.classList.add('open');
        modal.setAttribute('aria-hidden', 'false');
      }
    }

    // modal close
    if (t.hasAttribute && t.hasAttribute('data-close')) {
      const modal = t.closest('.modal');
      if (modal) {
        modal.classList.remove('open');
        modal.setAttribute('aria-hidden', 'true');
      }
    }
  });

  if (clearBtn) clearBtn.addEventListener('click', () => { selected.clear(); updateBar(); updateToggles(); });
  if (hideBtn) hideBtn.addEventListener('click', () => { compareBar.classList.remove('active'); });

  // Init
  updateBar();
  updateToggles();
})();
