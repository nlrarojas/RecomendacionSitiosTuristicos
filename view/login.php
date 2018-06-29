<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Explorer CR</title>
    
    <link rel="stylesheet" href="view/css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="view/css/stylelogin.css">
  </head>

<body>

<div class="pen-title">
</br></br>
  <h1>Explorer CR</h1>
</div>
<!-- Form Module-->
<div class="module form-module" style="border-top: 5px solid #009999;">
  <div class="toggle" style="background-color: #009999;"><i class="fa fa-times fa-pencil" style="background-color: #009999;"></i>
  </div>
  <div class="form">
    <h2 style="color: #009999;">Ingrese a su cuenta</h2>
    <form action="?login&validar" method="post">
      <input id="usuario" name="usuario" type="text" placeholder="Nombre de usuario" required=""/>
      <input id="contrasena" name="contrasena" type="password" placeholder="Contraseña" required=""/>
      <input type="submit" style="color: white; background-color: #009999;" value="Ingresar"/> <!--AQUI IRIA A LA PAGINA DDE ADMINISTRADOR -->
      </br></br>
    </form>
    <form action="index.php" method="post">
        <input type="submit" style="color: white; background-color: #009999;" value="Regresar a menú principal"/>        
    </form>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="view/js/index.js"></script>
</body>
</html>