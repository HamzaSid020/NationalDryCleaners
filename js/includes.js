// Include Manager for reusable components
class IncludeManager {
    static async loadComponent(elementId, filePath) {
        try {
            const response = await fetch(filePath);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const html = await response.text();
            const element = document.getElementById(elementId);
            if (element) {
                element.innerHTML = html;
            }
        } catch (error) {
            console.warn(`Failed to load component from ${filePath}:`, error);
        }
    }

    static async loadMultipleComponents(components) {
        const promises = components.map(({ elementId, filePath }) => 
            this.loadComponent(elementId, filePath)
        );
        await Promise.all(promises);
    }

    static async initializePage() {
        // Load all components
        await this.loadMultipleComponents([
            { elementId: 'loader-placeholder', filePath: 'includes/loader.html' },
            { elementId: 'header-placeholder', filePath: 'includes/header.html' },
            { elementId: 'footer-placeholder', filePath: 'includes/footer.html' }
        ]);

        // Initialize loader functionality
        this.initializeLoader();

        // Highlight active navigation item
        this.highlightActiveNav();
    }

    static initializeLoader() {
        const logoLoader = document.getElementById('logoLoader');
        const body = document.body;
        
        if (!logoLoader) return;

        // Add loading class to body
        body.classList.add('loading');
        
        // Minimum display time for loader (1.5 seconds)
        const minDisplayTime = 1500;
        const startTime = Date.now();
        
        function hideLoader() {
            const elapsedTime = Date.now() - startTime;
            const remainingTime = Math.max(0, minDisplayTime - elapsedTime);
            
            setTimeout(function() {
                // Add fade-out class
                logoLoader.classList.add('fade-out');
                
                // Remove loader after fade animation completes
                setTimeout(function() {
                    logoLoader.style.display = 'none';
                    body.classList.remove('loading');
                }, 800); // Match the CSS transition duration
            }, remainingTime);
        }
        
        // Hide loader when page is fully loaded
        if (document.readyState === 'complete') {
            hideLoader();
        } else {
            window.addEventListener('load', hideLoader);
        }
        
        // Fallback: Hide loader after 3 seconds maximum
        setTimeout(hideLoader, 3000);
    }

    static highlightActiveNav() {
        // Get current page path
        const currentPath = window.location.pathname;
        const currentPage = currentPath.split('/').pop() || 'index.html';
        
        // Wait a bit for the header to be loaded
        setTimeout(() => {
            // Desktop navigation
            const navLinks = document.querySelectorAll('.box-nav-ul .item-link');
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === currentPage || (currentPage === '' && href === 'index.html')) {
                    link.closest('.menu-item').classList.add('active');
                }
            });

            // Mobile navigation
            const mobileNavLinks = document.querySelectorAll('#navigation-menu-mb .tf-btn');
            mobileNavLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === currentPage || (currentPage === '' && href === 'index.html')) {
                    link.classList.add('active');
                }
            });
        }, 100);
    }
}

// Auto-initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    IncludeManager.initializePage();
});

// Export for manual use if needed
window.IncludeManager = IncludeManager;