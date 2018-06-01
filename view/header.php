<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Recomendación de sistios turísticos</title>
        <meta name="description" content="Tarea WEB - Sistemas expertos para la administración" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="shortcut icon" type="image/x-icon" href="view/img/icono.ico" />
        <link rel="stylesheet" type="text/css" href="view/css/style.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="view/js/script.js"/></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap-glyphicons.css"></link>
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css"></link>
    <style>
    #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
</head>
<body >
    <header>
        <div id="divEncabezado"><br/>                        
            <nav id="divMenuNav" class="navbar navbar-expand-lg navbar-light bg-light">    
                <a class="navbar-brand" >Menú</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin: 0 auto;">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link btn btn-primary" href="index.php" style="color: white;">Inicio<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link btn btn-primary" href="?sitiosTuristicos" style="color: white;">Sitios turísticos<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link btn btn-primary" href="?sitioEspecifico" style="color: white;">Buscar por sitio<span class="sr-only">(current)</span></a>
                        </li>
                    </ul> 
                </div>
            </nav>   
            <br/>                         
        </div>
    </header>
    <section id="contenido" style="min-height: 50%; width:80%; margin:0 auto; text-align: center;">