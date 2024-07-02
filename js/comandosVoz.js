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
            speak("Soy el portal a denunciar! plus! una versión mejorada de este recurso ciudadano, más inclusiva, puede hacer uso de nuevas funcionalidades incorporadas para que su experiencia durante el acceso a la justicia sea mas cómoda y eficaz");
        },

        // "dinos que eres": () => {    
        //     recognition.stop();                    
        // },

        "delitos informáticos": () => {            
            document.getElementById('delitos_informatico').click();
            recognition.stop();
            speak("Está ingresando a la opción delitos informáticos!.");
        },

        "pornografía infantil": () => {            
            document.getElementById('pornografia_infantil').click();
            recognition.stop();
            speak("Está ingresando a la opción pornografia infantil!.");
        },

        "extorsión": () => {            
            document.getElementById('extorsi').click();
            recognition.stop();
            speak("Está ingresando a la opción extorsión!.");
        },

        "sala de denúncias": () => {            
            document.getElementById('salas').click();
            recognition.stop();
            speak("Está ingresando a la opción sala de denúncias!.");
        },

        "falsedad en documentos": () => {            
            document.getElementById('falsedad').click();
            recognition.stop();
            speak("Está ingresando a la opción falsedad en documentos!.");
        },

        "estafa": () => {            
            document.getElementById('estafa').click();
            recognition.stop();
            speak("Está ingresando a la opción estafa!.");
        },

        "maltrato animal": () => {            
            document.getElementById('maltratoanimal').click();
            recognition.stop();
            speak("Está ingresando a la opción maltrato animal!.");
        },

        "hurto": () => {
            panelHurto();            
        },

        "personas": () => {
            panelHurtoPersonas();
            recognition.stop();
            speak("Está ingresando a la opción hurto a personas!.");
        },

        "comercio": () => {
            panelHurtoPersonas();
            recognition.stop();
            speak("Está ingresando a la opción hurto a entidades comerciales!.");
        },

        "regresar": () => {
            recognition.stop();
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
        console.log('Reconocimiento de voz iniciado.');
    };

    recognition.onend = () => {
        console.log('Reconocimiento de voz finalizado.');
    };

    recognition.onerror = (event) => {
        console.log('Error en el reconocimiento de voz:', event.error);
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