<?php 

Class Blog extends Controller{
    
    public function index(){
        $data['judul'] = "blog";
        $data['nama'] = $this->model("Blog_model")->getAllBlog();
        $this->view("templates/header", $data);
        $this->view('Blog/index', $data);
        $this->view("templates/footer", $data);
    }
    public function guru(){
        $data['judul'] = "guru";
        $data['nama'] = $this->model("Blog_model")->getAllGuru();
        $this->view("templates/header", $data);
        $this->view('Blog/guru', $data);
        $this->view("templates/footer", $data);
    }
}
?>