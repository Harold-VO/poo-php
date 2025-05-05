<?php
    //Importar la clase a utilizar
    require_once('clases/Persona.php');

    $persona1 = new Persona();
    $persona1->setApellido("guerrero", "lopez");
    echo "Los apellidos de la clase Persona son, " .$persona1->getApellido();

    echo "<br>";
    $persona2 = new Mexicano();
    $persona2->setApellido("dominguez", "benites");
    echo "<br>";
    echo $persona2->getApellido();

    $persona3 = new Americano();

    echo "<br>";
    /* La clase padre, Persona, tiene los cuatro atributos declarados.
        Mientras que las clases hija, Mexicano y Americano, tambien tienen los atributos de la clase padre, mas los declarados internamente */
    var_dump($persona1);
    echo "<br>";
    var_dump($persona2);
    echo "<br>";
    var_dump($persona3);