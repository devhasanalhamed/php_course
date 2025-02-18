<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Conditions and Booleans</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $jobTitle = 'Fullstack Developer';
    $certified = true;
    $message = "You are not certified $jobTitle";

    if ($certified) {
        $message = "You are certified $jobTitle";
    }
    ?>


    <h1><?= $message; ?></h1>

</body>

</html>