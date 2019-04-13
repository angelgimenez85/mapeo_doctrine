<?php

require_once __DIR__."/../bootstrap.php";

// Save
$profesor = $entityManager->find('Profesor', 1);
$curso = $entityManager->find('Curso', 1);
$asignatura = new Asignatura("Matemática", 12);
$asignatura->setProfesor($profesor);
$asignatura->setCurso($curso);

$entityManager->persist($asignatura);
$entityManager->flush();


// Update
/*$id = 1;
$poblacion = $entityManager->find('Poblacion', $id);

if ($poblacion === null) {
    echo "Poblacion $id does not exist.\n";
    exit(1);
}

$poblacion->setNombre("Mi Poblacion");
$entityManager->flush(); */ 


// Get All
/*$alumnoRepository = $entityManager->getRepository('Alumno');
$alumnos = $alumnoRepository->findAll();

foreach ($alumnos as $alumno) {
    echo sprintf("-%s - %s\n", $alumno->getNombres(), $alumno->getPoblacion()->getNombre());
}*/


// Remove
/*$id = 2;
$poblacion = $entityManager->find('Poblacion', $id);

if ($poblacion === null) {
    echo "Poblacion $id does not exist.\n";
    exit(1);
}

$entityManager->remove($poblacion);
$entityManager->flush();*/
