<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks Blocco 1</title>
</head>

<body>


    <h2>Snack 4</h2>

    <p>
        <?php
        $my_numbers = [];

        while (count($my_numbers) < 15) {
            $rand_numbers = rand(1, 40);
            if (!in_array($rand_numbers, $my_numbers)) {
                $my_numbers[] = $rand_numbers;
            }
        }
        var_dump($my_numbers);
        ?>
    </p>
</body>

</html>