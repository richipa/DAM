create database if not exists cine_ricardoperez;
USE cine_ricardoperez;

CREATE TABLE salas (
id_sala VARCHAR(5) PRIMARY KEY,
nombre_sala VARCHAR(50) NOT NULL
);

CREATE TABLE peliculas (
id_pelicula VARCHAR(5) PRIMARY KEY,
titulo VARCHAR(100) NOT NULL,
genero VARCHAR(30),
anio INT,
director VARCHAR(60),
id_sala VARCHAR(5),
FOREIGN KEY (id_sala) REFERENCES salas(id_sala)
);

// En mi caso no he tenido que utilizar la tabla salas excepto para el ID, que se relaciona con peliculas. Pero para nada mas.
INSERT INTO salas (id_sala, nombre_sala) VALUES
('S1', 'Sala Principal'),
('S2', 'Sala 3D'),
('S3', 'Sala VIP');

INSERT INTO peliculas (id_pelicula, titulo, genero, anio, director, id_sala) VALUES
('P1', 'Inception', 'Ciencia Ficción', 2010, 'Christopher Nolan', 'S1'),
('P2', 'Titanic', 'Romance', 1997, 'James Cameron', 'S2'),
('P3', 'El Padrino', 'Drama', 1972, 'Francis Ford Coppola', 'S1'),
('P4', 'Avatar', 'Ciencia Ficción', 2009, 'James Cameron', 'S2'),
('P5', 'Interstellar', 'Ciencia Ficción', 2014, 'Christopher Nolan', 'S3');



