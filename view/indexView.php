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
            <p id="aIndex">
                Sitios Turísticos
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
include_once 'footer.php';
?>