<?php
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use clases\Persona;
use clases\Estudiante;
use clases\Materias;
use clases\Profesor;
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
          // al crear un objeto le paso un array asociativo
          $objeto=new Persona([
                               "Nombre" => "alumno1",
                               "Edad" => 32,
                              ]);
          var_dump($objeto);
          //echo $objeto;
          
          $objetoEstudiante = new Estudiante([
              "Nombre"=> "alumno2",
              "Edad" => 50,
              "Notas" => [8,7,6],
              "Carrera" => "Carrera",
          ]);
          var_dump($objetoEstudiante);
          
          $estudiante2 = new Estudiante();
          var_dump($estudiante2);
          
          echo $objetoEstudiante;
          $objetoEstudiante->setNotas([2,3,4,5]);
          var_dump($objetoEstudiante);
          echo $objetoEstudiante->getNotas();
          
          $objetoMateria=new Materias([
              "Nombre" => "fisica",
              "Horas" => 25,
          ]);
          var_dump($objetoMateria);
          $objetoProfesor=new Profesor([
            "Nombre" => "Pepe",
            "Edad" => 56,
            "Materias" => [$objetoMateria],
            "Mes" => 10,
            "SueldoImporte" => 1200,
          ]);
          var_dump($objetoProfesor);
          $objetoProfesor->getMateria()[0]->setNombre("Lengua");
          var_dump($objetoMateria);
          var_dump($objetoProfesor);
          
          $objetoProfesora=new Profesor([
              "Nombre" => "Ana",
              "Edad" => 45,
              "Materias" => [new Materias(["Nombre" => "Ingles", "Horas" => 56])],
              "Mes" => 1,
              "SueldoImporte" => 3001,
          ]);
          var_dump($objetoProfesora);
          
          $mat = new Materias();
          var_dump($mat);
        ?>
    </body>
</html>
