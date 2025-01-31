<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Input Form</title>
</head>
<body>
    <h1>Enter the values</h1>
    <form action="process.php" method="POST">
        <label for="a">Value of a:</label>
        <input type="number" name="a" id="a" required><br><br>

        <label for="b">Value of b:</label>
        <input type="number" name="b" id="b" required><br><br>

        <label for="c">Value of c:</label>
        <input type="number" name="c" id="c" required><br><br>

        <input type="submit" value="Calculate">
    </form>
</body>
</html>