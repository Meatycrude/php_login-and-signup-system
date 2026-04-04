<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php system</title>
    <link href="index.css" rel="stylesheet" >
</head>
<body>
    <?php
    include "includes/people.php";

    $object = new people();
    echo $object->name();
    ?>
</body>
</html>
