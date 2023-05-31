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
        $this->view('templates/header', $data);
        $this->view('detail/detail', $data);
        $this->view('templates/footer', $data); 
    }
}