<?php
    $paragraph= $_GET["text"];
    $word= $_GET["word"];

    $censured= str_replace($word, "***", $paragraph)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quest</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Questo è ciò che hai scritto:</h4>
                <p><?php echo $paragraph ?></p>
                <h4>Questa è la sua lunghezza:</h4>
                <p><?php echo strlen($paragraph) ?></p>
                <h4>Questo è il testo modificato:</h4>
                <p><?php echo $censured ?></p>
                <h4>Questa è la sua lunghezza:</h4>
                <p><?php echo strlen($censured) ?></p>
            </div>
        </div>
    </div>
</body>
</html>