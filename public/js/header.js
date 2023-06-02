let profile = document.getElementById('profile');
let dropdownMenu = document.getElementById('dropdown-menu');

profile.addEventListener('click', () => {
    dropdownMenu.classList.toggle('open');
});

