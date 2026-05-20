CREATE DATABASE odontologia;
USE odontologia;

CREATE TABLE 

CREATE TABLE usuarios (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol VARCHAR(20) NOT NULL DEFAULT 'user',
    estado TINYINT(1) NOT NULL DEFAULT 0,
    token VARCHAR(255)
);


CREATE TABLE odontologos (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(100) NOT NULL,
    especialidad VARCHAR(150) NOT NULL
);

INSERT INTO odontologos (nombres, especialidad)
VALUES
('Dr. Ricardo Ramírez', 'Implantología · Cirugía Oral'),
('Dr. Camila Lopez', 'Ortodoncia'),
('Dr. Jean Manyari', 'Endodoncia');


CREATE TABLE servicios (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);


INSERT INTO servicios (nombre)
VALUES
('Limpieza Dental'),
('Blanqueamiento'),
('Ortodoncia'),
('Endodoncia'),
('Implantes Dentales'),
('Extracción Dental'),
('Consulta General');



CREATE TABLE citas (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    usuario_id INT UNSIGNED NULL,
    odontologo_id INT UNSIGNED NOT NULL,
    servicio_id INT UNSIGNED NOT NULL,

    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,

    fecha DATE NOT NULL,
    hora TIME NOT NULL,

    nota TEXT,

    estado VARCHAR(20) DEFAULT 'pendiente',

    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (odontologo_id) REFERENCES odontologos(id),
    FOREIGN KEY (servicio_id) REFERENCES servicios(id)
);