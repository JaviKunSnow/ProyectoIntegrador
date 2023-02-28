const secGrafico = document.getElementById("secGrafico");
const secTableSensor = document.getElementById("secTableSensor");
const secTableActuador = document.getElementById("secTableActuador");
const filtrosTablas = document.getElementById("filtrosTablas");

const verGrafico = document.getElementById("verGrafico");
const verTablaSensores = document.getElementById("verTablaSensores");
const verTablaActuadores = document.getElementById("verTablaActuadores");

const headSensores = document.getElementById("headSensores");
const cuerpoSensores = document.getElementById("cuerpoSensores");
const cuerpoActuadores = document.getElementById("cuerpoActuadores");

window.addEventListener("load", async () => {

    const tablaSensores = await recogerTablaSensores();

    let propiedadesTablaSensores = Object.keys(tablaSensores[0]);
    
    propiedadesTablaSensores.forEach(element => {
      let th = document.createElement("th");
      th.appendChild(document.createTextNode(element));
      headSensores.appendChild(th);
    });
      

    for await(objeto of tablaSensores) {
      await pintarTablaSensores(objeto);
    }

    const tablaActuador = await recogerTablaActuadores();

    for await(objeto of tablaActuador) {
      await pintarTablaActuador(objeto);
    }


    verGrafico.addEventListener("click", async (e) => {
        e.preventDefault();
    
        verTablaSensores.classList.remove("active");
        verTablaActuadores.classList.remove("active");
        verGrafico.classList.add("active");

        secGrafico.className = "d-block";
        secTableSensor.className = "d-none";
        secTableActuador.className = "d-none";
        filtrosTablas.className = "d-none";
    
      })
    
      verTablaSensores.addEventListener("click", async (e) => {
        e.preventDefault();
    
        verGrafico.classList.remove("active");
        verTablaActuadores.classList.remove("active");
        verTablaSensores.classList.add("active");

        secGrafico.className = "d-none";
        secTableSensor.className = "d-block";
        secTableActuador.className = "d-none";
        filtrosTabla.className = "d-block";
    
      })
    
      verTablaActuadores.addEventListener("click", async (e) => {
        e.preventDefault();
        
        verTablaSensores.classList.remove("active");
        verGrafico.classList.remove("active");
        verTablaActuadores.classList.add("active");
        
        secGrafico.className = "d-none";
        secTableSensor.className = "d-none";
        secTableActuador.className = "d-block";
        filtrosTabla.className = "d-block";
    
      })

      document.getElementById("form").addEventListener("submit", async (e) => {
        e.preventDefault();

        let valor = document.getElementById("buscador").value;
        let fecha1 = document.getElementById("fecha1").value;
        let fecha2 = document.getElementById("fecha2").value;
        cuerpoSensores.innerHTML = "";
        headSensores.innerHTML = "";

        
        const datosNuevos = await recogerTablaSensoresByDatoAndDate(valor, fecha1, fecha2);

        let propiedadesTablaSensores = Object.keys(datosNuevos[0]);

        propiedadesTablaSensores.forEach(element => {
          let th = document.createElement("th");
          th.appendChild(document.createTextNode(element));
          headSensores.appendChild(th);
        });

        for await(objeto of datosNuevos) {
          await pintarTablaSensores(objeto);
        }

      })

})

async function recogerTablaSensores() {
    const datos = await fetch(`${SERVER}/sensores`, {
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

async function pintarTablaSensores(dato) {
  let tr = document.createElement("tr");
  let propiedades = Object.keys(dato);
  for await(objeto of propiedades) {
    let th = document.createElement("th");
    th.appendChild(document.createTextNode(dato[objeto]));
    tr.appendChild(th);
  }

  document.getElementById("cuerpoSensores").appendChild(tr);
}

async function recogerTablaActuadores() {
    const datos = await fetch(`${SERVER}/actuador`, {
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

async function recogerTablaSensoresByDatoAndDate(dato, fecha1, fecha2) {
  const datos = await fetch(`${SERVER}/sensores?datos=${dato}&fecha1=${fecha1}&fecha2=${fecha2}`, {
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

async function pintarTablaActuador(dato) {
  let tr = document.createElement("tr");
  let propiedades = Object.keys(dato);
  for await(objeto of propiedades) {
    let th = document.createElement("th");
    th.appendChild(document.createTextNode(dato[objeto]));
    tr.appendChild(th);
  }

  document.getElementById("cuerpoActuadores").appendChild(tr);
}
