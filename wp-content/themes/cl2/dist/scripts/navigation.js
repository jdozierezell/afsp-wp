document.getElementById("primary-nav-mobile-button").addEventListener("click",function(e){document.getElementById("sidebar").classList.add("active-mobile")}),document.getElementById("close-mobile").addEventListener("click",function(e){document.getElementById("sidebar").classList.remove("active-mobile")}),document.getElementById("search-mobile-button").addEventListener("click",function(e){"none"===document.getElementById("site-search").style.display?document.getElementById("site-search").style.display="block":document.getElementById("site-search").style.display="none"});const subMenuButtons=document.getElementsByClassName("sub-menu__back-button");for(i=0;i<subMenuButtons.length;i+=1)subMenuButtons[i].addEventListener("click",function(e){const t=document.getElementById("primary-navigation");t.classList.contains("active-parent-sub-menu")&&(t.classList.remove("active-parent-sub-menu"),t.classList.contains("active-parent-menu")||t.classList.add("active-parent-menu")),e.target.parentNode.parentNode.parentNode.classList.remove("active-parent-menu"),e.target.parentNode.parentNode.parentNode.classList.contains("sub-menu")&&e.target.parentNode.parentNode.parentNode.classList.add("active-child-menu"),e.target.parentNode.parentNode.classList.remove("active-child-menu")});const hasSubMenu=document.getElementsByClassName("has-sub-menu");for(i=0;i<hasSubMenu.length;i+=1){const hasSubLink=hasSubMenu[i].firstChild;hasSubLink.addEventListener("click",function(e){e.preventDefault();var t=e.target.parentNode.parentNode,n=!1;t.classList.contains("sub-menu")&&(t=t.parentNode,n=!0,console.log(t));const a=e.target.parentNode.nextSibling.nextSibling,i=(t.offsetWidth,t.offsetLeft,t.parentNode);i.offsetHeight,e.target.parentNode.nextSibling.nextSibling;n?t.classList.add("active-parent-sub-menu"):t.classList.add("active-parent-menu"),a.classList.add("active-child-menu")})}var activePageMenu=document.getElementsByClassName("active has-sub-menu");activePageMenu=activePageMenu.item(activePageMenu.length-1);var subMenu=!1;if(activePageMenu){var activeParentMenu=activePageMenu.parentNode;activeParentMenu.classList.contains("sub-menu")&&(activeParentMenu=activeParentMenu.parentNode,subMenu=!0);const childMenu=activePageMenu.nextSibling.nextSibling,activeParentWidth=activeParentMenu.offsetWidth+activeParentMenu.offsetLeft,container=activeParentMenu.parentNode,containerHeight=container.offsetHeight+"px";subMenu?activeParentMenu.classList.add("active-parent-sub-menu"):activeParentMenu.classList.add("active-parent-menu"),childMenu.classList.add("active-child-menu")}
//# sourceMappingURL=navigation.js.map
