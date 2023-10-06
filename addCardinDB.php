<?php
    require_once('Models/Cards.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $conn = mysqli_connect('localhost', 'root', '', 'cards') or die("Connection Failed: ".mysqli_connect_error());
            $sql = "CREATE DATABASE IF NOT EXISTS cards";
            $query = mysqli_query($conn, $sql);
            $sql = "CREATE TABLE IF NOT EXISTS `cards` (
                `Cardname` varchar(100) NOT NULL, `Cardtype` varchar(100) NOT NULL, `Type` varchar(100) NOT NULL, `Effect` varchar(100) NOT NULL, `Attribute` varchar(100) NOT NULL, `Atk` int(6) NOT NULL, `Def` varchar(6) NOT NULL, `Lvl` varchar(2) NOT NULL, `Img` varchar(600) NOT NULL, `Cardtext` varchar(100) NOT NULL, `Limit` int(1) NOT NULL)";
            $query = mysqli_query($conn, $sql);
            

            if(isset($_POST['cardname']) && isset($_POST['cardtype']) && isset($_POST['img']) && isset($_POST['type']) && isset($_POST['cardtext'])){
                $card = new Card($_POST['cardname'], $_POST['cardtype'], $_POST['type'], $_POST['effect'], $_POST['attribute'], $_POST['atk'], $_POST['def'], $_POST['lvl'], $_POST['img'], $_POST['cardtext'], $_POST['limit']);

                $cardInDB = ("SELECT `Cardname` FROM `cards` WHERE Cardname = '".$card->getName()."'");
                $CDBresult = $conn->query($cardInDB);
                
                if(mysqli_num_rows($CDBresult) != 0){
                    ?> 
                    <meta http-equiv="refresh" content="0; 'Views/addCardPage.php'" />
                    <script>alert("La carta ya existe en el sistema")</script> <?php
                }
                else {
                    if($card->getCardtype() == "monster"){
 
                                $sql = "INSERT INTO `cards` (`Cardname`, `Cardtype`, `Type`, `Effect`, `Attribute`, `Atk`, `Def`, `Lvl`, `Img`, `Cardtext`, `limit`) VALUES ('".$card->getName()."', '".$card->getCardtype()."', '".$card->getType()."', '".$card->getEffect()."', '".$card->getAttribute()."', '".$card->getAtk()."', '".$card->getDef()."', '".$card->getLvl()."', '".$card->getImg()."', '".$card->getText()."', '".$card->getLimit()."')";
                                $query = mysqli_query($conn, $sql); ?>
                                <meta http-equiv="refresh" content="0; 'Views/adminPage.php'" />
                                <script>alert("Carta agregada correctamente")</script>
                    <?php
                    }
                    else{
                        $sql = "INSERT INTO `cards` (`Cardname`, `Cardtype`, `Type`, `Img`, `Cardtext`, `limit`) VALUES ('".$card->getName()."', '".$card->getCardtype()."', '".$card->getType()."', '".$card->getImg()."', '".$card->getText()."', '".$card->getLimit()."')";
                        $query = mysqli_query($conn, $sql); ?>
                        <meta http-equiv="refresh" content="0; 'Views/adminPage.php'" />
                        
                        <script>alert("Carta agregada correctamente")</script>
                    <?php
                    } 
                }

            }
            else{
                ?><script>alert("Por favor complete todos los campos")</script> <?php
            }
        }
        ?>