<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/userStyle.css">
<link rel="stylesheet" href="css/tipografia.css">

<h2 class="text-center my-4">Aula 165</h2>
<!-- Aqui aparecerá la fecha de hoy -->
<h4 class="text-center">11-05-2023</h4>

<!-- Datos de los sensores mas recientes-->
<div class="usuario d-none d-sm-none d-md-block d-lg-block">
    <div class="d-flex row justify-content-center align-items-center mx-0">
        <div class="circle d-flex flex-column align-items-center col-md-4">
            <span class="my-2" id="temperaturaSpan">25 º</span>
            <div class="distortedTemp">
                <button class="btn btn-circle" id="temperatura">
                    <img src="./multimedia/sensores/temp.png" alt="tempIcon" class="sensorIcon">
                </button>
            </div>
        </div>
        <div class="circle d-flex flex-column align-items-center col-md-4">
            <span class="my-2" id="humedadSpan">100%</span>
            <div class="distortedHum">
                <button class="btn btn-circle" id="humedad">
                    <img src="./multimedia/sensores/hum.png" alt="humIcon" class="sensorIcon">
                </button>
            </div>
        </div>
        <div class="circle d-flex flex-column align-items-center col-md-4">
            <span class="my-2" id="personasSpan">10</span>
            <div class="distortedPer">
                <button class="btn btn-circle" id="personas">
                    <!-- dependiendo de las personas que se encuentren en el aula cambiara  -->
                    <!-- mas de 10 personas -->
                    <img src="./multimedia/sensores/per1.png" alt="perIcon" class="sensorIcon">
                    <!-- de 5 a 10 personas -->
                    <!-- <img src="./multimedia/sensores/per2.png" alt="perIcon" class="sensorIcon"> -->
                    <!-- de 0 a 5 personas  -->
                    <!-- <img src="./multimedia/sensores/per3.png" alt="perIcon" class="sensorIcon"> -->
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
                <span class="my-2" id="temperaturaSpan">25 º</span>
                <div class="distortedTemp">
                    <button class="btn btn-circle" id="temperatura">
                        <img src="./multimedia/sensores/temp.png" alt="tempIcon" class="sensorIcon">
                    </button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <span class="my-2" id="humedadSpan">100%</span>
                <div class="distortedHum">
                    <button class="btn btn-circle" id="humedad">
                        <img src="./multimedia/sensores/hum.png" alt="humIcon" class="sensorIcon">
                    </button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <span class="my-2" id="personasSpan">10</span>
                <div class="distortedPer">
                    <button class="btn btn-circle" id="personas">
                        <!-- dependiendo de las personas que se encuentren en el aula cambiara  -->
                        <!-- mas de 10 personas -->
                        <img src="./multimedia/sensores/per1.png" alt="perIcon" class="sensorIcon">
                        <!-- de 5 a 10 personas -->
                        <!-- <img src="./multimedia/sensores/per2.png" alt="perIcon" class="sensorIcon"> -->
                        <!-- de 0 a 5 personas  -->
                        <!-- <img src="./multimedia/sensores/per3.png" alt="perIcon" class="sensorIcon"> -->
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
                    <img src="./multimedia/actuadores/fan.png" alt="ventIcon" class="actuadorIcon">
                    <p class="text-dark">Ventilador</p>
                </div>
            </div>
        </div>
        <div class="actuadores col-6 col-lg-3 mx-2">
            <div class="square">
                <div class="d-flex flex-column align-items-center justify-content-center apagado">
                    <img src="./multimedia/actuadores/heating.png" alt="caleIcon" class="actuadorIcon">
                    <p class="text-dark">Calefacción</p>
                </div>
            </div>
        </div>
        <div class="actuadores col-6 col-lg-3 mx-2">
            <div class="square">
                <div class="d-flex flex-column align-items-center justify-content-center encendido">
                    <img src="./multimedia/actuadores/idea.png" alt="luzIcon" class="actuadorIcon">
                    <p class="text-dark">Iluminación</p>
                </div>
            </div>
        </div>
        <div class="actuadores col-6 col-lg-3 mx-2">
            <div class="square">
                <div class="d-flex flex-column align-items-center justify-content-center encendido">
                    <img src="./multimedia/actuadores/doors.png" alt="ventaIcon" class="actuadorIcon">
                    <p class="text-dark">Ventanas</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Botón para acceder al resto de la informacion del arduino -->
<div class="d-flex justify-content-center mt-3">
    <button class="detalles btn btn-secondary btn-block btn-lg">
        Detalles
    </button>
</div>





<!-- <div class="actuadores btn-group d-grid gap-2 d-md-flex justify-content-md-end my-5" role="group">
            <button class="btn apagado">
                <span class="me-2">
                    <img src="./multimedia/actuadores/fan.png" alt="ventIcon" class="actuadorIcon">
                </span>
                Ventilador
            </button>
            <button class="btn encendido">
                <span class="me-2">
                    <img src="./multimedia/actuadores/heating.png" alt="caleIcon" class="actuadorIcon">
                </span>
                Calefacción
            </button>
            <button class="btn apagado">
                <span class="me-2">
                    <img src="./multimedia/actuadores/idea.png" alt="luzIcon" class="actuadorIcon">
                </span>
                Luces
            </button>
            <button class="btn encendido">
                <span class="me-2">
                    <img src="./multimedia/actuadores/doors.png" alt="ventaIcon" class="actuadorIcon">
                </span>
                Ventanas
            </button>
        </div> -->

<!-- <div class="d-flex justify-content-center">
            <div class="btn-group btn-group-lg btn-group-sm mt-5 mb-3" role="group" aria-label="Grupo de botones">
                <button class="btn btn-secondary text-dark d-flex row encendido mx-4 justify-content-center">
                    <span class="mt-2">
                        <img src="./multimedia/actuadores/fan.png" alt="ventIcon" class="actuadorIcon">
                    </span>
                    Ventilador
                </button>
                <button class="btn btn-secondary text-dark d-flex row apagado mx-4 justify-content-center">
                    <span class="mt-2">
                        <img src="./multimedia/actuadores/heating.png" alt="caleIcon" class="actuadorIcon">
                    </span>
                    Calefacción
                </button>
                <button class="btn btn-secondary text-dark d-flex row apagado mx-4 justify-content-center">
                    <span class="mt-2">
                        <img src="./multimedia/actuadores/idea.png" alt="luzIcon" class="actuadorIcon">
                    </span>
                    Luz
                </button>
                <button class="btn btn-secondary text-dark d-flex row apagado mx-4 justify-content-center">
                    <span class="mt-2">
                        <img src="./multimedia/actuadores/doors.png" alt="ventaIcon" class="actuadorIcon">
                    </span>
                    Ventanas
                </button>
            </div>
        </div> -->