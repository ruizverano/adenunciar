document.addEventListener('DOMContentLoaded', (event) => {
    $('#Coordenadas').on('shown.bs.modal', function () {
        initMap();
    });
});


function mostrarmodalCoordenadas() {
    $('#Coordenadas').modal('show')
    $('#Coordenadas').modal({
        backdrop: 'static',
        keyboard: false
    });
    }

function initMap() {
    const map = L.map('map').setView([4.5709, -74.2973], 6);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    const marker = L.marker([-34.397, 150.644], { draggable: true }).addTo(map);

    map.on('click', function(e) {
        marker.setLatLng(e.latlng);
        document.getElementById('latitud_txtCoordenadas').value = e.latlng.lat;
        document.getElementById('longitud_txtCoordenadas').value = e.latlng.lng;

        document.getElementById('latitud').innerText = e.latlng.lat;
        document.getElementById('longitud').innerText = e.latlng.lng;
        speak("Ubicación seleccionada.");
    });

    marker.on('dragend', function(e) {
        document.getElementById('latitud_txtCoordenadas').value = e.target.getLatLng().lat;
        document.getElementById('longitud_txtCoordenadas').value = e.target.getLatLng().lng;

        document.getElementById('latitud').innerText = e.target.getLatLng().lat;
        document.getElementById('longitud').innerText = e.target.getLatLng().lng;
        speak("Ubicación actualizada.");
    });
}
