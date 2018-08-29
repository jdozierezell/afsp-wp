<script>
if (window.innerWidth >= 960) {
  let recSectionLengths = []
  let totalAnimationScroll = 0
  const recSlide = document.getElementsByClassName('recognition-slide')
  const recChildren = recSlide[0].children
  const recImages = document.getElementsByClassName('recognition-image')
  for (i = 0; i < recChildren.length; i +=1) {
    recSectionLengths.push(recChildren[i].scrollHeight)
  }
  for (i = 0; i < recSectionLengths.length; i += 1) {
    totalAnimationScroll += recSectionLengths[i]
  }
  if (document.documentElement.clientHeight < totalAnimationScroll) {
    document.getElementById('ar17-recognition').style.height = 'initial'
  }
  const recTL = new TimelineMax()
  recTL.set(recImages, {autoAlpha: 0, left: -60})
  for(i = 0; i < recImages.length; i +=1) {
    recTL.add(TweenMax.to(recImages[i], 1, {autoAlpha: 1, left: 0}))
  }
  const controller2 = new ScrollMagic.Controller()
  const recScene1 = new ScrollMagic.Scene({
    triggerElement: '#ar17-recognition',
    duration: totalAnimationScroll,
    triggerHook: 0.7,
  })
  .addTo(controller2)
  recScene1.setTween(recTL)
}
</script>