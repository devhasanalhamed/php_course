<?php

/*
Control structure
If, Elseif, Else => Alternate syntax
 */

if (10 > 5) {
    echo "Good";
} else {
    echo "Bad";
}

echo "<br>";

// short if one statement, if you will put else
// should be direct after if.
if (10 > 10) echo "Good";
else echo "Bad";


?>


<!-- ":" could be "{" but the end should be "}" -->
<?php if (20 > 10) : ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <p>Hello</p>
    </body>

    </html>

<?php endif; ?>


<?php
if (10 > 10) :
    echo "first";
elseif (10 > 5) :
    echo "second";
else :
    echo "Last";

endif;
?>

<!-- Conclusion
 we can get rid of curly braces of is statement
 and replace it with : and "endif:"
 when we need more readable code in long lines
 -->