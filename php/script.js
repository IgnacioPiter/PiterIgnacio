

class Persona{
    constructor (nombre, apellido, fecha_nacimiento){
        this.nombre = nombre;
        this.apellido = apellido;
        this.fecha_nacimiento = fecha_nacimiento;
    
    }

    Saludar(){
        console.log(`Hola, soy ${this.nombre} ${this.apellido} ${this.fecha_nacimiento} `)
    }
 
    getEdad( ){
        let anio = new Date();
        let edad = anio.getFullYear() - this.fecha_nacimiento                           ;        
        return edad;
        
    }

    
}

let ignacio = new Persona(`ignacio`,`piter`,`2003`);

let edad=ignacio.getEdad();
    console.log(ignacio.getEdad());

    
