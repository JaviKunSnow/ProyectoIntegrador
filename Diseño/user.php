<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/userStyle.css">
<link rel="stylesheet" href="css/tipografia.css">

<div class="usuario d-none d-sm-none d-md-block d-lg-block">
    <h2 class="text-center">Aula 165</h2>
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

<!-- Carrusel -->
<div id="carouselDarkVariant" class="carousel slide carousel-dark d-block d-sm-block d-md-none d-lg-none mt-5 pt-4" data-ride="#e33c13">
    <h3 class="text-center">Aula 165</h3>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                <span class="my-2" id="temperaturaSpan">25 º</span>
                <div class="distortedTemp">
                    <button class="btn btn-circle" id="temperatura">
                        <img src="./multimedia/sensores/temp.png" alt="tempIcon" class="sensorIcon">
                    </button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                <span class="my-2" id="humedadSpan">100%</span>
                <div class="distortedHum">
                    <button class="btn btn-circle" id="humedad">
                        <img src="./multimedia/sensores/hum.png" alt="humIcon" class="sensorIcon">
                    </button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex flex-column justify-content-center align-items-center h-100">
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

<div class="d-flex flex-wrap justify-content-center mt-5 pt-3">
    <button class="btn encendido actuadores">
        <img src="./multimedia/actuadores/fan.png" alt="ventIcon" class="actuadorIcon">
        Ventilador
    </button>
    <button class="btn apagado actuadores">
        <img src="./multimedia/actuadores/heating.png" alt="caleIcon" class="actuadorIcon">
        Calefacción
    </button>
    <button class="btn encendido actuadores">
        <img src="./multimedia/actuadores/idea.png" alt="luzIcon" class="actuadorIcon">
        Luces
    </button>
    <button class="btn apagado actuadores">
        <img src="./multimedia/actuadores/doors.png" alt="ventaIcon" class="actuadorIcon">
        Ventanas
    </button>
</div>