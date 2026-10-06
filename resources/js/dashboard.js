// Dashboard Interactive Features

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all dashboard features
    initializeCounters();
    initializeTooltips();
    initializeNotifications();
    initializeCharts();
    initializeSearchFilters();
    initializeThemeToggle();
});

// Animated Counters
function initializeCounters() {
    const counters = document.querySelectorAll('[data-counter]');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-counter'));
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        // Start animation when element is in viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCounter();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(counter);
    });
}

// Tooltips
function initializeTooltips() {
    const tooltipElements = document.querySelectorAll('[data-tooltip]');
    
    tooltipElements.forEach(element => {
        element.addEventListener('mouseenter', showTooltip);
        element.addEventListener('mouseleave', hideTooltip);
    });
}

function showTooltip(event) {
    const element = event.target;
    const tooltipText = element.getAttribute('data-tooltip');
    
    const tooltip = document.createElement('div');
    tooltip.className = 'absolute z-50 px-3 py-2 text-sm text-white bg-gray-900 rounded-lg shadow-lg';
    tooltip.textContent = tooltipText;
    tooltip.id = 'tooltip';
    
    document.body.appendChild(tooltip);
    
    const rect = element.getBoundingClientRect();
    tooltip.style.left = rect.left + (rect.width / 2) - (tooltip.offsetWidth / 2) + 'px';
    tooltip.style.top = rect.top - tooltip.offsetHeight - 8 + 'px';
}

function hideTooltip() {
    const tooltip = document.getElementById('tooltip');
    if (tooltip) {
        tooltip.remove();
    }
}

// Notifications
function initializeNotifications() {
    // Auto-hide success/error messages
    const notifications = document.querySelectorAll('.notification');
    
    notifications.forEach(notification => {
        setTimeout(() => {
            notification.style.opacity = '0';
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 5000);
    });
}

// Simple Charts (if needed)
function initializeCharts() {
    const chartElements = document.querySelectorAll('[data-chart]');
    
    chartElements.forEach(element => {
        const type = element.getAttribute('data-chart');
        const data = JSON.parse(element.getAttribute('data-chart-data') || '[]');
        
        if (type === 'progress') {
            createProgressChart(element, data);
        }
    });
}

function createProgressChart(element, data) {
    const percentage = data.percentage || 0;
    const progressBar = element.querySelector('.progress-bar');
    
    if (progressBar) {
        setTimeout(() => {
            progressBar.style.width = percentage + '%';
        }, 500);
    }
}

// Search and Filter
function initializeSearchFilters() {
    const searchInputs = document.querySelectorAll('[data-search]');
    
    searchInputs.forEach(input => {
        input.addEventListener('input', handleSearch);
    });
    
    const filterButtons = document.querySelectorAll('[data-filter]');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', handleFilter);
    });
}

function handleSearch(event) {
    const searchTerm = event.target.value.toLowerCase();
    const targetSelector = event.target.getAttribute('data-search');
    const items = document.querySelectorAll(targetSelector);
    
    items.forEach(item => {
        const text = item.textContent.toLowerCase();
        if (text.includes(searchTerm)) {
            item.style.display = '';
            item.classList.add('fade-in');
        } else {
            item.style.display = 'none';
            item.classList.remove('fade-in');
        }
    });
}

function handleFilter(event) {
    const filterValue = event.target.getAttribute('data-filter');
    const targetSelector = event.target.getAttribute('data-filter-target');
    const items = document.querySelectorAll(targetSelector);
    
    // Update active filter button
    document.querySelectorAll('[data-filter]').forEach(btn => {
        btn.classList.remove('active');
    });
    event.target.classList.add('active');
    
    items.forEach(item => {
        const itemValue = item.getAttribute('data-filter-value');
        if (filterValue === 'all' || itemValue === filterValue) {
            item.style.display = '';
            item.classList.add('scale-in');
        } else {
            item.style.display = 'none';
            item.classList.remove('scale-in');
        }
    });
}

// Theme Toggle
function initializeThemeToggle() {
    const themeToggle = document.getElementById('theme-toggle');
    
    if (themeToggle) {
        themeToggle.addEventListener('click', toggleTheme);
        
        // Set initial theme
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.documentElement.classList.toggle('dark', savedTheme === 'dark');
        }
    }
}

function toggleTheme() {
    const isDark = document.documentElement.classList.toggle('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
}

// Utility Functions
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg text-white notification-slide ${
        type === 'success' ? 'bg-green-500' : 'bg-red-500'
    }`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.opacity = '0';
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

function confirmAction(message, callback) {
    if (confirm(message)) {
        callback();
    }
}

// Loading States
function showLoading(element) {
    element.classList.add('opacity-50', 'pointer-events-none');
    element.innerHTML += '<div class="loading-spinner"></div>';
}

function hideLoading(element) {
    element.classList.remove('opacity-50', 'pointer-events-none');
    const spinner = element.querySelector('.loading-spinner');
    if (spinner) {
        spinner.remove();
    }
}

// Form Validation
function validateForm(formElement) {
    const inputs = formElement.querySelectorAll('input[required], select[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('border-red-500');
            isValid = false;
        } else {
            input.classList.remove('border-red-500');
        }
    });
    
    return isValid;
}

// Export functions for global use
window.dashboardUtils = {
    showNotification,
    confirmAction,
    showLoading,
    hideLoading,
    validateForm
};
