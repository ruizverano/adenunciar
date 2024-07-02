
const recognition = new webkitSpeechRecognition();
recognition.continuous = true;
recognition.interimResults = true;
recognition.lang = 'es-CO';


function transcribirVoz(fieldId) {
    const field = document.getElementById(fieldId);

    let finalTranscript = '';

    recognition.onresult = (event) => {
        let interimTranscript = '';
        for (let i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalTranscript += event.results[i][0].transcript.toUpperCase();
            } else {
                interimTranscript += event.results[i][0].transcript.toLowerCase();
            }
        }

        field.value = finalTranscript;
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

    recognition.start();

}

function pararTrancripcion() {
    recognition.stop();
    speak("Se ha finalizado la funcionalidad de escucha")
}
