<?php 
   //Clase controlador principal
   // Se encarga de poder cargar los modelos y vistas

   class Controller{

      //Cargar modelo

      public function modelo($modelo){
         //carga
         require_once '../app/models/'. $modelo.'.php';
         // instanciar el modelo
         return new $modelo();
      }
      // Cargar vista 
      public function vista($vista, $datos =[]){
         //chequear si existe el archivo vista
         if (file_exists('../app/views/'.$vista.'.php')){
             require_once '../app/views/'.$vista.'.php';
         }else{
            //Si el archivo de la vista no existe
            die("La vista no existe");
         }
         
      }

   }
?>