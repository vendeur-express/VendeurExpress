
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    </head>
    <style>
        html, body { height: 100% }
    </style>
   
    <body onload="initialize()">
        <div id="map" style="width:100%; height:100%">
            @php  
        
           $longlat = null;
            foreach ($livraisons as $livraison) {
                $mapData = $livraison;
                // $code = $mapData["code_bout"];
                // $desc = $mapData["desc"];
                $long = $mapData["longitude"];
                $lat = $mapData["latitude"];

                $longlat[] = [$lat,$long];
                // $codedesc[] = [$code, $desc];
            }
            $longlat  = json_encode($longlat);
<<<<<<< Updated upstream
            dd($longlat)
            // $codedesc  = json_encode($codedesc);
            // echo "<script>var js_points = ".$longlat."</script>";
=======
<<<<<<< HEAD
<<<<<<< HEAD
            // $codedesc  = json_encode($codedesc);
            echo "<script>var js_points = ".$longlat."</script>";
=======
            dd($longlat)
            // $codedesc  = json_encode($codedesc);
            // echo "<script>var js_points = ".$longlat."</script>";
>>>>>>> dafe2075092c9cdf6b24bf22ec445ae44129d224
=======
            dd($longlat)
            // $codedesc  = json_encode($codedesc);
            // echo "<script>var js_points = ".$longlat."</script>";
>>>>>>> dafe2075092c9cdf6b24bf22ec445ae44129d224
>>>>>>> Stashed changes
            // echo "<script>var js_desc = ".$codedesc."</script>";
            @endphp
        </div>
    </body>
   
</html>
<script type="text/javascript">
    //console.log(js_points)
    function initialize() {
        var map = L.map('map').setView([12.0753083, -1.6880314], 7); // LIGNE 18
        
        var osmLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', { // LIGNE 20
            attribution: '© OpenStreetMap contributors',
            maxZoom: 19
        });

        map.addLayer(osmLayer)

        for(var i = 0; i < js_points.length; i++)
        {
            L.marker(js_points[i])
<<<<<<< Updated upstream
            // .addTo(map).bindPopup(codedesc[i]).openPopup()
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
            // .addTo(map).bindPopup(codedesc[i]).openPopup()
>>>>>>> dafe2075092c9cdf6b24bf22ec445ae44129d224
=======
            // .addTo(map).bindPopup(codedesc[i]).openPopup()
>>>>>>> dafe2075092c9cdf6b24bf22ec445ae44129d224
>>>>>>> Stashed changes
    
        }    
        // .addTo(map).bindPopup(codedesc[i]).openPopup()
    }
 </script>
