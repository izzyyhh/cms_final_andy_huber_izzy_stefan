document.addEventListener("DOMContentLoaded", () => {
    const burgerButton = document.querySelector("#burger-button")
    const navLinks = document.querySelector("#menu-header-menu")

    burgerButton.addEventListener("click", () => {
        burgerButton.classList.toggle("is-active")
        navLinks.classList.toggle("active-links")
        
        if(burgerButton.classList.contains("is-active"))
        {
            burgerButton.setAttribute("aria-expanded", true)
        } else 
        {
            burgerButton.setAttribute("aria-expanded", false)
        }
    })
})
