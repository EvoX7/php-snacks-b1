<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks Blocco 1</title>
</head>

<body>
<h2>Snack 2</h2>

    <?php
    $games = [
        [
            "team1" => "Bruschettese",
            "team2" => "Arancini",
            "team1_points" => 103,
            "team2_points" => 70
        ],
        [
            "team1" => "Parigini",
            "team2" => "Prosciuttini",
            "team1_points" => 56,
            "team2_points" => 45
        ],
        [
            "team1" => "Pizzaroli",
            "team2" => "Olivini",
            "team1_points" => 97,
            "team2_points" => 85
        ],
        [
            "team1" => "Developers",
            "team2" => "Designers",
            "team1_points" => 200,
            "team2_points" => 70
        ],
        [
            "team1" => "Ferrarini",
            "team2" => "Lamborghini",
            "team1_points" => 150,
            "team2_points" => 160
        ],
    ]
    ?>
    <h1>PHP Snacks Blocco 1</h1>

    <h2>Snack 1</h2>

    <?php
    for ($i = 0; $i < count($games); $i++) { ?>
        <ul>
            <li><strong>
                    <?php
                    echo $games[$i]["team1"] . " - " . $games[$i]["team2"] . " " . " ||| " . $games[$i]["team1_points"] . " / " . $games[$i]["team2_points"]; ?>

                </strong></li>
        </ul>
    <?php } ?>

</body>
</html>
