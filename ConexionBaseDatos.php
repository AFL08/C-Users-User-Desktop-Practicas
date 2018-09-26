<?php
    class ConexionBaseDatos{
        

        public function ComprobarConexion(){
            echo "<p>Hola Mundo</p>";
            $conexionBaseDatos = mysql_connect('192.168.1.144','alvaro','alvaro','HeroesRegistrados');
            /*if(!$conexionBaseDatos){
                echo "<p>No se pudo conectar a la base de datos" . mysql_error() . "</p>";
            }*/
            echo "<p>Conexion exitosa</p>";
            mysql_close();
        }
        
        
    }
    
?>