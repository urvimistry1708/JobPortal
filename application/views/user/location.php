
<!DOCTYPE html>
<html>
<head>
	<title>My google Map</title>
	<style>
		#map{
			height: 1000px;
			width: 100%;
		}
	</style>
</head>
<body>
	<h1>My Google map</h1>
	<div id="map"></div>
	<script>
		function initMap() {
			var uluru = {lat: 21.187692, lng: 72.813752};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map,title:"Dominant Infotech"});
		   // var options={
		   // 	zoom:8,
		   // 	center:{lat:21.1901,lng:72.8139}
		   // }
		   // var map = new
		   //   google.maps.Map(document.getElementById("map1"), options);
		}
	</script>
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgUJDupfCOqqqaqwQMGXPxyp4u1Qmelfo &callback=initMap">
    </script>
</body>
</html>