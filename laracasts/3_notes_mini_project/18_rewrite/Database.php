<?php

// File name starts with a capital letter if it's only contains one class

class Database
{
    private $connection;
    private $statement;


    public function __construct($config, $user = 'root', $password = '')
    {



        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $user, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }


    public function execute($query, $parameters = null)
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($parameters);

        return  $this;
    }

    public function find()
    {
        $result = $this->statement->fetch();

        return $result;
    }

    public function findOrFail()
    {
        $result = $this->statement->fetch();

        if (! $result) {
            abort();
        }

        return $result;
    }



    public function findAll()
    {
        $result = $this->statement->fetchAll();

        if (! $result) {
            abort();
        }

        return $result;
    }
}
