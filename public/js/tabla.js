const $tableHrsData = document.getElementById("myTableHrs"),
$tableSemData = document.getElementById("myTableSem"),
$tableMesData = document.getElementById("myTableMes"),
$tableAnioData = document.getElementById("myTableAnio"),

labelSTableHrs = ['1 a.m.', '2 a.m.', '3 a.m.', '4 a.m.', '5 a.m.', '6 a.m.','7 a.m.','8 a.m.','9 a.m.','10 a.m.','11 a.m.','12 p.m.','1 p.m.','2 p.m.','3 p.m.','4 p.m.','5 p.m.','6 p.m.','7 p.m.','8 p.m.','9 p.m.','10 p.m.','11 p.m.','12 a.m.'],
labelsTableSem = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado','Domingo'],
labelsTableMes =['1', '2', '3', '4', '5', '6','7','8','9','10','11', '12', '13', '14', '15', '16','17','18','19','20','21', '22', '23', '24', '25', '26','27','28','29','30','31'],
labelsTableAnio= ['Enero','Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],

dataTableHrs =  [21, 22, 12, 21, 22, 21, 28,36,38,30,20,28,21, 22, 12, 21, 22, 21, 28,36,38,30,20,30],
dataTableSem= [34, 23, 32, 22, 22],
dataTableMes= [23, 25, 26, 28, 22,18,20,26,24,12,24,23, 25, 26, 28, 22,18,20,26,24,12,23,23, 25, 26, 28, 22,18,20,26,24],
dataTableAnio= [23, 25, 26, 28, 22,18,20,26,24,12,24,23],

titleTableHrs= "Registro de temperatura del 08 de marzo del 2022",
titleTableSem = "Registro de temperatura del 07 al 13 de marzo del 2022",
titleTableMes = "Registro de marzo del 2022",
titleTableAnio = "Registro del año 2022";

function createDateTable(tabla,label,data,title,unit) {
    const caption = document.createElement("caption");
    const tbltile = document.createElement("tr");
    const tbody = document.createElement("tbody");

    caption.innerText= title;
    tbltile.innerHTML=`
    <th>${unit}</th>
    <th>Temperatura</th>
    `;

    for (let i = 0; i <data.length; i++) {
        const tr = document.createElement("tr");
        tr.innerHTML=`
        <td data-th="${unit}">${label[i]}</td>
        <td data-th="Temperatura">${data[i]} ºC</td>`;
        tbody.appendChild(tr);
        console.log(i);
    }

    tabla.appendChild(caption);
    tabla.appendChild(tbltile);
    tabla.appendChild(tbody);


}


createDateTable($tableHrsData,labelSTableHrs,dataTableHrs,titleTableHrs,"Horas");
createDateTable($tableSemData,labelsTableSem,dataTableSem,titleTableSem,"Días");
createDateTable($tableMesData,labelsTableMes,dataTableMes,titleTableMes,"Días");
createDateTable($tableAnioData,labelsTableAnio,dataTableAnio,titleTableAnio,"Meses");
