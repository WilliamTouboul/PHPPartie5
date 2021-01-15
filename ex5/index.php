<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5</title>
</head>

<body>
    <?php
    //Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.

    $depHdF = array( 
        "02" => "Aisne", 
        "59" => "Nord", 
        "60" => "Oise", 
        "62" => "Pas de Calais",  
        "80" => "Somme", 
        ); 
        foreach($depHdF as $dept) {
            echo $dept;
        }
    ?>

</body>

</html>