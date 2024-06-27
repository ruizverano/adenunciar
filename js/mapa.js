const latitudeInput = document.getElementById('latitude');
const longitudeInput = document.getElementById('longitude');

document.addEventListener('DOMContentLoaded', () => {
    //welcomeUser();
    initMap();
});
// Inicializa el mapa usando Leaflet
function initMap() {
    
    console.log("se ha iniciado el mapa");
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
