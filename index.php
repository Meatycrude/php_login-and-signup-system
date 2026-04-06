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
    include "includes/person.php";
    include "includes/computer.php";
    

    $computer1= new Computer("Macbook Pro", "Apple", 2000);
    $computer2= new Computer("Surface Laptop", "Microsoft", 1500);
    $person1 = new person("John", 20, "Nairobi");

    echo $person1->name;
    echo "<br>";
    echo $person1->location;
    echo "<br>";
    echo $person1->age;
    echo "<br>";

    echo $computer1->name;
    echo "<br>";
    echo $computer1->brand;
    echo "<br>";
    echo $computer1->price;
    echo "<br>";

    ?>
</body>
</html>
