<?php
    class ConexionBaseDatos{
        
        public function ComprobarConexion(){
            echo "<p>Hola Mundo</p>";
            $conexionBaseDatos = mysql_connect("localhost","alvaro","alvaro");
            if(!$conexionBaseDatos){
                echo "<p>No se pudo conectar a la base de datos" . mysql_error() . "</p>";
            }
            echo '<p>Conexion exitosa</p>';
            mysql_close();
        }
        
        
    }
    
?>