window.onload = function () {
    document.getElementById('liModalHurtoPersonas1').innerText = txtModalHurtoPersonas1;
    document.getElementById('liModalHurtoPersonas2').innerText = txtModalHurtoPersonas2;
    document.getElementById('liModalHurtoPersonas3').innerText = txtModalHurtoPersonas3;
    document.getElementById('liModalHurtoPersonas4').innerText = txtModalHurtoPersonas4;
    
    speak(txtModalHurtoPersonas1);
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

