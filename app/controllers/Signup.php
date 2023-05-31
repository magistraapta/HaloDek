<?php 

class Signup extends Controller{
    public function index(){
        $data['title'] = "Halaman Sign Up";
        $this->view('signup/index', $data);
    }

}