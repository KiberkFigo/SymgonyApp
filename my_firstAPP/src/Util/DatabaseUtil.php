<?php

namespace App\Util;

use Doctrine\DBAL\Connection;

class DatabaseUtil
{
    public $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function insert(string $table, array $data)
    {
        $qb = $this->connection->createQueryBuilder()
            ->insert($table);

        foreach ($data as  $column => $value) {
            $qb->setValue($column, ":{$column}")
                ->setParameter($column, $value);
        }
//fetch..... pro select
        $qb->executeQuery();
    }
}