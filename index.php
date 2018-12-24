<?php

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;

require_once 'vendor/autoload.php';

$config = new Configuration();

$connection = DriverManager::getConnection([
    'dbname' => 'Pagination',
    'user' => 'postgres',
    'password' => 'root',
    'host' => 'localhost',
    'driver' => 'pdo_pgsql',
]);

$queryBuilder = $connection->createQueryBuilder();
$queryBuilder->select('*')
             ->from('users');
