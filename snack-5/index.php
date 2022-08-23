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
    $paragraph = 'See if you can catch yourself complaining, in either speech or thought, about a situation you find yourself in, what other people do or say, your surroundings, your life situation, even the weather. To complain is always nonacceptance of what is. It invariably carries an unconscious negative charge. When you complain, you make yourself into a victim. When you speak out, you are in your power. So change the situation by taking action or by speaking out if necessary or possible; leave the situation or accept it. All else is madness.

       Ordinary unconsciousness is always linked in some way with denial of the Now. The Now, of course, also implies the here. Are you resisting your here and now? Some people would always rather be somewhere else. Their "here" is never good enough. Through self-observation, find out if that is the case in your life. Wherever you are, be there totally. If you find your here and now intolerable and it makes you unhappy, you have three options: remove yourself from the situation, change it, or accept it totally. If you want to take responsibility for your life, you must choose one of those three options, and you must choose now. Then accept the consequences. No excuses. No negativity. No psychic pollution. Keep your inner space clear.'
    ?>

    <?php
    $new_paragraphs = explode('.', $paragraph);
    for ($i = 0; $i < count($new_paragraphs); $i++) { ?>

    <p>
            <?php
            echo $new_paragraphs[$i]; ?>
        </p>
    <?php } ?>
</body>
</html>