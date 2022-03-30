/* -----------------------GRAFICAS--------------------------- */

/*--- HORAS ---*/
const ctxHrs = document.getElementById('myChartHrs').getContext('2d');
const myChartHrs = new Chart(ctxHrs, {
    type: 'line',
    data: {
        labels: ['1 a.m.', '2 a.m.', '3 a.m.', '4 a.m.', '5 a.m.', '6 a.m.','7 a.m.','8 a.m.','9 a.m.','10 a.m.','11 a.m.','12 p.m.','1 p.m.','2 p.m.','3 p.m.','4 p.m.','5 p.m.','6 p.m.','7 p.m.','8 p.m.','9 p.m.','10 p.m.','11 p.m.','12 a.m.'],
        datasets: [{
            label: 'Temperatura Interior',
            data: [2, 22, 12, 21, 22, 21, 28,36,38,30,20,28,21, 22, 12, 21, 22, 21, 28,36,38,30,20,30],
            backgroundColor: 'rgba(4, 190, 254,1)',
            borderColor: 'rgba(4, 190, 254,1)',
            borderWidth: 2,
            borderCapStyle:'square',
            indexAxis:'x',
            tension: 0.4
        }]
    },

    options: {
        layout: {
            padding: 20
        },

        plugins: {
            title: {
                display: true,
                text: 'Registro de temperatura del 08 de marzo del 2022'
            }
        },

        scales: {
            x: { //Texto eje x
                display: true,
                title: {
                  display: true,
                  text:'Horas'
                }
              },
              y: { //Texto eje Y
                display: true,
                title: {
                  display: true,
                  text: 'Temperatura'
                },
                suggestedMin: -10, //Valor Minimo
                //suggestedMax: 200 -Valor Maximo
            }
        },
        maintainAspectRatio:false
    }
});

/* ----------- */


/*--- SEMANAS ---*/
const ctxSem = document.getElementById('myChartSem').getContext('2d');
const myChartSem = new Chart(ctxSem, {
    type: 'line',
    data: {
        labels: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado','Domingo'], //Medida de eje x
        datasets: [{
            label: 'Temperatura Interior',
            data: [34, 23, 32, 22, 22],
            backgroundColor: 'rgba(4, 190, 254,1)',
            borderColor: 'rgba(4, 190, 254,1)',
            borderWidth: 2,
            borderCapStyle:'square',
            indexAxis:'x',
            tension: 0.4
        }]
    },

    options: {
        layout: {
            padding: 20
        },

        plugins: {
            title: {
                display: true,
                text: 'Registro de temperatura del 07 al 13 de marzo del 2022'
            }
        },

        scales: {
            x: { //Texto eje x
                display: true,
                title: {
                  display: true,
                  text:'Días'
                }
              },
              y: { //Texto eje Y
                display: true,
                title: {
                  display: true,
                  text: 'Temperatura'
                },
                suggestedMin: 0, // Valor Minimo
                //suggestedMax: 200 -Valor Maximo
            }
        },
        maintainAspectRatio:false
    }
});

/* ----------- */


/*--- MESES ---*/
const ctxMes = document.getElementById('myChartMes').getContext('2d');
const myChartMes = new Chart(ctxMes, {
    type: 'line',
    data: {
        labels: ['1', '2', '3', '4', '5', '6','7','8','9','10',
        '11', '12', '13', '14', '15', '16','17','18','19','20',
        '21', '22', '23', '24', '25', '26','27','28','29','30','31'], //Medida de eje x
        datasets: [{
            label: 'Temperatura Interior',
            data: [2, 25, 2, 28, 22,18,20,26,24,12,24,23, 25, 26, 28, 22,18,20,26,24,12,23,23, 25, 26, 28, 22,18,20,26,24],
            backgroundColor: 'rgba(4, 190, 254,1)',
            borderColor: 'rgba(4, 190, 254,1)',
            borderWidth: 2,
            borderCapStyle:'square',
            indexAxis:'x',

            tension: 0.4

        }]
    },

    options: {
        layout: {
            padding: 20
        },

        plugins: {
            title: {
                display: true,
                text: 'Registro de marzo del 2022'
            }
        },

        scales: {
            x: { //Texto eje x
                display: true,
                title: {
                  display: true,
                  text:'Días'
                }
              },
              y: { //Texto eje Y
                display: true,
                title: {
                  display: true,
                  text: 'Temperatura'
                },
                suggestedMin: 0, // Valor Minimo
                //suggestedMax: 200 -Valor Maximo
            }
        },
        maintainAspectRatio:false
    }
});

