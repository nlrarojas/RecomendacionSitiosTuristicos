<?php
//header
include_once 'header.php';
?>
<br/><br/><br/><br/><br/>
<section id="principal">
    <article id="descripcion" style="width: 65%; max-width: 960px;">
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
        <p class="western" style="border-radius: 0.95em;" >
                    Distancia
                </p>
        <select id="A" name="A" value="A" style="border-radius: 0.95em;">
                        <option value="1"> De 1 a 6 horas </option>
                        <option value="2"> De 7 a 12 horas  </option>
                        <option value="3"> De 13 a 18 horas </option>
                        <option value="3"> De 19 a 24 horas </option>
                        <option value="3"> Mas de 24 horas </option>
                </select>
            
        <?php 
        }
        ?>           
    </div>
    </article>	
    <section style="width: 30%; background-color: #009999; border-radius: 0.95em;">
            </br></br></br>
                <h3>Explorer CR</h3>
                </br>
                <p class="western" style="border-radius: 0.95em;" >
                    Distancia
                </p>
                <select id="A" name="A" value="A" style="border-radius: 0.95em;">
                        <option value="1"> De 0 a 10 Km </option>
                        <option value="2"> De 11 a 20 km  </option>
                        <option value="3"> De 21 a 30 km </option>
                        <option value="3"> De 31 a 40 km </option>
                        <option value="3"> De 41 a 50 km </option>
                        <option value="3"> De 51 km en adelante </option>
                </select>
            </br></br></br></br></br></br></br>
                <p class="western" style="border-radius: 0.95em;" >
                    Tiempo
                </p>
                <select id="A" name="A" value="A" style="border-radius: 0.95em;">
                        <option value="1"> De 1 a 6 horas </option>
                        <option value="2"> De 7 a 12 horas  </option>
                        <option value="3"> De 13 a 18 horas </option>
                        <option value="3"> De 19 a 24 horas </option>
                        <option value="3"> Mas de 24 horas </option>
                </select>
                </br></br></br></br></br></br>
            </section>	
</section>
<br/><br/><br/><br/><br/>
<?php
//footer
//include_once 'footer.php';
?>