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
    
    $object2 = new NewClass2();
    echo $object2->own();
    ?>
</body>
</html>
