<?php 

class Admin extends Controller{
    public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			// Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. BASEURL . '/login/admin');
			exit;
		}
	} 
    public function index(){
        $data['title'] = "halaman admin";
        // $data['nama'] = $this->model('User_model')->getNama();
        $this->view('templates/adminHeader', $data);
        $this->view('admin/index', $data);
        $this->view('templates/adminFooter', );
    }
    public function tambah(){
        $data['title'] = "halaman tambah";
        // $data['nama'] = $this->model('User_model')->getNama();
        $this->view('templates/adminHeader', $data);
        $this->view('admin/createDokter', $data);
        $this->view('templates/adminFooter', );
    }


    public function simpanDokter(){		

		if( $this->model('DokterModel')->tambahDokter($_POST) > 0 ) {
			// Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/admin/dokter');
			exit;			
		}
	}

    public function dokter(){
        $data['title'] = "halaman dokter";
        $data['dokter'] = $this->model('DokterModel')->getAllDokter();
        $this->view('templates/adminHeader', $data);
        $this->view('admin/dokter', $data);
        $this->view('templates/adminFooter', ); 
    }

    public function hapus($id){
		if( $this->model('DokterModel')->deleteDokter($id) > 0 ) {
			// Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. BASEURL . '/admin/dokter');
			exit;			
		}else{
			// Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. BASEURL . '/admin/dokter');
			exit;	
		}
	}

    public function edit($id)
    {
        $data['title'] = "edit dokter";
        // $data['nama'] = $this->model('User_model')->getNama();
        $data['dokter'] = $this->model('DokterModel')->getDokterById($id);
        $this->view('templates/header', $data);
        $this->view('admin/editDokter', $data);
        $this->view('templates/footer', $data);
    }

    public function updateDokter(){	
		if( $this->model('DokterModel')->updateDataDokter($_POST) > 0 ) {
			// Flasher::setMessage('Berhasil','diupdate','success');
            // echo 'success';
			header('location: '. BASEURL . '/admin/dokter');
			exit;			
		}else{
			// Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. BASEURL . '/admin/dokter');
            // echo 'error';
            // var_dump($_POST);
			exit;	
		}
	}
}