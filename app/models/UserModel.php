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

    public function getDokterById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
    }
}