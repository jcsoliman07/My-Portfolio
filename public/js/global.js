// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');

        // Skip if the href is just "#"
        if (!targetId || targetId === "#") {
            return;
        }

        if (mobileMenu) {
            mobileMenu.classList.add('hidden');
        }

        const targetSection = document.querySelector(targetId);

        if (targetSection) {
            targetSection.classList.add('animate-fadeIn');

            targetSection.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});


    // Animation on scroll
    const sections = document.querySelectorAll('section');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeIn');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    sections.forEach(section => {
        observer.observe(section);
    });
});
