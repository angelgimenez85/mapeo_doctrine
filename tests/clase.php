<?php

require_once __DIR__."/../bootstrap.php";

// Save
$hora = '173000';
$clase = new Clase(3, 5, new DateTime('2000-01-01'.$hora));

$asignatura = $entityManager->find('Asignatura', 1);
$clase->setAsignatura($asignatura);

$aula = $entityManager->find('Aula', 2);
$clase->setAula($aula);

$entityManager->persist($clase);
$entityManager->flush();

/*$date = new DateTime('2000-01-01 050200');
var_dump($date->format('H:i:s'))."\n";*/

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
