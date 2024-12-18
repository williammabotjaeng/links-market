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
    
    window.makeActiveTab = function(tabId) {
        
        document.querySelectorAll('.tab').forEach(tab => {
            tab.style.display = 'none'; 
            tab.classList.remove('is-active');
        });

      
        const activeTab = document.getElementById(tabId);
        if (activeTab) {
            activeTab.style.display = 'block'; 
            activeTab.classList.add('is-active');
        }

     
        document.querySelectorAll('.tabs li').forEach(li => {
            li.classList.remove('is-active');
        });
        const activeTabButton = Array.from(document.querySelectorAll('.tabs button')).find(button => button.getAttribute('data-tab') === tabId);
        if (activeTabButton) {
            activeTabButton.parentElement.classList.add('is-active');
        }
    };

  
    makeActiveTab('all-tasks');
});


document.addEventListener('DOMContentLoaded', function() {

    window.activateTab = function(tabId) {
       
        document.querySelectorAll('.tab').forEach(tab => {
            tab.style.display = 'none'; 
            tab.classList.remove('is-active');
        });

        const activeTab = document.getElementById(tabId);
        if (activeTab) {
            activeTab.style.display = 'block'; 
            activeTab.classList.add('is-active');
        }

        document.querySelectorAll('.tabs li').forEach(li => {
            li.classList.remove('is-active');
        });
        const activeTabButton = Array.from(document.querySelectorAll('.tabs a')).find(link => link.getAttribute('data-tab') === tabId);
        if (activeTabButton) {
            activeTabButton.parentElement.classList.add('is-active');
        }
    };

    activateTab('account-settings');
});