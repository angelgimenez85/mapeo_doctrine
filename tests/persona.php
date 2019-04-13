<?php

require_once __DIR__."/../bootstrap.php";

// Save
/*$poblacion = $entityManager->find('Poblacion', 2);
$alumno = new Alumno();
$alumno->setDni("32456239");
$alumno->setNombres("Facundo Adrián");
$alumno->setApellido("Pérez");
$alumno->setFechaNac(DateTime::createFromFormat('Ymd', '19950803'));
$alumno->setDireccion("Colón 234");
$alumno->setTelefono("345825644");
$alumno->setPoblacion($poblacion);

$entityManager->persist($alumno);
$entityManager->flush();*/


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




/*Tests de Profesor*/

// Save
$poblacion = $entityManager->find('Poblacion', 2);
$profesor = new Profesor();
$profesor->setDni("32452239");
$profesor->setNombres("Fernando Raúl");
$profesor->setApellido("Soto");
$profesor->setFechaNac(DateTime::createFromFormat('Ymd', '19781203'));
$profesor->setDireccion("Iturraspe 564");
$profesor->setTelefono("348925644");
$profesor->setPoblacion($poblacion);

$entityManager->persist($profesor);
$entityManager->flush();