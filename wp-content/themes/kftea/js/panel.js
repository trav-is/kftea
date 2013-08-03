google.maps.event.addDomListener(window, 'load', function() {
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: new google.maps.LatLng(40.747566, -73.883691),
    zoom: 4,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var panelDiv = document.getElementById('panel');

  var data = new StoreDataSource;

  var view = new storeLocator.View(map, data, {
    geolocation: false,
  });

  new storeLocator.Panel(panelDiv, {
    view: view
  });
});
