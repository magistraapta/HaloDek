<?php 

class AppointmentModel{
    private $table = "appointment";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAppointment(){
        $this->db->query("SELECT * FROM " . $this->table );
		return $this->db->resultSet();
    }

    public function getAppointmentId($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
    }

    public function makeAppointment($data){
        $query = 'INSERT INTO appointment (user_id, dokter_id, date) VALUES (:user_id, :dokter_id, :date)';
        $this->db->query($query);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('dokter_id', $data['dokter_id']);
        $this->db->bind('date', $data['date']);
        $this->db->execute();

        $this->db->rowCount();
    }

    public function delete($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

    
}