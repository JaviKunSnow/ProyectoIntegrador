

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

        await cambiarVista("d-block", "d-none", "d-none");
    
      })
    
      verTablaSensores.addEventListener("click", async (e) => {
        e.preventDefault();
    
        verGrafico.classList.remove("active");
        verTablaActuadores.classList.remove("active");
        verTablaSensores.classList.add("active");

        await cambiarVista("d-none", "d-block", "d-block");

        sensoresArray.forEach(element => {
          let option = document.createElement("option");
          option.appendChild(document.createTextNode(element));
          option.value = element;
          selector.appendChild(option);
        });

        const tablaSensores = await recogerTablaSensores();

        await pintarHead(tablaSensores);

        for await(objeto of tablaSensores) {
          await pintarTabla(objeto);
        }

    
      })
    
      verTablaActuadores.addEventListener("click", async (e) => {
        e.preventDefault();
        
        verTablaSensores.classList.remove("active");
        verGrafico.classList.remove("active");
        verTablaActuadores.classList.add("active");
        
        await cambiarVista("d-none", "d-block", "d-block");

        actuadoresArray.forEach(element => {
          let option = document.createElement("option");
          option.appendChild(document.createTextNode(element));
          option.value = element;
          selector.appendChild(option);
        });

        const tablaActuadores = await recogerTablaActuadores();

        await pintarHead(tablaActuadores);

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

          if(valor != "" && selector == "Todos" && fecha1 == "" && fecha2 == "") {

            const clase = await recogerIdClase(valor);
              
            const datosByClass = await recogerTablaSensoresByClase(clase[0].idArduino);
              
            await pintarHead(datosByClass);

            for await(objeto of datosByClass) {
              await pintarTabla(objeto);
            }

          } else if(valor == "" && selector != "Todos" && fecha1 == "" && fecha2 == "") {

              const datosByDato = await recogerTablaSensoresByDato(selector);

              await pintarHead(datosByDato);

              for await(objeto of datosByDato) {
                await pintarTabla(objeto);
              }

            } else if(valor != "" && selector != "Todos" && fecha1 == "" && fecha2 == "") {

              const clase = await recogerIdClase(valor);

              const datosByDato = await recogerTablaSensoresByClassAndDato(clase[0].idArduino, selector);

              await pintarHead(datosByDato);

              for await(objeto of datosByDato) {
                await pintarTabla(objeto);
              }

            } else if(valor == "" && selector == "Todos" && fecha1 != "" && fecha2 != "") {

              const datosByDate = await recogerTablaSensoresBetweenDate(fecha1, fecha2);

              await pintarHead(datosByDate);

              for await(objeto of datosByDate) {
                await pintarTabla(objeto);
              }

            } else if(valor == "" && selector != "Todos" && fecha1 != "" && fecha2 != "") {

              const datosByDatosAndDate = await recogerTablaSensoresByDatoAndDate(selector, fecha1, fecha2);

              await pintarHead(datosByDatosAndDate);

              for await(objeto of datosByDatosAndDate) {
                await pintarTabla(objeto);
              }

            } else if(valor != "" && selector == "Todos" && fecha1 != "" && fecha2 != "") {

              const clase = await recogerIdClase(valor);

              const datosByDatosAndDate = await recogerTablaSensoresByClassAndDate(clase[0].idArduino, fecha1, fecha2);

              await pintarHead(datosByDatosAndDate);

              for await(objeto of datosByDatosAndDate) {
                await pintarTabla(objeto);
              }

            } else if(valor != "" && selector != "Todos" && fecha1 != "" && fecha2 != "") {

              const clase = await recogerIdClase(valor);

              const datosByDatosAndDate = await recogerTablaSensoresByClassAndDatoAndBetweenDate(clase[0].idArduino, selector, fecha1, fecha2);

              await pintarHead(datosByDatosAndDate);

              for await(objeto of datosByDatosAndDate) {
                await pintarTabla(objeto);
              }

            } else {

              const tablaSensores = await recogerTablaSensores();

              await pintarHead(tablaSensores);

              for await(objeto of tablaSensores) {
                await pintarTabla(objeto);
              }

            }
            
            break;
          case verTablaActuadores.classList.contains("active"):

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

            break;

          default:
            break;
        }

      })

})

async function cambiarVista(grafico, tablaSen, tablaAct) {
  secGrafico.className = grafico;
  secTabla.className = tablaSen;
  filtrosTablas.className = tablaAct;

  headTabla.innerHTML = "";
  cuerpoTabla.innerHTML = "";
  selectorInpt.innerHTML = "";
}

async function pintarHead(datos) {

  let propiedadesTablaSensores = Object.keys(datos[0]);

  propiedadesTablaSensores.forEach(element => {
    let th = document.createElement("th");
    th.appendChild(document.createTextNode(element));
    headTabla.appendChild(th);
  });
}

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

// ACTUADORES

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
