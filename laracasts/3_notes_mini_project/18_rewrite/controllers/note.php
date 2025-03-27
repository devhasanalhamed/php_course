<?php

$heading = 'Note:';

$config = require('config.php');

$db = new Database($config['database'], 'root', '1234');


$query = "select * from notes where id = :id";


$note = $db->execute($query, ['id' => $_GET['id']])->findOrFail();


$currentUserId = 1;

if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}


require 'views/note.view.php';
