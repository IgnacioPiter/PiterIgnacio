

/*const persoanje= {
    "id": 140,
    "name": "Genital Washer",
    "status": "Alive",
    "species": "Human",
    "type": "",
    "gender": "Male",
    "origin": {
        "name": "Post-Apocalyptic Earth",
        "url": "https://rickandmortyapi.com/api/location/8"
    },
    "location": {
        "name": "Post-Apocalyptic Earth",
        "url": "https://rickandmortyapi.com/api/location/8"
    },
    "image": "https://rickandmortyapi.com/api/character/avatar/140.jpeg",
    "episode": [
        "https://rickandmortyapi.com/api/episode/23"
    ],
    "url": "https://rickandmortyapi.com/api/character/140",
    "created": "2017-12-27T18:47:44.566Z"

        
}
*/

function agregarpersonaje() {
    var nconsulta = document.getElementById("agregarpersonaje").value
    fetch(`https://rickandmortyapi.com/api/character/${nconsulta}`)
    .then (function(response){
        return response.json()
    })
    .then (function(data){
        document.getElementById("info").innerHTML =`
        <img src="${data.image}">
        <p>${data.name}</p>
        <p>${data.status}</p>
        <p>${data.gender}</p>`
    })
}


/*function buscarpersonaje(){
    const codigoinput = document.getElementById("codigo").value;
    const imge = document.createElement('img');
    document.getElementById("img").appendChild(imagen);
    fetch(`https://rickandmortyapi.com/api/character/${nconsulta}`)
    .then(response => response.json())
    .then(data =>{
        
        if (data.gender = "unknow"){
            document.getElementById("image").innerHTML=(data.image)
        }
            else{
                document.getElementById("image".innerHTML="no existe")
      
            }
        console.log(data)
    })
}


/*function buscarpersonaje(){
    const codigoinput = document.getElementById("codigo").value;
    document.getElementById("result").innerHTML=" ";
    fetch("https://rickandmortyapi.com/api/character/" + codigoinput)
    .then(response => response.json())
    .then(data =>{
        if (data.name != null){
            document.getElementById("result").innerHTML=(  "El Personaje "  +  data.name  + " Esta "  +  data.status )
        }
            else{
                document.getElementById("result".innerHTML="no existe")
      
            }
        console.log(data)
    })
}
document.getElementById("result").innerHTML="El personaje" + (persoanje.name +"esta" + persoanje.status);
console.log("El persoanje "+ persoanje.name+  " esta " + persoanje.status);





/*const jugador ={
    "nombre": "nahuel",
    "apellido": "Barrio",
    "apodo": "Perrito",
    "edad": "28",
    "clubes" : ["San Lorenzo","Ucatolica"],
    activo : true,
    Sueldo : 1000000.99,

}
console.log(jugador.clubes[0]);

if (data.name != null){
            document.getElementById("result").innerHTML=(  "El Personaje "  +  data.name  + " Esta "  +  data.status )
        }
            else{
                document.getElementById("result".innerHTML="no existe")
      
            }
        console.log(data)
    })
}
document.getElementById("result").innerHTML="El personaje" + (persoanje.name +"esta" + persoanje.status);
console.log("El persoanje "+ persoanje.name+  " esta " + persoanje.status);
*/

