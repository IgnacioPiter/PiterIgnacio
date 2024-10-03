CREATE TABLE Profesores (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    nombre TEXT,
    apellido TEXT,
    correo_electronico TEXT,
    telefono TEXT,
    departamento TEXT
);

CREATE TABLE Alumnos (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    nombre TEXT,
    apellido TEXT,
    correo_electronico TEXT,
    telefono TEXT,
    fecha_nacimiento DATE
);

CREATE TABLE Asistencias (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE,
    alumno_id BIGINT,
    profesor_id BIGINT,
    estado TEXT,
    FOREIGN KEY (alumno_id) REFERENCES Alumnos(id),
    FOREIGN KEY (profesor_id) REFERENCES Profesores(id)
);

CREATE TABLE Instituciones (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    nombre TEXT,
    direccion TEXT,
    telefono TEXT,
    correo_electronico TEXT
);

CREATE TABLE Profesor_Institucion (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    profesor_id BIGINT,
    institucion_id BIGINT,
    FOREIGN KEY (profesor_id) REFERENCES Profesores(id),
    FOREIGN KEY (institucion_id) REFERENCES Instituciones(id)
);

CREATE TABLE Alumno_Institucion (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    alumno_id BIGINT,
    institucion_id BIGINT,
    FOREIGN KEY (alumno_id) REFERENCES Alumnos(id),
    FOREIGN KEY (institucion_id) REFERENCES Instituciones(id)
);


CREATE TABLE Usuarios (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    nombre TEXT,
    apellido TEXT,
    correo_electronico TEXT,
    telefono TEXT,
	 usuario VARCHAR(255) UNIQUE,
    contrasena TEXT
);