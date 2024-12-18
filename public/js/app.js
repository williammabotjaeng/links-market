// Navbar Navigation 
document.addEventListener('DOMContentLoaded', () => {
    const burgerButton = document.querySelector('.navbar-burger');
    const navbarMenu = document.getElementById('navbarBasicExample');

    if (burgerButton) {
        burgerButton.addEventListener('click', () => {
            // Toggle the 'is-active' class on the navbar menu
            navbarMenu.classList.toggle('is-active');
            // Toggle the 'is-active' class on the burger button
            burgerButton.classList.toggle('is-active');
            // Update aria-expanded attribute
            const expanded = burgerButton.getAttribute('aria-expanded') === 'true';
            burgerButton.setAttribute('aria-expanded', !expanded);
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    // Define the function in the global scope
    window.makeActiveTab = function(tabId) {
        // Hide all tabs
        document.querySelectorAll('.tab').forEach(tab => {
            tab.style.display = 'none'; 
            tab.classList.remove('is-active');
        });

        // Show the selected tab
        const activeTab = document.getElementById(tabId);
        if (activeTab) {
            activeTab.style.display = 'block'; 
            activeTab.classList.add('is-active');
        }

        // Update the active tab button
        document.querySelectorAll('.tabs li').forEach(li => {
            li.classList.remove('is-active');
        });
        const activeTabButton = Array.from(document.querySelectorAll('.tabs button')).find(button => button.getAttribute('data-tab') === tabId);
        if (activeTabButton) {
            activeTabButton.parentElement.classList.add('is-active');
        }
    };

    // Initialize the first tab as active
    makeActiveTab('all-tasks');
});