
<?php
    include 'ConjuntoHeroes.php';
    #print "Hola mundo";
    class Heroes 
    {
        

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