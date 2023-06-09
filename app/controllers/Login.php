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
        // var_dump($_SESSION['account']);
		if($row = $this->model('LoginModel')->checkLogin($_POST)) {
				$_SESSION['account'] = [
					"email" => $row['email'],
					"password" => $row['password'],
					"username" => $row['username'],
					"id" => $row['id'],
				];
				$_SESSION['session_login'] = 'sudah_login';
				$_SESSION['status'] = 'user';
				// var_dump($row);
				//$this->model('LoginModel')->isLoggedIn($_SESSION['session_login']);
				// var_dump($_SESSION);
				header('location: '. BASEURL . '/');
		} else {
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. BASEURL . '/login');
			exit;	
		}
	}

    public function prosesLoginAdmin() {
        // var_dump($_POST);
		if($row = $this->model('LoginModel')->checkAdminLogin($_POST) ) {
				$_SESSION['name'] = $row['name'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['session_login'] = 'sudah_login';
				$_SESSION['status'] = 'admin';

				//$this->model('LoginModel')->isLoggedIn($_SESSION['session_login']);
				// var_dump($_SESSION);
				header('location: '. BASEURL . '/admin');
		} else {
			// Flasher::setMessage('Username / Password','salah.','danger');
			// header('location: '. BASEURL . '/login');
			echo 'error';
			exit;	
		}
	}
}