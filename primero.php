
<?php
    include 'ConjuntoHeroes.php';
    #print "Hola mundo";
    class Heroes extends ConjuntoHeroes
    {

        public function __construct($nombreHeroe, $poderHeroe, $descripcionHeroe, $universoHeroe){
            $this->nombreHeroe=$nombreHeroe;
            $this->poderHeroe=$poderHeroe;
            $this->descripcionHeroe=$descripcionHeroe;
            $this->universoHeroe=$universoHeroe;
        }

        public function __get($propiedad){
            if(property_exists($this, $propiedad)){
                return $this->$propiedad;
            }
        }

        public function __set($propiedad2, $valor){
            if(property_exists($this, $propiedad)){
                $this->$property=$valor;
            }
            return $this;
        }

        public function ComprobacionUniversoPerteneciente($universoHeroe){
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