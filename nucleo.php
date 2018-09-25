<?php
    private $nombreHeroe;
    private $poderHeroe;
    private $descripcionHeroe;
    private $universoHeroe;
    $heroeRegistrado = new Heroe($nombreHeroe,$poderHeroe,$descripcionHeroe,$universoHeroe);

    /*$heroeRegistrado->array([return]->array([0]->array([$nombreHeroe] = "Iron Man" ->[$poderHeroe] = "Fuerza y Vuelo" -> [$descripcionHeroe]
     = "Multimillonario, Prodigio creando armas, Con la armadura puede destruir cualquier cosa y consigue reponerse a cualquier problema con demasiada facilidad"
      -> [$universoHeroe] = "Marvel")[1] -> array([$nombreHeroe] = "Spider-man" -> [$poderHeroe] = "Sentido arácnido, Fuerza, Lanza telarañas"-> [$descripcionHeroe]
      = "Superheroe joven, sale de los problemas con bastante facilidad, derrota tambien a los enemigos, sin muchos problemas, aunque en ocasiones comete errores"
       -> [$universoHeroe] = "Marvel")));*/

    $heroeRegistrado = new Heroe("Iron Man","Fuerza y Vuelo"
    ,"Multimillonario, Prodigio creando armas, Con la armadura puede destruir cualquier cosa y consigue reponerse a cualquier problema"
    ,"Marvel");
    
    /*$heroeTotalmenteIdentificado = new Heroe('Iron Man','Fuerza y Vuelo'
   ,'Multimillonario, prodigio de las armas',1990,'Marvel');
   $heroeTotalmenteIdentificado = new Heroe('Iron Man','Fuerza y Vuelo'
   ,'Multimillonario, prodigio de las armas',1990,'Marvel');
   
    /*for($i=0;$i<count($heroeTotalmenteIdentificado);$i++){
        echo "<h1>$heroeIdentificado[$i]->getValorNombreHeroe()</h1>";
    }*/
    
    /*foreach($heroeTotalmenteIdentificado as $hero){
        #echo sprintf("<h1>%s</h1>",$hero->nombre);
        echo "<h1>".$hero."</h1></br>";
    }*/

?>