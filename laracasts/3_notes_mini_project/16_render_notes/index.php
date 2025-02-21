<?php

require('functions.php');

require 'Database.php';

// require 'router.php';


$config = require('config.php');

$db = new Database($config['database'], 'root', '1234');

// To solve the problem of sql injection there is a general rule that we should never trust the user input
// do not ever inline the user input in the query
// other way is to bind the parameters to the query by run the query with the parameters
// $query = "select * from posts where id = :id"; or $query = "select * from posts where id = ?";

$query = "select * from posts where id = ?";

$id = $_GET['id'];


// if you used :id in the query you should pass ['id' => $id] or [':id' => $id]
$posts = $db->execute($query, [$id])->fetchAll();

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
