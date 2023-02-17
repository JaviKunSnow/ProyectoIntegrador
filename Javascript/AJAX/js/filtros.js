//---------------FECHAS----------------------------------------------------------------

//Funcion para calcular los dias entre dos fechas introducidas.
function calcularFecha() {
    let duracionDia = 24 * 60 * 60 * 1000; // Duracion de un dia: horas, minutos, segundos, milisegundos
    let fechaInicial = new Date(document.getElementById('fechaInicial').value); //Variable que guarda la fecha inicial introducida en el formulario
    let fechaFinal = new Date(document.getElementById('fechaFinal').value); //Variable que guarda la fecha final introducida en el formulario
    //console.log(document.getElementById(typeof(('horaInicial').value)));
    //Funcion para calcular fechas entre dos fechas
    Date.prototype.añadirDias = function (days) {
        var date = new Date(this.valueOf());
        date.setDate(date.getDate() + days);
        return date;
    }

    //Si las dos fechas se han rellenado
    if (fechaInicial != 'Invalid Date' && fechaFinal != 'Invalid Date') {
        let dias = Math.round(Math.abs((fechaInicial - fechaFinal) / duracionDia));
        console.log("Entre las fechas hay:" + dias);

        
        let arrayFechas = []; //Array que guardará las fechas
        let fecha = fechaInicial; //Fecha de la que partiremos para calcular las demás

        //Calculamos las fechas concretas entre los dias seleccionados y las guardamos en un array
        for (let i = dias; i > 0; i--) {
            fecha = fecha.añadirDias(1)
            arrayFechas.push(fecha.toISOString().split('T')[0]);
        }

        arrayFechas.unshift(fechaInicial.toISOString().split('T')[0]);//Añade la fecha inicial a la posicion 0 de arrayFechas
        console.log(arrayFechas);
        return arrayFechas;

    //Si solo hay fecha Inicial devuelve la fecha    
    } else if (fechaInicial != '' && fechaFinal == 'Invalid Date') {
        console.log(fechaInicial.toISOString().split('T')[0]);
        return fechaInicial.toISOString().split('T')[0];

    //Si solo hay fecha Final, fechaInicial adopta el valor de fecha Final y este se retorna
    } else if(fechaFinal != '' && fechaInicial == 'Invalid Date'){
        fechaInicial = fechaFinal;
        console.log(fechaInicial.toISOString().split('T')[0]);
        return fechaInicial.toISOString().split('T')[0];
}}

//Accion para el boton calcular fechas
$(document).ready(function () {
    $("#botonFecha").click(calcularFecha);
});

//--------------Crear unica fecha a partir de fecha y horas------------------------------------------------------------------


function crearFecha(){
    let fechaInicial = new Date(document.getElementById('fechaInicial').value); //Variable que guarda la fecha inicial introducida en el formulario
    let dias = new Date(fechaInicial).getDate;
    console.log(dias);
}

crearFecha();
