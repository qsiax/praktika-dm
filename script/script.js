const regisBtn = document.querySelector('#regis');
const loginBtn = document.querySelector('#log');
const regis = document.querySelector('.registration');
const login = document.querySelector('.login');
const regisClose = document.querySelector('#close-regis');
const loginClose = document.querySelector('#close-login');


regisBtn.onclick = function() {
    regis.classList.toggle('active')
}

loginBtn.onclick = function() {
    login.classList.toggle('active')
}

regisClose.onclick = function() {
    regis.classList.toggle('active')
}

loginClose.onclick = function() {
    login.classList.toggle('active')
}