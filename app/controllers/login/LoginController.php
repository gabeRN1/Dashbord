<?php
require_once '../core/Controller.php';  
class LoginController extends Controller {
    public function index(){
        require_once '../app/views/login/login_form.php';  
    }

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            
            $userModel = $this->model('UserModel');
            $user = $userModel->verifyLogin($username, $password);

            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['user']; 

                
                header('Location: /Dashbord/public/graphics');
                exit();
            } else {
                
                echo "Falha no login!";
            }
        } else {
            echo "Método não permitido.";
        }
    }
}