<script>
      function initMap() {
        var uluru = {lat: 31.4105, lng: 73.117287};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-nX5zyEYsd6GFlr2UurmWeE90rx84Mms&callback=initMap">
  </script>