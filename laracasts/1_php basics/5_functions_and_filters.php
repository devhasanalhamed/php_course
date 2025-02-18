<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Functions and Filters</title>
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
            'price' => 0.00,
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

    function filterByPriceOrLower($courses, $price)
    {
        $filteredCourses = [];

        foreach ($courses as $course) {
            if ($course['price'] <= $price) {
                $filteredCourses[] = $course;
            }
        }

        return $filteredCourses;
    }

    ?>

    <ul>
        <?php foreach (filterByPriceOrLower($courses, 10) as $course) : ?>
            <a>
                <li> <?= $course['title'] ?> (<?= "{$course['hours']} hours" ?>)</li>
            </a>
        <?php endforeach; ?>
    </ul>

</body>

</html>