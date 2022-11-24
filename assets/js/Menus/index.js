const menuBurger = document.querySelector('header')
const close = menuBurger.querySelector('.close')
const open = menuBurger.querySelector('.open')

open.addEventListener('click', e => {
    menuBurger.classList.add('active')
})

close.addEventListener('click', e => {
    menuBurger.classList.remove('active')
})
