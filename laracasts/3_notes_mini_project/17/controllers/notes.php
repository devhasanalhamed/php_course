<?php

$heading = 'My Notes';

$config = require('config.php');

$db = new Database($config['database'], 'root', '1234');


$query = "select * from notes where user_id = 1";


$notes = $db->execute($query)->fetchAll();



require 'views/notes.view.php';
