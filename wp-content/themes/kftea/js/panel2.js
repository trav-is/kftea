google.maps.event.addDomListener(window, 'load', function() {
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: new google.maps.LatLng(40.580585, -77.695313),
    zoom: 4,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var panelDiv = document.getElementById('panel');

  var data = new StoresDataSource;

  var view = new storeLocator.View(map, data, {
    geolocation: false,
    features: data.getFeatures()
  });

  new storeLocator.Panel(panelDiv, {
    view: view
  });
  $('a.nav').on('click', function(){

      google.maps.event.trigger(map, 'resize');
  });
});


