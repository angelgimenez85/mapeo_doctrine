<?php

require_once __DIR__ ."/../bootstrap.php";


// Save
$poblacion = new Poblacion(0, "Villa Ocampo", 3580);
$entityManager->persist($poblacion);
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
/*$poblacionRepository = $entityManager->getRepository('Poblacion');
$poblaciones = $poblacionRepository->findAll();
var_dump($poblaciones);

foreach ($poblaciones as $poblacion) {
    echo sprintf("-%s\n", $poblacion->getNombre());
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