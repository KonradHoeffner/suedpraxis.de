<?php include 'include/header_head.php'; ?>
<title>Südpraxis Leipzig: Kontakt</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
  function initialize() {
    var myLatlng = new google.maps.LatLng(51.318064,12.367407);
    var myOptions = {
      zoom: 14,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    var contentString = '<strong>Südpraxis</strong><br/>Steinstra&szlig;e 13<br/>04275 Leipzig';
        
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Südpraxis'
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });
  }

</script>

</head>
<?php include 'include/header_body.php'; ?>

<onload="initialize()" onunload="GUnload()">
<div id="wrapper">
<!--<div id="spaltegelb" style="width:64%;"></div><div id="spaltegruen" style="width:36%;"></div>-->

<p>&nbsp;</p>
<center>
<p class="eingerueckt">Praxisgemeinschaft für<br/> Osteopathie und Homöopathie</p>
<br/>
<p class="eingerueckt">
Steinstraße 11 &#8226; 04275 Leipzig
</p>
<p>&nbsp;</p>
<p>
<table  cellpadding="0" cellspacing="0">
<tr><td>Osteopathie</td><td>Susanne Strzelczyk</td><td>0162 662&thinsp;874&thinsp;1</td></tr>
<tr><td></td><td></td><td><a href='ma&#105;lto&#58;%73u%73i&#64;s%75e&#100;p&#114;&#37;61%7&#56;is&#46;%64e'>sus&#105;&#64;sued&#112;r&#97;xis&#46;de</a></td></tr>
<tr><td>Homöopathie</td><td>Barbara Höffner</td><td>0176 529&thinsp;672&thinsp;52</td></tr>
<tr><td></td><td></td><td><a href='mailt&#111;&#58;barba&#37;72&#97;%40&#115;%75&#101;&#37;&#54;4&#112;ra%78%&#54;9s&#46;d%&#54;5'>barba&#114;a&#64;suedpr&#97;xi&#115;&#46;de</a></td></tr>
<table>
</center>
</div>

<div id="spaltelinksbreit">

<div id="map_canvas" style="width:100%; height:500px;"></div>
</div>


<div id="box"><p class="gross">

Öffentliche Verkehrsmittel

</p>

&nbsp;

<p class="zentriert">

Straßenbahnen 10 &amp; 11 
</p>

<p class="zentriert">
Haltestelle: HTWK oder K.-Liebknecht-/K.-Eisner-Str.</p>
Bus 89 Haltestelle Steinstraße (Ärztehaus Süd)
&nbsp;
<p class="zentriert">
<a href="http://www.lvb.de" target="_blank">
zu den Fahrplänen der LVB</a>
</p>

</div>

<?php include 'include/footer.php'; ?>
</>
</html>
