// Verifica si el navegador soporta la API de Web Speech
if ('webkitSpeechRecognition' in window) {
    const recognition = new webkitSpeechRecognition();
    recognition.continuous = true; // Para continuar reconociendo incluso después de pausas
    recognition.interimResults = true; // Para mostrar resultados intermedios
    recognition.lang = 'es-ES'; // Idioma español

    const startBtn = document.getElementById('start-btn');
    const stopBtn = document.getElementById('stop-btn');
    const resultElement = document.getElementById('result');
    const voiceInput = document.getElementById('voice-input');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const complaintInput = document.getElementById('complaint');
    const submitBtn = document.getElementById('submit-btn');
    const latitudeInput = document.getElementById('latitude');
    const longitudeInput = document.getElementById('longitude');

    // Diccionario de comandos
    const commands = {
        "nombre": () => {
            nameInput.focus();
            speak("Por favor, ingrese su nombre.");
        },
        "correo": () => {
            emailInput.focus();
            speak("Por favor, ingrese su correo electrónico.");
        },
        "denuncia": () => {
            complaintInput.focus();
            speak("Por favor, ingrese los detalles de su denuncia.");
        },
        "enviar denuncia": () => {
            submitForm();
            speak("Denuncia enviada con éxito.");
        },
        "limpiar formulario": () => {
            clearForm();
            speak("Formulario limpiado.");
        }
    };

    // Función para manejar el envío del formulario
    function submitForm() {
        console.log('Formulario enviado');
        alert('Formulario enviado con éxito');
        // Aquí puedes añadir la lógica para enviar el formulario
    }

    // Función para limpiar el formulario
    function clearForm() {
        nameInput.value = '';
        emailInput.value = '';
        complaintInput.value = '';
        voiceInput.value = '';
        latitudeInput.value = '';
        longitudeInput.value = '';
        resultElement.innerHTML = '';
        console.log('Formulario limpiado');
    }

    // Función para sintetizar voz
    function speak(text) {
        if ('speechSynthesis' in window) {
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'es-ES';
            window.speechSynthesis.speak(utterance);
        } else {
            console.error('API de síntesis de voz no soportada por este navegador.');
        }
    }

    // Función para dar la bienvenida al usuario
    function welcomeUser() {
        speak("¡Bienvenido! Por favor, utilice comandos de voz para interactuar con el formulario de denuncias.");
    }

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

        resultElement.innerHTML = `<strong>Resultado final:</strong> ${finalTranscript}<br><strong>Intermedio:</strong> ${interimTranscript}`;
        voiceInput.value = finalTranscript || interimTranscript;

        // Ejecuta el comando si existe en el diccionario
        for (const command in commands) {
            if (finalTranscript.includes(command)) {
                commands[command]();
                break;
            }
        }
    };

    // Maneja el inicio del reconocimiento
    recognition.onstart = () => {
        console.log('Reconocimiento de voz iniciado.');
    };

    // Maneja el fin del reconocimiento
    recognition.onend = () => {
        console.log('Reconocimiento de voz finalizado.');
    };

    // Maneja errores en el reconocimiento
    recognition.onerror = (event) => {
        console.error('Error en el reconocimiento de voz:', event.error);
    };

    // Inicia el reconocimiento de voz al hacer clic en el botón
    startBtn.addEventListener('click', () => {
        recognition.start();
    });

    // Detiene el reconocimiento de voz al hacer clic en el botón
    stopBtn.addEventListener('click', () => {
        recognition.stop();
    });

    // Inicializa el mapa cuando la página esté completamente cargada
    document.addEventListener('DOMContentLoaded', () => {
        welcomeUser();
        initMap();
    });
} else {
    console.error('API de reconocimiento de voz no soportada por este navegador.');
}

// Inicializa el mapa usando Leaflet
function initMap() {
    const map = L.map('map').setView([-34.397, 150.644], 8);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    const marker = L.marker([-34.397, 150.644], { draggable: true }).addTo(map);

    map.on('click', function(e) {
        marker.setLatLng(e.latlng);
        document.getElementById('latitude').value = e.latlng.lat;
        document.getElementById('longitude').value = e.latlng.lng;
        speak("Ubicación seleccionada.");
    });

    marker.on('dragend', function(e) {
        document.getElementById('latitude').value = e.target.getLatLng().lat;
        document.getElementById('longitude').value = e.target.getLatLng().lng;
        speak("Ubicación actualizada.");
    });
}
