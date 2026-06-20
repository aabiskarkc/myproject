import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Smooth scroll + close mobile nav on link click
const navToggle = document.getElementById('nav-toggle');
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        const target = document.querySelector(a.getAttribute('href'));
        if (!target) return;
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        if (navToggle) navToggle.checked = false;
    });
});

// Navbar background on scroll
const navbar = document.querySelector('.navbar');
const onScroll = () => navbar.classList.toggle('scrolled', window.scrollY > 40);
onScroll();
window.addEventListener('scroll', onScroll, { passive: true });

// Fade-in elements and skill bars when they enter view
const fadeIn = new IntersectionObserver(entries => {
    entries.forEach(el => {
        if (el.isIntersecting) {
            el.target.classList.add('is-visible');
            fadeIn.unobserve(el.target);
        }
    });
}, { threshold: 0.15 });
document.querySelectorAll('.reveal').forEach(el => fadeIn.observe(el));

const fillBars = new IntersectionObserver(entries => {
    entries.forEach(el => {
        if (el.isIntersecting) {
            el.target.classList.add('is-filled');
            fillBars.unobserve(el.target);
        }
    });
}, { threshold: 0.4 });
document.querySelectorAll('.fill').forEach(bar => fillBars.observe(bar));