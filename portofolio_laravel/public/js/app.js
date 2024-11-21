        
        // Select the hamburger and nav-links elements
        const hamburger = document.getElementById('hamburger-icon');
        const navLinks = document.getElementById('nav-links');

        // Toggle the nav-links visibility when the hamburger menu is clicked
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Close the nav-links when any link is clicked on mobile
        const navItems = document.querySelectorAll('.nav-links a');

        navItems.forEach(item => {
            item.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });

        // Select all service cards and add glow effect on click
        const serviceCards = document.querySelectorAll('.service-card');

        serviceCards.forEach(card => {
            card.addEventListener('click', () => {
                serviceCards.forEach(otherCard => {
                    if (otherCard !== card) {
                        otherCard.classList.remove('clicked');
                    }
                });
                card.classList.toggle('clicked');
            });
        });