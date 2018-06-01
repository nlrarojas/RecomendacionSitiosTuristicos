<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="view/css/style.css">
	<title>Busqueda</title>
</head>
<body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="view/js/script.js" ></script>
    
  <div class="col-md-6">
	<div class="buscador">
	<center>
        <br>
Provincias : <select name="provincias" value="provincias">
        <option value="alajuela">Alajuela</option>
        <option value="san_jose">San Jose</option>
        <option value="cartago">Cartago</option>
        <option value="limon">Limon</option>
        <option value="heredia">Heredia</option>
        <option value="guanacaste">Guanacaste</option>
        <option value="puntarenas">Puntarenas</option>
        </select><br><br>

        <input type="button" value="Buscar">
    </center>
	</div>
    </div>

	<div class="exploradorCr">	
        <h1>Explorar CR</h1><br>
        
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
        
        
</div>
</body>
</html>