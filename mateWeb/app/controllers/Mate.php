<?php
    class Mate extends Controller{ // El nombre de clase debe coincidir con el nombre de Archivo
         
        public function __construct(){
            
        }

        public function index(){
            $this->vista('pages/inicioView');
        }

        
   }
   
?>