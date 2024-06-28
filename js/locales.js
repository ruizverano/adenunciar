i18next.init({
    lng: 'es', // Idioma por defecto
    debug: true,
    resources: {
        en: {
            translation: {
                "title": "Coordinates",
                "address_placeholder": "Entered Address",
                "accept_button": "Accept"
            }
        },
        es: {
            translation: {
                "title": "Coordenadas",
                "address_placeholder": "Direccion Ingresada",
                "accept_button": "Aceptar"
            }
        }
    }
}, function(err, t) {
    updateContent();
});

function updateContent() {
    document.getElementById('Coordenadas_').innerText = i18next.t('title');
    document.getElementById('ctl00_ContentPlaceHolder3_txtDireccion_2').placeholder = i18next.t('address_placeholder');
    document.getElementById('ctl00_ContentPlaceHolder3_Btndireccion').innerText = i18next.t('accept_button');
}

function changeLanguage(lng) {
    i18next.changeLanguage(lng, function(err, t) {
        if (err) return console.log('something went wrong loading', err);
        updateContent();
    });
}

