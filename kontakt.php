<?php include 'include/header_head.php'; ?>
<title>Südpraxis Leipzig: Kontakt</title>
 <!--<meta name="viewport" content="initial-scale=1.0, user-scalable=yes">-->
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script>
var map;



function initialize() {

// Try HTML5 geolocation
 var  userPos;
  
/*
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Location found using HTML5.'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }

function handleGeolocation(error)
{
}
*/
 var myLatlng = new google.maps.LatLng(51.318064,12.367407);
  var mapOptions = {
    zoom: 14,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
	
  };
   var contentString = '<strong>Südpraxis</strong><br/>Steinstra&szlig;e 11<br/>04275 Leipzig';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

	  var marker = new google.maps.Marker({
      position:myLatlng ,
      map: map,
      title: 'Südpraxis'
  });
 google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

</head>
<?php include 'include/header_body.php'; ?>


<div id="wrapper">
<!--<div id="spaltegelb" style="width:64%;"></div><div id="spaltegruen" style="width:36%;"></div>-->

<p>&nbsp;</p>
<center>
Praxisgemeinschaft für<br/> Osteopathie und Homöopathie</p>
Steinstraße 11 &#8226; 04275 Leipzig
</p>
<p>&nbsp;</p>
<p></center>
<center>
<table  cellpadding="0" cellspacing="0">
<tr><td>Gemeinschaftspraxis</td><td></td><td>0341&thinsp;264&thinsp;662&thinsp;01</td></tr>
<tr><td>Osteopathie</td><td>Susanne Strzelczyk</td><td>0162 662&thinsp;874&thinsp;1</td></tr>
<tr><td></td><td></td><td><a href='ma&#105;lto&#58;%73u%73i&#64;s%75e&#100;p&#114;&#37;61%7&#56;is&#46;%64e'>sus&#105;&#64;sued&#112;r&#97;xis&#46;de</a></td></tr>
<tr><td>Homöopathie</td><td>Barbara Höffner</td><td>0176 529&thinsp;663&thinsp;01</td></tr>
<tr><td></td><td></td><td><a href='mailt&#111;&#58;barba&#37;72&#97;%40&#115;%75&#101;&#37;&#54;4&#112;ra%78%&#54;9s&#46;d%&#54;5'>barba&#114;a&#64;suedpr&#97;xi&#115;&#46;de</a></td></tr>
</table>
</center>
  <div id="map-canvas" style="width:100%;height:500px;margin:10px;"></div>


<div class="box" style="width:500px;margin: 0 auto;">
Öffentliche Verkehrsmittel</br>

Bahn 10 &amp; 11 Haltestelle: HTWK oder K.-Liebknecht-/K.-Eisner-Str.<br/>
Bus 89 Haltestelle Steinstraße (Ärztehaus Süd)<br/>
Bus 60 Haltestelle Fockestraße<br/>
<a href="http://www.lvb.de" target="_blank">
zu den Fahrplänen der LVB</a>
</p>
</div>
</div>

<?php include 'include/footer.php'; ?>

</html>
