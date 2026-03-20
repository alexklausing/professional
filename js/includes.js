/* professional/js/includes.js */

/**
 * Handles loading HTML components into placeholders.
 */
const ConductorIncludes = (() => {
    let includesPromise = null;

    async function loadHtmlInclude(fileUrl, targetId, mode = 'replace') {
        try {
            const response = await fetch(fileUrl);
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status} ${response.statusText}`);
            }
            const htmlText = await response.text();

            if (mode === 'head') {
                const parser = new DOMParser();
                const doc = parser.parseFromString(htmlText, 'text/html');
                const headContent = doc.head.childNodes;
                const fragment = document.createDocumentFragment();

                headContent.forEach(node => {
                    const clonedNode = node.cloneNode(true);
                    const nodeName = clonedNode.nodeName.toUpperCase();
                    const isCriticalMeta = nodeName === 'META' && ['description', 'author', 'viewport', 'charset'].includes(clonedNode.getAttribute('name')?.toLowerCase() || clonedNode.getAttribute('charset')?.toLowerCase());

                    if (nodeName !== 'TITLE' && !isCriticalMeta) {
                         let exists = false;
                         if (nodeName === 'LINK' && clonedNode.hasAttribute('href')) {
                             exists = document.head.querySelector(`link[href="${clonedNode.getAttribute('href')}"]`);
                         } else if (nodeName === 'SCRIPT' && clonedNode.hasAttribute('src')) {
                             exists = document.head.querySelector(`script[src="${clonedNode.getAttribute('src')}"]`);
                         }
                         if (!exists) {
                             fragment.appendChild(clonedNode);
                         }
                    }
                });
                document.head.appendChild(fragment);

            } else {
                if (!targetId) return;
                const targetElement = document.getElementById(targetId);
                if (!targetElement) return;

                const contentToInsert = htmlText;

                switch (mode) {
                    case 'append':
                        targetElement.insertAdjacentHTML('beforeend', contentToInsert);
                        break;
                    case 'prepend':
                        targetElement.insertAdjacentHTML('afterbegin', contentToInsert);
                        break;
                    case 'replace':
                    default:
                        targetElement.innerHTML = contentToInsert;
                        // Re-run scripts within the loaded content
                        targetElement.querySelectorAll('script').forEach(script => {
                            const newScript = document.createElement('script');
                            script.getAttributeNames().forEach(attr => newScript.setAttribute(attr, script.getAttribute(attr)));
                            if (script.textContent) {
                                newScript.textContent = script.textContent;
                            }
                            script.parentNode.replaceChild(newScript, script);
                        });
                        break;
                }
            }
        } catch (error) {
            console.error(`Error loading include ${fileUrl}:`, error);
            if (mode !== 'head' && targetId) {
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                     targetElement.innerHTML = `<p class="text-red-500 p-4">Error loading content (${fileUrl})</p>`;
                }
            }
        }
    }

    function run() {
        if (includesPromise) return includesPromise;

        // Detect base path for GitHub Pages subfolder compatibility
        // If the script is loaded from /js/includes.js, the root is /
        // If it's loaded from /repo/js/includes.js, the root is /repo/
        const script = document.querySelector('script[src*="js/includes.js"]');
        let basePath = '/';
        if (script) {
            const src = script.getAttribute('src');
            if (src.startsWith('http')) {
                const url = new URL(src);
                basePath = url.pathname.replace('js/includes.js', '');
            } else {
                basePath = src.replace('js/includes.js', '');
            }
        }
        // Ensure basePath ends with / and doesn't have duplicate slashes
        basePath = (basePath.startsWith('/') ? '' : '/') + basePath;
        if (!basePath.endsWith('/')) basePath += '/';
        basePath = basePath.replace(/\/+/g, '/');

        console.log(`ConductorIncludes: Using base path: ${basePath}`);

        includesPromise = Promise.all([
            loadHtmlInclude(`${basePath}assets/head.html`, null, 'head'),
            loadHtmlInclude(`${basePath}assets/navigation.html`, 'nav-placeholder', 'replace'),
            loadHtmlInclude(`${basePath}assets/footer.html`, 'footer-placeholder', 'replace')
        ]).then(() => {
            // Post-load tasks
            const yearSpan = document.getElementById('copyright-year');
            if (yearSpan) {
                yearSpan.textContent = new Date().getFullYear();
            }
        });
        return includesPromise;
    }

    return { run };
})();

// Auto-run on load
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => ConductorIncludes.run());
} else {
    ConductorIncludes.run();
}

// Export for pages that need to wait for it
window.runIncludes = () => ConductorIncludes.run();
