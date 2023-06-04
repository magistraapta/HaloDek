<?php 

class Login extends Controller{
    public function index(){
        $data['title'] = "Halaman Login";
        $this->view('login/index', $data);
    }
    public function admin(){
        $data['title'] = "Halaman Login";
        $this->view('login/adminLogin', $data);
    }

    public function prosesLogin() {
        // var_dump($_POST);
		if($row = $this->model('LoginModel')->checkLogin($_POST) > 0 ) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['session_login'] = 'sudah_login'; 

				//$this->model('LoginModel')->isLoggedIn($_SESSION['session_login']);
				// var_dump($_SESSION);
				header('location: '. BASEURL . '/');
		} else {
			// Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. BASEURL . '/login');
			exit;	
		}
	}

    public function prosesLoginAdmin() {
        // var_dump($_POST);
		if($row = $this->model('LoginModel')->checkLogin($_POST) > 0 ) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['session_login'] = 'sudah_login'; 

				//$this->model('LoginModel')->isLoggedIn($_SESSION['session_login']);
				// var_dump($_SESSION);
				header('location: '. BASEURL . '/admin');
		} else {
			// Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. BASEURL . '/login');
			exit;	
		}
	}
}