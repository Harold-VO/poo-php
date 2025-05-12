<?php
    //Las interfaces se definen solo nombre, y los metodos solo especifican los parametros.
    interface operacionesInversas{
        function raiz(float $numero):float;
        function potencia(int $numero, int $potencia):int;
    }

    //Una interfaz puede extender de otra utilizanod extends. 
    interface operacionesBasicas extends operacionesInversas{
        function suma(int $numero1, int $numero2):int;
    }

    //Para que la clase implemente una interfaz, se utiliza la palabra implements, el nombre de la interfaz y los metodos definidos en esta
    class Resultado implements operacionesBasicas{
        function raiz(float $numero): float
        {
            $resultado = sqrt($numero);
            return $resultado;
        }

        function potencia(int $numero, int $potencia): int
        {
            $resultado = pow($numero,$potencia);
            return $resultado;
        }

        function suma(int $numero1, int $numero2): int
        {
            $resultado = $numero1 + $numero2;
            return $resultado;
        }
    }

    $objeto1 = new Resultado;
    echo $objeto1->raiz(121);
    echo "<br>";
    echo $objeto1->potencia(5, 3);
    echo "<br>";
    echo $objeto1->suma(1,2);
