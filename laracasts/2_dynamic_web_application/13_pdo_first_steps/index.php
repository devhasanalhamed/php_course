<?php

require('functions.php');

require 'Database.php';

// require 'router.php';



$db = new Database();

// two colons (::) are used to access static members of a class
// PDO::FETCH_ASSOC is a constant that is used to fetch the result as an associative array
// single colon (:) is used to access instance members of a class
// fetchAll() is a method that is used to fetch all the results from the query

$posts = $db->execute('select * from posts')->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
