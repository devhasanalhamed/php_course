<?php

// File name starts with a capital letter if it's only contains one class

class Database
{
    private $connection;


    public function __construct()
    {
        $dsn = "mysql:host=localhost;user=root;password=1234;dbname=laracasts;charset=utf8";

        // PDO($dsn, 'root', '1234');
        $this->connection = new PDO($dsn);
    }


    public function execute($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return  $statement;
    }
}
