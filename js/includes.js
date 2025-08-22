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

            { elementId: 'header-placeholder', filePath: 'includes/header.html' },
            { elementId: 'footer-placeholder', filePath: 'includes/footer.html' }
        ]);

        // Highlight active navigation item
        this.highlightActiveNav();
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