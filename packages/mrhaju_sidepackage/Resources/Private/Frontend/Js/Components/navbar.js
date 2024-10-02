

// Sticky Navigation. If the user scrolls down, the navigation will be fixed at the top of the page.
document.addEventListener('DOMContentLoaded', function() {
  const navToggle = document.querySelector('.navi');

  window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
      navToggle.classList.add('sticky');
    } else {
      navToggle.classList.remove('sticky');
    }
  });

});

// Mobile Navigation. If the user clicks on the hamburger icon, the scrollbar will be shown or hidden.
document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.querySelector('input[type="checkbox"]');

  menuToggle.addEventListener('change', function () {
    if (this.checked) {
      document.documentElement.classList.add('no-scroll');
    } else {
      document.documentElement.classList.remove('no-scroll');
    }
  });
});

// Mobile Submenu Toggle. If the submenu is hidden, it will be shown or closed on touchaction.
document.addEventListener('DOMContentLoaded', () => {
  const menuItems = document.querySelectorAll('#navbar-mobile .menu-item');

  menuItems.forEach(item => {
    const link = item.querySelector('.menu-item__link');
    const subMenu = item.querySelector('.sub-menu');

    if (subMenu) {
      //touch event für mobile geräte
      link.addEventListener('touchstart', (e) => {
        e.preventDefault(); //verhindert das Ausführen des links
        toggleSubMenu(subMenu);
      });
      // click event für desktop geräte
      link.addEventListener('click', (e) => {
        e.preventDefault(); //verhindert das Ausführen des links
        toggleSubMenu(subMenu);
      });
    }
  });

  function toggleSubMenu(subMenu) {
    // überprüft, ob die klasse d-none vorhanden ist und fügt oder entfernt die klasse d-flex
    if (subMenu.classList.contains('d-none')) {
      subMenu.classList.remove('d-none');
      subMenu.classList.add('d-flex');
    } else {
      subMenu.classList.add('d-none');
      subMenu.classList.remove('d-flex');
    }
  }
});


// Mobile submenu toggle. If the submenu is hidden, it will be shown or closed when mouse enters the menu item.
// document.addEventListener('DOMContentLoaded', function() {
//   const menuItems = document.querySelectorAll('.menu-item');
//
//   menuItems.forEach(function(menuItem) {
//     const subMenu = menuItem.querySelector('.sub-menu');
//     if (subMenu) {
//       menuItem.addEventListener('mouseenter', function() {
//         subMenu.classList.remove('d-none');
//         subMenu.classList.add('d-flex');
//       });
//
//       menuItem.addEventListener('mouseleave', function() {
//         subMenu.classList.remove('d-flex');
//         subMenu.classList.add('d-none');
//       });
//     }
//   });
// });
