<html>
<head>
    <title>Pagina Creada</title>
</head>
<body>
    <input type="textbox" name="nombreSuperheroe"/><br/>
    <input type="button" name="mostrarDatosHeroe"/><br/>

<?php
    include 'primero.php';
        $nombreHeroe;
        $poderHeroe;
        $detallesHeroe;
        $universoHeroe;



        $superHeroe = new Heroes($nombreHeroe,$poderHeroe,$detallesHeroe,$universoHeroe);

        $IronMan = new Heroes("Iron Man","Fuerza y Vuelo"
        ,"Multimillonario, Prodigio creando armas, Con la armadura puede destruir cualquier cosa y consigue reponerse a cualquier problema"
        ,"Marvel");
        
        $Spiderman = new Heroes("Spider-Man","Vuelo, Fuerza y Resistencia"
        ,"Telarañas"
        ,"Marvel");

        $heroeRegistrado = array($IronMan,$Spiderman);

        foreach($heroeRegistrado=array(0) as $hero){
            #echo "<p>" . $hero . "</p><br/>";
            #if($heroeRegistrado=array($IronMan=array([]))
            var_dump($hero);
        }

?>


</body>
</html>