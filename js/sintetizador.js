 window.onload = function () {

    speak("Bienvenidos al portal a denunciar plus.");       

    sintetizarModales(txtModalHurto,'liModalHurto');

    sintetizarModales(txtModalInformatico,'pModalInformatico');

    sintetizarModales(txtModalPornografia,'pModalPornografia');

    sintetizarModales(txtModalTerminosPornografia,'liModalTermPornografia');
    
    sintetizarModales(txtModalExtorsion,'pModalExtorsion');

    sintetizarModales(txtModalFalsedad,'liModalFalsedad');

    sintetizarModales(txtModalEstafa,'liModalEstafa');

    sintetizarModales(txtMaltratoAnimal,'liModalMaltratoAnimal');

    $("#frame").slideUp();
 }

    function sintetizarModales(texto,identificador){
        texto.forEach((txt,index)=>{
            const elementId = `${identificador}${index +1}`
            const element = document.getElementById(elementId);
            if(element){
                element.innerHTML =`${txt}<button onClick='speak("${txt}")'><i class="fa-sharp fa-solid fa-volume-high"></i></button>`;
            }
        });
    }

    function panelHurto() {
        $("#botones_otro").slideUp();
        $("#botones_hurto").slideDown();        
        speak("Está ingresando a la opción hurto!.");
    }
    
    function regresar() {
        $("#botones_hurto").slideUp();
        $("#botones_otro").slideDown();
        speak("Está regresando a la opción anterior!.");
    }    

    function panelHurtoPersonas(){
        $("#myModalHurtop").slideDown();        
    }

    function mostrarFrame(){
        $("#botones_hurto").slideUp();
        $("#botones_otro").slideUp();
        $("#frame").slideDown();
    }

    function irPanel1(){
        $("#botones_hurto").slideUp();
        $("#botones_otro").slideUp();
    }


function speak(text) {
    if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'es-ES';
        window.speechSynthesis.speak(utterance);
    } else {
        console.error('API de síntesis de voz no soportada por este navegador.');
    }
}

