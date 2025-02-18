<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lambda Functions</title>
</head>

<body>

    <?php

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

    // lambda is an anonymous function ex: function($courses, $price) { ... } note: no name
    function filter($items, $fn)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }

    $filteredBooks = filter($courses, function ($course) {
        return $course['price'] <= 10;
    });

    // or use array filter function
    $filteredBooksTwo = array_filter($courses, function ($course) {
        return $course['price'] <= 10;
    });

    ?>

    <ul>
        <?php foreach ($filteredBooks as $course) : ?>
            <a>
                <li> <?= $course['title'] ?> (<?= "{$course['hours']} hours" ?>)</li>
            </a>
        <?php endforeach; ?>
        <br>
        <?php foreach ($filteredBooksTwo as $course) : ?>
            <a>
                <li> <?= $course['title'] ?> (<?= "{$course['hours']} hours" ?>)</li>
            </a>
        <?php endforeach; ?>
    </ul>

</body>

</html>