<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


$paths = array(__DIR__."/src");
$isDevMode = true;


$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '3482508685',
    'dbname'   => 'centro_ensenianza',
    'charset'  => 'utf8',
    'driverOptions' => array(1002 => 'SET NAMES utf8')
);

/*$dbParams = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/centro_ensenianza.sqlite',
);*/

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);