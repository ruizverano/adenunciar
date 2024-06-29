 window.onload = function () {

     speak("Bienvenidos al portal a denunciar plus.");

        document.getElementById('liModalHurtoPersonas1').innerHTML= `${txtModalHurtoPersonas1}<button onClick='speak("${txtModalHurtoPersonas1}")'><i class="fa-sharp fa-solid fa-volume-high"></i></button>`;
        document.getElementById('liModalHurtoPersonas2').innerHTML= `${txtModalHurtoPersonas2}<button onClick='speak("${txtModalHurtoPersonas2}")'><i class="fa-sharp fa-solid fa-volume-high"></i></button>`;
        document.getElementById('liModalHurtoPersonas3').innerHTML= `${txtModalHurtoPersonas3}<button onClick='speak("${txtModalHurtoPersonas3}")'><i class="fa-sharp fa-solid fa-volume-high"></i></button>`;
        document.getElementById('liModalHurtoPersonas4').innerHTML= `${txtModalHurtoPersonas4}<button onClick='speak("${txtModalHurtoPersonas4}")'><i class="fa-sharp fa-solid fa-volume-high"></i></button>`;        
 }

    function panelHurto() {
        $("#botones_hurto").slideDown();
        speak("Está ingresando a la opción hurto!.");
    }
    
    function regresar() {
        $("#botones_hurto").slideUp();
        speak("Está regresando a la opción anterior!.");
    }

    function panelHurtoPersonas(){
        $("#myModalHurtop").slideDown();
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

