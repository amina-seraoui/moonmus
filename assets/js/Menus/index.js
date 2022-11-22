const menuBurgers = document.querySelectorAll('.menu-burger')

menuBurgers.forEach(menuBurger => {
    const close = menuBurger.querySelector('.close')
    const open = menuBurger.querySelector('.open')

    open.addEventListener('click', e => {
        menuBurger.classList.add('active')
    })

    close.addEventListener('click', e => {
        menuBurger.classList.remove('active')
    })
})
