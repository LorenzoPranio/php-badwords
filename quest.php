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
                <p><?php echo $censured ?></p>
            </div>
        </div>
    </div>
</body>
</html>