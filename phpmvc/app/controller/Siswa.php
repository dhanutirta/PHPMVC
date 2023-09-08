<?php 

class Siswa extends Controller {

    public function index(){

        $data['judul'] = "user";
        $data['nama'] = $this->model("Siswa_model")->getAllBlog();
        $this->view("templates/header", $data);
        $this->view('Siswa/index', $data);
        $this->view("templates/footer", $data);
    }

    public function detail($id){
        $data['judul'] = "Detail";
        $data['siswa'] = $this->model("Siswa_model")->getBlogById($id);
        $this->view("templates/header", $data);
        $this->view('Siswa/detail', $data);
        $this->view("templates/footer", $data);
    
    }

    public function tambah(){
        if($this->model("Siswa_model")->tambahData($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header("Location: " . BASE_URL . "/siswa");
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'success');
            header("Location: " . BASE_URL . "/siswa");
            exit;

        }
    }
    public function hapus($id){
        if($this->model("Siswa_model")->hapusData($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header("Location: " . BASE_URL . "/siswa");
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'success');
            header("Location: " . BASE_URL . "/siswa");
            exit;

        }
    }



    public function ubah(){
        if($this->model("Siswa_model")->ubahDataSiswa($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header("Location: " . BASE_URL . "/siswa");
            exit;
        }else{
            Flasher::setFlash('gagal', 'diubah', 'success');
            header("Location: " . BASE_URL . "/siswa");
            exit;

        }
    }
}


?>