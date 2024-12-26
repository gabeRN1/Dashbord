<?php
class Controller {
  
    public function model($model) {
      
        $modelPath = "../app/models/{$model}.php";

  
        if (file_exists($modelPath)) {
            require_once $modelPath;  
            return new $model();  
        } else {
          
            throw new Exception("Modelo {$model} não encontrado.");
        }
    }

  
    public function view($view, $data = []) {
    
        $viewPath = "../app/views/{$view}.php";  
    
     
        if (!empty($data)) {
            extract($data); 
        }
    
        if (file_exists($viewPath)) {
            require_once $viewPath; 
        } else {
          
            throw new Exception("View {$view} não encontrada. Caminho: {$viewPath}");
        }
    }
}    
