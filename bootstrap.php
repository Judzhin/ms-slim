<?php

/**
 * @author Judzhin Miles <info@msbios.com> 
 */

ini_set('display_errors', true);

if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . "/src/App/Entity");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => 'root',
    'dbname' => 'slim'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);