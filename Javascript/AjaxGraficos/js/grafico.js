
const SERVER = "http://192.168.1.110/ProyectoIntegrador/API/api.php";
const ctx = document.getElementById("grafico");

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
  document.getElementById("boton").addEventListener("click", async (e) => {
    e.preventDefault();

    const sensores = await datos();

    const humedad = [];
    const temperatura = [];
    const luminosidad = []
    const personas = [];
    
    console.log(typeof sensores);
    console.log(Array.isArray(sensores));
    for await(objeto of sensores) {
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

    new Chart(ctx, {
        type: 'line',
        data: data,
      }
    );
    
  })
  
})

async function datos() { 
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

