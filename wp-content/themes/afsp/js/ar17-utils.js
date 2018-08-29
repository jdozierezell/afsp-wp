// changes zoom based on screen width
function flexiZoom (zoom) {
  let windowWidth = 0
  let portrait = false
  if (window.screen.orientation && (window.screen.orientation.type === 'portrait-primary' || window.screen.orientation.type === 'portrait-secondary')) {
    portrait = true
  }
  if (portrait === true) {
    windowWidth = window.innerHeight
  } else {
    windowWidth = window.innerWidth
  }
  if (windowWidth >= 1800) {
    zoom = zoom
  } else if (windowWidth >= 1200) {
    zoom -= 0.5
  } else if (windowWidth >= 900) {
    zoom -= 1
  } else if (windowWidth >= 600) {
    zoom -= 1.5
  } else {
    zoom -= 2
  }
  return zoom
}

// creates map on page
function createMap (id, lonlat, zoom) {
  const map = new ol.Map({
    interactions: ol.interaction.defaults({
      mouseWheelZoom: false
    }),
    layers: [
      new ol.layer.Tile({
        source: new ol.source.OSM()
        // source: new ol.source.BingMaps({
        //   key: 'AiBe6Qy6DtONRCJFLcBb-psuh3LH1K5FFQ7bJK2H8GnCWKICALPVcRfLBKauH1sk',
        //   imagerySet: [
        //     // 'Road',
        //     'RoadOnDemand',
        //     // 'Aerial',
        //     // 'AerialWithLabels',
        //     // 'collinsBart'
        //   ]
        // })
      })
    ],
    target: id,
    view: new ol.View({
      center: ol.proj.fromLonLat(lonlat),
      zoom: zoom
    }),
    controls: ol.control.defaults({
      zoom: false,
      attribution: false
    })
  })
  return map
}