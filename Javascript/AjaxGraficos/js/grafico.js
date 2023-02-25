
const SERVER = "http://192.168.1.110/ProyectoIntegrador/API/api.php";
const ctx = document.getElementById("grafico");

const humedad = [];
const temperatura = [];
const luminosidad = [];
const personas = [];

/*$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "http://192.168.1.110/ProyectoIntegrador/API/api.php/sensores",
        dataType: "application/json",
        success: function (response) {
            datos = response;
        }
    });

    $("#boton").click(function (e) { 
        e.preventDefault();
        
        new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
              datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });

    });
});

console.log(datos);*/

window.addEventListener("load", async () => {
  
  if(!window.grafica) {
    const sensoresSemana = await datosSemana();
    graficoSemana(sensoresSemana);
  }
  
  document.getElementById("boton").addEventListener("change", async (e) => {
    e.preventDefault();

    let valor = document.getElementById("boton").value;

    switch (valor) {
      case "semana":
        const sensoresSemana = await datosSemana();
        graficoSemana(sensoresSemana);
        break;
    
      case "mes":
        const sensoresMes = await datosMes();
        graficoMes(sensoresMes);
      default:
        break;
    }
  })
})

async function datosSemana() { 
  const datos = await fetch(`${SERVER}/sensores?grafico=semana`, {
    method: 'GET',
    headers: {
      'content-type': 'application/json'
    }
  })
    
  if (!datos.ok) {
    throw `error${datos.status} ${datos.statusText}`;
  }
    
  return await datos.json();
}

async function graficoSemana(semana) {
  
  document.getElementById("grafico").innerHTML = "";

  if(humedad.length != 0) {
    humedad.length = 0;
    temperatura.length = 0;
    luminosidad.length = 0;
    personas.length = 0;
  }

  for await(objeto of semana) {
    humedad.push(objeto.humedad_media);
    temperatura.push(objeto.temperatura_media);
    luminosidad.push(objeto.luminosidad_media);
    personas.push(objeto.personas_media);
  }

  const labels = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
    const data = {
      labels: labels,
      datasets: [{
        label: 'Temperatura',
        data: temperatura,
        fill: false,
        borderColor: 'rgb(255, 159, 64)'
      },
      {
        label: 'Humedad',
        data: humedad,
        fill: false,
        borderColor: 'rgb(75, 192, 192)'
      },
      /*{
        label: 'Luminosidad',
        data: luminosidad,
        fill: false,
        borderColor: 'rgb(75, 192, 192)'
      },*/
      {
        label: 'Personas',
        data: personas,
        fill: false,
        borderColor: 'rgb(153, 102, 255)'
      }]
    };

    if (window.grafica) {
      window.grafica.clear();
      window.grafica.destroy();
    }

    window.grafica = new Chart(ctx, {
      type: 'line',
      data: data,
      }
    );
    
}

async function datosMes() { 
  const datos = await fetch(`${SERVER}/sensores?grafico=mes`, {
    method: 'GET',
    headers: {
      'content-type': 'application/json'
    }
  })
    
  if (!datos.ok) {
    throw `error${datos.status} ${datos.statusText}`;
  }
    
  return await datos.json();
}

async function graficoMes(mes) {
  
  document.getElementById("grafico").clear;

  if(humedad.length != 0) {
    humedad.length = 0;
    temperatura.length = 0;
    luminosidad.length = 0;
    personas.length = 0;
  }

  for await(objeto of mes) {
    humedad.push(objeto.humedad_media);
    temperatura.push(objeto.temperatura_media);
    luminosidad.push(objeto.luminosidad_media);
    personas.push(objeto.personas_media);
  }

  const labels = ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'];
    const data = {
      labels: labels,
      datasets: [{
        label: 'Temperatura',
        data: temperatura,
        fill: false,
        borderColor: 'rgb(255, 159, 64)'
      },
      {
        label: 'Humedad',
        data: humedad,
        fill: false,
        borderColor: 'rgb(75, 192, 192)'
      },
      /*{
        label: 'Luminosidad',
        data: luminosidad,
        fill: false,
        borderColor: 'rgb(75, 192, 192)'
      },*/
      {
        label: 'Personas',
        data: personas,
        fill: false,
        borderColor: 'rgb(153, 102, 255)'
      }]
    };

    if (window.grafica) {
      window.grafica.clear();
      window.grafica.destroy();
    }

    window.grafica = new Chart(ctx, {
        type: 'line',
        data: data,
      }
    );
    
}

