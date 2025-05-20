<?php

    /* Especificamos que se quiere usar el namespace de Humano1 y Humano2.
        namespace \ clase 
        
        Se usa la palabra clave as para renombrar la clase Humano del namespace Humano2. Así evitar conflicto de nombre de clases*/
    use Humano1\Humano;
    use Humano2\Humano as Humano2;

    require_once('Carpeta1/Humano.php');
    require_once('Carpeta2/Humano.php');

    $hum = new Humano;
    $hum->saludar();

    echo "<br>";

    $hum2 = new Humano2;
    $hum2->saludar();