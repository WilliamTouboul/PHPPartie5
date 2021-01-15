<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5</title>
</head>

<body>
    <?php
    // Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

    $months = array(
        'Janvier',
        'Février',
        'Mars',
        'Avril',
        'Mai',
        'Juin',
        'Juillet',
        'Aout',
        'Septembre',
        'Octobre',
        'Novembre',
        'Décembre'
    );
    foreach ($months as $month)
        echo $month . '<br>';
    ?>

</body>

</html>