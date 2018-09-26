<?php
    class ConexionBaseDatos{
        

        public function ComprobarConexion(){
            echo "<p>Hola Mundo</p>";
            $conexionBaseDatos = mysqli_connect('localhost','alvaro','alvaro','HeroesRegistrados',3306);
            if(!$conexionBaseDatos){
                echo "<p>No se pudo conectar a la base de datos" . mysqli_error() . "</p>";
            }
            echo "<p>Conexion exitosa</p>";
            
        }

        public function ComprobacionDatosHeroes(){
            $nombreHeroe;
            $poderHeroe;
            $detallesHeroe;
            $universoHeroe;
            $heroeRegistrado = new Heroes($nombreHeroe,$poderHeroe,$detallesHeroe,$universoHeroe);
            echo "<p>" . $nombreHeroe . "</p><br/>";
        }
        
        public function CerrarConexion(){
            mysqli_close();
        }
        
    }
    
?>