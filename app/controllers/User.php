<?php 

class User extends Controller{
    public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			// Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. BASEURL . '/login');
			exit;
		}
	} 
    public function index()
    {
        $data['title'] = "halaman user";
        // $data['nama'] = $this->model('User_model')->getNama();
        $data['user'] = $this->model('UserModel')->getAllUser();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
		$data['title'] = 'Tambah User';		
		$this->view('user/create', $data);
	}

    public function create(){
        if ($this->model('UserModel')->tambahUser($_POST) > 0) {
            header('Location:'. BASEURL. '/login');
        }
    }
}