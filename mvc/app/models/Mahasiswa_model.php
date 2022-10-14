<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


//    private $mhs = [
//        [
//            "nama" => "Kelvin Ardiansah",
//            "nrp" => "203040062",
//            "email" => "kelvinardiansah16@gmail.com",
//            "jurusan" => "Informatika"
//        ],
//        [
//            "nama" => "andikasari",
//            "nrp" => "20000001",
//            "email" => "andikasari67@gmail.com",
//            "jurusan" => "Informatika"
//        ],
//        [
//            "nama" => "Fazy stain",
//            "nrp" => "20000002",
//            "email" => "fazystain16@gmail.com",
//            "jurusan" => "Informatika"
//        ]
//    ];
//


    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
