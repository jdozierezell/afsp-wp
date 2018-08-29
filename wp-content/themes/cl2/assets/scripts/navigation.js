document
  .getElementById('primary-nav-mobile-button')
  .addEventListener('click', function(e) {
    document.getElementById('sidebar').classList.add('active-mobile')
  })

document.getElementById('close-mobile').addEventListener('click', function(e) {
  document.getElementById('sidebar').classList.remove('active-mobile')
})

document
  .getElementById('search-mobile-button')
  .addEventListener('click', function(e) {
    if (document.getElementById('site-search').style.display === 'none') {
      document.getElementById('site-search').style.display = 'block'
    } else {
      document.getElementById('site-search').style.display = 'none'
    }
  })

const subMenuButtons = document.getElementsByClassName('sub-menu__back-button')
for (i = 0; i < subMenuButtons.length; i += 1) {
  subMenuButtons[i].addEventListener('click', function(e) {
    // console.log(e)
    const nav = document.getElementById('primary-navigation')
    if (nav.classList.contains('active-parent-sub-menu')) {
      nav.classList.remove('active-parent-sub-menu')
      if (!nav.classList.contains('active-parent-menu')) {
        nav.classList.add('active-parent-menu')
      }
    }
    e.target.parentNode.parentNode.parentNode.classList.remove(
      'active-parent-menu'
    )
    if (
      e.target.parentNode.parentNode.parentNode.classList.contains('sub-menu')
    ) {
      e.target.parentNode.parentNode.parentNode.classList.add(
        'active-child-menu'
      )
    }
    e.target.parentNode.parentNode.classList.remove('active-child-menu')
  })
}

const hasSubMenu = document.getElementsByClassName('has-sub-menu')
for (i = 0; i < hasSubMenu.length; i += 1) {
  const hasSubLink = hasSubMenu[i].firstChild
  hasSubLink.addEventListener('click', function(e) {
    e.preventDefault()
    // console.log(e)
    var parentMenu = e.target.parentNode.parentNode
    var subMenu = false
    if (parentMenu.classList.contains('sub-menu')) {
      parentMenu = parentMenu.parentNode
      subMenu = true
      console.log(parentMenu)
    }
    const childMenu = e.target.parentNode.nextSibling.nextSibling
    const parentWidth = parentMenu.offsetWidth + parentMenu.offsetLeft
    const container = parentMenu.parentNode
    const containerHeight = container.offsetHeight + 'px'
    const activeMenu = e.target.parentNode.nextSibling.nextSibling

    if (!subMenu) {
      parentMenu.classList.add('active-parent-menu')
    } else {
      parentMenu.classList.add('active-parent-sub-menu')
    }
    childMenu.classList.add('active-child-menu')
  })
}

var activePageMenu = document.getElementsByClassName('active has-sub-menu')
activePageMenu = activePageMenu.item(activePageMenu.length - 1)
var subMenu = false
if (activePageMenu) {
  var activeParentMenu = activePageMenu.parentNode
  if (activeParentMenu.classList.contains('sub-menu')) {
    activeParentMenu = activeParentMenu.parentNode
    subMenu = true
    // console.log(parentMenu)
  }
  const childMenu = activePageMenu.nextSibling.nextSibling
  const activeParentWidth =
    activeParentMenu.offsetWidth + activeParentMenu.offsetLeft
  const container = activeParentMenu.parentNode
  const containerHeight = container.offsetHeight + 'px'

  if (!subMenu) {
    activeParentMenu.classList.add('active-parent-menu')
  } else {
    activeParentMenu.classList.add('active-parent-sub-menu')
  }
  childMenu.classList.add('active-child-menu')
}
