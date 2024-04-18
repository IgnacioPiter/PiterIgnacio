function consultar() {
    var nconsultaP1 = document.getElementById("consulta1").value
    var nconsultaP2 = document.getElementById("consulta2").value
    fetch(`https://rickandmortyapi.com/api/character/${nconsultaP1},${nconsultaP2}`)
    .then (function(response){
        return response.json()
    })
    .then (function(data){
        if (nconsultaP1=="" || nconsultaP2=="") {
            alert("Ingresar valor en ambos campos.");
        } else {
            document.getElementById("info").innerHTML =`
            <img src="${data[0].image}"><br>
            <p>${data[0].name}<br>
            <p>${data[0].status}<br>
            <p>${data[0].gender}<br>
            
            <img src="${data[1].image}"><br>
            <p>${data[1].name}</p>
            <p>${data[1].status}</p>
            <p>${data[1].gender}</p>`
          

        }
        
    })
}