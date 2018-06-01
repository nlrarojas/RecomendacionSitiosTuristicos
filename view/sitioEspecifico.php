<?php
//header
include_once 'header.php';
?>
<br/><br/>
<h1>Buscar ruta por sitio en específico</h1>
<br/>
<div>
    <div style="float: left; padding-right: 10em;">
        <label>Ingrese el lugar</label>
        <input type="text"/>
    </div>
    <div id="googleMap" style="width:60%; height:400px;"></div>
</div>
<br/><br/><br/>
<script>
    function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(9.905087,-84.098126),
        zoom:15,
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjqEeMsyssgt2NQ57PcegmXy95t4Wx8ww&callback=myMap"></script>
<?php
//footer
include_once 'footer.php';
?>