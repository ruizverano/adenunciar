if ('webkitSpeechRecognition' in window) {
    const recognition = new webkitSpeechRecognition();
    recognition.continuous = true; 
    recognition.interimResults = true; 
    recognition.lang = 'es-ES'; 

    const startBtn = document.getElementById('start-btn');
    const stopBtn = document.getElementById('stop-btn');    

    const resultElement ="";
    // const resultElement = document.getElementById('result');
    // const voiceInput = document.getElementById('voice-input');
    // const nameInput = document.getElementById('name');
    // const emailInput = document.getElementById('email');
    // const complaintInput = document.getElementById('complaint');
    // const submitBtn = document.getElementById('submit-btn');

    // Diccionario de comandos

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

    // Función para limpiar el formulario
    // function clearForm() {
    //     nameInput.value = '';
    //     emailInput.value = '';
    //     complaintInput.value = '';
    //     voiceInput.value = '';
    //     resultElement.innerHTML = '';
    //     console.log('Formulario limpiado');
    // }

      // Maneja los resultados del reconocimiento de voz
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

        //  resultElement.innerHTML = `<strong>Resultado final:</strong> ${finalTranscript}<br><strong>Intermedio:</strong> ${interimTranscript}`;
        //  voiceInput.value = finalTranscript || interimTranscript;
       
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

    // Maneja el envío del formulario al hacer clic en el botón
    // submitBtn.addEventListener('click', () => {
    //     submitForm();
    // });
} else {
    alert('Tu navegador no soporta la API de Web Speech');
}