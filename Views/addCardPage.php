<?php require_once("Navs/navAdminPage.html"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="styles.css">
    <title>Agregar Cartas </title>
</head>
<body>

    <form action="../addCardinDB.php" method="post">
        <label for="cardname">Nombre de la carta: </label>
        <input type="text" name="cardname" id="cardname" style="width: 60%; height: 40px;">
        
        <label for="cardtype">Tipo de carta: </label>
        <select name="cardtype" id="cardtype" onchange="selector()" >
            <option value="">Elegir tipo</option>
            <option value="monster">Monstruo</option>
            <option value="spell">Magia</option>
            <option value="trap">Trampa</option>
        </select>
       
        <select name="effect" id="effect">
            
        </select>

        <select name="type" id="type">

        </select>

        <select name="attribute" id="attribute">

        </select>
        
        
        <label class ="show" for="atk">ATK</label>
        <input type="text" name="atk" id="atk">
        
        <label class ="show" for="atk">DEF</label>
        <input type="text" name="def" id="def">
        
        <label class ="show" for="atk">Level/Rank</label>
        <input type="text" name="lvl" id="lvl">

        <label for="limit">Limitaciones</label>
        <select name="limit" id="limit">
            <option value="3">Ilimitada</option>
            <option value="2">Semilimitada</option>
            <option value="1">Limitada</option>
            <option value="0">Prohibida</option>
        </select>
        
        <label for="cardtext">Efecto</label>
        <textarea name="cardtext" id="cardtext" cols="30" rows="3"></textarea>
        
        <label for="img">URL de imagen</label>
        <input type="text" name="img" id="img">
        
        
        
        
        <br>


        <input type="submit" style="width: 30%; height: 40px;" class="btn btn-primary">
    </form>

    
</body>
<!-- Para mañana: 
-Permitir ver una lista de cartas. Estas solo muestran el nombre y un fondo de color basado en su tipo y tienen un menu desplegable que muestra toda la info
-->
</html>
 <script>
                function selector(){
                    let selection = document.getElementById("cardtype");
                    let s = document.getElementById("cardtype").value;
                    let effect = document.getElementById("effect");
                    let type = document.getElementById("type");
                    let attribute = document.getElementById("attribute");
                    

                    if(s == "monster"){
                        document.getElementById("effect").style.visibility = "visible";
                        document.getElementById("atk").style.visibility = "visible";
                        document.getElementById("def").style.visibility = "visible";
                        document.getElementById("lvl").style.visibility = "visible";
                        document.getElementById("attribute").style.visibility = "visible";
                        opt = añadirOpcion("Normal", "Normal");
                        effect.add(opt);
                        opt = añadirOpcion("Efecto", "Efecto");
                        effect.add(opt);
                        opt = añadirOpcion("Fusion", "Fusion");
                        effect.add(opt);
                        opt = añadirOpcion("Synchro", "Synchro");
                        effect.add(opt);
                        opt = añadirOpcion("XYZ", "XYZ");
                        effect.add(opt);
                        opt = añadirOpcion("Pendulo", "Pendulo");
                        effect.add(opt);
                        opt = añadirOpcion("Link", "Link");
                        effect.add(opt);
                        opt = añadirOpcion("Ritual", "Ritual");
                        effect.add(opt);

                        document.getElementById("type").innerHTML = "";

                        opt = añadirOpcion("Aqua", "Aqua");
                        type.add(opt);
                        opt = añadirOpcion("Beast", "Beast");
                        type.add(opt);
                        opt = añadirOpcion("Beast_Warrior", "Beast_Warrior");
                        type.add(opt);
                        opt = añadirOpcion("Cyberse", "Cyberse");
                        type.add(opt);
                        opt = añadirOpcion("Dinosaur", "Dinosaur");
                        type.add(opt);
                        opt = añadirOpcion("Dragon", "Dragon");
                        type.add(opt);
                        opt = añadirOpcion("Fairy", "Fairy");
                        type.add(opt);
                        opt = añadirOpcion("Fiend", "Fiend");
                        type.add(opt);
                        opt = añadirOpcion("Fish", "Fish");
                        type.add(opt);
                        opt = añadirOpcion("Insect", "Insect");
                        type.add(opt);
                        opt = añadirOpcion("Machine", "Machine");
                        type.add(opt);
                        opt = añadirOpcion("Plant", "Plant");
                        type.add(opt);
                        opt = añadirOpcion("Psychic", "Psychic");
                        type.add(opt);
                        opt = añadirOpcion("Pyro", "Pyro");
                        type.add(opt);
                        opt = añadirOpcion("Reptile", "Reptile");
                        type.add(opt);
                        opt = añadirOpcion("Rock", "Rock");
                        type.add(opt);
                        opt = añadirOpcion("Sea_Serpent", "Sea_Serpent");
                        type.add(opt);
                        opt = añadirOpcion("Spellcaster", "Spellcaster");
                        type.add(opt);
                        opt = añadirOpcion("Thunder", "Thunder");
                        type.add(opt);
                        opt = añadirOpcion("Warrior", "Warrior");
                        type.add(opt);
                        opt = añadirOpcion("Winged_Beast", "Winged_Beast");
                        type.add(opt);
                        opt = añadirOpcion("Wyrm", "Wyrm");
                        type.add(opt);
                        opt = añadirOpcion("Zombie", "Zombie");
                        type.add(opt);

                        opt = añadirOpcion("Luz", "Luz");
                        attribute.add(opt);
                        opt = añadirOpcion("Oscuridad", "Oscuridad");
                        attribute.add(opt);
                        opt = añadirOpcion("Agua", "Agua");
                        attribute.add(opt);
                        opt = añadirOpcion("Fuego", "Fuego");
                        attribute.add(opt);
                        opt = añadirOpcion("Viento", "Viento");
                        attribute.add(opt);
                        opt = añadirOpcion("Tierra", "Tierra");
                        attribute.add(opt);

                        ocultarMostrarLabels(".hidden", "show");
                        

                    }
                    else if(s == "spell"){
                        document.getElementById("effect").style.visibility = "hidden";
                        document.getElementById("atk").style.visibility = "hidden";
                        document.getElementById("def").style.visibility = "hidden";
                        document.getElementById("lvl").style.visibility = "hidden";
                        document.getElementById("attribute").style.visibility = "hidden";
                        document.getElementById("type").innerHTML = "";
                        opt = añadirOpcion("Normal", "Normal");
                        type.add(opt);
                        opt = añadirOpcion("Quick", "Quick");
                        type.add(opt);
                        opt = añadirOpcion("Ritual", "Ritual");
                        type.add(opt);
                        opt = añadirOpcion("Continous", "Continous");
                        type.add(opt);
                        opt = añadirOpcion("Field", "Field");
                        type.add(opt);
                        opt = añadirOpcion("Equip", "Equip");
                        type.add(opt);
                        ocultarMostrarLabels(".show", "hidden");
                    }
                    else if(s == "trap"){
                        document.getElementById("effect").style.visibility = "hidden";
                        document.getElementById("atk").style.visibility = "hidden";
                        document.getElementById("def").style.visibility = "hidden";
                        document.getElementById("lvl").style.visibility = "hidden";
                        document.getElementById("attribute").style.visibility = "hidden";
                        document.getElementById("type").innerHTML = "";
                        opt = añadirOpcion("Normal", "Normal");
                        type.add(opt);
                        opt = añadirOpcion("Continous", "Continous");
                        type.add(opt);
                        opt = añadirOpcion("Counter", "Counter");
                        type.add(opt);
                        ocultarMostrarLabels(".show", "hidden");
                    }
                }
        </script>
<script src="../cardType.js"></script>