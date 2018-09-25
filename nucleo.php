<html>
<head>
    <title>Pagina Creada</title>
</head>
<body>
<?php
    include 'primero.php';

        $heroeRegistrado = new Heroes("Iron Man","Fuerza y Vuelo"
        ,"Multimillonario, Prodigio creando armas, Con la armadura puede destruir cualquier cosa y consigue reponerse a cualquier problema"
        ,"Marvel");
        
        $heroeRegistrado = new Heroes("Spider-Man","Vuelo, Fuerza y Resistencia"
        ,"Telarañas"
        ,"Marvel");

        foreach($heroeRegistrado as $hero){
            echo "<p>" . $hero . "</p><br/>";
        }
?>
</body>
</html>