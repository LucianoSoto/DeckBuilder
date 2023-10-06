<?php
    class Card{

        private $name;
        private $cardtype;
        private $type;
        private $effect;
        private $attribute;
        private $atk;
        private $def;
        private $lvl;
        private $img;
        private $text;
        private $limit;

        public function __construct($name, $cardtype, $type, $effect, $attribute, $atk, $def, $lvl, $img, $text, $limit) {
            $this->name = $name;
            $this->cardtype = $cardtype;
            $this->type = $type;
            $this->effect = $effect;
            $this->attibute = $attribute;
            $this->atk = $atk;
            $this->def = $def;
            $this->lvl = $lvl;
            $this->img = $img;
            $this->text = $text;
            $this->limit = $limit;
        }

        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }

        public function setCardtype($cardtype){
            $this->cardtype = $cardtype;
        }
        public function getCardtype(){
            return $this->cardtype;
        }

        public function setType($type){
            $this->type = $type;
        }
        public function getType(){
            return $this->type;
        }

        public function setEffect($effect){
            $this->effect = $effect;
        }
        public function getEffect(){
            return $this->effect;
        }

        public function setAttribute($attribute){
            $this->attribute = $attribute;
        }
        public function getAttribute(){
            return $this->attribute;
        }

        public function setAtk($atk){
            $this->atk = $atk;
        }
        public function getAtk(){
            return $this->atk;
        }

        public function setDef($def){
            $this->def = $def;
        }
        public function getDef(){
            return $this->def;
        }

        public function setLvl($lvl){
            $this->lvl = $lvl;
        }
        public function getLvl(){
            return $this->lvl;
        }

        public function setImg($img){
            $this->img = $img;
        }
        public function getImg(){
            return $this->img;
        }

        public function setText($text){
            $this->text = $text;
        }
        public function getText(){
            return $this->text;
        }
        public function setLimit($limit){
            $this->limit = $limit;
        }
        public function getLimit(){
            return $this->limit;
        }

        public function toJSON($type){
            if($type == "monster"){
                $json = array(
                    "Name" => $this->name,
                    "Cardtype" => $this->cardtype,
                    "MonsterType" => $this->type,
                    "MonsterClass" => $this->effect,
                    "Attribute" => $this->attribute,
                    "ATK" => $this->atk,
                    "DEF" => $this->def,
                    "LVL" => $this->lvl,
                    "Img" => $this->img,
                    "Text" => $this->text,
                    "Limit" => $this->limit
                );
                return json_encode($json);
            }
            else{
                $json = array(
                    "Name" => $this->name,
                    "Cardtype" => $this->cardtype,
                    "Type" => $this->type,
                    "Img" => $this->img,
                    "Text" => $this->text,
                    "Limit" => $this->limit
                );
                return json_encode($json);
            }
        }
    }

?>