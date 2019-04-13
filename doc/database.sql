    
DROP DATABASE IF EXISTS centro_ensenianza;
CREATE DATABASE centro_ensenianza character set UTF8 collate utf8_spanish_ci;

CREATE TABLE poblaciones (
	id_poblacion INTEGER NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	cod_postal INTEGER(4) NOT NULL,
	PRIMARY KEY (id_poblacion)
);

CREATE TABLE alumnos (
	id_alumno INTEGER NOT NULL AUTO_INCREMENT,
	dni CHAR(8) NOT NULL,
	nombres VARCHAR(100) NOT NULL,
	apellido VARCHAR(100) NOT NULL,
	fecha_nac DATE NOT NULL,
	direccion VARCHAR(150) NOT NULL,
	telefono VARCHAR(20) NOT NULL,
	poblacion INTEGER NOT NULL,
	PRIMARY KEY (id_alumno)
);

CREATE TABLE profesores (
	id_profesor INTEGER NOT NULL AUTO_INCREMENT,
	dni CHAR(8) NOT NULL,
	nombres VARCHAR(100) NOT NULL,
	apellidos VARCHAR(100) NOT NULL,
	fecha_nac DATE NOT NULL,
	direccion VARCHAR(150) NOT NULL,
	telefono VARCHAR(20) NOT NULL,
	poblacion INTEGER NOT NULL,
	PRIMARY KEY (id_profesor)
);

CREATE TABLE asignaturas (
	cod_asignatura INTEGER NOT NULL AUTO_INCREMENT,
	nombre INTEGER NOT NULL,
	hs_semanales INTEGER NOT NULL,
	profesor INTEGER NOT NULL,
	curso INTEGER NOT NULL,
	PRIMARY KEY (cod_asignatura)
);

CREATE TABLE cursos (
	cod_curso INTEGER NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(20) NOT NULL,
	profesor INTEGER NOT NULL,
	PRIMARY KEY (cod_curso)
);

CREATE TABLE matriculaciones (
	nota DECIMAL(2,2) NOT NULL,
	incidencias TEXT NOT NULL,
	alumno INTEGER NOT NULL,
	asignatura INTEGER NOT NULL,
	PRIMARY KEY (alumno, asignatura)
);

CREATE TABLE aulas (
	cod_aula INTEGER NOT NULL AUTO_INCREMENT,
	piso INTEGER(3) NOT NULL,
	nro_pupitres INTEGER(4) NOT NULL,
	PRIMARY KEY (cod_aula)
);

CREATE TABLE aulas_asignaturas (
	fecha_hora DATETIME NOT NULL,
	asignatura INTEGER NOT NULL,
	aula INTEGER NOT NULL,
	PRIMARY KEY (asignatura, aula)
);

ALTER TABLE alumnos ADD FOREIGN KEY (poblacion) REFERENCES poblaciones(id_poblacion);
ALTER TABLE profesores ADD FOREIGN KEY (poblacion) REFERENCES poblaciones(id_poblacion);
ALTER TABLE asignaturas ADD FOREIGN KEY (profesor) REFERENCES profesores(id_profesor);
ALTER TABLE asignaturas ADD FOREIGN KEY (curso) REFERENCES cursos(cod_curso);
ALTER TABLE cursos ADD FOREIGN KEY (profesor) REFERENCES profesores(id_profesor);
ALTER TABLE matriculaciones ADD FOREIGN KEY (alumno) REFERENCES alumnos(id_alumno);
ALTER TABLE matriculaciones ADD FOREIGN KEY (asignatura) REFERENCES asignaturas(cod_asignatura);
ALTER TABLE aulas_asignaturas ADD FOREIGN KEY (asignatura) REFERENCES asignaturas(cod_asignatura);
ALTER TABLE aulas_asignaturas ADD FOREIGN KEY (aula) REFERENCES aulas(cod_aula);
