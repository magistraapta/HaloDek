<?php 

class DokterModel{
    private $table = "dokter";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllDokter(){
        $this->db->query("SELECT * FROM " . $this->table );
		return $this->db->resultSet();
    }

    public function getDokterById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
    }

    public function tambahDokter($data)
	{
		$query = "INSERT INTO dokter (nama,spesialis,deskripsi,harga) VALUES(:nama,:spesialis,:deskripsi,:harga)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('spesialis',$data['spesialis']);
		$this->db->bind('deskripsi',$data['deskripsi']);
		$this->db->bind('harga', $data['harga']);
		$this->db->execute();

		return $this->db->rowCount();
	}

    public function deleteDokter($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

    public function updateDataDokter($data)
	{
		$query = "UPDATE dokter SET nama=:nama, spesialis=:spesialis, deskripsi=:deskripsi, harga=:harga WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('spesialis', $data['spesialis']);
		$this->db->bind('deskripsi', $data['deskripsi']);
		$this->db->bind('harga', $data['harga']);
		$this->db->execute();

		return $this->db->rowCount();
	}
}