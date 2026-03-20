/* professional/js/navigation.js */

/**
 * Encapsulated Hamburger Logic
 */
function setupHamburger() {
    const menuButton = document.getElementById("menubtn");
    const navContainer = document.getElementById("nav-container");
    const lines = document.querySelectorAll('.hamburger .line');

    if (!menuButton || !navContainer || lines.length !== 3) {
        // If elements aren't found, maybe they are still loading?
        // But we should have waited for runIncludes.
        console.warn("Hamburger elements not found. Navigation may not be loaded yet.");
        return;
    }

    const applyMobileNavStyles = (show) => {
        if (show) {
            navContainer.style.display = 'flex';
            requestAnimationFrame(() => {
                navContainer.classList.add('mobile-nav-active');
            });
            lines[0].classList.add('rotate-45', 'translate-y-[0.6rem]');
            lines[1].classList.add('opacity-0', 'translate-x-4');
            lines[2].classList.add('-rotate-45', '-translate-y-[0.7rem]');
        } else {
            navContainer.classList.remove('mobile-nav-active');
            navContainer.addEventListener('transitionend', () => {
               if (!menuButton.checked) navContainer.style.display = 'none';
            }, { once: true });

            lines[0].classList.remove('rotate-45', 'translate-y-[0.6rem]');
            lines[1].classList.remove('opacity-0', 'translate-x-4');
            lines[2].classList.remove('-rotate-45', '-translate-y-[0.7rem]');
        }
    };

    menuButton.addEventListener('change', () => {
        applyMobileNavStyles(menuButton.checked);
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1280) {
            navContainer.style.display = '';
            navContainer.classList.remove('mobile-nav-active');
            menuButton.checked = false;
            lines[0].classList.remove('rotate-45', 'translate-y-[0.6rem]');
            lines[1].classList.remove('opacity-0', 'translate-x-4');
            lines[2].classList.remove('-rotate-45', '-translate-y-[0.7rem]');
        } else {
            applyMobileNavStyles(menuButton.checked);
            if(!menuButton.checked) navContainer.style.display = 'none';
        }
    });

    if (window.innerWidth < 1280 && !menuButton.checked) {
        navContainer.style.display = 'none';
    }
    
    console.log("Navigation: Hamburger setup complete.");
}

// Wait for includes to finish before setting up
if (typeof window.runIncludes === 'function') {
    window.runIncludes().then(setupHamburger);
} else {
    // Fallback if includes.js isn't loaded or fails
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', setupHamburger);
    } else {
        setupHamburger();
    }
}
