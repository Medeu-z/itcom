require('./bootstrap');


function togglePassword(x, id) {
    var togglePassword = document.querySelector(id);
    var password = document.querySelector('.password');
    var type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    x.classList.toggle("fa-lock-open");
    password.setAttribute('type', type);
}