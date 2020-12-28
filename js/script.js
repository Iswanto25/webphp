const menuTogle = document.querySelector('.togle input');
const nav = document.querySelector('nav ul');

menuTogle.addEventListener('click', function() {
    nav.classList.toggle('slide');
});