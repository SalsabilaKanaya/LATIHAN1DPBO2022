<?php

class Mahasiswa{

    //atribut
    private $nim = 0;
    private $nama = "";
    private $jeniskelamin = "";
    private $programstudi = "";
    private $semester = 0;

    public function __construct($nim = 0, $nama = "", $jeniskelamin = "", $programstudi = "", $semester = 0)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jeniskelamin = $jeniskelamin;
        $this->programstudi = $programstudi;
        $this->semester = $semester;
    }

    public function setNIM($nim){
        $this->nim = $nim;
    }

    public function getNIM(){
        return $this->nim;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setJenisKelamin($jeniskelamin){
        $this->jeniskelamin = $jeniskelamin;
    }

    public function getJenisKelamin(){
        return $this->jeniskelamin;
    }

    public function setProgramStudi($programstudi){
        $this->programstudi = $programstudi;
    }

    public function getProgramStudi(){
        return $this->programstudi;
    }

    public function setSemester($semester){
        $this->semester = $semester;
    }

    public function getSemester(){
        return $this->semester;
    }

}
?>