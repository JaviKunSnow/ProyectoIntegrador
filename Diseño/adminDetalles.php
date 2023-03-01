<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/detallesStyle.css">
<link rel="stylesheet" href="css/tipografia.css"> -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="multimedia/favicon.ico" type="image/x-icon">
    <!-- Dependiendo de que pagina sea tendra un css diferente -->
    <link rel="stylesheet" href="css/layoutStyle.css">
    <!-- <link rel="stylesheet" href="css/adminStyle.css">
    <link rel="stylesheet" href="css/loginStyle.css">
    <link rel="stylesheet" href="css/userStyle.css"> -->
    <link rel="stylesheet" href="css/detallesStyle.css">
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
        <div class="boton align-self-end mb-2">
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

        <div class="container mt-4">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="grafico-tab" data-bs-toggle="tab" data-bs-target="#grafico" type="button" role="tab" aria-controls="grafico" aria-selected="true">Gráfico</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tabla1-tab" data-bs-toggle="tab" data-bs-target="#tabla1" type="button" role="tab" aria-controls="tabla1" aria-selected="false">Sensores</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tabla2-tab" data-bs-toggle="tab" data-bs-target="#tabla2" type="button" role="tab" aria-controls="tabla2" aria-selected="false">Actuadores</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="grafico" role="tabpanel" aria-labelledby="grafico-tab">
                    <!-- Filtro de busqueda -->
                    <form class="my-4">
                        <div class="d-flex align-items-center">
                            <!-- aqui podemos poner en que mes nos encontramos o algo  -->
                            <h2>Enero</h2>
                            <div class="ms-auto">
                                <select class="form-select">
                                    <option value="0">-</option>
                                    <option value="1">Temperatura</option>
                                    <option value="2">Humedad</option>
                                    <option value="3">Luminosidad</option>
                                    <option value="4">Personas</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <!-- gráficos -->

                </div>
                <div class="tab-pane fade" id="tabla1" role="tabpanel" aria-labelledby="tabla1-tab">
                    <!-- Filtro de busqueda -->
                    <form class="my-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="select" class="form-label">Seleccione dato específico</label>
                                <select class="form-select" id="select" name="select">
                                    <option value="0">-</option>
                                    <option value="1">Temperatura</option>
                                    <option value="2">Humedad</option>
                                    <option value="3">Luminosidad</option>
                                    <option value="4">Personas</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="input-fecha1" class="form-label">Fecha y hora inicial</label>
                                <input type="datetime-local" class="form-control" id="input-fecha1" name="input-fecha1">
                            </div>
                            <div class="col-md-4">
                                <label for="input-fecha2" class="form-label">Fecha y hora final</label>
                                <input type="datetime-local" class="form-control" id="input-fecha2" name="input-fecha2">
                            </div>
                        </div>
                    </form>
                    <!-- tabla de sensores -->
                    <div class="container my-4">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="d-none d-md-table-cell">ID</th>
                                        <th>Fecha</th>
                                        <th class="d-none d-sm-table-cell d-md-table-cell">Temperatura</th>
                                        <th class="d-none d-md-table-cell">Humedad</th>
                                        <th class="d-none d-md-table-cell">Luminosidad</th>
                                        <th class="d-none d-md-table-cell">Personas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="d-none d-md-table-cell w-auto">1</td>
                                        <td class="d-block d-md-none w-auto">
                                            <a href="#submenuSensores1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                </svg>
                                                <span class="ms-1 d-block d-md-none d-sm-inline">01/03/2023 02:55:12</span> </a>
                                            <ul class="datos collapse nav flex-column ms-1 mx-auto" id="submenuSensores1" data-bs-parent="#menu">
                                                <li class="d-block d-sm-none d-md-none">Temperatura: 25º</li>
                                                <li>Humedad: 10%</li>
                                                <li>Luminosidad: 200</li>
                                                <li>Personas: 5</li>
                                            </ul>
                                        </td>
                                        <td class="d-none d-md-table-cell w-auto">01/03/2023 02:55:12</td>
                                        <td class="d-none d-sm-table-cell d-md-table-cell w-auto">25º</td>
                                        <td class="d-none d-md-table-cell w-auto">10%</td>
                                        <td class="d-none d-md-table-cell w-auto">200</td>
                                        <td class="d-none d-md-table-cell w-auto">5</td>
                                    </tr>
                                    <tr>
                                        <td class="d-none d-md-table-cell w-auto">1</td>
                                        <td class="d-block d-md-none w-auto">
                                            <a href="#submenuSensores2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                </svg>
                                                <span class="ms-1 d-block d-md-none d-sm-inline">01/03/2023 02:55:12</span> </a>
                                            <ul class="datos collapse nav flex-column ms-1 mx-auto" id="submenuSensores2" data-bs-parent="#menu">
                                                <li class="d-block d-sm-none d-md-none">Temperatura: 25º</li>
                                                <li>Humedad: 10%</li>
                                                <li>Luminosidad: 200</li>
                                                <li>Personas: 5</li>
                                            </ul>
                                        </td>
                                        <td class="d-none d-md-table-cell w-auto">01/03/2023 02:55:12</td>
                                        <td class="d-none d-sm-table-cell d-md-table-cell w-auto">25º</td>
                                        <td class="d-none d-md-table-cell w-auto">10%</td>
                                        <td class="d-none d-md-table-cell w-auto">200</td>
                                        <td class="d-none d-md-table-cell w-auto">5</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabla2" role="tabpanel" aria-labelledby="tabla2-tab">
                    <!-- Filtro de busqueda -->
                    <form class="my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="input-numerico" class="form-label">Aula</label>
                                <input type="number" class="form-control" id="input-numerico" name="input-numerico">
                            </div>
                            <div class="col-md-6">
                                <label for="select" class="form-label">Seleccione dato específico</label>
                                <select class="form-select" id="select" name="select">
                                    <option value="0">-</option>
                                    <option value="1">Temperatura</option>
                                    <option value="2">Humedad</option>
                                    <option value="3">Luminosidad</option>
                                    <option value="4">Personas</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="input-fecha1" class="form-label">Fecha y hora inicial</label>
                                <input type="datetime-local" class="form-control" id="input-fecha1" name="input-fecha1">
                            </div>
                            <div class="col-md-6">
                                <label for="input-fecha2" class="form-label">Fecha y hora final</label>
                                <input type="datetime-local" class="form-control" id="input-fecha2" name="input-fecha2">
                            </div>
                        </div>
                    </form>
                    <!-- tabla de actuadores -->
                    <div class="container my-4">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="d-none d-md-table-cell">ID</th>
                                        <th>Fecha</th>
                                        <th class="d-none d-md-table-cell">Actuador</th>
                                        <th class="d-none d-md-table-cell">Causa</th>
                                        <th class="d-none d-sm-table-cell d-md-table-cell">Arduino</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="d-none d-md-table-cell w-auto">1</td>
                                        <td class="d-block d-md-none w-auto">
                                            <a href="#submenuActuadores1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                </svg>
                                                <span class="ms-1 d-block d-md-none d-sm-inline">01/03/2023 02:55:12</span>
                                            </a>
                                            <ul class="datos collapse nav flex-column ms-1 mx-auto" id="submenuActuadores1" data-bs-parent="#menu">
                                                <li>Actuador: Ventilador</li>
                                                <li>Causa: Demasiado calor</li>
                                                <li class="d-block d-sm-none d-md-none">Arduino: 2</li>
                                            </ul>
                                        </td>
                                        <td class="d-none d-md-table-cell w-auto">01/03/2023 02:55:12</td>
                                        <td class="d-none d-md-table-cell w-auto">Ventilador</td>
                                        <td class="d-none d-md-table-cell w-auto">Demasiado calor</td>
                                        <td class="d-none d-sm-table-cell d-md-table-cell w-auto">2</td>
                                    </tr>
                                    <tr>
                                        <td class="d-none d-md-table-cell w-auto">1</td>
                                        <td class="d-block d-md-none w-auto">
                                            <a href="#submenuActuadores2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                </svg>
                                                <span class="ms-1 d-block d-md-none d-sm-inline">01/03/2023 02:55:12</span>
                                            </a>
                                            <ul class="datos collapse nav flex-column ms-1 mx-auto" id="submenuActuadores2" data-bs-parent="#menu">
                                                <li>Actuador: Ventilador</li>
                                                <li>Causa: Demasiado calor</li>
                                                <li class="d-block d-sm-none d-md-none">Arduino: 2</li>
                                            </ul>
                                        </td>
                                        <td class="d-none d-md-table-cell w-auto">01/03/2023 02:55:12</td>
                                        <td class="d-none d-md-table-cell w-auto">Ventilador</td>
                                        <td class="d-none d-md-table-cell w-auto">Demasiado calor</td>
                                        <td class="d-none d-sm-table-cell d-md-table-cell w-auto">2</td>
                                    </tr>
                                </tbody>
                            </table>
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