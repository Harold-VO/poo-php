<?php
    //Importamos/utilizamos las clases CourseController y Course
    use Controllers\CourseController;
    use Models\Course;

    /* El metodo spl_autoload_register carga automaticamente clases, interfaces si no estan definidas */
    spl_autoload_register(function ($clase){
        if(file_exists(str_replace('\\' , '/' , $clase) . '.php')){
            require_once (str_replace('\\' , '/' , $clase) . '.php');
        }
    });
    
    $ob1 = new CourseController;
    $ob1->saludar();

    echo "<br>";

    $ob2 = new Course;
    $ob2->saludar();