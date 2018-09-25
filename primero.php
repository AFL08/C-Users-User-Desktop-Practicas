
<?php

    print "Hola mundo";
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
                echo "Este personaje pertenece al universo DC";
            } elseif ($universoHeroe == "Marvel"){
                echo "Este personaje pertenece al universo Marvel";
            }else{
                echo "Este personaje pertenece a cualquier universo diferente";
            }
        }

    }
    
?>