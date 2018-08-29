
<script>
const map2 = createMap('map-2', [-98.58, 40.83], flexiZoom(5))
const map2Ak = createMap('map-2-ak', [-150.49, 64.20], 3)
const map2Hi = createMap('map-2-hi', [-157.58, 20.90], 5)
const allMap2 = [map2, map2Ak, map2Hi]

const source2 = new ol.source.Vector({
  wrapX: false
})
const vector2 = new ol.layer.Vector({
  source: source2
})
map2.addLayer(vector2)
map2Ak.addLayer(vector2)
map2Hi.addLayer(vector2)

<?php if (have_rows('ar_stories')) : 
  $story_count = 0;
  while (have_rows('ar_stories')) : the_row();
    $image = get_sub_field(ar_pin_image); ?>

  const style<?php echo $story_count; ?> = new ol.style.Style({
    image: new ol.style.Icon({
      anchor: [0.5, 1],
      src: '<?= $image['url']; ?>',
      scale: 0.25
    })
  })
  const geom<?php echo $story_count; ?> = new ol.geom.Point(ol.proj.fromLonLat([<?= get_sub_field('ar_long_lat'); ?>]))
  const feature<?php echo $story_count; ?> = new ol.Feature(geom<?php echo $story_count; ?>)
  feature<?php echo $story_count; ?>.setProperties({
    story: '<?= get_sub_field('ar_story_id'); ?>'
  })
  feature<?php echo $story_count; ?>.setStyle(style<?php echo $story_count; ?>)
  source2.addFeature(feature<?php echo $story_count; ?>)

<?php $story_count++;
  endwhile; 
endif; ?>

const select = new ol.interaction.Select({
  condition: ol.events.condition.click
})

for (i = 0; i < allMap2.length; i += 1) {
  allMap2[i].addInteraction(select)
  select.on('select', function(e) {
    if (typeof e.selected[0] !== 'undefined') {
      const storyId = e.selected[0].O.story
      const story = document.getElementById(storyId)
      const close = story.lastElementChild
      const body = document.getElementById('ar17-body')
      close.addEventListener('click', function(e){
        this.parentNode.classList.remove('active-story')
        select.getFeatures().clear()
        body.classList.remove('ar17-stop-scrolling')
      })
      story.classList.add('active-story')
      body.classList.add('ar17-stop-scrolling')
    }
  })

  allMap2[i].getViewport().addEventListener('mousemove', function(e) {
    // console.log(e)
    var pixel = map2.getEventPixel(e);
    var hit = map2.forEachFeatureAtPixel(pixel, function(feature, layer) {
      console.log('hit')
      return true
    })
    if (hit) {
      document.getElementById(map2.getTarget()).style.cursor = 'pointer'
    } else {
      document.getElementById(map2.getTarget()).style.cursor = ''
    }
  })
}

// map2.addInteraction(select)
// select.on('select', function(e) {
//   if (typeof e.selected[0] !== 'undefined') {
//     const storyId = e.selected[0].O.story
//     const story = document.getElementById(storyId)
//     const close = story.lastElementChild
//     const body = document.getElementById('ar17-body')
//     close.addEventListener('click', function(e){
//       this.parentNode.classList.remove('active-story')
//       select.getFeatures().clear()
//       body.classList.remove('ar17-stop-scrolling')
//     })
//     story.classList.add('active-story')
//     body.classList.add('ar17-stop-scrolling')
//   }
// })

// map2.getViewport().addEventListener('mousemove', function(e) {
//   // console.log(e)
//   var pixel = map2.getEventPixel(e);
//   var hit = map2.forEachFeatureAtPixel(pixel, function(feature, layer) {
//     console.log('hit')
//     return true
//   })
//   if (hit) {
//     document.getElementById(map2.getTarget()).style.cursor = 'pointer'
//   } else {
//     document.getElementById(map2.getTarget()).style.cursor = ''
//   }
// })
</script>