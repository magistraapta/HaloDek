<?php 

class Detail extends Controller{
    public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			// Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. BASEURL . '/login/admin');
			exit;
		}
	} 
    public function index(){
        $data['title'] = "halaman detail";
        $this->view('templates/header', $data);
        $this->view('detail/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id){
        $data['title'] = "halaman detail";
        $data['dokter'] =$this->model('dokter')->getDokterById($id);
        $data['user'] = $this->model('UserModel')->getAllUser();
        $this->view('templates/header', $data);
        $this->view('detail/detail', $data);
        $this->view('templates/footer', $data); 
    }

   
}