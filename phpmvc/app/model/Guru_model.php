<?php 

class Guru_model {
    private $table = 'data_guru';
    private $db;

    public function __construct(){
       $this->db = new Database;
    }

    public function getAllBlog(){
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }  

    public function getBlogById($id){
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahData($data){
        $query = "INSERT INTO data_guru VALUES(null, :nama, :jenis_kelamin, :alamat )";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapusData($id){

        $query = "DELETE FROM data_guru WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSiswa(){
        $query = "UPDATE data_guru SET 
        nama = :nama,
        jenis_kelamin = :jenis_kelamin,
        alamat = :alamat
        WHERE id = :id";


        $this->db->query($query);
        $this->db->bind("nama", $_POST["nama"]);
        $this->db->bind("jenis_kelamin", $_POST["jenis_kelamin"]);
        $this->db->bind("alamat", $_POST["alamat"]);
        $this->db->bind("id", $_POST["id"]);
 
        $this->db->execute();

        return $this->db->rowCount();
    }

 

}

?>
