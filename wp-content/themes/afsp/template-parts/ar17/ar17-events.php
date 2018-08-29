<script>
const map1 = createMap('map-1', [-98.58, 40.83], flexiZoom(5))
const map1Ak = createMap('map-1-ak', [-150.49, 64.20], 3)
const map1Hi = createMap('map-1-hi', [-157.58, 20.90], 5)

let features1 = [] // we'll add all the event features to this variable once they load into source1

const preStyle1 = new ol.style.Style({
  image: new ol.style.Circle({
    radius: 0,
    snapToPixel: false,
    stroke: new ol.style.Stroke({
      color: 'rgba(57, 40, 189, 0)',
      width: 0
    }),
    fill: new ol.style.Fill({
      color: 'rgba(38, 216, 145, 0)'
    })
  })
})

const activeStyle1 = new ol.style.Style({
  image: new ol.style.Circle({
    radius: 10,
    snapToPixel: false,
    stroke: new ol.style.Stroke({
      color: 'rgba(57, 40, 189, 1)',
      width: 0.5
    }),
    fill: new ol.style.Fill({
      color: 'rgba(38, 216, 145, 1)'
    })
  })
})

const postStyle1 = new ol.style.Style({
  image: new ol.style.Circle({
    radius: 10,
    snapToPixel: false,
    stroke: new ol.style.Stroke({
      color: 'rgba(57, 40, 189, 1)',
      width: 0.5
    }),
    fill: new ol.style.Fill({
      color: 'rgba(57, 109, 255, 0.5)'
    })
  })
})

// function to change the active event type
function changeFeatures(prevFeature, currFeature) {
  const scrollDirection = map1Controller.info('scrollDirection')
  for (i = 0; i < features1.length; i += 1) {
    if (features1[i].O.Department === currFeature) {
      if (scrollDirection === 'FORWARD') {
        features1[i].setStyle(activeStyle1)
      } else if (scrollDirection === 'REVERSE'){
        features1[i].setStyle(preStyle1)
      }
    } else if (features1[i].O.Department === prevFeature) {
      if (scrollDirection === 'FORWARD') {
        features1[i].setStyle(postStyle1)
      } else if (scrollDirection === 'REVERSE'){
        features1[i].setStyle(activeStyle1)
      }
    }
  }
}

const source1 = new ol.source.Vector({
  url: 'https://afsp.org/wp-content/themes/afsp/data/allEvents.geojson',
  format: new ol.format.GeoJSON(),
  wrapX: false
})

source1.on('change', function(evt){
  var source=evt.target;
  if(source.getState() === 'ready'){
    features1 = source1.getFeatures()
    // console.log(features1)
  }
})

const vector1 = new ol.layer.Vector({
  source: source1,
  style: preStyle1
})

map1.addLayer(vector1)
map1Ak.addLayer(vector1)
map1Hi.addLayer(vector1)

const mapEvents = document.getElementsByClassName('ol-map__events')

const eventTL = new TimelineMax()

eventTL.set(mapEvents, {autoAlpha: 0, left: -50})

eventTL.add(function() {
  for (i = 0; i < features1.length; i += 1) {
    features1[i].setStyle(preStyle1)
  }
}, 0.1)
eventTL.add([
  TweenMax.to(mapEvents[0], 1, {autoAlpha: 1, left: 0}),
  function() {
    changeFeatures('', 'Research')
  }
])
eventTL.add([
  TweenMax.to(mapEvents[0], 0.5, {autoAlpha: 0, top: '50%'}),
  TweenMax.to(mapEvents[1], 1.5, {autoAlpha: 1, left: 0}),
  function() {
    changeFeatures('Research', 'Advocacy')
  }
])
eventTL.add([
  TweenMax.to(mapEvents[1], 0.5, {autoAlpha: 0, top: '50%'}),
  TweenMax.to(mapEvents[2], 1.5, {autoAlpha: 1, left: 0}),
  function() {
    changeFeatures('Advocacy', 'ISP')
  }
])
eventTL.add([
  TweenMax.to(mapEvents[2], 0.5, {autoAlpha: 0, top: '50%'}),
  TweenMax.to(mapEvents[3], 1.5, {autoAlpha: 1, left: 0}),
  function() {
    changeFeatures('ISP', 'NonWalk')
  }
])
eventTL.add([
  TweenMax.to(mapEvents[3], 0.5, {autoAlpha: 0, top: '50%'}),
  TweenMax.to(mapEvents[4], 1.5, {autoAlpha: 1, left: 0}),
  function() {
    changeFeatures('NonWalk', 'Loss')
  }
])
eventTL.add([
  TweenMax.to(mapEvents[4], 0.5, {autoAlpha: 0, top: '50%'}),
  TweenMax.to(mapEvents[5], 1.5, {autoAlpha: 1, left: 0}),
  function() {
    changeFeatures('Loss', 'Walks')
  }
])
eventTL.add([
  TweenMax.to(mapEvents[5], 0.5, {autoAlpha: 0, top: '50%'}),
  TweenMax.to(mapEvents[6], 1.5, {autoAlpha: 1, left: 0}),
  function() {
    changeFeatures('Walks', 'Education')
  }
])
eventTL.add([
  TweenMax.to(mapEvents[6], 0.5, {autoAlpha: 0, top: '50%'}),
  TweenMax.to(mapEvents[7], 1.5, {autoAlpha: 1, left: 0}),
  function() {
    changeFeatures('Education', '')
  }
])

const map1Controller = new ScrollMagic.Controller()
const eventScene1 = new ScrollMagic.Scene({
  triggerElement: '#map-1-wrapper',
  duration: 1800,
  triggerHook: 0.2,
})
.addTo(map1Controller)

eventScene1.setTween(eventTL)

const eventScene2 = new ScrollMagic.Scene({
  triggerElement: '#map-1-wrapper',
  duration: 1800,
  triggerHook: 0,
})
.setPin('#map-1-wrapper')
.addTo(map1Controller)
</script>