/* ----------- */

/*--- AÑOS ---*/
const ctxAnio = document.getElementById('myChartAnio').getContext('2d');
const myChartAnio = new Chart(ctxAnio, {
    type: 'line',
    data: {
            labels: ['Enero','Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'], //Medida de eje x
            datasets: [{
            label: 'Temperatura Interior',
            data: [23, 25, 26, 28, 22,18,20,26,24,12,24,23],
            backgroundColor: 'rgba(4, 190, 254,1)',
            borderColor: 'rgba(4, 190, 254,1)',
            borderWidth: 2,
            borderCapStyle:'square',
            indexAxis:'x',
            tension: 0.4
        }]
    },

    options: {
        layout: {
            padding: 20
        },

        plugins: {
            title: {
                display: true,
                text: 'Registro del año 2022'
            }
        },

        scales: {
            x: { //Texto eje x
                display: true,
                title: {
                  display: true,
                  text:'Días'
                }
              },
              y: { //Texto eje Y
                display: true,
                title: {
                  display: true,
                  text: 'Temperatura'
                },
                suggestedMin: 0, // Valor Minimo
                //suggestedMax: 200 -Valor Maximo
            }
        },
        maintainAspectRatio:false
    }
});


/* -----------------------BARRAS--------------------------- */
/*--- HORAS ---*/
const BarHrs = document.getElementById('myBarHrs').getContext('2d');
const myBarHrs = new Chart(BarHrs, {
    type: 'bar',
    data: {
        labels: ['1 a.m.', '2 a.m.', '3 a.m.', '4 a.m.', '5 a.m.', '6 a.m.','7 a.m.','8 a.m.','9 a.m.','10 a.m.','11 a.m.','12 p.m.','1 p.m.','2 p.m.','3 p.m.','4 p.m.','5 p.m.','6 p.m.','7 p.m.','8 p.m.','9 p.m.','10 p.m.','11 p.m.','12 a.m.'],
        datasets: [{
            label: 'Temperatura Interior',
            data: [21, 22, 12, 21, 22, 21, 28,36,38,30,20,28,21, 22, 12, 21, 22, 21, 28,36,38,30,20,30],
            backgroundColor: 'rgba(255, 88, 88, 1)',
            borderColor: 'rgba(255, 88, 88, 1)',
            borderWidth: 1,
            borderRadius: Number.MAX_SAFE_INTEGER,
            borderSkipped: false,
        }]
    },

    options: {
        layout: {
            padding: 20
        },

        plugins: {
            title: {
                display: true,
                text: 'Registro de temperatura del 08 de marzo del 2022'
            }
        },

        scales: {
            x: { //Texto eje x
                display: true,
                title: {
                  display: true,
                  text:'Horas'
                }
              },
              y: { //Texto eje Y
                display: true,
                title: {
                  display: true,
                  text: 'Temperatura'
                },
                //suggestedMin: -10, //Valor Minimo
                //suggestedMax: 200 -Valor Maximo
            }
        },
        maintainAspectRatio:false
    }
});

/* ----------- */


