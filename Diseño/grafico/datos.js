const labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
const data = {
  labels: labels,
  datasets: [{
    label: 'Temperatura',
    data: [21, 20, 4, 19, 7, 12, 16, 20, 4, 19, 7, 12, 17],
    fill: false,
    borderColor: 'rgb(255, 159, 64)'
  },
  {
    label: 'Humedad',
    data: [15, 30, 20, 25, 50, 35, 10, 30, 20, 25, 50, 30],
    fill: false,
    borderColor: 'rgb(75, 192, 192)'
  },
  {
    label: 'Personas',
    data: [12, 17, 22, 12, 10, 16, 14, 22, 12, 10, 16, 12],
    fill: false,
    borderColor: 'rgb(153, 102, 255)'
  }]
};

// https://www.chartjs.org/docs/latest/charts/line.html#line-chart