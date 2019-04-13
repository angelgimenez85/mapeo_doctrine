<?php

require_once __DIR__."/../bootstrap.php";

// Save
$alumno = new Alumno();
$alumno->setDni("32645789");
$alumno->setNombres("Gustavo Rubén");
$alumno->setApellido("Leiva");
$alumno->setFechaNac(DateTime::createFromFormat('Ymd', '19980617'));
$alumno->setDireccion("Pje. 25 234 B Lorenzón");
$alumno->setTelefono("3485987536");
$alumno->setPoblacion($entityManager->find('Poblacion', 1));

$mat = new Matriculacion(5.32);
$mat->setAsignatura($entityManager->find('Asignatura', 1));
$mat->setAlumno($alumno);

$entityManager->persist($mat);
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
