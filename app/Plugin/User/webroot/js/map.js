//For MAPS SCRIPT. .. 
var directionDisplay;
var directionsService = new google.maps.DirectionsService(),
map,
marker=new google.maps.Marker();


function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var chicago = new google.maps.LatLng(12.879721, 121.774017);
  var mapOptions = {
    zoom:7,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: chicago
  }
  map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
  directionsDisplay.setMap(map);
    google.maps.event.addListener(map,'click',function(e){fx(e.latLng)});
}

google.maps.event.addDomListener(window, 'load', initialize);


function fx(latLng) {
    
  marker.setMap(null);

  var request = {
      origin:latLng,
      destination:latLng,
      travelMode: google.maps.DirectionsTravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
  console.log(response)
    if (status == google.maps.DirectionsStatus.OK) {
      var point=response.routes[0].legs[0];
      marker.setOptions({map:map,position:point.start_location});
      map.setCenter(point.start_location);
      //alert(response.routes[0].summary+'\n'+point.start_location.toString());
      //console.log(response.routes[0].summary);
      console.log(point.start_location.toString());

      jQuery.ajax({
          type: "POST", // HTTP method POST or GET
          url: "maps/" + point.start_location.toString(),
          //Where to make Ajax calls
          success: function(data) {},
      });

    }
  });

}