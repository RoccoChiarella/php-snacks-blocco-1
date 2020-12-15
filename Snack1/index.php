<?php
    $matches = [
        'homeTeams' => ['Chicago Bulls', 'Boston Celtics', 'Detroit Pistons'],
        'guestTeams' => ['Los Angeles Lakers', 'Miami Heat', 'Denver Nuggets'],
        'homeScores' => [30, 50, 45],
        'guestScores' => [15, 50, 60]
    ];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            for ($i=0; $i < count($matches['homeTeams']); $i++) {
                echo $matches['homeTeams'][$i] . ' - ' . $matches['guestTeams'][$i] . ' | ' . $matches['homeScores'][$i] . ' - ' . $matches['guestScores'][$i] . '<br>';
            }
        ?>
    </body>
</html>
