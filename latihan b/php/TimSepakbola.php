<?php

class TimSepakbola{

    //atribut private
    private $nama_tim = "";
    private $negara = "";
    private $tahun = "";
    private $pelatih = "";
    private $pemain = "";

    public function __construct($nama_tim = "", $negara = "", $tahun = "", $pelatih = "", $pemain = "")
    {
        $this->nama_tim = $nama_tim;
        $this->negara = $negara;
        $this->tahun = $tahun;
        $this->pelatih = $pelatih;
        $this->pemain = $pemain;
    }

    public function setNamaTim($nama_tim){
        $this->nama_tim = $nama_tim;
    }

    public function getNamaTim(){
        return $this->nama_tim;
    }

    public function setnegara($negara){
        $this->negara = $negara;
    }

    public function getnegara(){
        return $this->negara;
    }

    public function settahun($tahun){
        $this->tahun = $tahun;
    }

    public function gettahun(){
        return $this->tahun;
    }

    public function setpelatih($pelatih){
        $this->pelatih = $pelatih;
    }

    public function getpelatih(){
        return $this->pelatih;
    }

    public function setpemain($pemain){
        $this->pemain = $pemain;
    }

    public function getpemain(){
        return $this->pemain;
    }

}
?>