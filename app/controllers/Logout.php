<?php 

class Logout extends Controller{
    public function index(){
        echo print_r($_SESSION['username']);
        // session_start();
		// session_destroy();
		// header('location: '. BASEURL . '/');
    }
}