
const headTabla = document.getElementById("headTablaAct");
const cuerpoTabla = document.getElementById("cuerpoTablaAct");
const selectorInpt2 = document.getElementById("selector2");

window.addEventListener("load", async () => {

    if(document.getElementById("idClase").value != "") {
        
        let valor = document.getElementById("idClase").value;
        
        const datosByClass = await recogerTablaActuadoresByClase(valor);
              
            await pintarHead(datosByClass);

            for await(objeto of datosByClass) {
              await pintarTabla(objeto);
            }

        } else {

          const tablaActuadores = await recogerTablaActuadores();

          await pintarHead(tablaActuadores);

          for await(objeto of tablaActuadores) {
            await pintarTabla(objeto);
          }

        }

  document.getElementById("formAct").addEventListener("submit", async (e) => {
    e.preventDefault();

    let valor = document.getElementById("buscadorAct").value;
    let selector = selectorInpt2.value;
    let fecha1 = document.getElementById("fecha1Act").value;
    fecha1 = fecha1.replace("T", " ");
    let fecha2 = document.getElementById("fecha2Act").value;
    fecha2 = fecha2.replace("T", " ");
    cuerpoTabla.innerHTML = "";
    headTabla.innerHTML = "";

    if(valor != "" && selector == "Todos" && fecha1 == "" && fecha2 == "") {

        const clase = await recogerIdClase(valor);
          
        const datosByClass = await recogerTablaActuadoresByClase(clase[0].idArduino);
          
        await pintarHead(datosByClass);

        for await(objeto of datosByClass) {
          await pintarTabla(objeto);
        }

      } else if(valor == "" && selector != "Todos" && fecha1 == "" && fecha2 == "") {

          const datosByDato = await recogerTablaActuadoresByDato(selector);

          await pintarHead(datosByDato);

          for await(objeto of datosByDato) {
            await pintarTabla(objeto);
          }

        } else if(valor != "" && selector != "Todos" && fecha1 == "" && fecha2 == "") {

          const clase = await recogerIdClase(valor);

          const datosByDato = await recogerTablaActuadoresByClassAndDato(clase[0].idArduino, selector);

          await pintarHead(datosByDato);

          for await(objeto of datosByDato) {
            await pintarTabla(objeto);
          }

        } else if(valor == "" && selector == "Todos" && fecha1 != "" && fecha2 != "") {

          const datosByDate = await recogerTablaActuadoresBetweenDate(fecha1, fecha2);

          await pintarHead(datosByDate);

          for await(objeto of datosByDate) {
            await pintarTabla(objeto);
          }

        } else if(valor != "" && selector == "Todos" && fecha1 != "" && fecha2 != "") {

          const clase = await recogerIdClase(valor);

          const datosByDatosAndDate = await recogerTablaActuadoresByClassAndDate(clase[0].idArduino, fecha1, fecha2);

          await pintarHead(datosByDatosAndDate);

          for await(objeto of datosByDatosAndDate) {
            await pintarTabla(objeto);
          }

        } else if(valor == "" && selector != "Todos" && fecha1 != "" && fecha2 != "") {

          const datosByDatosAndDate = await recogerTablaActuadoresByDatoAndDate(selector, fecha1, fecha2);

          await pintarHead(datosByDatosAndDate);

          for await(objeto of datosByDatosAndDate) {
            await pintarTabla(objeto);
          }

        } else if(valor != "" && selector != "Todos" && fecha1 != "" && fecha2 != "") {

          const clase = await recogerIdClase(valor);

          const datosByDatosAndDate = await recogerTablaActuadoresByClassAndDate(clase[0].idArduino, selector, fecha1, fecha2);

          await pintarHead(datosByDatosAndDate);

          for await(objeto of datosByDatosAndDate) {
            await pintarTabla(objeto);
          }

        } else {
            
            const tablaActuadores = await recogerTablaActuadores();

            await pintarHead(tablaActuadores);

            for await(objeto of tablaActuadores) {
              await pintarTabla(objeto);
            }

        }

    })

  })

  async function pintarHead(datos) {

    let propiedadesTablaSensores = Object.keys(datos[0]);
  
    propiedadesTablaSensores.forEach(element => {
      let th = document.createElement("th");
      th.appendChild(document.createTextNode(element));
      th.classList.contains("d-none d-sm-table-cell d-md-table-cell");
      headTabla.appendChild(th);
    });
  
    
  }
  
  async function pintarTabla(dato) {
    let tr = document.createElement("tr");
    let propiedades = Object.keys(dato);
    for await(objeto of propiedades) {
      let th = document.createElement("th");
      th.classList.contains("d-none d-md-table-cell w-auto");
      th.appendChild(document.createTextNode(dato[objeto]));
      tr.appendChild(th);
    }
    
    cuerpoTabla.appendChild(tr);
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

async function recogerTablaActuadoresByClase(clase) {
  const datos = await fetch(`${SERVER}/actuador?clase=${clase}`, {
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

async function recogerTablaActuadoresByDato(dato) {
  const datos = await fetch(`${SERVER}/actuador?datos=${dato}`, {
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

async function recogerTablaActuadoresByClassAndDato(clase, dato) {
  const datos = await fetch(`${SERVER}/actuador?clase=${clase}&datos=${dato}`, {
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

async function recogerTablaActuadoresBetweenDate(fecha1, fecha2) {
  const datos = await fetch(`${SERVER}/actuador?fecha1=${fecha1}&fecha2=${fecha2}`, {
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

async function recogerTablaActuadoresByDatoAndDate(dato, fecha1, fecha2) {
  const datos = await fetch(`${SERVER}/actuador?datos=${dato}&fecha1=${fecha1}&fecha2=${fecha2}`, {
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

async function recogerTablaActuadoresByClassAndDate(clase, fecha1, fecha2) {
  const datos = await fetch(`${SERVER}/actuador?clase=${clase}&fecha1=${fecha1}&fecha2=${fecha2}`, {
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

async function recogerTablaActuadoresByClassAndDatoAndBetweenDate(clase, dato, fecha1, fecha2) {
  const datos = await fetch(`${SERVER}/actuador?clase=${clase}&datos=${dato}&fecha1=${fecha1}&fecha2=${fecha2}`, {
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