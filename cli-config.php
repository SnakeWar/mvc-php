<?php

require_once __DIR__ . '/vendor/autoload.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(
    (new \Mayrcon\Marlon\Infra\EntitymanagerCreator())->getEntityManager()
);
