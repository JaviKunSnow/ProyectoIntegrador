//BOTON PARA GENERAR FECHAS

$(document).ready(function(){
    let contadorFecha = 0;
    $("#btnMasFecha").click(function(){
        contadorFecha++;
        $("#divFecha").append('<input type="date" class="form-control" name="filtroFecha" id="filtroFecha'+contadorFecha+'">');
        console.log(contadorFecha);
    });
  });
