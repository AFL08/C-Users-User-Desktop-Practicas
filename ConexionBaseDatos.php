<?php
    class ConexionBaseDatos{
        
        public function ComprobarConexion(){
            echo "<p>Hola Mundo</p>";
            $conexionBaseDatos = mysql_connect("localhost","alvaro","alvaro");
            if(!$conexionBaseDatos){
                die("No se pudo conectar a la base de datos" . mysql_error());
            }
            echo '<p>Conexion exitosa</p>';
            mysql_close();
        }
        
        
    }
    
?>