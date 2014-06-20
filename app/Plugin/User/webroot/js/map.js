// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initialize() {
  var chicago = new google.maps.LatLng(14.60314622, 120.98376889);
  var mapOptions = {
    zoom:15,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: chicago
  }

  var markers = [];
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  
  // Create the search box and link it to the UI element.
  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));

  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(15, 15)
      };


      // Create a marker for each place.
      var marker = new google.maps.Marker({
          map: map,
          title: place.name,
          position: place.geometry.location,
          draggable:true
      });

      markers.push(marker);
      bounds.extend(place.geometry.location);
      
     
      document.getElementById('lat').value = place.geometry.location.k;
      document.getElementById('lng').value = place.geometry.location.A;
      geocodePosition(marker.getPosition(),place.geometry.location.k,place.geometry.location.A);

      google.maps.event.addListener(marker,'drag',function(event) {
        document.getElementById('lat').value = event.latLng.lat();
        document.getElementById('lng').value = event.latLng.lng();
      });


      google.maps.event.addListener(marker,'dragend',function(event) {
          document.getElementById('lat').value = event.latLng.lat();
          document.getElementById('lng').value = event.latLng.lng(); 
          geocodePosition(marker.getPosition(),event.latLng.lat(),event.latLng.lng());
      });

    }

    map.fitBounds(bounds);
    var listener = google.maps.event.addListener(map, "idle", function() { 
      if (map.getZoom() > 16) map.setZoom(15); 
      google.maps.event.removeListener(listener); 
    });

  });
  // [END region_getplaces]

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });


  //On Click
  google.maps.event.addListener(map, 'click', function(event) {
     placeMarker(event.latLng, map);
  });

}

google.maps.event.addDomListener(window, 'load', initialize);


function placeMarker(location, map) {
    var marker = new google.maps.Marker({
        position: location, 
        map: map,
        draggable:true
    });

    document.getElementById('lat').value = location.k;
    document.getElementById('lng').value = location.A;
    geocodePosition(marker.getPosition(),location.k,location.A);

    google.maps.event.addListener(marker,'drag',function(event) {
      document.getElementById('lat').value = event.latLng.lat();
      document.getElementById('lng').value = event.latLng.lng();
    });

    google.maps.event.addListener(marker,'dragend',function(event) {
        document.getElementById('lat').value = event.latLng.lat();
        document.getElementById('lng').value = event.latLng.lng(); 
        geocodePosition(marker.getPosition(),event.latLng.lat(),event.latLng.lng());
    });

}

function geocodePosition(pos,lat,lng) {
   geocoder = new google.maps.Geocoder();
   geocoder.geocode
    ({
        latLng: pos
    }, 
        function(results, status) 
        {

            if (status == google.maps.GeocoderStatus.OK){
                $('#location').html('<i class="ace-icon fa fa-map-marker bigger-130"></i>'+results[0].formatted_address+'<br/><img src="http://maps.google.com/maps/api/staticmap?center='+lat+','+lng+'&zoom=13&markers='+lat+','+lng+'&size=300x300&sensor=false&key=ABQIAAAA6-Rq-t8XwsqXeXws3DleLBSI_7XewNJfovQwsmZjGMbTG7rp6BQaj3bwm-gy7nGQPyWKPTd3zPtcVA"/>');
                $('#street').val(results[0].address_components[0].long_name);
                $('#town').val(results[0].address_components[1].long_name);
                $('#province').val(results[0].address_components[2].long_name);
                $('#hometown').val(results[0].address_components[3].long_name);

                $('.per-ads-info .address').text(results[0].formatted_address);
             }

            else{
                console.log('Error!!!');
            }
        }
    );
}

