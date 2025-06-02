<?php
    /* La expresion regular es una cadena, debe estar limitado con caracteres no alfanumericos.
        meta-caracteres:
        -el caracter ^ busca al inicio de la cadena /^mundo/
        -el caracter $ busca al final de la cadena /mundo$/
        -todas las expresiones regulares son sensibles a mayusculas/minusculas, el modificador i hace insensible la expresion /mundo/i
        -el caracter [] almacena una lista de caracteres que puede tener el texto:
            /c[a-u]mo/ la palabra como, su segunda letra puede tener una letra desde la a hasta la d
            /c[^a-d]mo/ hace una lista de negacion de caracteres para la segunda letra en como
        -el caracter . hace referencia a cualquier caracer (numeros, vocales, no alfanumericos) /com./
        -el caracter \w busca solo caracteres alfanumericos y guion bajo /com\w/
        -el caracter \W busca solo caracteres no alfanumericos /com\W/
        -el caracter \d busca solo numeros /com\d/
        -el caracter \D busca solo caracteres no numericos /com\D/
        -el caracter * permite que el caracter se repita 0-n veces 
        -el caracter + permite que el caracter se repita 1-n veces /como+/
        -el caracter {n} aparecen exactamente n veces, {n-m} aparecen como mínimo n veces y como máximo m veces /como{1,2}/
        -el caracter ? condiciona que los caracteres a la izquierda pueden estar, pero los caracteres a la derecha deben coincidir /co?mo/
        -el caracter () ayuda a poner subpatrones, se cumpla una u otra condicion /(est|and)amos/
            la variable $matches en la funcion preg_match() crea un array para almacenar la condicion cumplida en el caracter ()
    */
    $cadena = "mundo como andamos";

    $expresion = "/(est|and)amos/";

    if(preg_match($expresion, $cadena)){
        echo "La cadena cumple la condicion";
    }else{
        echo "La cadena no cumple la condicion";
    }

    echo "<br>";
    //Comprobar si una URL es real, % es un limitador como /
    $url = "https://youtu.be/ifJWVBcNUS8?si=iwhOGdMJbFgQHAgi";
    $url2 = "https://www.youtube.com/watch?v=ifJWVBcNUS8&t=19s";
    
    $patron = '%^(https://)?(www\.)?(youtu\.be/|youtube\.com/(watch\?v=|embed/|shorts/|live/))([\w-]{11})(?:[?&][^\s#]*)?$%';

    if (preg_match($patron, $url2)) {
        echo "El URL es correcto";
    }else {
        echo "El URL es incorrecto";
    }