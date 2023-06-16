<?php 

class Appointment extends Controller{
    public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			// Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. BASEURL . '/login');
			exit;
		}
	} 

    public function index(){
        $data['title'] = "daftar appointment";
        $data['appointment'] =$this->model('AppointmentModel')->getAllAppointment();
        $this->view('templates/adminHeader', $data);
        $this->view('admin/appointmentPage', $data);
        $this->view('templates/adminFooter', $data); 
    }
    
    public function processAppointment(){
    
        if( $this->model('AppointmentModel')->makeAppointment($_POST) > 0 ) {
            // Flasher::setMessage('Berhasil','ditambahkan','success');
            // var_dump($_POST);
            header('location: '. BASEURL . '/');
            
            exit;			
        }else{
            // Flasher::setMessage('Gagal','ditambahkan','danger');
            header('location: '. BASEURL . '/');
            // var_dump($_POST);
            exit;	
        }
    }

   
    

    public function hapus($id){
		if( $this->model('AppointmentModel')->delete($id) > 0 ) {
			// Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. BASEURL . '/appointment');
			exit;			
		}else{
			// Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. BASEURL . '/appointment');
			exit;	
		}
	}

}