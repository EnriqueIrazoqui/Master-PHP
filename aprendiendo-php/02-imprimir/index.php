<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imprimir por pantalla - Master en PHP</title>
</head>
<body>
    <h1>Master en PHP - <?php echo 'Victor Robles'?></h1>

    <?="Bienvenido al curso mas grande de PHP"?>

    <?php
    /*titular de la seccion*/
    echo '<h3>Listado de videojuegos:</h3>';

    echo "<ul>"
         ."<li>GTA</li>"
         ."<li>Fifa</li>"
         ."<li>Dragon Age</li>"
         ."</ul>";


    /*Parra explicativo */

    /*Esta es una lista 
    de videojuegos 
    modernos */
    echo "<p>Esta es toda la"."-"."lista de juegos</p>";


    //echo '<br>Hola hola</br>';

    ?>
    
</body>
</html>

