<?php
//header
include_once 'header.php';
?>
<br/><br/><br/><br/><br/>
<section id="principal">
    <article id="descripcion">
    <div>    
        <?php
        if (isset($mensaje)) {
        ?>
            <div class="alert alert-success">
                <strong><?php echo $mensaje;?></strong>
            </div>
        <?php
        } else {
        ?>
            <h1>Bienvenido(a) a Explorer CR</h1>
            </br>
            <p class="western">
                El presente proyecto se desarroll&oacute con el fin de construir y recomendar rutas turísticas a partir de una localidad en que el usuario está o </br>
                que suministra como punto de partida. Debe tomar en cuenta restricciones de tiempo y distancia de recorrido establecidas por el usuario o por lo </br>
                que se incluya en la ruta.  Debe poder hacerse un “recorrido virtual” por cada ruta recomendada. Es decir, debe poder recibirse información </br>
                acerca de cada nodo incluido en cada ruta.   
            </p>
        <?php 
        }
        ?>    
        <style>
            #aIndex {                    
                margin-left: 0;
                color: rgb(255, 94, 0);
                font-weight: bold;
                font-size: 2rem;
            }            
        </style>        
    </div>
    </article>		
</section>
<br/><br/><br/><br/><br/>
<?php
//footer
//include_once 'footer.php';
?>