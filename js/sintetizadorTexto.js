function speak(text) {
    if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'es-ES';
        window.speechSynthesis.speak(utterance);
    } else {
        console.error('API de síntesis de voz no soportada por este navegador.');
    }
}

