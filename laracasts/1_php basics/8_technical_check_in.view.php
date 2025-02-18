<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $ramzHub['name'] ?></title>
</head>

<body>
    <h1><?= $ramzHub['name'] ?></h1>

    <ul>
        <?php foreach ($ramzHub['categories'] as $category) : ?>
            <li><?= $category ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>