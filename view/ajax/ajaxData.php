<?php

$provincias = $_POST['provincias'];

switch ($provincias) {
    case "alajuela":
        echo '<h2>Alajuela</h2>
    <h5>Estatua Juan Santamaria</h5>
    <img src="view/img/juan-santamaria.jpg" width=150px height=150px><br>
        ';
        break;
    case "san_jose":
        echo '<h2>San Jose</h2>
    <h5>Teatro Nacional</h5>
    <img src="view/img/teatro.jpg" width=150px height=150px><br>
        ';
        break;
    case "cartago":
        echo '<h2>Cartago</h2>
    <h5>Ruinas de Cartago</h5>
    <img src="view/img/ruinasCartago.jpg" width=150px height=150px><br>
        ';
        break;
    case "limon":
        echo '<h2>Limon</h2>
    <h5>Puerto Viejo</h5>
    <img src="view/img/puertoviejo.jpg" width=150px height=150px><br><br>
        ';
        break;
    case "heredia":
        echo '<h2>Heredia </h2>
    <h5>  El Fortín  </h5>
    <img src="view/img/fortin.jpg" width=150px height=150px><br>
        ';
        break;
    case "guanacaste":
        echo '<h2>Guanacaste</h2>
    <h5>Playa Conchal</h5>
    <img src="view/img/conchal.jpg" width=150px height=150px><br>
        ';
        break;
    case "puntarenas":
        echo '<h2>Puntarenas </h2>
    <h5>Playa Jaco</h5>
    <img src="view/img/jaco.jpg" width=150px height=150px><br>
        ';
        break;
}

 ?>