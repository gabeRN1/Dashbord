<?php
require_once 'E:\Downloads\Xamp\htdocs\Dashbord\app\models\model.php';
class UserModel extends Model {

    public static function create() {
        return new self(); // Retorna uma nova instância
    }


        public function verifyLogin($username, $password) {
            $stmt = $this->db->prepare("SELECT id, user, senha FROM users WHERE user = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $usuario = $result->fetch_assoc();
                if (password_verify($password, $usuario['senha'])) {
                    return $usuario;
            }
        }
 return false;
    }

    public function registerUser($user, $email_register, $register_pass, $confirm_pass) {
        $stmt = $this->db->prepare("SELECT id FROM users WHERE user = ? OR email = ? ");
        $stmt->bind_param("ss", $user, $email_register);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return false;
        }

        if ($register_pass !== $confirm_pass){
            return false;
        }


        $hashedPassword = password_hash($register_pass, PASSWORD_DEFAULT);

        $stmt = $this->db->prepare("INSERT INTO users (user, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $user, $email_register, $hashedPassword);

        return $stmt->execute();
    }
}
?>