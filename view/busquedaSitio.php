<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="view/css/style.css">
    
    <link rel="stylesheet" href="/static/css/bootstrap.css">
  <link rel="stylesheet" href="/static/css/bootstrap-theme.css">


	<title>Busqueda</title>
</head>
    
    <?php
//header
include_once 'header.php';
?>
<body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="view/js/script.js" ></script>
    <script src="js/jquery.js" ></script>
    
  <div class="col-lg-6">
	<div class="buscador">
	<center>
                <h1>Explorar CR</h1>
        <br>
Provincias : <select class="selectpicker" data-style="btn-primary" name="provincias" value="provincias" id="provincias">
        <option id="alajuela" value="alajuela">Alajuela</option>
        <option id="san_jose" value="san_jose">San Jose</option>
        <option id="cartago" value="cartago">Cartago</option>
        <option id="limon" value="limon">Limon</option>
        <option id="heredia" value="heredia">Heredia</option>
        <option id="guanacaste" value="guanacaste">Guanacaste</option>
        <option id="puntarenas" value="puntarenas">Puntarenas</option>
        </select><br><br>
        
    </center><br><br>
          <div id="capa">
              </div>
	</div>
    </div>

  
	<div class="exploradorCr">	

        
        <h3>Tiempo</h3>
        
        <div class="slider">
            <div class="emptyprogress"></div>
            <div class="progreso"> </div>
            <div class="indicador"> </div>
        </div><br>
        
        <label>
            Horas 
            <input type="text" value="10" size="1" readonly="readonly" id="valueSlider">
        </label>
        
        <h3>Distancia</h3>
        
        <div class="sliderKilometros">
            <div class="emptyprogressKilometros"></div>
            <div class="progresoKilometros"> </div>
            <div class="indicadorKilometros"> </div>
        </div><br>
        
        <label>
            Kilometros 
            <input type="text" value="50" size="1" readonly="readonly" id="valueSliderKilometros">
        </label>   
</div>
    
<script type="text/javascript">
    $(document).ready(function(){
        $('#provincias').on('change',function(){
            var nom_provincias = $(this).val();
                $.ajax({
                    type:'POST',
                    url:'view/ajax/ajaxData.php',
                    data:'provincias='+nom_provincias,
                    success:function(html){
                        $('#capa').html(html);
                    }
                });
        });
    });
    </script>
</body>
</html>