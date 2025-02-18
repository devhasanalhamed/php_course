<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Technical Check In</title>
</head>

<body>

    <ul>

        <?php foreach ($filteredBooks as $course) : ?>
            <a>
                <li> <?= $course['title'] ?> by <?= $course['author'] ?> (<?= "{$course['hours']} hours" ?>)</li>
            </a>
        <?php endforeach; ?>
    </ul>

</body>

</html>