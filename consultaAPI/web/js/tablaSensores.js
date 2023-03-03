const SERVER = `http://192.168.2.206/ProyectoIntegrador/API/api.php`;

const headTablaSen = document.getElementById("headTablaSen");
const cuerpoTablaSen = document.getElementById("cuerpoTablaSen");
const selectorInpt = document.getElementById("selector");

window.addEventListener("load", async () => {

        if(document.getElementById("idClase").value != "") {
            
            let valor = document.getElementById("idClase").value;
            
            const datosByClass = await recogerTablaSensoresByClase(valor);
              
            await pintarHeadSen(datosByClass);

            for await(objeto of datosByClass) {
              await pintarTablaSen(objeto);
            }

        } else {
          
          const tablaSensores = await recogerTablaSensores();
  
          await pintarHeadSen(tablaSensores);
  
          for await(objeto of tablaSensores) {
            await pintarTablaSen(objeto);
          }

        }

      document.getElementById("form").addEventListener("submit", async (e) => {
        e.preventDefault();

        let valor = document.getElementById("buscador").value;
        let selector = selectorInpt.value;
        let fecha1 = document.getElementById("fecha1").value;
        fecha1 = fecha1.replace("T", " ");
        let fecha2 = document.getElementById("fecha2").value;
        fecha2 = fecha2.replace("T", " ");
        cuerpoTablaSen.innerHTML = "";
        headTablaSen.innerHTML = "";

          if(valor != "" && selector == "Todos" && fecha1 == "" && fecha2 == "") {

            const clase = await recogerIdClase(valor);
              
            const datosByClass = await recogerTablaSensoresByClase(clase[0].idArduino);
              
            await pintarHeadSen(datosByClass);

            for await(objeto of datosByClass) {
              await pintarTablaSen(objeto);
            }

          } else if(valor == "" && selector != "Todos" && fecha1 == "" && fecha2 == "") {

              const datosByDato = await recogerTablaSensoresByDato(selector);

              await pintarHeadSen(datosByDato);

              for await(objeto of datosByDato) {
                await pintarTablaSen(objeto);
              }

            } else if(valor != "" && selector != "Todos" && fecha1 == "" && fecha2 == "") {

              const clase = await recogerIdClase(valor);

              const datosByDato = await recogerTablaSensoresByClassAndDato(clase[0].idArduino, selector);

              await pintarHeadSen(datosByDato);

              for await(objeto of datosByDato) {
                await pintarTablaSen(objeto);
              }

            } else if(valor == "" && selector == "Todos" && fecha1 != "" && fecha2 != "") {

              const datosByDate = await recogerTablaSensoresBetweenDate(fecha1, fecha2);

              await pintarHeadSen(datosByDate);

              for await(objeto of datosByDate) {
                await pintarTablaSen(objeto);
              }

            } else if(valor == "" && selector != "Todos" && fecha1 != "" && fecha2 != "") {

              const datosByDatosAndDate = await recogerTablaSensoresByDatoAndDate(selector, fecha1, fecha2);

              await pintarHeadSen(datosByDatosAndDate);

              for await(objeto of datosByDatosAndDate) {
                await pintarTablaSen(objeto);
              }

            } else if(valor != "" && selector == "Todos" && fecha1 != "" && fecha2 != "") {

              const clase = await recogerIdClase(valor);

              const datosByDatosAndDate = await recogerTablaSensoresByClassAndDate(clase[0].idArduino, fecha1, fecha2);

              await pintarHeadSen(datosByDatosAndDate);

              for await(objeto of datosByDatosAndDate) {
                await pintarTablaSen(objeto);
              }

            } else if(valor != "" && selector != "Todos" && fecha1 != "" && fecha2 != "") {

              const clase = await recogerIdClase(valor);

              const datosByDatosAndDate = await recogerTablaSensoresByClassAndDatoAndBetweenDate(clase[0].idArduino, selector, fecha1, fecha2);

              await pintarHeadSen(datosByDatosAndDate);

              for await(objeto of datosByDatosAndDate) {
                await pintarTablaSen(objeto);
              }

            } else {

              const tablaSensores = await recogerTablaSensores();

              await pintarHeadSen(tablaSensores);

              for await(objeto of tablaSensores) {
                await pintarTablaSen(objeto);
              }

            }
        })
})

async function pintarHeadSen(datos) {

    let propiedadesTablaSensores = Object.keys(datos[0]);
  
    propiedadesTablaSensores.forEach(element => {
      let th = document.createElement("th");
      th.appendChild(document.createTextNode(element));
      th.classList.contains("d-none d-sm-table-cell d-md-table-cell");
      headTablaSen.appendChild(th);
    });
  
    
  }
  
  async function pintarTablaSen(dato) {
    let tr = document.createElement("tr");
    let propiedades = Object.keys(dato);
    for await(objeto of propiedades) {
      let th = document.createElement("th");
      th.classList.contains("d-none d-md-table-cell w-auto");
      th.appendChild(document.createTextNode(dato[objeto]));
      tr.appendChild(th);
    }
    
    cuerpoTablaSen.appendChild(tr);
  }
  
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
  
  async function recogerIdClase(clase) {
    const datos = await fetch(`${SERVER}/arduino?clase=${clase}`, {
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
  
  async function recogerTablaSensoresByClase(clase) {
    const datos = await fetch(`${SERVER}/sensores?clase=${clase}`, {
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
  
  async function recogerTablaSensoresByDato(dato) {
    const datos = await fetch(`${SERVER}/sensores?datos=${dato}`, {
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
  
  async function recogerTablaSensoresByClassAndDato(clase, dato) {
    const datos = await fetch(`${SERVER}/sensores?clase=${clase}&datos=${dato}`, {
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
  
  async function recogerTablaSensoresBetweenDate(fecha1, fecha2) {
    const datos = await fetch(`${SERVER}/sensores?fecha1=${fecha1}&fecha2=${fecha2}`, {
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
  
  async function recogerTablaSensoresByClassAndDate(clase, fecha1, fecha2) {
    const datos = await fetch(`${SERVER}/sensores?clase=${clase}&fecha1=${fecha1}&fecha2=${fecha2}`, {
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
  
  async function recogerTablaSensoresByClassAndDatoAndBetweenDate(clase, dato, fecha1, fecha2) {
    const datos = await fetch(`${SERVER}/sensores?clase=${clase}&datos=${dato}&fecha1=${fecha1}&fecha2=${fecha2}`, {
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