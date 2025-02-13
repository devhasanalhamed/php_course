<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Associative Arrays</title>
</head>

<body>

    <?php

    $courses = [
        [
            'title' => 'Dart for Beginners',
            'author' => 'Hasan Al-Hamed',
            'price' => 0.00,
            'description' => 'Enroll in Dart for Beginners and learn how to write Dart programs.',
            'url' => 'https://www.udemy.com/course/dart-for-beginners/'
        ],
        [
            'title' => 'PHP for Beginners',
            'author' => 'Hasan Al-Hamed',
            'price' => 0.00,
            'description' => 'Enroll in PHP for Beginners and learn how to write PHP programs.',
            'url' => 'https://www.udemy.com/course/php-for-beginners/'
        ],
        [
            'title' => 'Dart to Advanced',
            'author' => 'Hasan Al-Hamed',
            'price' => 49.99,
            'description' => 'Enroll in Advanced Dart and learn how to write advanced Dart programs.',
            'url' => 'https://www.udemy.com/course/dart-to-advanced/'

        ]
    ]
    ?>

    <h3>Courses</h3>

    <ul>
        <?php foreach ($courses as $course) : ?>
            <a href="<?= $course['url'] ?>" , target="_blank">
                <li> <?= $course['title'] ?> </li>
            </a>
        <?php endforeach; ?>
    </ul>

</body>

</html>