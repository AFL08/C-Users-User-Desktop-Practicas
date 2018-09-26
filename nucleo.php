<html>
<head>
    <title>Pagina Creada</title>
</head>
<body>
    <!--<input type="textbox" name="nombreSuperheroe"/><br/>
    <input type="button" name="mostrarDatosHeroe"/><br/>-->

<?php
        include 'primero.php';
        $IronMan = new Heroes("Iron Man","Fuerza y Vuelo"
        ,"Multimillonario"
        ,"Marvel");
        $Spiderman = new Heroes("Spider-Man","Vuelo, Fuerza y Resistencia"
        ,"Telarañas"
        ,"Marvel");

        $heroeRegistrado = array($IronMan,$Spiderman);

        
        foreach($heroeRegistrado as $hero){
            #echo "<p>" . $hero . "</p><br/>";
            #if($heroeRegistrado=array($IronMan=array([]))
            var_dump($hero);
            #$hero->ComprobacionUniversoPerteneciente($hero->get_universoHeroe());
        }


?>


</body>
</html>