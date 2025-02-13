<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
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

        ul {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 0;
            list-style-type: none;
        }

        li {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 150px;
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            font-family: 'Arial', sans-serif;
            font-size: 1.2em;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        li:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>



<body>

    <?php
    $courses = [
        "PHP Language",
        "Dart Language",
        "Laravel",
        "Flutter"
    ];

    $subscription = [
        "Starter" => "10 SR",
        "Premium" => "100 SR",
        "Ultimate" => "1000 SR",

    ];

    $registeredBrand = "RamzHub";
    $brandSymbol = "®";
    ?>
    <h1><?= "{$registeredBrand}$brandSymbol" ?></h1>
    <h2>Recommended Courses For You 😀</h2>

    <ul>
        <?php
        foreach ($courses as $course) {
            echo "<li>$course</li>";
        }
        ?>
    </ul>

    <h2>Subscription Plans</h2>
    <ul>
        <!--  another way to loop through an array -->
        <?php foreach ($subscription as $subscribe) : ?>

            <li> <?= $subscribe ?> </li>

        <?php endforeach; ?>

    </ul>
</body>

</html>