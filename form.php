<?php

$name = $_POST['name'];
$surName = $_POST['surName'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        Sizning ismingiz: <?=$name?>
    </div>
    <div>
        Sizning familiyangiz: <?= $surName?><??>
    </div>
</body>
</html>