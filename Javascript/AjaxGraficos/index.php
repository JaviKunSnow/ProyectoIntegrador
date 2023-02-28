<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <section class="d-flex justify-content-center">
        <button class="btn active" id="verGrafico">Graficos</button>
        <button class="btn" id="verTablaSensores">Sensores</button>
        <button class="btn" id="verTablaActuadores">Actuadores</button>
    </section>
    <section id="secGrafico">
        <input type="hidden" id="ip" value="<?php echo $_SERVER["SERVER_ADDR"]?>">
        <select name="boton" id="boton">
            <option value="semana">Ultima semana</option>
            <option value="mes">Ultimo mes</option>
        </select>
        <div>
            <canvas id="grafico"></canvas>
        </div>
    </section>
    <section>
        <form id="form">
            <label for="">fecha inicio</label>
            <input type="datetime" id="fecha1">

        </form>
    </section>
    <section id="secTableSensor" class="d-none">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">fecha</th>
                        <th scope="col">humedad</th>
                        <th scope="col">temperatura</th>
                        <th scope="col">luminosidad</th>
                        <th scope="col">personas</th>
                        <th scope="col">idArduino</th>
                    </tr>
                </thead>
                <tbody id="cuerpoSensores">
                    
                </tbody>
            </table>
        </div>
    </section>
    <section id="secTableActuador" class="d-none">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">fecha</th>
                        <th scope="col">actuador</th>
                        <th scope="col">causa</th>
                        <th scope="col">idArduino</th>
                    </tr>
                </thead>
                <tbody id="cuerpoActuadores">
                    
                </tbody>
            </table>
        </div>
    </section>
    <script src="js/grafico.js"></script>
    <script src="js/tablas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>