 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php system</title>
    <link href="index.css" rel="stylesheet" >
</head>
<body>
    <form action="calculate.php" method="post">
        <h2>simple calculator</h2>

        <input type="number" name="num1" placeholder="number 1">
          <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="number 2">
        <button type="submit">Calculate</button>




    </form>
    
</body>
</html>
