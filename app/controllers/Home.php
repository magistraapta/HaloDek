<?php 

class Home extends Controller{
  
    public function index()
    {
        $data['title'] = "halaman home";
        // $data['nama'] = $this->model('User_model')->getNama();
        $data['dokter'] = $this->model('DokterModel')->getAllDokter();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id){
        $data['title'] = "halaman detail";
        $data['dokter'] =$this->model('DokterModel')->getDokterById($id);
        $this->view('templates/header', $data);
        $this->view('home/detail', $data);
        $this->view('templates/footer', $data); 
    }

    public function seeDokter(){
        $data['title'] = "halaman dokter";
        $data['dokter'] =$this->model('DokterModel')->getAllDokter();
        $this->view('templates/header', $data);
        $this->view('home/seeAll', $data);
        $this->view('templates/footer', $data);  
    }

    public function appointmentUser(){
        $data['title'] = "halaman appointment user";
        $this->view('templates/header', $data);
        $this->view('home/appointmentUser', $data);
        $this->view('templates/footer', $data);   
    }

    public function aboutUs(){
        $data['title'] = "halaman about us";
        $this->view('templates/header', $data);
        $this->view('home/aboutUs', $data);
        $this->view('templates/footer', $data);   
    }
}