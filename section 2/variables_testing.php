<?php $username = "Hasan" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <div>Welcome <?php echo $username ?></div>
    <div> <?= $username ?> You scored 1000 points</div>
    <div>
        <?php include("variables_testing2.php") ?>
    </div>

</body>

</html>