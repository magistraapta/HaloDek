<?php 

class Logout{
    public function signOut(){
        // $_SESSION['session_login'] = "tidak_login";
        session_start();
		session_destroy();
		header('location: '. BASEURL . '/home');
    }
    public function signOutAdmin(){
        // $_SESSION['session_login'] = "tidak_login";
        session_start();
		session_destroy();
		header('location: '. BASEURL . '/login/admin');
    }

}