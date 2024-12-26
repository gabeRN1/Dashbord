<?php

require_once '../core/Controller.php';
require_once 'E:\Downloads\Xamp\htdocs\Dashbord\app\models\UserModel.php';
require_once 'E:\Downloads\Xamp\htdocs\Dashbord\app\models\model.php';

class RegisterController extends Controller {
    
    private $UserModel;

    public function __construct() {
        $this->UserModel = new UserModel(); 
    }

    public function index() {
        
        $this->view('registro/register');  
        
    }
   
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $_POST['user']; 
            $email = $_POST['email_register']; 
            $password = $_POST['register_password']; 
            $confirmPassword = $_POST['confirm_password']; 

           
            $result = $this->UserModel->registerUser($user, $email, $password, $confirmPassword);

            if ($result) {
                echo "Usuário registrado com sucesso!";
                
            } else {
                echo "Erro ao registrar o usuário. Verifique se o usuário já existe ou se as senhas não coincidem.";
            }
        } else {
            echo "Método não permitido.";
        }
    }
}
