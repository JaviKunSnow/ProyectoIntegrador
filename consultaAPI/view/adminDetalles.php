<div class="container mt-4">
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button type="submit" class="nav-link active" id="grafico-tab" data-bs-toggle="tab" data-bs-target="#grafico" role="tab" aria-controls="grafico" aria-selected="true">Gráfico</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="submit" class="nav-link" id="tabla1-tab" data-bs-toggle="tab" data-bs-target="#tabla1" role="tab" aria-controls="tabla1" aria-selected="false">Sensores</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="submit" class="nav-link" id="tabla2-tab" data-bs-toggle="tab" data-bs-target="#tabla2" role="tab" aria-controls="tabla2" aria-selected="false">Actuadores</button>
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