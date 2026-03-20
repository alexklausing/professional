/* professional/js/accordion.js */

/**
 * Setup Accordion Buttons
 */
const setupAccordions = () => {
    const accordions = document.querySelectorAll('button.company');
    console.log("Found accordion buttons:", accordions.length);

    if (accordions.length > 0) {
        accordions.forEach(button => {
            if(button.dataset.listenerAttached) return; // Prevent attaching multiple listeners

            button.addEventListener('click', () => {
                console.log("Button clicked:", button.innerText);
                button.classList.toggle('active');

                const content = button.nextElementSibling;

                if (content && content.classList.contains('content')) {
                    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                        content.style.maxHeight = '0px'; // Collapse
                    } else {
                        content.style.maxHeight = (content.scrollHeight + 10) + "px"; // Expand
                    }
                } else {
                    console.error("Error: Could not find the '.content' div immediately after the button.", button);
                }
            });
            button.dataset.listenerAttached = 'true';
        });
    } else {
        console.warn("Warning: No elements with the class 'company' were found.");
    }
}

// Wait for includes to finish before setting up
if (typeof window.runIncludes === 'function') {
    window.runIncludes().then(setupAccordions);
} else {
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', setupAccordions);
    } else {
        setupAccordions();
    }
}
