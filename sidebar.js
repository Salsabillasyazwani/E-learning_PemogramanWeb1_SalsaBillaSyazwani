const sidebar = document.getElementById('sidebar');
const closeBtn = document.getElementById('close-btn');

closeBtn.addEventListener('click', () => {
    sidebar.classList.toggle('active'); 
});
const hamburgerBtn = document.createElement('div');
hamburgerBtn.id = 'hamburger-btn';
hamburgerBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
hamburgerBtn.style.position = 'fixed';
hamburgerBtn.style.top = '15px';
hamburgerBtn.style.left = '15px';
hamburgerBtn.style.fontSize = '24px';
hamburgerBtn.style.cursor = 'pointer';
hamburgerBtn.style.zIndex = '999';
document.body.appendChild(hamburgerBtn);

hamburgerBtn.addEventListener('click', () => {
    sidebar.classList.toggle('active');
});
const menuGroups = document.querySelectorAll('.menu-group');

menuGroups.forEach(group => {
    const title = group.querySelector('.menu-title');
    const subMenu = group.querySelector('.sub-menu');

    title.addEventListener('click', () => {
        group.classList.toggle('active');
        menuGroups.forEach(otherGroup => {
            if(otherGroup !== group) {
                otherGroup.classList.remove('active');
            }
        });
    });
});

const sidebarLinks = document.querySelectorAll('.sidebar a');

sidebarLinks.forEach(link => {
    const href = link.getAttribute('href');
    if(href !== '#' && window.location.pathname.includes(href)) {
        link.classList.add('active');
    } else {
        link.classList.remove('active');
    }
});
