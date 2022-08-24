<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks Blocco 1</title>
</head>

<body>


    <h2>Snack 7</h2>

    <?php
    $students = [
        [
            "name" => "Tony",
            "lastname" => "Stark",
            "marks" => [
                "english" => 74,
                "science" => 92,
                "math" => 70,
            ]
        ],
        [
            "name" => "Steve",
            "lastname" => "Rogers",
            "marks" => [
                "english" => 87,
                "science" => 55,
                "math" => 71,
            ]
        ],
        [
            "name" => " Bruce",
            "lastname" => "Banner",
            "marks" => [
                "english" => 60,
                "science" => 100,
                "math" => 90,
            ]
        ],
        [
            "name" => "Natasha",
            "lastname" => "Romanoff",
            "marks" => [
                "english" => 74,
                "science" => 82,
                "math" => 65,
            ]
        ],
        [
            "name" => "Stephen",
            "lastname" => "Strange",
            "marks" => [
                "english" => 75,
                "science" => 95,
                "math" => 80,
            ],
        ]
    ];
    ?>

    <?php
    for ($i = 0; $i < count($students); $i++) { ?>

        <p><strong>
                <?php
                $average = array_sum($students[$i]['marks']) / count($students[$i]['marks']);
                echo $students[$i]["name"] . "  " . $students[$i]["lastname"] . " || " . "marks average" . " => " . round($average, 2);
                ?>
            </strong>
        </p>

    <?php } ?>
</body>

</html>