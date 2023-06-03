<?php 

class AppointmentModel{
    private $table = "appointment";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function makeAppointment($data){
        $query = 'INSERT INTO appointment (user_id, dokter_id) VALUES (:user_id, :dokter_id)';
        $this->db->query($query);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('dokter_id', $data['dokter_id']);
        $this->db->execute();

        $this->db->rowCount();
    }
}