(function () {
  const toggle = document.querySelector('.nav-toggle');
  const nav = document.getElementById('primary-nav');
  const navLinks = nav ? nav.querySelectorAll('a') : [];

  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      const open = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    navLinks.forEach((link) => {
      link.addEventListener('click', () => {
        if (nav.classList.contains('open')) {
          nav.classList.remove('open');
          toggle.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }

  const sections = Array.from(document.querySelectorAll('main section[id]'));
  if (sections.length && 'IntersectionObserver' in window) {
    const linkMap = new Map();
    navLinks.forEach((a) => {
      const href = a.getAttribute('href') || '';
      if (href.startsWith('#')) linkMap.set(href.slice(1), a);
    });

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          const link = linkMap.get(entry.target.id);
          if (!link) return;
          if (entry.isIntersecting) {
            navLinks.forEach((a) => a.classList.remove('active'));
            link.classList.add('active');
          }
        });
      },
      { rootMargin: '-40% 0px -55% 0px', threshold: 0 }
    );

    sections.forEach((s) => observer.observe(s));
  }

  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  window.PHCX = window.PHCX || {};
  window.PHCX.submitForm = function (event) {
    event.preventDefault();
    const form = event.currentTarget;
    const status = form.querySelector('.form-status');
    if (!form.checkValidity()) {
      if (status) {
        status.className = 'form-status error';
        status.textContent = 'Please complete the required fields.';
      }
      form.reportValidity();
      return false;
    }
    if (status) {
      status.className = 'form-status success';
      status.textContent = 'Thanks! Our care team will reach out within one business day.';
    }
    form.reset();
    return false;
  };
})();
