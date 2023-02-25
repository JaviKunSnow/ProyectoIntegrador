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
    <main>
        <div class="usuario d-none d-sm-none d-md-block d-lg-block">
            <h2 class="text-center">Aula 165</h2>
            <div class="row justify-content-center align-items-center">
                <div class="circle d-flex flex-column align-items-center mx-0 mx-lg-4 col-md-4">
                    <span class="mt-2" id="temperaturaSpan">25 º</span>
                    <button class="btn btn-primary rounded-circle mx-0 mx-lg-5 mt-2 circulo" id="temperatura">
                        <img src="./multimedia/sensores/temp.png" alt="tempIcon" class="sensorIcon">
                    </button>
                </div>
                <div class="circle d-flex flex-column align-items-center mx-0 mx-lg-4 col-md-4">
                    <span class="mt-2" id="humedadSpan">100%</span>
                    <button class="btn btn-primary rounded-circle mx-0 mx-lg-5 mt-2 circulo" id="humedad">
                        <img src="./multimedia/sensores/hum.png" alt="humIcon" class="sensorIcon">
                    </button>
                </div>
                <div class="circle d-flex flex-column align-items-center mx-0 mx-lg-4 col-md-4">
                    <span class="mt-2" id="personasSpan">10</span>
                    <button class="btn btn-primary rounded-circle mx-0 mx-lg-5 mt-2 circulo" id="personas">
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

        <div id="myCarousel" class="carousel slide d-block d-sm-block d-md-none d-lg-none mt-5 pt-4" data-ride="#e33c13">
            <div class="carousel-inner">
                <div class="carousel-item active ms-3 ps-2">
                    <div class="circle d-flex flex-column align-items-center">
                        <span class="mt-2" id="temperaturaSpan">25 º</span>
                        <button class="btn btn-primary rounded-circle mt-2 circulo" id="temperatura">
                            <img src="./multimedia/sensores/temp.png" alt="tempIcon" class="sensorIcon">
                        </button>
                    </div>
                </div>
                <div class="carousel-item ms-3 ps-2">
                    <div class="circle d-flex flex-column align-items-center">
                        <span class="mt-2" id="humedadSpan">100%</span>
                        <button class="btn btn-primary rounded-circle mt-2 circulo" id="humedad">
                            <img src="./multimedia/sensores/hum.png" alt="humIcon" class="sensorIcon">
                        </button>
                    </div>
                </div>
                <div class="carousel-item ms-3 ps-2">
                    <div class="circle d-flex flex-column align-items-center">
                        <span class="mt-2" id="personasSpan">10</span>
                        <button class="btn btn-primary rounded-circle mt-2 circulo" id="personas">
                            <img src="./multimedia/sensores/per1.png" alt="perIcon" class="sensorIcon">
                        </button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev btn btn-success" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next btn btn-success" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </main>
    <footer class="bg-light text-center text-lg-start fixed-bottom">
        <div class="text-center p-3">
            ©2023
            <a class="text-light" href="https://www.claudiomoyano.es/">IES Claudio Moyano - DAW2</a>
        </div>
    </footer>
</body>

</html>