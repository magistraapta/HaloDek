<?php 

class Detail extends Controller{
    
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

   public function processAppointment(){
    if( $this->model('AppointmentModel')->makeAppointment($_POST) > 0 ) {
        // Flasher::setMessage('Berhasil','ditambahkan','success');
        // header('location: '. BASEURL . '/');
        var_dump($_POST);
        exit;			
    }else{
        // Flasher::setMessage('Gagal','ditambahkan','danger');
        // header('location: '. BASEURL . '/');
        var_dump($_POST);
        exit;	
    }
   }
}