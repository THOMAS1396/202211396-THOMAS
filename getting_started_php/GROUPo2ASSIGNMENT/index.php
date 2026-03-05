<?php

$name = "ToMic";
$hash = hash('sha256', $name);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToMic  Request / Response</title>
</head>
<body>

    <h1>ToMic  Request / Response</h1>

    <p>The SHA256 hash of "ToMic" is<br>
    <strong><?php echo $hash; ?></strong></p>

    <pre>ASCII ART:

    ***********
        **       
        **
        **
        **
        ** </pre>

    <p>
        <a href="check.php">Click here to check the error setting</a><br>
        <a href="fail.php">Click here to cause a traceback</a>
    </p>

</body>
</html>
