<div class="container mt-4">
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="verGrafico" data-bs-toggle="tab" data-bs-target="#grafico" type="submit" role="tab" aria-controls="grafico" aria-selected="true">Gráfico</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="verTablaSensores" data-bs-toggle="tab" data-bs-target="#tabla1" type="submit" role="tab" aria-controls="tabla1" aria-selected="false">Sensores</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="verTablaActuadores" data-bs-toggle="tab" data-bs-target="#tabla2" type="submit" role="tab" aria-controls="tabla2" aria-selected="false">Actuadores</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="graficoTab" role="tabpanel" aria-labelledby="grafico-tab">
            <!-- Filtro de busqueda -->
            <form class="my-4">
                <div class="d-flex align-items-center">
                    <!-- aqui podemos poner en que mes nos encontramos o algo  -->
                    <h2>Enero</h2>
                    <div class="ms-auto">
                        <select class="form-select" id="boton">
                            <option value="semana">Ultima semana</option>
                            <option value="mes">Ultimo mes</option>
                        </select>
                    </div>
                </div>
            </form>
            <!-- gráficos -->
            <div id="divGraf">
                <canvas id="grafico"></canvas>
            </div>
        </div>
        <div class="tab-pane fade" id="tabla1" role="tabpanel" aria-labelledby="tabla1-tab">
            <!-- Filtro de busqueda -->
            <input type="hidden" name="buscador" id="idClase" value="<?echo $_SESSION['idAula']?>">
            <form class="my-4" id="form">
                <input type="hidden" name="buscador" id="idClase" value="<? echo $_SESSION['idAula'] ?>">
                <input type="hidden" name="buscador" id="buscador" value="">
                <div class="row">
                    <div class="col-md-4">
                        <label for="select" class="form-label">Seleccione dato específico</label>
                        <select class="form-select" id="selector" name="selector">
                            <option value="Todos">Todos</option>
                            <option value="temperatura">Temperatura</option>
                            <option value="humedad">Humedad</option>
                            <option value="luminosidad">Luminosidad</option>
                            <option value="personas">Personas</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="input-fecha1" class="form-label">Fecha y hora inicial</label>
                        <input type="datetime-local" class="form-control" id="fecha1" name="fecha1">
                    </div>
                    <div class="col-md-4">
                        <label for="input-fecha2" class="form-label">Fecha y hora final</label>
                        <input type="datetime-local" class="form-control" id="fecha2" name="fecha2">
                    </div>
                    <div class="col-md-4">
                        <input type="submit" id="enviar" value="filtrar">
                    </div>

                </div>
            </form>
            <!-- tabla de sensores -->
            <div class="container my-4">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr id="headTablaSen">

                            </tr>
                        </thead>
                        <tbody id="cuerpoTablaSen">
                            <tr>

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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tabla2" role="tabpanel" aria-labelledby="tabla2-tab">
            <!-- Filtro de busqueda -->
            <form class="my-4" id="formAct">
                <input type="hidden" name="buscador" id="buscadorAct" value="<? echo $_SESSION['nomClase']?>">
                <div class="row">
                    <div class="col-md-4">
                        <label for="select" class="form-label">Seleccione dato específico</label>
                        <select class="form-select" id="selector2" name="selector2">
                            <option value="Todos">Todos</option>
                            <option value="calefaccion">Calefacción</option>
                            <option value="ventilador">Ventilador</option>
                            <option value="luces">Iluminación</option>
                            <option value="ventanas">Ventanas</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="input-fecha1" class="form-label">Fecha y hora inicial</label>
                        <input type="datetime-local" class="form-control" id="fecha1Act" name="fecha1Act">
                    </div>
                    <div class="col-md-4">
                        <label for="input-fecha2" class="form-label">Fecha y hora final</label>
                        <input type="datetime-local" class="form-control" id="fecha2Act" name="fecha2Act">
                    </div>
                    <div class="col-md-4">
                        <input type="submit" id="enviar" value="filtrar">
                    </div>

                </div>
            </form>
            <!-- tabla de actuadores -->
            <div class="container my-4">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr id="headTablaAct">

                            </tr>
                        </thead>
                        <tbody id="cuerpoTablaAct">
                            <tr>
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
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="web/js/grafico.js"></script>
<script src="web/js/tablaSensores.js"></script>
<script src="web/js/tablaActuadores.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>