<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mentor Mate</title>
</head>
<body>

    <?php
    echo "<pre>";
    $space = 10;
    for ($i = 0; $i <= 10; $i++) {

        for ($k = 0; $k < $space; $k++) {
            echo "&nbsp;";
        }
        for ($j = 0; $j < 2 * $i - 1; $j++) {
            echo "*";
        }
        for ($t = 0; $t < $space; $t++) {
            echo "- ";
        }
        for ($j = -1; $j < 2 * $i - 1; $j++) {
            echo "*";
        }
        for ($k = 0; $k < $space; $k++) {
            echo "&nbsp;";
        }


        $space--;

        echo "<br/>";
    }
    $space = 10;
    for ($i = 0; $i <= 10; $i++) {

        for ($k = 0; $k < $space; $k++) {
            echo "&nbsp;";
        }
        for ($j = 0; $j < 2 * $i - 1; $j++) {
            echo "*";
        }
        for ($t = 0; $t < $space; $t++) {
            echo "- ";
        }
        for ($j = -1; $j < 2 * $i - 1; $j++) {
            echo "*";
        }
        for ($k = 0; $k < $space; $k++) {
            echo "&nbsp;";
        }


        $space--;

        echo "<br/>";
    }
    echo "</pre>";

    ?>

</body>
</html>