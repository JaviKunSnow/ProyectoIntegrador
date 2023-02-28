
const ip = document.getElementById("ip").value;
const SERVER = `http://${ip}/ProyectoIntegrador/API/api.php`;
const ctx = document.getElementById("grafico");

const humedad = [];
const temperatura = [];
const luminosidad = [];
const personas = [];

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
      } ,*/
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

  if(humedad.length != 0) {
    humedad.length = 0;
    temperatura.length = 0;
    luminosidad.length = 0;
    personas.length = 0;
  }

  for await(objeto of mes) {
    humedad.push(objeto.media_humedad);
    temperatura.push(objeto.media_temperatura);
    luminosidad.push(objeto.media_luminosidad);
    personas.push(objeto.media_personas);
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
      {
        label: 'Luminosidad',
        data: luminosidad,
        fill: false,
        borderColor: 'rgb(75, 192, 192)'
      },
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