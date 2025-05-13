<?php
    abstract class ClaseAbstracta
    {
        abstract protected function getValor();
        abstract public function valorPrefijo($prefijo);

        //El metodo al no ser abstract, no es necesario declararlo en la clase que extiende la presente clase
        public function imprimir(){
            echo $this->getValor();
        }
    }

    //Las clases abstractas pueden ser extendidas por otras clases
    class ClaseConcreta extends ClaseAbstracta
    {
        //Los metodos abstractos deben declararse
        protected function getValor()
        {
            return "Clase concreta";
        }

        public function valorPrefijo($prefijo)
        {
            return $prefijo . "Clase concreta";
        }
    }

    //IMPORTANTE: las clases abstractas NO se deben instanciar
    $clase = new ClaseConcreta;
    $clase->imprimir();
    echo "<br>" . $clase->valorPrefijo("Prefijo de ");