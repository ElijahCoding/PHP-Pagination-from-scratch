<?php

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;
use App\Pagination\Builder;

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


$builder = new Builder($queryBuilder);

$users = $builder->paginate($_GET['page'] ?? 1, 10);

dump($users->get());
// $users->render();
