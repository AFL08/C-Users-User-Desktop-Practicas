
<?php

    #print "Hola mundo";
    class Heroes
    {
        public $nombreHeroe;
        public $poderHeroe;
        public $descripcionHeroe;
        public $universoHeroe;

        

        public function __construct($nombreHeroe, $poderHeroe, $descripcionHeroe, $universoHeroe){
            $this->nombreHeroe=$nombreHeroe;
            $this->poderHeroe=$poderHeroe;
            $this->descripcionHeroe=$descripcionHeroe;
            $this->universoHeroe=$universoHeroe;
        }

        public function ComprobacionUniversoPerteneciente(){
            if($univeroHeroe == "DC"){
                echo "<p>Este personaje pertenece al universo DC</p>";
            } elseif ($universoHeroe == "Marvel"){
                echo "<p>Este personaje pertenece al universo Marvel</p>";
            }else{
                echo "<p>Este personaje pertenece a cualquier universo diferente</p>";
            }
        }

    }
    
?>