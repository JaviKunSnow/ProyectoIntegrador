<h2 class="text-center my-4">Aula 165</h2>
<!-- Aqui aparecerá la fecha de hoy -->
<h4 class="text-center"><? echo date('Y-m-d') ?></h4>

<!-- Datos de los sensores mas recientes-->
<div class="usuario d-none d-sm-none d-md-block d-lg-block">
    <div class="d-flex row justify-content-center align-items-center mx-0">
        <div class="circle d-flex flex-column align-items-center col-md-4">
            <? $temperatura_actual = $valores['temperatura'];

            if ($temperatura_actual > 21) {
                $background_id = 'hot';
                $border_class = 'hot2';
                $text_id = 'hot3';
            } else if ($temperatura_actual >= 19 && $temperatura_actual <= 21) {
                $background_id = 'warm';
                $border_class = 'warm2';
                $text_id = 'warm3';
            } else {
                $background_id = 'cold';
                $border_class = 'cold2';
                $text_id = 'cold3';
            }
            ?>
            <span class="my-2" id="<?php echo $text_id ?>"><? echo $valores['temperatura'] ?>º</span>
            <div class="<?php echo $border_class ?>">
                <button type="submit" class="btn btn-circle" id="<?php echo $background_id ?>">
                    <img src="web/multimedia/sensores/temp.png" alt="tempIcon" class="sensorIcon">
                </button>
            </div>
        </div>
        <div class="circle d-flex flex-column align-items-center col-md-4">
            <? $humedad_actual = $valores['humedad'];

            if ($humedad_actual >= 0 && $humedad_actual <= 25) {
                $background_id1 = 'low';
                $border_class1 = 'low2';
                $text_id1 = 'low3';
            } else if ($humedad_actual > 25 && $humedad_actual <= 50) {
                $background_id1 = 'medium';
                $border_class1 = 'medium2';
                $text_id1 = 'medium3';
            } else {
                $background_id1 = 'high';
                $border_class1 = 'high2';
                $text_id1 = 'high3';
            }
            ?>
            <span class="my-2" id="<?php echo $text_id1 ?>"><? echo $valores['humedad'] ?>%</span>
            <div class="<?php echo $border_class1 ?>">
                <button type="submit" class="btn btn-circle" id="<?php echo $background_id1 ?>">
                    <img src="web/multimedia/sensores/hum.png" alt="humIcon" class="sensorIcon">
                </button>
            </div>
        </div>
        <div class="circle d-flex flex-column align-items-center col-md-4">
            <? $num_personas = $valores['personas'];

            if ($num_personas >= 0 && $num_personas <= 5) {
                $img_src = 'per3.png';
            } else if ($num_personas > 5 && $num_personas < 15) {
                $img_src = 'per2.png';
            } else {
                $img_src = 'per1.png';
            }
            ?>
            <span class="my-2" id="personasSpan"><? echo $valores['personas'] ?></span>
            <div class="distortedPer">
                <button type="submit" class="btn btn-circle" id="personas">
                    <!-- dependiendo de las personas que se encuentren en el aula cambiara  -->
                    <img src="web/multimedia/sensores/<? echo $img_src ?>" alt="perIcon" class="sensorIcon">
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Datos de los sensores más recientes en carrousel con vista dispositivo móvil-->
<div id="carouselDarkVariant" class="carousel slide carousel-dark d-block d-sm-block d-md-none d-lg-none mt-2" data-ride="#e33c13">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <? $temperatura_actual = $valores['temperatura'];

                if ($temperatura_actual > 21) {
                    $background_id = 'hot';
                    $border_class = 'hot2';
                    $text_id = 'hot3';
                } else if ($temperatura_actual >= 19 && $temperatura_actual <= 21) {
                    $background_id = 'warm';
                    $border_class = 'warm2';
                    $text_id = 'warm3';
                } else {
                    $background_id = 'cold';
                    $border_class = 'cold2';
                    $text_id = 'cold3';
                }
                ?>
                <span class="my-2" id="<?php echo $text_id ?>"><? echo $valores['temperatura'] ?>º</span>
                <div class="<?php echo $border_class ?>">
                    <button type="submit" class="btn btn-circle" id="<?php echo $background_id ?>">
                        <img src="web/multimedia/sensores/temp.png" alt="tempIcon" class="sensorIcon">
                    </button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <? $humedad_actual = $valores['humedad'];

                if ($humedad_actual >= 0 && $humedad_actual <= 25) {
                    $background_id1 = 'low';
                    $border_class1 = 'low2';
                    $text_id1 = 'low3';
                } else if ($humedad_actual > 25 && $humedad_actual <= 50) {
                    $background_id1 = 'medium';
                    $border_class1 = 'medium2';
                    $text_id1 = 'medium3';
                } else {
                    $background_id1 = 'high';
                    $border_class1 = 'high2';
                    $text_id1 = 'high3';
                }
                ?>
                <span class="my-2" id="<?php echo $text_id1 ?>"><? echo $valores['humedad'] ?>%</span>
                <div class="<?php echo $border_class1 ?>">
                    <button type="submit" class="btn btn-circle" id="<?php echo $background_id1 ?>">
                        <img src="web/multimedia/sensores/hum.png" alt="humIcon" class="sensorIcon">
                    </button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <? $num_personas = $valores['personas'];

                if ($num_personas >= 0 && $num_personas <= 5) {
                    $img_src = 'per3.png';
                } else if ($num_personas > 5 && $num_personas < 15) {
                    $img_src = 'per2.png';
                } else {
                    $img_src = 'per1.png';
                }
                ?>
                <span class="my-2" id="personasSpan"><? echo $valores['personas'] ?></span>
                <div class="distortedPer">
                    <button type="submit" class="btn btn-circle" id="personas">
                        <!-- dependiendo de las personas que se encuentren en el aula cambiara  -->
                        <img src="web/multimedia/sensores/<? echo $img_src ?>" alt="perIcon" class="sensorIcon">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Aviso de funcionamiento de los actuadores -->
