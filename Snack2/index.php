<?php
    $user = [
        'name' => $_GET['name'],
        'mail' => $_GET['mail'],
        'age' => $_GET['age']
    ];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Autorizzazione</title>
    </head>
    <body>
        <?php
            if ((strlen($user['name']) > 3) && (strpos($user['mail'], '.') !== false && strpos($user['mail'], '@') !== false) && (is_numeric($user['age']))) {
                echo 'Accesso riuscito';
            } else {
                echo 'Accesso negato';
            }
        ?>
    </body>
</html>
