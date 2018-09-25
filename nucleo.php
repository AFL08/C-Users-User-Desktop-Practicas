<html>
<head>
    <title>Pagina Creada</title>
</head>
<body>
<?php
    include 'primero.php';

        $IronMan = new Heroes("Iron Man","Fuerza y Vuelo"
        ,"Multimillonario, Prodigio creando armas, Con la armadura puede destruir cualquier cosa y consigue reponerse a cualquier problema"
        ,"Marvel");
        
        $Spiderman = new Heroes("Spider-Man","Vuelo, Fuerza y Resistencia"
        ,"Telarañas"
        ,"Marvel");

        $heroeRegistrado->array($IronMan,$Spiderman);

        foreach($heroeRegistrado as $hero){
            echo "<p>" . $hero . "</p><br/>";
        }
?>
</body>
</html>