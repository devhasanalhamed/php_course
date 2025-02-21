<?php

require('functions.php');

require 'Database.php';

// require 'router.php';


$config = require('config.php');

$db = new Database($config['database'], 'root', '1234');

$posts = $db->execute('select * from posts')->fetchAll();

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
