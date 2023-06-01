<?php 

class UserModel{
    private $table = "user";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllUser(){
        $this->db->query("SELECT * FROM " . $this->table );
		return $this->db->resultSet();
    }


    public function tambahUser($data)
	{
		$query = "INSERT INTO user (username,email,password) VALUES(:username,:email,:password)";
		$this->db->query($query);
		$this->db->bind('username',$data['username']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('password', md5($data['password']));
		$this->db->execute();

		return $this->db->rowCount();
	}
}