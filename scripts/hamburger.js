export function hamburgerMenu () {
  const hamburger = document.querySelector('#hamburger')
  const navigation = document.querySelector('#navigation')

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('is-active')

    if (hamburger.classList.contains('is-active')) {
      hamburger.setAttribute('aria-expanded', true)
      navigation.classList.add('active-nav')
    } else {
      hamburger.setAttribute('aria-expanded', false)
      navigation.classList.remove('active-nav')
    }
  })
}