<div class="container mt-5">
    <div class="row justify-content-center flex-wrap">
        <div class="actuadores col-6 col-lg-3 mx-2">
            <div class="square">
                <div class="d-flex flex-column align-items-center justify-content-center apagado">
                    <img src="web/multimedia/actuadores/fan.png" alt="ventIcon" class="actuadorIcon">
                    <p class="text-dark">Ventilador</p>
                </div>
            </div>
        </div>
        <div class="actuadores col-6 col-lg-3 mx-2">
            <div class="square">
                <div class="d-flex flex-column align-items-center justify-content-center apagado">
                    <img src="web/multimedia/actuadores/heating.png" alt="caleIcon" class="actuadorIcon">
                    <p class="text-dark">Calefacción</p>
                </div>
            </div>
        </div>
        <div class="actuadores col-6 col-lg-3 mx-2">
            <div class="square">
                <div class="d-flex flex-column align-items-center justify-content-center encendido">
                    <img src="web/multimedia/actuadores/idea.png" alt="luzIcon" class="actuadorIcon">
                    <p class="text-dark">Iluminación</p>
                </div>
            </div>
        </div>
        <div class="actuadores col-6 col-lg-3 mx-2">
            <div class="square">
                <div class="d-flex flex-column align-items-center justify-content-center encendido">
                    <img src="web/multimedia/actuadores/doors.png" alt="ventaIcon" class="actuadorIcon">
                    <p class="text-dark">Ventanas</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Botón para acceder al resto de la informacion del arduino -->
<div class="d-flex justify-content-center mt-3">
    <form action="./index.php" method="post">
        <button type="submit" class="detalles btn btn-secondary btn-block btn-lg" name="detalles">
            Detalles
        </button>
    </form>
</div>