document.getElementById('consultarBtn').addEventListener('click', consultarPersona);

function consultarPersona() {
  const id = Math.floor(Math.random() * 826) + 1;

  fetch(`https://api.randomuser.me?id=${id}`)
    .then(response => response.json())
    .then(data => {
      const persona = data.results[0];

      const foto = persona.picture.medium;
      const nombre = persona.name.first;
      const apellido = persona.name.last;
      const fechaNacimiento = persona.dob.date;
      const localidad = persona.location.city;
      const latitud = persona.location.coordinates.latitude;
      const longitud = persona.location.coordinates.longitude;
      const gender = persona.gender;

      fetch(`https://rickandmortyapi.com/api/character/?gender=${gender}`)
        .then(response => response.json())
        .then(data => {
          const rickAndMortyCharacter = data.results[0];

          const rickAndMortyFoto = rickAndMortyCharacter.image;
          const rickAndMortyNombre = rickAndMortyCharacter.name;
          const rickAndMortyEspecie = rickAndMortyCharacter.species;
          const rickAndMortyOrigen = rickAndMortyCharacter.origin.name;
          const rickAndMortyGender = rickAndMortyCharacter.gender;

          document.getElementById('personaFoto').src = foto;
          document.getElementById('nombrePersona').textContent = `Nombre: ${nombre} ${apellido}`;
          document.getElementById('fechaNacimiento').textContent = `Fecha de Nacimiento: ${fechaNacimiento}`;
          document.getElementById('localidad').textContent = `Localidad: ${localidad}`;
          document.getElementById('coordenadas').textContent = `Coordenadas: Latitud ${latitud}, Longitud ${longitud}`;
          document.getElementById('generoPersona').textContent = `Género: ${gender}`;

          document.getElementById('rickMortyFoto').src = rickAndMortyFoto;
          document.getElementById('nombreRickMorty').textContent = `Nombre: ${rickAndMortyNombre}`;
          document.getElementById('especie').textContent = `Especie: ${rickAndMortyEspecie}`;
          document.getElementById('origen').textContent = `Origen: ${rickAndMortyOrigen}`;
          document.getElementById('generoRickMorty').textContent = `Genero: ${rickAndMortyGender}`;

          const resultadoOverlay = document.getElementById('resultadoOverlay');
          if (gender === rickAndMortyCharacter.gender) {
            resultadoOverlay.innerHTML = '<span class="red-cross">&#10008;</span>';
          } else {
            resultadoOverlay.innerHTML = '<span class="green-tick">&#10004;</span>';
          }
        })
        .catch(error => console.log(error));
    })
    .catch(error => console.log(error));
}
