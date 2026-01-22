const menu = document.querySelector('.menu');
if (menu) { // Check if the menu exists
    const menuSection = menu.querySelector('.menu-section');
    const menuArrow = menu.querySelector('.menu-mobile-arrow');
    const menuClosed = menu.querySelector('.menu-mobile-close');
    const menuTrigger = document.querySelector('.menu-mobile-trigger');
    const menuOverlay = document.querySelector('.overlay');
    let subMenu;
    let previousMenu = []; // Stack to keep track of menu navigation

    menuSection.addEventListener('click', (e) => {
        if (!menu.classList.contains('active')) {
            return;
        }

        if (e.target.closest('.menu-item-has-children')) {
            const hasChildren = e.target.closest('.menu-item-has-children');
            showSubMenu(hasChildren);
        }
    });

    menuArrow.addEventListener('click', () => {
        hideSubMenu();
    });

    menuTrigger.addEventListener('click', () => {
        toggleMenu();
    });

    menuClosed.addEventListener('click', () => {
        toggleMenu();
    });

    menuOverlay.addEventListener('click', () => {
        toggleMenu();
    });

    function toggleMenu() {
        menu.classList.toggle('active');
        menuOverlay.classList.toggle('active');
        if (!menu.classList.contains('active')) {
            resetMenu(); // Reset menu when closing
        }
    }

    function showSubMenu(hasChildren) {
        subMenu = hasChildren.querySelector('.menu-subs');
        if (subMenu) {
            previousMenu.push(subMenu); // Store the current subMenu in the stack
            subMenu.classList.add('active');
            subMenu.style.animation = 'slideLeft 0.5s ease forwards';
            const menuTitle = hasChildren.querySelector('i').parentNode.childNodes[0].textContent;
            menu.querySelector('.menu-mobile-title').innerHTML = menuTitle;
            menu.querySelector('.menu-mobile-header').classList.add('active');
            menuArrow.style.display = 'block'; // Ensure back button is visible
        }
    }

    function hideSubMenu() {
        if (previousMenu.length > 0) {
            subMenu = previousMenu.pop(); // Go back to the previous menu
            subMenu.style.animation = 'slideRight 0.5s ease forwards';
            setTimeout(() => {
                subMenu.classList.remove('active');
            }, 300);

            if (previousMenu.length === 0) {
                menu.querySelector('.menu-mobile-title').innerHTML = '';
                menu.querySelector('.menu-mobile-header').classList.remove('active');
                menuArrow.style.display = 'none'; // Hide back button when at root
            }
        }
    }

    function resetMenu() {
        // Reset menu state when closing
        previousMenu = [];
        menu.querySelector('.menu-mobile-title').innerHTML = '';
        menu.querySelector('.menu-mobile-header').classList.remove('active');
        menuArrow.style.display = 'none'; // Hide back button
    }

    window.onresize = function () {
        if (this.innerWidth > 991) {
            if (menu.classList.contains('active')) {
                toggleMenu();
            }
        }
    };
}