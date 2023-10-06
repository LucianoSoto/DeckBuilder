<?php require_once("Navs/navUserpage.html"); 
      require_once("../Models/Cards.php");
      require_once("../cardRepository.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Cartas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<body>
    <h1>Cartas actualmente cargadas en el sistema</h1>
        <br><br>
    <div id="listBody">
        <table id="cardTable">
        <tr>
            <th>Nombre de la carta</th>
        </tr>
        <?php 
        $cardArray = arrayLista();
            for($i = 0; $i < count($cardArray); $i++){
                ?>
                <tr class="<?php echo defineClass($cardArray[$i]); ?>">
                    <?php $type = $cardArray[$i]->getCardtype(); ?>
                    <td> <?php echo $cardArray[$i]->getName(); ?></td>
                    <td><form action="viewCard.php" method="GET">
                        <input type="hidden" name="index" id="index" value="<?php echo $i ?>" /> 
                        <button type="submit" class="btn btn-primary">Ver informacion</button>
                    </form></td>

                </tr>
                <?php
            }
        ?>

    </table>
    </div>
</body>
</html>

