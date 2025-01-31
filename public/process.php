
<?php
// process.php

// Verify if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtain values from the form
    $a = escapeshellarg($_POST['a']);
    $b = escapeshellarg($_POST['b']);
    $c = escapeshellarg($_POST['c']);

    
    $command = "python3 calculate.py $a $b $c";
    $output = shell_exec($command);

    
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <title>Result</title>
    </head>
    <body>
        <h1>Calculation result</h1>
        $output
        <br><br>
        <a href='form.php'>Return to form</a>
    </body>
    </html>";
} else {
    echo "Error: No form data received.";
}
?>