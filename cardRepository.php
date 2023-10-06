<?php
    function getCardlist(){
        $conn = mysqli_connect('localhost', 'root', '', 'cards') or die("Connection Failed: ".mysqli_connect_error());
        $sql = "CREATE TABLE IF NOT EXISTS `cards` (
            `Cardname` varchar(100) NOT NULL, `Cardtype` varchar(100) NOT NULL, `Type` varchar(100) NOT NULL, `Effect` varchar(100) NOT NULL, `Attribute` varchar(100) NOT NULL, `Atk` int(6) NOT NULL, `Def` varchar(6) NOT NULL, `Lvl` varchar(2) NOT NULL, `Img` varchar(600) NOT NULL, `Cardtext` varchar(100) NOT NULL, `Limit` int(1) NOT NULL)";
        $query = mysqli_query($conn, $sql);
        $sql = ("SELECT * FROM `cards`");
        $query = mysqli_query($conn, $sql);
        return $query;
        }

        function pasarAArray($row, $array){
            $card = new Card($row['Cardname'], $row['Cardtype'], $row['Type'], $row['Effect'], $row['Attribute'], $row['Atk'], $row['Def'], $row['Lvl'], $row['Img'] , $row['Cardtext'], $row['Limit']);
            array_push($array, $card);
            return $array;
        }
    
        function arrayLista(){
            $DBtable = getCardList();
                $tableLenght = mysqli_num_rows($DBtable);
                if($tableLenght > 0){
                    $cardArray = [];
                    while($row = mysqli_fetch_assoc($DBtable)){
                        $cardArray = pasarAArray($row, $cardArray);
                    }
                }
    
                return $cardArray;
        }

        function defineClass($card){
            if($card->getCardtype() == "monster"){
                return $card->getEffect();
            }
            else{
                return $card->getCardtype();
            }
        }
?>