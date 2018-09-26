<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Pagina Creada</title>
</head>
<body>
    <!--<input type="textbox" name="nombreSuperheroe"/><br/>
    <input type="button" name="mostrarDatosHeroe"/><br/>-->

<?php
        
        
        include 'primero.php';
        include 'ConexionBaseDatos.php';
        $IronMan = new Heroes("Iron Man","Fuerza y Vuelo"
        ,"Multimillonario"
        ,"marvel");
        $Spiderman = new Heroes("Spider-Man","Vuelo, Fuerza y Resistencia"
        ,"Telarañas"
        ,"marvel");

        $Batman = new Heroes("Batman","Vuelo, Fuerza, Batmovil","Tiene un puto batmovil","dc");

        /*fetch para recoger los datos de una base de datos*/

        $heroeRegistrado = array($IronMan,$Spiderman,$Batman);
        
        
        
        foreach($heroeRegistrado as $hero){
            
            #echo "<p>" . $hero . "</p><br/>";
            #if($heroeRegistrado=array($IronMan=array([]))
            ?>
            <div class="card" style="width: 25rem;">
            <!--<img class="card-img-top" src=".../100px180/" alt="Card image cap">-->
            <div class="card-body">
                <h2 class="card-title">Nombre de Superheroe: <?php echo $hero->nombreHeroe?></h2>
                <p class="card-text">Poder SuperHeroe: <?php echo $hero->poderHeroe?></p>
                <p class="card-text">Detalles SuperHeroe: <?php echo $hero->detallesHeroe?></p>
                <p class="card-text">Universo SuperHeroe: <?php echo $hero->ComprobacionUniversoPerteneciente($hero->universoHeroe)?></p>
                <img class="card-img-top" src="/Imagenes/<?php echo $hero->universoHeroe?>.png" alt="Card image cap" height="100px">
                
                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
            </div>
            </div>

            <?php
            $realizacionConexion = new ConexionBaseDatos();
            $realizacionConexion->ComprobarConexion();
            #var_dump($hero);
            mysqli_select_db("HeroesRegistrados");
            mysqli_query("INSERT INTO Heroe (nombre, poder, detalles, universo) values ('" . $hero->nombreHeroe . "','" . $hero->poderHeroe . "','" . $hero->detallesHeroe . "'
            ,'" . $hero->universoHeroe . "');");
            /*mysqli_query("SELECT * FROM Heroe;");
            echo*/ 
            
            $realizacionConexion->CerrarConexion();
            
        }

        
?>
</body>
</html>