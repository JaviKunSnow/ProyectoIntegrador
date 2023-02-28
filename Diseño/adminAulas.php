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
        <!-- aparece a partir de tener iniciada la sesion -->
        <nav class="navegador navbar navbar-expand ">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ol class="breadcrumb flex-wrap navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="breadcrumb-item">
                            <button class="bread btn btn-link">Plantas</button>
                        </li>
                        <li class="breadcrumb-item">
                            <button class="bread btn btn-link">Aulas</button>
                        </li>
                        <li class="breadcrumb-item">
                            <button class="bread btn btn-link">Aula 522</button>
                        </li>
                        <li class="breadcrumb-item active">
                            <button class="ultimo btn btn-link text-dark" disabled>Detalles</button>
                        </li>
                    </ol>
                    <!-- Este buscador solo aparece cuando el admin se encuentra en la seccion de AULAS -->
                    <form class="d-flex">
                        <input class="buscadorI form-control form-control-sm " type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="buscador btn btn-secondary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="usuario">
            <h2 class="text-center">Aulas</h2>
            <div class="container">
                <!-- Aqui supongo que podria ir un foreach para poner automaticamente la cantidad de aulas que tengamos...supongo -->
                <div class="row justify-content-center">
                    <div class="col-12 text-right d-flex justify-content-end">
                        <a class="me-1" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#e33c13" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                        </a>
                        <a href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle " viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="#e33c13">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row justify-content-center">
                                        <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                            <div class="distortedAulas">
                                                <button class="botonAulas btn btn-circle" id="planta1">
                                                    <div class="mt-3">
                                                        <h4>AULA 100</h4>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                            <div class="distortedAulas">
                                                <button class="botonAulas btn btn-circle" id="planta1">
                                                    <div class="mt-3">
                                                        <h4>AULA 101</h4>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                            <div class="distortedAulas">
                                                <button class="botonAulas btn btn-circle" id="planta1">
                                                    <div class="mt-3">
                                                        <h4>AULA 102</h4>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                            <div class="distortedAulas">
                                                <button class="botonAulas btn btn-circle" id="planta1">
                                                    <div class="mt-3">
                                                        <h4>AULA 103</h4>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                            <div class="distortedAulas">
                                                <button class="botonAulas btn btn-circle" id="planta1">
                                                    <div class="mt-3">
                                                        <h4>AULA 104</h4>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                            <div class="distortedAulas">
                                                <button class="botonAulas btn btn-circle" id="planta1">
                                                    <div class="mt-3">
                                                        <h4>AULA 105</h4>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="container-fluid px-0 pt-1">
        <footer class="bg-light text-center text-lg-start fixed-bottom">
            <div class="text-center p-2">
                ©2023
                <a class="text-light" href="https://www.claudiomoyano.es/">IES Claudio Moyano - DAW2</a>
            </div>
        </footer>
    </div>
</body>

</html>