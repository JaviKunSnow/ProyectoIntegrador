<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/adminStyle.css">
<link rel="stylesheet" href="css/tipografia.css"> -->

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
    <link rel="stylesheet" href="css/adminStyle.css">
    <!-- Esta se mantiene para todas la paginas ya que incluye la tipografia especifica -->
    <link rel="stylesheet" href="css/tipografia.css">
    <title>Layout</title>
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
        <div class="usuario">
            <h2 class="text-center">Plantas</h2>
            <div class="d-flex row justify-content-center align-items-center mx-0">
                <div class="circle col-1 col-lg-4">
                    <div class="distorted">
                        <a href="#">
                            <button class="btn btn-circle planta" id="planta1">
                                <div class="col mt-4">
                                    <h4>PLANTA 1</h4>
                                    <p>100-199</p>
                                </div>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="circle col-1 col-lg-4">
                    <div class="distorted">
                        <a href="#">
                            <button class="btn btn-circle planta" id="planta2">
                                <div class="col mt-4">
                                    <h4>PLANTA 2</h4>
                                    <p>200-299</p>
                                </div>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="circle col-1 col-lg-4">
                    <div class="distorted">
                        <a href="#">
                            <button class="btn btn-circle" id="planta3">
                                <div class="col mt-4">
                                    <h4>PLANTA 3</h4>
                                    <p>300-399</p>
                                </div>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="circle col-1 col-lg-4">
                    <div class="distorted">
                        <a href="#">
                            <button class="btn btn-circle" id="planta4">
                                <div class="col mt-4">
                                    <h4>PLANTA 4</h4>
                                    <p>400-499</p>
                                </div>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="circle col-1 col-lg-4">
                    <div class="distorted">
                        <a href="#">
                            <button class="btn btn-circle" id="planta5">
                                <div class="col mt-4">
                                    <h4>PLANTA 5</h4>
                                    <p>500-599</p>
                                </div>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
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