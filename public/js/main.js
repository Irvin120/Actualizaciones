const $notificaciones = document.querySelector('.notif'),
$graficHrs = document.getElementById("myChartHrs"),
$graficSem = document.getElementById("myChartSem"),
$graficMes = document.getElementById("myChartMes"),
$graficAnio = document.getElementById("myChartAnio"),
$barHrs = document.getElementById("myBarHrs"),
$barSem = document.getElementById("myBarSem"),
$barMes = document.getElementById("myBarMes"),
$barAnio = document.getElementById("myBarAnio"),
$tableHrs = document.getElementById("myTableHrs"),
$tableSem = document.getElementById("myTableSem"),
$tableMes = document.getElementById("myTableMes"),
$tableAnio = document.getElementById("myTableAnio"),
$btnHrs = document.getElementById("btnHrs"),
$btnSem = document.getElementById("btnSem"),
$btnMes = document.getElementById("btnMes"),
$btnAnio = document.getElementById("btnAnio"),
$btnGrafica = document.getElementById("btn-grafica"),
$btnBarra = document.getElementById("btn-barra"),
$btnTabla= document.getElementById("btn-tabla");


let menuVisible = false;


document.addEventListener("DOMContentLoaded",(e)=>{
    
  
});


document.addEventListener("click",(e)=>{
    
    

    if (e.target.matches('.div-icon-not') || e.target.matches('.div-icon-not img')) {
        if (!menuVisible) {
            $notificaciones.classList.add("active");
            menuVisible=true;
        }else{
            $notificaciones.classList.remove("active");
            menuVisible=false;
        }
        
    }
    if (e.target.matches('.img-closed')) {
        $notificaciones.classList.remove("active");
        menuVisible=false;
    }

    /* BOTONES DE CAMBIO DE GRAFICAS */
    if (e.target === $btnHrs) {
        if ($btnGrafica.classList.contains("active")) {

            $graficSem.style.display="none";
            $graficMes.style.display="none";
            $graficAnio.style.display="none";        
            $graficHrs.style.display="block";
            $barHrs.style.display="none";    
            $barSem.style.display="none";
            $barMes.style.display="none";
            $barAnio.style.display="none"; 
            $tableHrs.style.display="none";    
            $tableSem.style.display="none";
            $tableMes.style.display="none";
            $tableAnio.style.display="none"; 

            $btnHrs.classList.add("active");
            $btnSem.classList.remove("active");
            $btnMes.classList.remove("active");
            $btnAnio.classList.remove("active");

        }else if ($btnTabla.classList.contains("active")) {
            $graficSem.style.display="none";
            $graficMes.style.display="none";
            $graficAnio.style.display="none";        
            $graficHrs.style.display="none";
            $barHrs.style.display="none";    
            $barSem.style.display="none";
            $barMes.style.display="none";
            $barAnio.style.display="none"; 
            $tableHrs.style.display="inline-table";    
            $tableSem.style.display="none";
            $tableMes.style.display="none";
            $tableAnio.style.display="none";

            $btnHrs.classList.add("active");
            $btnSem.classList.remove("active");
            $btnMes.classList.remove("active");
            $btnAnio.classList.remove("active");  
        }else if($btnBarra.classList.contains("active")){
            $graficSem.style.display="none";
            $graficMes.style.display="none";
            $graficAnio.style.display="none";        
            $graficHrs.style.display="none";
            $barHrs.style.display="block";    
            $barSem.style.display="none";
            $barMes.style.display="none";
            $barAnio.style.display="none"; 
            $tableHrs.style.display="none";    
            $tableSem.style.display="none";
            $tableMes.style.display="none";
            $tableAnio.style.display="none";

            $btnHrs.classList.add("active");
            $btnSem.classList.remove("active");
            $btnMes.classList.remove("active");
            $btnAnio.classList.remove("active");
        }

        

        
    }

    if (e.target===$btnSem) {
        if ($btnGrafica.classList.contains("active")) {

            $graficSem.style.display="block";
            $graficMes.style.display="none";
            $graficAnio.style.display="none";        
            $graficHrs.style.display="none";
            $barHrs.style.display="none";    
            $barSem.style.display="none";
            $barMes.style.display="none";
            $barAnio.style.display="none";  
            $tableHrs.style.display="none";    
            $tableSem.style.display="none";
            $tableMes.style.display="none";
            $tableAnio.style.display="none";

            $btnHrs.classList.remove("active");
            $btnSem.classList.add("active");
            $btnMes.classList.remove("active");
            $btnAnio.classList.remove("active");

        }else if ($btnTabla.classList.contains("active")) {
            $graficSem.style.display="none";
            $graficMes.style.display="none";
            $graficAnio.style.display="none";        
            $graficHrs.style.display="none";
            $barHrs.style.display="none";    
            $barSem.style.display="none";
            $barMes.style.display="none";
            $barAnio.style.display="none"; 
            $tableHrs.style.display="none";    
            $tableSem.style.display="inline-table";
            $tableMes.style.display="none";
            $tableAnio.style.display="none";

            $btnHrs.classList.remove("active");
            $btnSem.classList.add("active");
            $btnMes.classList.remove("active");
            $btnAnio.classList.remove("active");

        }else if($btnBarra.classList.contains("active")){
            $graficSem.style.display="none";
            $graficMes.style.display="none";
            $graficAnio.style.display="none";        
            $graficHrs.style.display="none";
            $barHrs.style.display="none";    
            $barSem.style.display="block";
            $barMes.style.display="none";
            $barAnio.style.display="none"; 
            $tableHrs.style.display="none";    
            $tableSem.style.display="none";
            $tableMes.style.display="none";
            $tableAnio.style.display="none";

            $btnHrs.classList.remove("active");
            $btnSem.classList.add("active");
            $btnMes.classList.remove("active");
            $btnAnio.classList.remove("active");
        }
    }

    if (e.target===$btnMes) {
        
        if ($btnGrafica.classList.contains("active")) {

            $graficSem.style.display="none";
            $graficMes.style.display="block";
            $graficAnio.style.display="none";        
            $graficHrs.style.display="none";
            $barHrs.style.display="none";    
            $barSem.style.display="none";
            $barMes.style.display="none";
            $barAnio.style.display="none";
            $tableHrs.style.display="none";    
            $tableSem.style.display="none";
            $tableMes.style.display="none";
            $tableAnio.style.display="none";
             

            $btnHrs.classList.remove("active");
            $btnSem.classList.remove("active");
            $btnMes.classList.add("active");
            $btnAnio.classList.remove("active");

        }else if ($btnTabla.classList.contains("active")) {
            $graficSem.style.display="none";
            $graficMes.style.display="none";
            $graficAnio.style.display="none";        
            $graficHrs.style.display="none";
            $barHrs.style.display="none";    
            $barSem.style.display="none";
            $barMes.style.display="none";
            $barAnio.style.display="none";
            $tableHrs.style.display="none";    
            $tableSem.style.display="none";
            $tableMes.style.display="inline-table";
            $tableAnio.style.display="none";
             
            $btnHrs.classList.remove("active");
            $btnSem.classList.remove("active");
            $btnMes.classList.add("active");
            $btnAnio.classList.remove("active");

        }else if($btnBarra.classList.contains("active")){
            $graficSem.style.display="none";
            $graficMes.style.display="none";
            $graficAnio.style.display="none";        
            $graficHrs.style.display="none";
            $barHrs.style.display="none";    
            $barSem.style.display="none";
            $barMes.style.display="block";
            $barAnio.style.display="none";
            $tableHrs.style.display="none";    
            $tableSem.style.display="none";
            $tableMes.style.display="none";
            $tableAnio.style.display="none"; 

            $btnHrs.classList.remove("active");
            $btnSem.classList.remove("active");
            $btnMes.classList.add("active");
            $btnAnio.classList.remove("active");
        }
    }

    if (e.target===$btnAnio) {
        $graficSem.style.display="none";
        $graficMes.style.display="none";
        $graficAnio.style.display="block";
        $graficHrs.style.display="none";
        
        $btnHrs.classList.remove("active");
        $btnSem.classList.remove("active");
        $btnMes.classList.remove("active");
        $btnAnio.classList.add("active");

        if ($btnGrafica.classList.contains("active")) {

            $graficSem.style.display="none";
            $graficMes.style.display="none";
            $graficAnio.style.display="block";        
            $graficHrs.style.display="none";
            $barHrs.style.display="none";    
            $barSem.style.display="none";
            $barMes.style.display="none";
            $barAnio.style.display="none"; 
            $tableHrs.style.display="none";    
            $tableSem.style.display="none";
            $tableMes.style.display="none";
            $tableAnio.style.display="none"; 

            $btnHrs.classList.remove("active");
            $btnSem.classList.remove("active");
            $btnMes.classList.remove("active");
            $btnAnio.classList.add("active");

        }else if ($btnTabla.classList.contains("active")) {
            $graficSem.style.display="none";
            $graficMes.style.display="none";
            $graficAnio.style.display="none";        
            $graficHrs.style.display="none";
            $barHrs.style.display="none";    
            $barSem.style.display="none";
            $barMes.style.display="none";
            $barAnio.style.display="none";
            $tableHrs.style.display="none";    
            $tableSem.style.display="none";
            $tableMes.style.display="none";
            $tableAnio.style.display="inline-table";  

            $btnHrs.classList.remove("active");
            $btnSem.classList.remove("active");
            $btnMes.classList.remove("active");
            $btnAnio.classList.add("active");

        }else if($btnBarra.classList.contains("active")){
            $graficSem.style.display="none";
            $graficMes.style.display="none";
            $graficAnio.style.display="none";        
            $graficHrs.style.display="none";
            $barHrs.style.display="none";    
            $barSem.style.display="none";
            $barMes.style.display="none";
            $barAnio.style.display="block"; 
            $tableHrs.style.display="none";    
            $tableSem.style.display="none";
            $tableMes.style.display="none";
            $tableAnio.style.display="none"; 

            $btnHrs.classList.remove("active");
            $btnSem.classList.remove("active");
            $btnMes.classList.remove("active");
            $btnAnio.classList.add("active");
        }
    }

    /* ------------------------------------- */

    /* BOTONES DE CAMBIO DE GRAFICA-TABLA-BARRAS  */
    if (e.target===$btnGrafica) {
        $btnBarra.classList.remove("active");
        $btnTabla.classList.remove("active");
        $btnGrafica.classList.add("active");

        /* Estilos para botones */
        $btnHrs.classList.remove("bg-barras");
        $btnSem.classList.remove("bg-barras");
        $btnMes.classList.remove("bg-barras");
        $btnAnio.classList.remove("bg-barras");
        
        $btnHrs.classList.add("bg-graficas");
        $btnSem.classList.add("bg-graficas");
        $btnMes.classList.add("bg-graficas");
        $btnAnio.classList.add("bg-graficas");

        $btnHrs.classList.remove("bg-tablas");
        $btnSem.classList.remove("bg-tablas");
        $btnMes.classList.remove("bg-tablas");
        $btnAnio.classList.remove("bg-tablas");

        /* Cambiar a grafica 24 hrs por defecto */
        $btnHrs.classList.add("active");
        $btnSem.classList.remove("active");
        $btnMes.classList.remove("active");
        $btnAnio.classList.remove("active");
        $graficSem.style.display="none";
        $graficMes.style.display="none";
        $graficAnio.style.display="none";        
        $graficHrs.style.display="block";
        $barHrs.style.display="none";    
        $barSem.style.display="none";
        $barMes.style.display="none";
        $barAnio.style.display="none"; 
        $tableHrs.style.display="none";    
        $tableSem.style.display="none";
        $tableMes.style.display="none";
        $tableAnio.style.display="none";
        
        
    }

    if (e.target===$btnTabla) {
        $btnBarra.classList.remove("active");
        $btnTabla.classList.add("active");
        $btnGrafica.classList.remove("active");

         /* Estilos para botones */
         $btnHrs.classList.remove("bg-barras");
         $btnSem.classList.remove("bg-barras");
         $btnMes.classList.remove("bg-barras");
         $btnAnio.classList.remove("bg-barras");
         
         $btnHrs.classList.remove("bg-graficas");
         $btnSem.classList.remove("bg-graficas");
         $btnMes.classList.remove("bg-graficas");
         $btnAnio.classList.remove("bg-graficas");
 
         $btnHrs.classList.add("bg-tablas");
         $btnSem.classList.add("bg-tablas");
         $btnMes.classList.add("bg-tablas");
         $btnAnio.classList.add("bg-tablas");


         /* Cambiar a grafica 24 hrs por defecto */
        $btnHrs.classList.add("active");
        $btnSem.classList.remove("active");
        $btnMes.classList.remove("active");
        $btnAnio.classList.remove("active");
        $graficSem.style.display="none";
        $graficMes.style.display="none";
        $graficAnio.style.display="none";        
        $graficHrs.style.display="none";
        $barHrs.style.display="none";    
        $barSem.style.display="none";
        $barMes.style.display="none";
        $barAnio.style.display="none"; 
        $tableHrs.style.display="inline-table";    
        $tableSem.style.display="none";
        $tableMes.style.display="none";
        $tableAnio.style.display="none";


    }

    if (e.target===$btnBarra) {
        $btnBarra.classList.add("active");
        $btnTabla.classList.remove("active");
        $btnGrafica.classList.remove("active");

         /* Estilos para botones */
         $btnHrs.classList.add("bg-barras");
         $btnSem.classList.add("bg-barras");
         $btnMes.classList.add("bg-barras");
         $btnAnio.classList.add("bg-barras");
         
         $btnHrs.classList.remove("bg-graficas");
         $btnSem.classList.remove("bg-graficas");
         $btnMes.classList.remove("bg-graficas");
         $btnAnio.classList.remove("bg-graficas");
 
         $btnHrs.classList.remove("bg-tablas");
         $btnSem.classList.remove("bg-tablas");
         $btnMes.classList.remove("bg-tablas");
         $btnAnio.classList.remove("bg-tablas");

        /* Cambiar a grafica 24 hrs por defecto */
        $btnHrs.classList.add("active");
        $btnSem.classList.remove("active");
        $btnMes.classList.remove("active");
        $btnAnio.classList.remove("active");
        $graficSem.style.display="none";
        $graficMes.style.display="none";
        $graficAnio.style.display="none";        
        $graficHrs.style.display="none";
        $barHrs.style.display="block";    
        $barSem.style.display="none";
        $barMes.style.display="none";
        $barAnio.style.display="none"; 
        $tableHrs.style.display="none";    
        $tableSem.style.display="none";
        $tableMes.style.display="none";
        $tableAnio.style.display="none";
    }


    /* ------------------------------------- */
});



