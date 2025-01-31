
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

    
    echo "<pre>$output</pre>";
        
} else {
    echo "Error: No form data received.";
}
?>