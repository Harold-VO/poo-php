<?php
    class MyClass{
        public $public = "Public";
        protected $protected = "Protected";
        private $private = "Private";

        //Cuando no se define el encapsulamiento del metodo, por defecto es public
        function printHello(){
            echo $this->public . "<br>";
            echo $this->protected . "<br>";
            echo $this->private . "<br>";
        }
    }

    $objeto = new MyClass;
    
    //Es por ello que imprime las variables protected y private
    echo $objeto->printHello();
    
    /* Cuando se quiere acceder directamente a una variable protected/private marca error
    echo $objeto->protected; */

    class MyClass2 extends MyClass{
        function printHello(){
            echo $this->public . "<br>";
            echo $this->protected . "<br>";
            // echo $this->private . "<br>";
        }
    }

    echo "<br>";
    //Al extender MyClass2 de MyClass, la variable public y protected pueden utilizarse por la herencia, private no porque pertenece solo a la clase Padre.
    $objeto2 = new MyClass2;
    $objeto2->printHello();