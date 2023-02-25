<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Dependiendo de que pagina sea tendra un css diferente -->
    <link rel="stylesheet" href="css/layoutStyle.css">
    <link rel="stylesheet" href="css/userStyle.css">
    <!-- Esta se mantiene para todas la paginas ya que incluye la tipografia especifica -->
    <link rel="stylesheet" href="css/tipografia.css">
    <title>Vista principal - user</title>
</head>

<body>
    <header>
        <div class="logo py-2 ms-5">
            <img src="multimedia/logo_blanco.png" alt="Logo" class="lg img-fluid px-3">
        </div>
        <!-- Si no esta logueado este boton desaparece -->
        <div class="boton">
            <button class="btn text-light" id="logout">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right img-fluid" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg>
            </button>
        </div>
    </header>
    <main class="sticky-top">
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

        <div class="d-flex flex-wrap justify-content-center mt-5">
            <button class="btn m-2 encendido">
                <img src="./multimedia/actuadores/fan.png" alt="ventIcon" class="actuadorIcon">
                Ventilador
            </button>
            <button class="btn m-2 apagado">
                <img src="./multimedia/actuadores/heating.png" alt="caleIcon" class="actuadorIcon">
                Calefacción
            </button>
            <button class="btn m-2 encendido">
                <img src="./multimedia/actuadores/idea.png" alt="luzIcon" class="actuadorIcon">
                Luz
            </button>
            <button class="btn m-2 apagado">
                <img src="./multimedia/actuadores/doors.png" alt="ventaIcon" class="actuadorIcon">
                Ventanas
            </button>
        </div>

    </main>
    <div class="container-fluid px-0 pt-1">
        <footer class="bg-light text-center text-lg-start fixed-bottom">
            <div class="text-center p-3">
                ©2023
                <a class="text-light" href="https://www.claudiomoyano.es/">IES Claudio Moyano - DAW2</a>
            </div>
        </footer>
    </div>
</body>

</html>