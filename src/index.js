import './sass/styles.scss'
import { hamburgerMenu } from './hamburger.js'
require.context('./images', true)

document.addEventListener('DOMContentLoaded', () => {
  hamburgerMenu()
})
