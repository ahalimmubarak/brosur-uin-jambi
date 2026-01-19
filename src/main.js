const toggleBtn = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const iconOpen = document.getElementById('icon-open');
const iconClose = document.getElementById('icon-close');

/* TOGGLE MENU */
toggleBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    iconOpen.classList.toggle('hidden');
    iconClose.classList.toggle('hidden');
});

/* SUBMENU TOGGLE */
document.querySelectorAll('.mobile-menu .menu-item-has-children > a')
    .forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            link.parentElement.classList.toggle('open');
        });
    });

/* CLICK OUTSIDE CLOSE */
document.addEventListener('click', e => {
    if (!toggleBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
        mobileMenu.classList.add('hidden');
        iconOpen.classList.remove('hidden');
        iconClose.classList.add('hidden');
    }
});

const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
        header.classList.add('bg-white/80', 'backdrop-blur-lg');
        header.classList.remove('bg-white/60');
    } else {
        header.classList.remove('bg-white/80', 'backdrop-blur-lg');
        header.classList.add('bg-white/60');
    }
});

window.addEventListener('scroll', () => {
    header.classList.toggle('shadow', window.scrollY > 10);
});
