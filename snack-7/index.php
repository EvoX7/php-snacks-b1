<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks Blocco 1</title>
</head>

<body>


    <h2>Snack 5</h2>

    <?php 
     $students = [
        [
            "Nome" => "Antonio",
            "Cognome" => "De Curtis",
        ],
        [
            "Nome" => "Claudio",
            "Cognome" => "Bisio",
        ],
        [
            "Nome" => "Alessandro",
            "Cognome" => "Siani",
        ],
        [
            "Nome" => "Alberto",
            "Cognome" => "Sordi",
        ],
        [
            "Nome" => "Massimo",
            "Cognome" => "Troisi",
        ],
     ]
    ?>

    <p>
        <?php 
        $new_paragraphs = explode('.', $paragraph);
        var_dump($new_paragraphs) ;
        ?>
    </p>
</body>

</html>