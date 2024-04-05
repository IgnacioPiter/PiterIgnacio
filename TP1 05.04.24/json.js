

const persoanje= {
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
document.getElementById("result").innerHTML="El personaje" + (persoanje.name +"esta" + persoanje.status);
console.log("El persoanje "+ persoanje.name+  " esta " + persoanje.status);

document.getElementById("result").innerHTML=""


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
*/

