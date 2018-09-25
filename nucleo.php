<html>
<head>
    <title>Pagina Creada</title>
</head>
<body>
<?php

        $heroeRegistrado = new Heroes("Iron Man","Fuerza y Vuelo"
        ,"Multimillonario, Prodigio creando armas, Con la armadura puede destruir cualquier cosa y consigue reponerse a cualquier problema"
        ,"Marvel");

        foreach($heroeRegistrado as $hero){
            echo "<h1>" . $hero . "</h1><br/>";
        }
?>
</body>
</html>