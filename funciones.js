function consultar() {
    var codigo = document.getElementById("codigo").value;
  
    fetch("datoscensales.json")
      .then(response => {
        if (!response.ok) {
          throw new Error("Error al cargar el archivo JSON: " + response.status);
        }
        return response.json();
      })
      .then(data => {
        var municipioCensales = data["localidades-censales"];
        var cantidaddepartamento = data.cantidad;
  
        var matchFound = false;
        var provincia = "";
        var municipio = "";
  
        municipioCensales.forEach(function(value) {
           if (codigo === value.municipio.id){
            Provincia = value.provincia.nombre;
            municipio = value.municipio.nombre;
            latitud = value.centroide.lat;
            longitud = value.centroide.lon;
            matchFound = true;
            return;
          }
           
        });
  
        var infoElement = document.getElementById("info");
        infoElement.innerHTML = "";
  
        if (matchFound) {
          infoElement.innerHTML = `
            <p>provincia: ${provincia}</p>
            <p>Municipio: ${municipio}</p>
            <p>latitud: ${latitud}</p>
            <p>longitud: ${longitud}</p>
          `;
        } else {
          infoElement.innerHTML = "<p>No existe</p>";
        }
      })
      .catch(error => {
        console.error("Error al cargar el archivo JSON:", error);
      });
  }
  
