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

  // Reveal-on-scroll
  const revealEls = document.querySelectorAll('.reveal');
  if (revealEls.length) {
    if ('IntersectionObserver' in window) {
      const io = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            const delay = parseInt(el.dataset.delay || '0', 10);
            el.style.setProperty('--rev-delay', delay);
            el.classList.add('is-in');
            io.unobserve(el);
          });
        },
        { rootMargin: '0px 0px -8% 0px', threshold: 0.05 }
      );
      revealEls.forEach((el) => io.observe(el));
    } else {
      revealEls.forEach((el) => el.classList.add('is-in'));
    }
  }

  // Stat counters
  const counters = document.querySelectorAll('[data-count]');
  if (counters.length && 'IntersectionObserver' in window) {
    const formatNum = (n) => {
      if (n >= 1000) return n.toLocaleString('en-US');
      return String(n);
    };
    const animateCount = (el) => {
      const target = parseInt(el.dataset.count, 10) || 0;
      const suffix = el.dataset.suffix || '';
      const duration = 1400;
      const start = performance.now();
      const step = (now) => {
        const t = Math.min(1, (now - start) / duration);
        const eased = 1 - Math.pow(1 - t, 3);
        const value = Math.round(target * eased);
        el.textContent = formatNum(value) + suffix;
        if (t < 1) requestAnimationFrame(step);
      };
      requestAnimationFrame(step);
    };

    const cio = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          animateCount(entry.target);
          cio.unobserve(entry.target);
        });
      },
      { threshold: 0.4 }
    );
    counters.forEach((el) => cio.observe(el));
  }

  // Header shadow + floating CTA visibility on scroll
  const header = document.querySelector('.site-header');
  const floatingCta = document.querySelector('.floating-cta');
  const onScroll = () => {
    const y = window.scrollY || window.pageYOffset;
    if (header) header.classList.toggle('scrolled', y > 8);
    if (floatingCta) floatingCta.classList.toggle('show', y > 600);
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

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
