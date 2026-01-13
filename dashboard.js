function toggleMenu(element) {
    event.preventDefault();
    const menuGroup = element.parentElement;
    const allMenuGroups = document.querySelectorAll('.menu-group');
    
    allMenuGroups.forEach(group => {
        if (group !== menuGroup && group.classList.contains('active')) {
            group.classList.remove('active');
        }
    });
    
    menuGroup.classList.toggle('active');
}

document.addEventListener('DOMContentLoaded', function() {
    const sidebarLinks = document.querySelectorAll('.sidebar a:not(.menu-title)');
    
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('href') === '#') {
                e.preventDefault();
            }
            
           
            sidebarLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });
    const activeSubmenuLink = document.querySelector('.sub-menu a.active');
    if (activeSubmenuLink) {
        const menuGroup = activeSubmenuLink.closest('.menu-group');
        if (menuGroup) {
            menuGroup.classList.add('active');
        }
    }
});


const menuBtn = document.getElementById('menu-btn');
const sidebar = document.getElementById('sidebar');
const closeBtn = document.getElementById('close-btn');

// Buka sidebar (mobile)
if (menuBtn) {
    menuBtn.addEventListener('click', function() {
        sidebar.classList.add('active');
    });
}

// Tutup sidebar (mobile)
if (closeBtn) {
    closeBtn.addEventListener('click', function() {
        sidebar.classList.remove('active');
    });
}

// Tutup sidebar saat klik di luar (mobile)
document.addEventListener('click', function(e) {
    if (window.innerWidth <= 768) {
        if (!sidebar.contains(e.target) && !e.target.closest('#menu-btn')) {
            sidebar.classList.remove('active');
        }
    }
});

let resizeTimer;
window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        if (window.innerWidth > 768) {
            sidebar.classList.remove('active');
        }
    }, 250);
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#' && document.querySelector(href)) {
            e.preventDefault();
            document.querySelector(href).scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});


function highlightCurrentPage() {
    const currentPath = window.location.pathname;
    const sidebarLinks = document.querySelectorAll('.sidebar a');
    
    sidebarLinks.forEach(link => {
        const linkPath = new URL(link.href, window.location.origin).pathname;
        if (linkPath === currentPath) {
            link.classList.add('active');
            
            
            const menuGroup = link.closest('.menu-group');
            if (menuGroup) {
                menuGroup.classList.add('active');
            }
        }
    });
}

document.addEventListener('DOMContentLoaded', highlightCurrentPage);