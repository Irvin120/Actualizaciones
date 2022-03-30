const $notificaciones = document.querySelector('.notif');

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
});