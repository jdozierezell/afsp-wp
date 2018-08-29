// Init controller
jQuery(document).ready(function($){
  
var controller = new ScrollMagic.Controller({
  globalSceneOptions: {
    reverse: true
  }
});
var $sections = $('.sidebar__content-section');
var scenes = {};

$sections.each(function(index){
  if($sections.length )
  
  
  scenes[index] = new ScrollMagic.Scene({ 
                    duration: $('#section' + index).height(),
                    triggerHook: 0.55, // adjust to change where the section is highlighted
                    triggerElement: '#section' + index 
                  })
  								.setClassToggle('#anchor' + index, 'active')
  								.addTo(controller);
});

// Change behaviour of controller
// to animate scroll instead of jump
controller.scrollTo(function(target) {
  console.log(target);
  TweenMax.to(window, 0.5, {
    scrollTo : {
      y : target - 100,
      autoKill : true // Allow scroll position to change outside itself
    },
    ease : Cubic.easeInOut
  });
});


//  Bind scroll to anchor links
$(document).on("click", "a[href^='#']", function(e) {
  var id = $(this).attr("href");
  if($(id).length > 0) {
    e.preventDefault();
    // trigger scroll
    controller.scrollTo(id);
    // If supported by the browser we can also update the URL
    if (window.history && window.history.pushState) {
      history.pushState("", document.title, id);
    }
  }
});

$(window).scroll(function(){
  
  var sidebar_content = $('.grant-sidebar__content').offset().top;
  var bottom = $(window).scrollTop() + $(window).height();
  var div_bottom = sidebar_content + $('.grant-sidebar__content').height();
  var sidebar = $('.sidebar__nav').offset().top;
  var sidebar_bottom = sidebar + $('.sidebar__nav').height();
  
  // console.log('c' + sidebar_content);
  // console.log('ch' + $('.grant-sidebar__content').height())
  // console.log('cb' + div_bottom);
  // console.log('s' + sidebar);
  // console.log('sh' + $('.sidebar__nav').height());
  // console.log('sb' + sidebar_bottom);
  
  if(sidebar_bottom + 100 >= div_bottom && bottom >= div_bottom) {
    console.log('stop it!!');
    $('.sidebar__nav').offset({top: sidebar});
  }
  else if($(window).scrollTop() >= sidebar_content - 100) {
    $('.sidebar__nav').offset({top: $(window).scrollTop() + 100});
    console.log($('.sidebar__nav').offset().top);
  } else {
    $('.sidebar__nav').offset({top: sidebar_content});
  }
});

});