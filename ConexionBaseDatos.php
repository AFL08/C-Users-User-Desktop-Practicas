<?php
    class ConexionBaseDatos{
        private $nombreHeroe;
        private $poderHeroe;
        private $detallesHeroe;
        private $universoHeroe;
        

        public function ComprobarConexion(){
            echo "<p>Hola Mundo</p>";
            $conexionBaseDatos = mysqli_connect('localhost','alvaro','alvaro','HeroesRegistrados',3306);
            if(!$conexionBaseDatos){
                echo "<p>No se pudo conectar a la base de datos" . mysqli_error() . "</p>";
            }
            echo "<p>Conexion exitosa</p>";
            
        }
        
        public function CerrarConexion(){
            mysqli_close();
        }
        
    }
    
?>