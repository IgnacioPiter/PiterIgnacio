document.getElementById('btnEnviar').addEventListener('click', function() {
    var inputNumber = document.getElementById('inputNumber').value;

    // Validar si se ingresó un número
    if (inputNumber && !isNaN(inputNumber)) {
        // Realizar solicitud a la API
        fetch('https://rickandmortyapi.com/api/character/' + inputNumber)
            .then(response => response.json())
            .then(data => {
                // Obtener información del personaje
                var name = data.name;
                var status = data.status;
                var species = data.species;
                var gender = data.gender;

                // Mostrar el resultado en la página
                var resultDiv = document.getElementById('result');
                resultDiv.innerHTML = 'Nombre: ' + name + '<br>' +
                                      'Estado: ' + status + '<br>' +
                                      'Especie: ' + species + '<br>' +
                                      'Género: ' + gender;
            })
            .catch(error => console.log(error));
    } else {
        alert('Por favor, ingresa un número válido.');
    }
});
