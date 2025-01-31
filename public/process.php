
<?php
// process.php

// Verify if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtain values from the form and sanitize them
    $a = escapeshellarg($_POST['a']);
    $b = escapeshellarg($_POST['b']);
    $c = escapeshellarg($_POST['c']);

    // Construct the command to execute the Python script
    $command = escapeshellcmd("python3 calculate.py $a $b $c");
    $output = shell_exec($command);

    // Display the output in a preformatted text block
    echo "<pre>$output</pre>";
} else {
    echo "Error: No form data received.";
}
?>