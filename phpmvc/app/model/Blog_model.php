<?php 

class Blog_model {
    private $blog = [
        [
            "penulis" => "Dhanu",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "Models"
        ],
        [
            "penulis" => "Desta",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "Controller"
        ],
        [
            "penulis" => "Ploco",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "view"
        ]
    ];
    public function getAllBlog(){
        return $this->blog;
    }     
    private $guru = [
        [
            "penulis" => "Guru RPL",
            "judul" => "Mengajar PHP MVC",
            "tulisan" => "Models"
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Mengajar PHP MVC",
            "tulisan" => "Controller"
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Mengajar PHP MVC",
            "tulisan" => "view"
        ]
    ];
    public function getAllGuru(){
        return $this->guru;
    }     
}

?>