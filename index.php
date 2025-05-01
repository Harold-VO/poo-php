<?php
    //Importar la clase a utilizar
    require_once('clases/Persona.php');

    $persona1 = new Persona();

    $persona2 = new Mexicano();
    $persona2->setApellido("Dominguez", "BeniTes");

    $persona3 = new Americano();

    var_dump($persona1);
    echo "<br>";
    var_dump($persona2);
    echo "<br>";
    var_dump($persona3);