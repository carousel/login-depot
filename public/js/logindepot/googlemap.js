var geocoder;
var map;
var markers;

function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(-34.397, 150.644);
  var mapOptions = {
      zoom: 4,
      center: latlng
    }
  map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
}
function codeAddress() {
  var pickupCity = $(".pickup-city").val();
  var deliveryCity = $(".delivery-city").val();
  geocoder.geocode( { 'address': pickupCity}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
            markers.push(marker);
            var infoWindow = new google.maps.InfoWindow({
                content: "Pickup City: " + pickupCity
            });
            infoWindow.open(map,marker);
          } else {
            alert('There was a problem with your input. Please try again');
        }
    });
  geocoder.geocode( { 'address': deliveryCity}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
            //map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
            markers.push(marker);
            var infoWindow = new google.maps.InfoWindow({
                content: "Delivery City: " + deliveryCity
            });
            infoWindow.open(map,marker);
          } else {
            alert('There was a problem with your input. Please try again');
        }
    });
}
google.maps.event.addDomListener(window, 'load', initialize);

$(".show-google-maps").on("click",function(e){
    var pickupZipcode = $(".pickup-zipcode").val();
    var deliveryZipcode = $(".delivery-zipcode").val();
    console.log(pickupZipcode);

    if(pickupZipcode == "" || deliveryZipcode == ""){
        alert("Please enter pickup and delivery cities");
        return false;
    }
    $("#googleMapsModal").modal();
});

$("#googleMapsModal").on("shown.bs.modal",function(e){
  google.maps.event.trigger(map, 'resize');
  codeAddress();
});

$("body").on("click",".google-map-close",function(){
    
    markers = [];

});