/*--- SEMANAS ---*/
const BarSem = document.getElementById('myBarSem').getContext('2d');
const myBarSem = new Chart(BarSem, {
    type: 'bar',
    data: {
        labels: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado','Domingo'], //Medida de eje x
        datasets: [{
            label: 'Temperatura Interior',
            data: [34, 23, 32, 22, 22],
            backgroundColor: 'rgba(255, 88, 88, 1)',
            borderColor: 'rgba(255, 88, 88, 1)',
            borderWidth: 1,
            borderRadius: Number.MAX_SAFE_INTEGER,
            borderSkipped: false,

        }]
    },

    options: {
        layout: {
            padding: 20
        },

        plugins: {
            title: {
                display: true,
                text: 'Registro de temperatura del 07 al 13 de marzo del 2022'
            }
        },

        scales: {
            x: { //Texto eje x
                display: true,
                title: {
                  display: true,
                  text:'Días'
                }
              },
              y: { //Texto eje Y
                display: true,
                title: {
                  display: true,
                  text: 'Temperatura'
                },
                suggestedMin: 0, // Valor Minimo
                //suggestedMax: 200 -Valor Maximo
            }
        },
        maintainAspectRatio:false
    }
});

/* ----------- */



/*--- SEMANAS ---*/
const BarMes = document.getElementById('myBarMes').getContext('2d');
const myBarMes = new Chart(BarMes, {
    type: 'bar',
    data: {
        labels: ['1', '2', '3', '4', '5', '6','7','8','9','10',
        '11', '12', '13', '14', '15', '16','17','18','19','20',
        '21', '22', '23', '24', '25', '26','27','28','29','30','31'], //Medida de eje x
        datasets: [{
            label: 'Temperatura Interior',
            data: [23, 25, 26, 28, 22,18,20,26,24,12,24,23, 25, 26, 28, 22,18,20,26,24,12,23,23, 25, 26, 28, 22,18,20,26,24],
            backgroundColor: 'rgba(255, 88, 88, 1)',
            borderColor: 'rgba(255, 88, 88, 1)',
            borderWidth: 1,
            borderRadius: Number.MAX_SAFE_INTEGER,
            borderSkipped: false,

        }]
    },

    options: {
        layout: {
            padding: 20
        },

        plugins: {
            title: {
                display: true,
                text: 'Registro de marzo del 2022'
            }
        },

        scales: {
            x: { //Texto eje x
                display: true,
                title: {
                  display: true,
                  text:'Días'
                }
              },
              y: { //Texto eje Y
                display: true,
                title: {
                  display: true,
                  text: 'Temperatura'
                },
                suggestedMin: 0, // Valor Minimo
                //suggestedMax: 200 -Valor Maximo
            }
        },
        maintainAspectRatio:false
    }
});

/* ----------- */


/*--- AÑOS ---*/
const BarAnio = document.getElementById('myBarAnio').getContext('2d');
const myBarAnio = new Chart(BarAnio, {
    type: 'bar',
    data: {
        labels: ['Enero','Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'], //Medida de eje x
        datasets: [{
        label: 'Temperatura Interior',
        data: [23, 25, 26, 28, 22,18,20,26,24,12,24,23],
        backgroundColor: 'rgba(255, 88, 88, 1)',
        borderColor: 'rgba(255, 88, 88, 1)',
        borderWidth: 1,
        borderRadius: Number.MAX_SAFE_INTEGER,
        borderSkipped: false,
    }]
    },

    options: {
        layout: {
            padding: 20
        },

        plugins: {
            title: {
                display: true,
                text: 'Registro del año 2022'
            }
        },

        scales: {
            x: { //Texto eje x
                display: true,
                title: {
                display: true,
                text:'Meses'
                }
            },
            y: { //Texto eje Y
                display: true,
                title: {
                display: true,
                text: 'Temperatura'
                },
                suggestedMin: 0, // Valor Minimo
                //suggestedMax: 200 -Valor Maximo
            }
        },
        maintainAspectRatio:false
    }
});

/* ----------- */
