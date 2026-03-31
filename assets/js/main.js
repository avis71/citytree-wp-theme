/* CityTree - Main JS */

document.addEventListener('DOMContentLoaded', function () {
  // ---- Mobile nav: close when clicking outside ----
  var navbarToggler = document.querySelector('.navbar-toggler');
  var navbarCollapse = document.querySelector('.navbar-collapse');

  document.addEventListener('click', function (e) {
    if (!navbarCollapse) return;
    if (
      navbarCollapse.classList.contains('show') &&
      !navbarCollapse.contains(e.target) &&
      e.target !== navbarToggler
    ) {
      navbarToggler.click();
    }
  });

  // ---- Stop propagation inside dropdowns so they don't auto-close ----
  var dropdownMenus = document.querySelectorAll('.dropdown-menu');
  dropdownMenus.forEach(function (menu) {
    menu.addEventListener('click', function (e) {
      e.stopPropagation();
    });
  });

  // ---- Simple lightbox for tour images ----
  initLightbox();
});

function initLightbox() {
  // Create lightbox overlay
  var overlay = document.createElement('div');
  overlay.id = 'ct-lightbox';
  overlay.style.cssText =
    'display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.85);z-index:99999;align-items:center;justify-content:center;cursor:pointer;';

  var img = document.createElement('img');
  img.style.cssText = 'max-width:90%;max-height:90%;border-radius:4px;';
  overlay.appendChild(img);

  var closeBtn = document.createElement('button');
  closeBtn.innerHTML = '&times;';
  closeBtn.style.cssText =
    'position:absolute;top:20px;right:30px;background:none;border:none;color:white;font-size:2.5rem;cursor:pointer;line-height:1;';
  overlay.appendChild(closeBtn);

  document.body.appendChild(overlay);

  // Bind to all tour gallery images
  document.querySelectorAll('[data-lightbox-src]').forEach(function (el) {
    el.style.cursor = 'pointer';
    el.addEventListener('click', function () {
      img.src = el.getAttribute('data-lightbox-src');
      overlay.style.display = 'flex';
    });
  });

  overlay.addEventListener('click', function (e) {
    if (e.target === overlay || e.target === closeBtn) {
      overlay.style.display = 'none';
      img.src = '';
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      overlay.style.display = 'none';
      img.src = '';
    }
  });
}
