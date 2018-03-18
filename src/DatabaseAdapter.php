<?php

use PDO;

class DatabaseAdapter 
{
    protected $connection;

    function __construct(PDO $connection)
    {   
        $this->connection = $connection;
    }

    public function fetchAll($tableName)
    {
        return $this->connection->query("select * from {$tableName->fetchAll()}");
    }

    public function query($query, $parameters)
    {
        return $this->connection->prepare($sql)->execute($parameters);
    }
}