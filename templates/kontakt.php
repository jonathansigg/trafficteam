<?php
/**
  * @templatename: Kontakt
  */
?>

<section id="map"></section>
<script>
  function initMap() {
    var center = {lat: 47.424715, lng: 7.546349};
    var mapOptions = {
      zoom: 16,
      center: center,
      styles: [
          {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                  {
                      "color": "#e9e9e9"
                  },
                  {
                      "lightness": 17
                  }
              ]
          },
          {
              "featureType": "landscape",
              "elementType": "geometry",
              "stylers": [
                  {
                      "color": "#f5f5f5"
                  },
                  {
                      "lightness": 20
                  }
              ]
          },
          {
              "featureType": "road.highway",
              "elementType": "geometry.fill",
              "stylers": [
                  {
                      "color": "#ffffff"
                  },
                  {
                      "lightness": 17
                  }
              ]
          },
          {
              "featureType": "road.highway",
              "elementType": "geometry.stroke",
              "stylers": [
                  {
                      "color": "#ffffff"
                  },
                  {
                      "lightness": 29
                  },
                  {
                      "weight": 0.2
                  }
              ]
          },
          {
              "featureType": "road.arterial",
              "elementType": "geometry",
              "stylers": [
                  {
                      "color": "#ffffff"
                  },
                  {
                      "lightness": 18
                  }
              ]
          },
          {
              "featureType": "road.local",
              "elementType": "geometry",
              "stylers": [
                  {
                      "color": "#ffffff"
                  },
                  {
                      "lightness": 16
                  }
              ]
          },
          {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                  {
                      "color": "#f5f5f5"
                  },
                  {
                      "lightness": 21
                  }
              ]
          },
          {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                  {
                      "color": "#dedede"
                  },
                  {
                      "lightness": 21
                  }
              ]
          },
          {
              "elementType": "labels.text.stroke",
              "stylers": [
                  {
                      "visibility": "on"
                  },
                  {
                      "color": "#ffffff"
                  },
                  {
                      "lightness": 16
                  }
              ]
          },
          {
              "elementType": "labels.text.fill",
              "stylers": [
                  {
                      "saturation": 36
                  },
                  {
                      "color": "#333333"
                  },
                  {
                      "lightness": 40
                  }
              ]
          },
          {
              "elementType": "labels.icon",
              "stylers": [
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "transit",
              "elementType": "geometry",
              "stylers": [
                  {
                      "color": "#f2f2f2"
                  },
                  {
                      "lightness": 19
                  }
              ]
          },
          {
              "featureType": "administrative",
              "elementType": "geometry.fill",
              "stylers": [
                  {
                      "color": "#fefefe"
                  },
                  {
                      "lightness": 20
                  }
              ]
          },
          {
              "featureType": "administrative",
              "elementType": "geometry.stroke",
              "stylers": [
                  {
                      "color": "#fefefe"
                  },
                  {
                      "lightness": 17
                  },
                  {
                      "weight": 1.2
                  }
              ]
          }
      ]
    };

    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var marker = new google.maps.Marker({
      position: center,
      map: map,
      title: 'Traffic Team - Sound + Light'
    });
  }
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2CpW7fkvH5rIHCnIkX82s20vrPt4TdzI&callback=initMap">
</script>


<section class="container-fluid">
  <div class="content-wrapper">
    <div class="form-group">
      <h1>Kontaktieren Sie uns</h1>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <form action="?" methid="post">
          <div class="form-group">
            <input type="text" placeholder="Vorname" name="vorname" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Name" name="name" class="form-control">
          </div>
          <div class="form-group">
            <input type="email" placeholder="E-Mail" name="email" class="form-control">
          </div>
          <div class="form-group">
            <textarea rows="5" placeholder="Ihre Nachricht" name="nachricht" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" name="submit" value="Absenden">
          </div>
        </form>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="item-wrapper">
          <div class="item">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
          </div>
          <div class="item">
            TrafficTeam - Sound & Light<br>
            Postfach 153<br>
            4277 Büsserach<br>
            Schweiz
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
