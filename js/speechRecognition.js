// Verifica si el navegador soporta la API de Web Speech
if ('webkitSpeechRecognition' in window) {
    const recognition = new webkitSpeechRecognition();
    recognition.continuous = true; // Para continuar reconociendo incluso después de pausas
    recognition.interimResults = true; // Para mostrar resultados intermedios
    recognition.lang = 'es-ES'; // Idioma español

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
        initMap();
        bienvenida;

    });

    const commands = {
        // "nombre": () => nameInput.focus(),
        // "correo": () => emailInput.focus(),
        // "denuncia": () => complaintInput.focus(),
        // //"enviar denuncia": () => submitForm(),
        // "limpiar formulario": () => clearForm(),

        "hola": () => {            
            bienvenida();
        },

        "hurto": () => {
            panelvisible();
            speak("Está ingresando a hurto!.");
        },

        "hurto a personas": () => {
            panelvisible();
            speak("Está ingresando a hurto!.");
        }
    };

    // Función para manejar el envío del formulario
    // function submitForm() {
    //     console.log('Formulario enviado');
    //     alert('Formulario enviado con éxito');
    //     // Aquí puedes añadir la lógica para enviar el formulario
    // }

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

          // Ejecuta el comando si existe en el diccionario
         for (const command in commands) {
             if (finalTranscript.includes(command)) {
                 commands[command]();
                 break;
             }
         }
     };

     function speak(text) {
        if ('speechSynthesis' in window) {
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'es-ES';
            window.speechSynthesis.speak(utterance);
        } else {
            console.error('API de síntesis de voz no soportada por este navegador.');
        }
    }

    // Maneja el inicio del reconocimiento
    recognition.onstart = () => {
        console('Reconocimiento de voz iniciado.');
    };

    // Maneja el fin del reconocimiento
    recognition.onend = () => {
        console('Reconocimiento de voz finalizado.');
    };

    // Maneja errores en el reconocimiento
    recognition.onerror = (event) => {
        console('Error en el reconocimiento de voz:', event.error);
    };

    // Inicia el reconocimiento de voz al hacer clic en el botón
    startBtn.addEventListener('click', () => {
        recognition.start();
    });

    // Detiene el reconocimiento de voz al hacer clic en el botón
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

function initMap() {
    const map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8
    });

    const marker = new google.maps.Marker({
        position: { lat: -34.397, lng: 150.644 },
        map: map,
        draggable: true
    });

    google.maps.event.addListener(map, 'click', function(event) {
        marker.setPosition(event.latLng);
        latitudeInput.value = event.latLng.lat();
        longitudeInput.value = event.latLng.lng();
        speak("Ubicación seleccionada.");
    });

    google.maps.event.addListener(marker, 'dragend', function(event) {
        latitudeInput.value = event.latLng.lat();
        longitudeInput.value = event.latLng.lng();
        speak("Ubicación actualizada.");
    });
}
