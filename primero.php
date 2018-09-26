
<?php
    include 'ConjuntoHeroes.php';
    #print "Hola mundo";
    class Heroes extends ConjuntoHeroes
    {
        /*Constructor heredado de la clase ConjuntoHeroes*/
        public function __construct($nombreHeroe, $poderHeroe, $detallesHeroe, $universoHeroe){
            $this->nombreHeroe=$nombreHeroe;
            $this->poderHeroe=$poderHeroe;
            $this->detallesHeroe=$detallesHeroe;
            $this->universoHeroe=$universoHeroe;
        }
        /*Getter general*/
        public function __get($propiedad){
            if(property_exists($this, $propiedad)){
                return $this->$propiedad;
            }
        }
        /*Setter general*/
        public function __set($propiedad2, $valor){
            if(property_exists($this, $propiedad2)){
                $this->$property=$valor;
            }
            return $this;
        }
        /*Esta funcion*/
        public function ComprobacionUniversoPerteneciente($universoHeroe){
            if($universoHeroe == "dc"){
                echo "<p>Este personaje pertenece al universo DC</p>";
            } elseif ($universoHeroe == "marvel"){
                echo "<p>Este personaje pertenece al universo Marvel</p>";
            }else{
                echo "<p>Este personaje pertenece a cualquier universo diferente</p>";
            }
        }

    }
    
?>