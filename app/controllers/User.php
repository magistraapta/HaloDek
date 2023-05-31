<?php 

class User extends Controller{
    public function index()
    {
        $data['title'] = "halaman user";
        // $data['nama'] = $this->model('User_model')->getNama();
        $data['user'] = $this->model('UserModel')->getAllUser();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }
}