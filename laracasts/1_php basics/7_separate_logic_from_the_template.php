<?php

// Lesson number seven explain how we should separate view or templates from the logic to make the file clean and easy to read.
// In this example, we have a file that contains the logic and another file that contains the view.
// The logic file is 7_separate_logic_from_the_template.php and the view file is 7_separate_logic_from_the_template.view.php

$courses = [
    [
        'title' => 'Dart for Beginners',
        'author' => 'Hasan Al-Hamed',
        'price' => 0.00,
        'description' => 'Enroll in Dart for Beginners and learn how to write Dart programs.',
        'url' => 'https://www.udemy.com/course/dart-for-beginners/',
        'hours' => 2.0

    ],
    [
        'title' => 'PHP for Beginners',
        'author' => 'Hasan Al-Hamed',
        'price' => 3.75,
        'description' => 'Enroll in PHP for Beginners and learn how to write PHP programs.',
        'url' => 'https://www.udemy.com/course/php-for-beginners/',
        'hours' => 1.5

    ],
    [
        'title' => 'Dart to Advanced',
        'author' => 'Hasan Al-Hamed',
        'price' => 49.99,
        'description' => 'Enroll in Advanced Dart and learn how to write advanced Dart programs.',
        'url' => 'https://www.udemy.com/course/dart-to-advanced/',
        'hours' => 5.0


    ]
];


$filteredBooks =  array_filter($courses, function ($course) {
    return $course['author'] === 'Hasan Al-Hamed';
});

// require will include the view file in this file
require '7_separate_logic_from_the_template.view.php';
