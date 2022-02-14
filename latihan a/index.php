<?php
include "Mahasiswa.php";

//intansiasi 
$mahasiswa1 = new Mahasiswa(2001360, "Salsabila Kanaya", "Perempuan", "Ilmu Komputer", 4);

$mahasiswa2 = new Mahasiswa(2008196, "Sri Nanda Ameliani", "Perempuan", "Ilmu Komputer", 4);


//menampilkan output
echo "Daftar Mahasiswa"."<br>";

echo "<br>";

echo "Mahasiswa 1"."<br>";
echo "<br>";

echo "NIM               : ".$mahasiswa1->getNIM() ."<br>";
echo "Nama              : ".$mahasiswa1->getNama() ."<br>";
echo "Jenis Kelamin     : ".$mahasiswa1->getJenisKelamin() ."<br>";
echo "Program Studi     : ".$mahasiswa1->getProgramStudi() ."<br>";
echo "Semester          : ".$mahasiswa1->getSemester() ."<br>";

echo "<br>";
echo "Mahasiswa 2"."<br>";
echo "<br>";

echo "NIM               : ".$mahasiswa2->getNIM() ."<br>";
echo "Nama              : ".$mahasiswa2->getNama() ."<br>";
echo "Jenis Kelamin     : ".$mahasiswa2->getJenisKelamin() ."<br>";
echo "Program Studi     : ".$mahasiswa2->getProgramStudi() ."<br>";
echo "Semester          : ".$mahasiswa2->getSemester() ."<br>";