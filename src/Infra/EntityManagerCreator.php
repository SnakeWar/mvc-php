<?php

namespace Mayrcon\Marlon\Infra;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    public function getEntityManager(): EntityManagerInterface
    {
        $paths = [__DIR__ . '/../Entity'];
        $isDevMode = true;

        $dbParams = array(
            'dbname' => 'postgres',
            'user' => 'postgres',
            'password' => '123456',
            'host' => 'localhost',
            'driver' => 'pdo_pgsql',
            //'driver' => 'pdo_sqlsrv',
            //'driver' => 'pdo_mysql',
            //'url' => 'pgsql://user:postgres@localhost:5432/postgres'
        );

        $config = Setup::createAnnotationMetadataConfiguration(
            $paths,
            $isDevMode
        );
        return EntityManager::create($dbParams, $config);
    }
}
