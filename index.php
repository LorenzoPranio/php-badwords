<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./quest.php" method="GET">
                    <div class="mb-3">
                        <label class="form-label">Inserisci qui il testo</label>
                        <textarea type="text" class="form-control" name="text"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci qui la parola da censurare</label>
                        <input type="word" class="form-control" name="word">
                    </div>
                    <button type="submit" class="btn btn-primary bg-success">Invio</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>