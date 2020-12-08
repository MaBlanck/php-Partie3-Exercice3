<?php
$startNumber = 100;
$randomNumber = 57;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 3 Partie 3</title>
</head>

<body>
    <h1>Exercice 3 Partie 3</h1>
    <ul>
        <?php
        while ($startNumber >= 10) {
            $result = $startNumber * $randomNumber;
            echo '<li>' . $result  . '</li>';
            $startNumber--;
        }
        ?></ul>

</body>

</html>