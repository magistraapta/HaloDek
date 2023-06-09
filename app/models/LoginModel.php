<?php 

class LoginModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function checkLogin($data){
        $query = "SELECT * FROM user WHERE email = :email AND password = :password";
		$this->db->query($query);
		$this->db->bind('email', $data['email']);
		$this->db->bind('password', md5($data['password']));
		//$this->db->execute();
		//return $this->db->rowCount();
		$data =  $this->db->single();
		return $data;
    }

    public function checkAdminLogin($data){
        $query = "SELECT * FROM admin WHERE name = :name AND password = :password";
		$this->db->query($query);
		$this->db->bind('name', $data['name']);
		$this->db->bind('password', $data['password']);
		//$this->db->execute();
		//return $this->db->rowCount();
		$data =  $this->db->single();
		return $data;
    }


}