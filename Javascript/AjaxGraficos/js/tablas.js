const secGrafico = document.getElementById("secGrafico");
const secTabla = document.getElementById("secTabla");
const filtrosTablas = document.getElementById("filtrosTabla");

const selectorInpt = document.getElementById("selector");
const sensoresArray = ['Todos', 'humedad', 'temperatura', 'personas', 'luminosidad'];
const actuadoresArray = ['Todos', 'ventilador', 'calefaccion', 'luces', 'ventana'];

const verGrafico = document.getElementById("verGrafico");
const verTablaSensores = document.getElementById("verTablaSensores");
const verTablaActuadores = document.getElementById("verTablaActuadores");

const headTabla = document.getElementById("headTabla");
const cuerpoTabla = document.getElementById("cuerpoTabla");

window.addEventListener("load", async () => {

    verGrafico.addEventListener("click", async (e) => {
        e.preventDefault();
    
        verTablaSensores.classList.remove("active");
        verTablaActuadores.classList.remove("active");
        verGrafico.classList.add("active");

        secGrafico.className = "d-block";
        secTabla.className = "d-none";
        filtrosTablas.className = "d-none";
    
      })
    
      verTablaSensores.addEventListener("click", async (e) => {
        e.preventDefault();
    
        verGrafico.classList.remove("active");
        verTablaActuadores.classList.remove("active");
        verTablaSensores.classList.add("active");

        secGrafico.className = "d-none";
        secTabla.className = "d-block";
        filtrosTablas.className = "d-block";

        headTabla.innerHTML = "";
        cuerpoTabla.innerHTML = "";
        selectorInpt.innerHTML = "";

        sensoresArray.forEach(element => {
          let option = document.createElement("option");
          option.appendChild(document.createTextNode(element));
          option.value = element;
          selector.appendChild(option);
        });

        const tablaSensores = await recogerTablaSensores();

        let propiedadesTablaSensores = Object.keys(tablaSensores[0]);
    
        propiedadesTablaSensores.forEach(element => {
          let th = document.createElement("th");
          th.appendChild(document.createTextNode(element));
          headTabla.appendChild(th);
        });

        for await(objeto of tablaSensores) {
          await pintarTabla(objeto);
        }

    
      })
    
      verTablaActuadores.addEventListener("click", async (e) => {
        e.preventDefault();
        
        verTablaSensores.classList.remove("active");
        verGrafico.classList.remove("active");
        verTablaActuadores.classList.add("active");
        
        secGrafico.className = "d-none";
        secTabla.className = "d-block";
        filtrosTablas.className = "d-block";

        headTabla.innerHTML = "";
        cuerpoTabla.innerHTML = "";
        selectorInpt.innerHTML = "";

        actuadoresArray.forEach(element => {
          let option = document.createElement("option");
          option.appendChild(document.createTextNode(element));
          option.value = element;
          selector.appendChild(option);
        });

        const tablaActuadores = await recogerTablaActuadores();

        let propiedadesTablaActuadores = Object.keys(tablaActuadores[0]);
    
        propiedadesTablaActuadores.forEach(element => {
          let th = document.createElement("th");
          th.appendChild(document.createTextNode(element));
          headTabla.appendChild(th);
        });

        for await(objeto of tablaActuadores) {
          await pintarTabla(objeto);
        }
    
      })

      document.getElementById("form").addEventListener("submit", async (e) => {
        e.preventDefault();

        let valor = document.getElementById("buscador").value;
        let selector = selectorInpt.value;
        let fecha1 = document.getElementById("fecha1").value;
        fecha1 = fecha1.replace("T", " ");
        let fecha2 = document.getElementById("fecha2").value;
        fecha2 = fecha2.replace("T", " ");
        cuerpoTabla.innerHTML = "";
        headTabla.innerHTML = "";

        switch (true) {
          case verTablaSensores.classList.contains("active"):

          if(valor != "" && selector == "todos" && fecha1 == "" && fecha2 == "") {

            const datosByDatosAndDate = await recogerTablaSensoresByDato(valor);

            let propiedadesTablaActuadores = Object.keys(datosByDatosAndDate[0]);

            propiedadesTablaActuadores.forEach(element => {
              let th = document.createElement("th");
              th.appendChild(document.createTextNode(element));
              headTabla.appendChild(th);
            });

            for await(objeto of datosByDatosAndDate) {
              await pintarTabla(objeto);
            }

          } else if(valor == "" && selector != "todos" && fecha1 == "" && fecha2 == "") {

              const datosByDatosAndDate = await recogerTablaSensoresByDato(valor);

              let propiedadesTablaActuadores = Object.keys(datosByDatosAndDate[0]);

              propiedadesTablaActuadores.forEach(element => {
                let th = document.createElement("th");
                th.appendChild(document.createTextNode(element));
                headTabla.appendChild(th);
              });

              for await(objeto of datosByDatosAndDate) {
                await pintarTabla(objeto);
              }

            } else if(valor == "" && selector == "todos" && fecha1 != "" && fecha2 != "") {

              const datosByDate = await recogerTablaSensoresBetweenDate(fecha1, fecha2);

              let propiedadesTablaSensores = Object.keys(datosByDate[0]);

              propiedadesTablaSensores.forEach(element => {
                let th = document.createElement("th");
                th.appendChild(document.createTextNode(element));
                headTabla.appendChild(th);
              });

              for await(objeto of datosByDate) {
                await pintarTabla(objeto);
              }

            } else if(valor == "" && selector != "todos" && fecha1 != "" && fecha2 != "") {

              const datosByDatosAndDate = await recogerTablaSensoresByDatoAndDate(valor, fecha1, fecha2);

              let propiedadesTablaSensores = Object.keys(datosByDatosAndDate[0]);

              propiedadesTablaSensores.forEach(element => {
                let th = document.createElement("th");
                th.appendChild(document.createTextNode(element));
                headTabla.appendChild(th);
              });

              for await(objeto of datosByDatosAndDate) {
                await pintarTabla(objeto);
              }

            } else {

              const tablaSensores = await recogerTablaSensores();

              let propiedadesTablaSensores = Object.keys(tablaSensores[0]);
          
              propiedadesTablaSensores.forEach(element => {
                let th = document.createElement("th");
                th.appendChild(document.createTextNode(element));
                headTabla.appendChild(th);
              });

              for await(objeto of tablaSensores) {
                await pintarTabla(objeto);
              }

            }
            
            break;
          case verTablaActuadores.classList.contains("active"):

            if(valor != "" && fecha1 == "" && fecha2 == "") {

              const datosByDatosAndDate = await recogerTablaActuadoresByDato(valor);

              let propiedadesTablaActuadores = Object.keys(datosByDatosAndDate[0]);

              propiedadesTablaActuadores.forEach(element => {
                let th = document.createElement("th");
                th.appendChild(document.createTextNode(element));
                headTabla.appendChild(th);
              });

              for await(objeto of datosByDatosAndDate) {
                await pintarTabla(objeto);
              }

            } else if(valor == "" && fecha1 != "" && fecha2 != "") {

              const datosByDate = await recogerTablaActuadoresBetweenDate(fecha1, fecha2);

              let propiedadesTablaActuadores = Object.keys(datosByDate[0]);

              propiedadesTablaActuadores.forEach(element => {
                let th = document.createElement("th");
                th.appendChild(document.createTextNode(element));
                headTabla.appendChild(th);
              });

              for await(objeto of datosByDate) {
                await pintarTabla(objeto);
              }

            } else if(valor != "" && fecha1 != "" && fecha2 != "") {

              const datosByDatosAndDate = await recogerTablaActuadoresByDatoAndDate(valor, fecha1, fecha2);

              let propiedadesTablaActuadores = Object.keys(datosByDatosAndDate[0]);

              propiedadesTablaActuadores.forEach(element => {
                let th = document.createElement("th");
                th.appendChild(document.createTextNode(element));
                headTabla.appendChild(th);
              });

              for await(objeto of datosByDatosAndDate) {
                await pintarTabla(objeto);
              }

            } else {
                
                const tablaActuadores = await recogerTablaActuadores();

                let propiedadesTablaActuadores = Object.keys(tablaActuadores[0]);
            
                propiedadesTablaActuadores.forEach(element => {
                  let th = document.createElement("th");
                  th.appendChild(document.createTextNode(element));
                  headTabla.appendChild(th);
                });

                for await(objeto of tablaActuadores) {
                  await pintarTabla(objeto);
                }

            }

            break;

          default:
            break;
        }

      })

})

async function pintarTabla(dato) {
  let tr = document.createElement("tr");
  let propiedades = Object.keys(dato);
  for await(objeto of propiedades) {
    let th = document.createElement("th");
    th.appendChild(document.createTextNode(dato[objeto]));
    tr.appendChild(th);
  }
  
  cuerpoTabla.appendChild(tr);
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

async function recogerTablaActuadorByDato(dato) {
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
