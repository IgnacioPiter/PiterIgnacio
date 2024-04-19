function llamar() {
    fetch(`https://randomuser.me/api/`)
    .then(Response => Response.json())
    .then(data => {
        console.log(data);

        let longitud = data.results[0].location.coordinates.longitude;
        let latitud = data.results[0].location.coordinates.latitude;

        let map = L.map("map").setView([latitud, longitud], 10);
        let marker = L.marker([latitud, longitud]).addTo(map);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

    })
}
