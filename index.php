<!-- Déclaration des listes courses en PHP -->
<?php
$courses = [
    "Pommes",
    "Poires",
    "Oranges",
    "Légumes",
    "Haricots verts",
    "Tomates",
    "Autres",
    "Gâteaux",
    "Bonbons",
    "Savon"
];
?>
<?php
$coursesTriees = [
    "Fruits" => ["Pommes", "Poires", "Oranges", "Tomates"],
    "Légumes" => ["Haricots verts", "Pas les tomates"],
    "Autres" => ["Bonbons", "Savon", "Gâteaux"]
]
?>

<!-- Début du code HTML -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de courses</title>
</head>

<body>

    <!-- Affichage de la liste de courses non triée via une boucle -->
    <h2> Liste de courses non triée : </h2>

    <?php foreach ($courses as $index => $name) { ?>
        <p> <?php echo $name; ?> </p>
    <?php } ?>


    <!-- Affichage de la liste de courses triées via des boucles  -->

    <h2> Liste de courses triée : </h2>

    <?php foreach ($coursesTriees as $title => $list) { ?>
        <h3> <?php echo $title ?> : </h3>
        <?php foreach ($list as $famille => $item) { ?>
            <?php echo $item . " , " ?>

        <?php } ?>

    <?php } ?>

</body>

</html>