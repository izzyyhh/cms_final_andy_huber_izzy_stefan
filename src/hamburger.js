export function hamburgerMenu () {
  const hamburger = document.querySelector('#hamburger')
  const navigation = document.querySelector('#navigation')

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('is-active')

    if (hamburger.classList.contains('is-active')) {
      hamburger.setAttribute('aria-expanded', true)
      navigation.classList.add('active-nav')
      
      window.addEventListener('scroll', noScroll)
    } else {
      hamburger.setAttribute('aria-expanded', false)
      navigation.classList.remove('active-nav')

      window.removeEventListener('scroll', noScroll)
    }
  })
}

let noScroll = () => {
  window.scroll(0,0)
}

let mediaQuery = window.matchMedia("(min-width: 1025px)")

let checkNav = () => {
  if(mediaQuery.matches){
    window.removeEventListener('scroll', noScroll)
    hamburger.setAttribute('aria-expanded', false)
    hamburger.classList.remove('is-active')
    navigation.classList.remove('active-nav')
  }
}

window.addEventListener('resize', checkNav)