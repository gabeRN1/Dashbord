<?php
class Model {
    protected $db;
    public function __construct(){
        $this->db = new mysqli('localhost', 'root' , '', 'login_system');
        if($this->db->connect_error) {
            die("Conexão falhou: ". $this->db->connect_error);
        }
    }
}