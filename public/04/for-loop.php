<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $prijzen = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

        for ($i = 0; $i < count($prijzen); $i++) {
            echo "The number is: $prijzen[$i] <br>";
        }
    ?>
</body>
</html>