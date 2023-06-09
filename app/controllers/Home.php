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
}