if ('webkitSpeechRecognition' in window) {
    const recognition = new webkitSpeechRecognition();
    recognition.continuous = true; 
    recognition.interimResults = true; 
    recognition.lang = 'es-ES'; 

    const startBtn = document.getElementById('start-btn');
    const stopBtn = document.getElementById('stop-btn');    
     const resultElement = document.getElementById('result');
     const relato = document.getElementById('txtRelatoDenuncia');


    // document.addEventListener('DOMContentLoaded', () => {
    //     //recognition.start();
    //     initMap();
    //     bienvenida;
    // });

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

    startBtn.addEventListener('click', () => {
        recognition.start();
    });

    stopBtn.addEventListener('click', () => {
        recognition.stop();
    });

} else {
    alert('Tu navegador no soporta la API de Web Speech');
}