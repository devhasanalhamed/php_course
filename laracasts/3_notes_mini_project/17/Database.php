<?php

// File name starts with a capital letter if it's only contains one class

class Database
{
    private $connection;


    public function __construct($config, $user = 'root', $password = '')
    {



        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $user, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }


    public function execute($query, $parameters = null)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($parameters);

        return  $statement;
    }
}
