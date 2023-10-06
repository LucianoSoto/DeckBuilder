<?php 
    require_once("../cardRepository.php");
    require_once("../Models/Cards.php");
    require_once("Navs/NavUserPage.html");
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if(isset($_GET["index"])){
            $index =  $_GET["index"];
        }
    
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Carta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        $cardArray = arrayLista();
        for($i = 0; $i < count($cardArray); $i++){
            if($index == $i){
                if($cardArray[$i]->getCardtype() == "monster"){
                   ?>
                   <div id="cardRecord">
                        <img src="<?php echo $cardArray[$i]->getImg();?>" alt="Imagen de la carta">
                        <div id="showCard">
                        
                            <h1>Nombre: <?php echo $cardArray[$i]->getName();?></h1> 
                            <p>Tipo de carta: <?php echo $cardArray[$i]->getCardtype();?></p> 
                            <p>Tipo de Monstruo: <?php echo $cardArray[$i]->getType();?></p> 
                            <p>Clase de monstruo: <?php echo $cardArray[$i]->getEffect();?></p> 
                            <p>Atributo: <?php echo $cardArray[$i]->getAttribute();?></p> 
                            <p>Ataque/ <?php echo $cardArray[$i]->getAtk();?> Defensa/ <?php echo $cardArray[$i]->getDef();?></p> 
                            <p>Nivel: <?php echo $cardArray[$i]->getLvl();?></p> 
                            <p>Texto de la carta: <?php echo $cardArray[$i]->getText();?></p> 
                            <p>Limite: <?php echo $cardArray[$i]->getLimit();?></p> 
                        </div>
                   </div>
                  
                    
                    <?php 
                }
                else {
                    ?> 
                    <div id="cardRecord">
                        <img src="<?php echo $cardArray[$i]->getImg();?>" alt="Imagen de la carta">
                        <div id="showCard">
                        
                            <p>Nombre: <?php echo $cardArray[$i]->getName();?></p> 
                            <p>Tipo de carta: <?php echo $cardArray[$i]->getCardtype();?></p> 
                            <p>Tipo de Efecto: <?php echo $cardArray[$i]->getType();?></p> 
                            <p>Texto de la carta: <?php echo $cardArray[$i]->getText();?></p> 
                            <p>Limite: <?php echo $cardArray[$i]->getLimit();?></p> 
                        </div>
                   </div>
                   <?php
                }
                
            }
        }
        /* Para mañana: 
        -Hacer que la pestaña de ver info se vea linda
        -Averiguar sobre stored procedures
        -Hacer ABM Cartas
        -Buscar metodo para guardar archivos de imagen en la DB en vez de links
        */
    ?>
</body>
</html>

