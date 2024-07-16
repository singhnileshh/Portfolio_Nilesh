function toggleTheme() {
    const body = document.body;
    body.classList.toggle('light-mode');
}

function toggleMenu() {
    const menu = document.querySelector('nav ul');
    menu.classList.toggle('active');
}

var typed = new Typed('#element', {
    strings: ['Web Developer', 'Graphic Designer', 'Data Analyst'],
    typeSpeed: 85,
    backSpeed: 50,
    loop: true
});
