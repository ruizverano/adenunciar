if ('webkitSpeechRecognition' in window) {
    const recognition = new webkitSpeechRecognition();
    recognition.continuous = true; 
    recognition.interimResults = true; 
    recognition.lang = 'es-ES';

    const startBtn = document.getElementById('start-btn-comandos');
    const stopBtn = document.getElementById('stop-btn-comandos');    

    const bienvenida = () => {
        recognition.stop();
        speak("Hola! Bienvenidos a denunciár plús.");        
    }

    //bienvenida();
    document.addEventListener('DOMContentLoaded', () => {
        //recognition.start();
        bienvenida;
    });

    const commands = {
        "hola": () => {            
            bienvenida();
        },

        "hurto": () => {
            panelHurto();            
        },

        "a personas": () => {
            panelHurtoPersonas();
            speak("Está ingresando a la opción hurto a personas!.");
        },

        "regresar": () => {
            regresar();            
        }
    };

     recognition.onresult = (event) => {
         let interimTranscript = '';
         let finalTranscript = '';

         for (let i = event.resultIndex; i < event.results.length; ++i) {
             if (event.results[i].isFinal) {
                 finalTranscript += event.results[i][0].transcript.toLowerCase();                 
             } else {
                 interimTranscript += event.results[i][0].transcript.toLowerCase();
             }
         }

         console.log(finalTranscript);
         console.log(interimTranscript);
       
         for (const command in commands) {
             if (finalTranscript.includes(command)) {
                 commands[command]();
                 break;
             }
         }
     };


    recognition.onstart = () => {
        console('Reconocimiento de voz iniciado.');
    };

    recognition.onend = () => {
        console('Reconocimiento de voz finalizado.');
    };

    recognition.onerror = (event) => {
        console('Error en el reconocimiento de voz:', event.error);
    };

    startBtn.addEventListener('click', () => {
        recognition.start();
    });

    stopBtn.addEventListener('click', () => {
        recognition.stop();
    });

} else {
    alert('Tu navegador no soporta la API de Web Speech');
}