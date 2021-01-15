<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5</title>
</head>

<body>
    <?php
//Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.

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

    $months[7] = 'Août';
    echo $months[7];
    ?>

</body>

</html>
