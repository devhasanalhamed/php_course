<?php

$heading = 'Note:';

$config = require('config.php');

$db = new Database($config['database'], 'root', '1234');


$query = "select * from notes where id = :id";


$note = $db->execute($query, ['id' => $_GET['id']])->fetch();



require 'views/note.view.php';
