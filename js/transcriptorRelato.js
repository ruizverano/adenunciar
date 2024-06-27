if ('webkitSpeechRecognition' in window) {
    const recognition = new webkitSpeechRecognition();
    recognition.continuous = true; 
    recognition.interimResults = true; 
    recognition.lang = 'es-ES'; 

    const startBtnRelato = document.getElementById('start-btn-relato');
    const stopBtn = document.getElementById('stop-btn-relato');    
    const resultElement = document.getElementById('result');
    const relato = document.getElementById('txtRelatoDenuncia');

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

        resultElement.innerHTML = `<strong>Transcripción:</strong> ${interimTranscript}`;
        $("#txtRelatoDenuncia").val(finalTranscript);          
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

    startBtnRelato.addEventListener('click', () => {
        recognition.start();
    }, { passive: true });

    stopBtn.addEventListener('click', () => {
        recognition.stop();
    }, { passive: true });

} else {
    alert('Tu navegador no soporta la API de Web Speech');
}
