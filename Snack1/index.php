<?php
    $matches = [
        [
            'homeTeam' => 'Chicago Bulls',
            'guestTeam' => 'Los Angeles Lakers',
            'homeScore' => 30,
            'guestScore' => 15
        ],
        [
            'homeTeam' => 'Boston Celtics',
            'guestTeam' => 'Miami Heat',
            'homeScore' => 50,
            'guestScore' => 45
        ],
        [
            'homeTeam' => 'Detroit Pistons',
            'guestTeam' => 'Denver Nuggets',
            'homeScore' => 50,
            'guestScore' => 60
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>BasketBall</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="header matchesContainer">
                <span>Squadra in casa</span>
                <span>Squadra ospite</span>
                <span>Punteggio squadra in casa</span>
                <span>Punteggio squadra ospite</span>
            </div>
            <?php
                for ($i=0; $i < count($matches); $i++) {
                    ?>
                    <div class="matchesContainer">
                        <span><?php echo $matches[$i]['homeTeam'] ?></span>
                        <span><?php echo $matches[$i]['guestTeam'] ?></span>
                        <span><?php echo $matches[$i]['homeScore'] ?></span>
                        <span><?php echo $matches[$i]['guestScore'] ?></span>
                    </div>
                    <?php
                }
            ?>
        </body>
        </div>
</html>
