const menuToggle = document.getElementById('ar17-menu-toggle')
const menu = document.getElementById('ar17-menu')
const menuItems = document.getElementsByClassName('ar17-menu-link')

function toggleMenuClasses() {
  menuToggle.classList.toggle('ar17-menu-open')
  menu.classList.toggle('ar17-menu-open')
}

menuToggle.addEventListener('click', function(e) {
  toggleMenuClasses()
})

for (i = 0; i < menuItems.length; i += 1) {
  menuItems[i].addEventListener('click', function(e) {
    e.preventDefault()
    const anchor = this.getAttribute('href')
    const target = anchor.substr(1)
    console.log(target)
    const targetEl = document.getElementById(target)
    console.log(targetEl)
    targetEl.scrollIntoView(alignToTop= true)
    toggleMenuClasses()
  })
}