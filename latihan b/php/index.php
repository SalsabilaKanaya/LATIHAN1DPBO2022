<?php
include "TimSepakbola.php";

//intansiasi
$tim1 = new TimSepakbola("EXO", "Korea Selatan", "2012", "Lee Sooman", "Suho, DO, Kai, Chanyeol, Lay, Xiumin, Chen, Baekhyun, Sehun");

$tim2 = new TimSepakbola("Zombi", "Korea Selatan", "2022", "Lee Jaekyu", "Cheongsan, Onjo, Suhyeok, Namra");


//menampilkan output
echo "Daftar Tim Sepakbola"."<br>";

echo "<br>";

echo "TIM 1"."<br>";
echo "<br>";

echo "Nama Tim          : ".$tim1->getNamaTim() ."<br>";
echo "Negara            : ".$tim1->getNegara() ."<br>";
echo "Tahun             : ".$tim1->getTahun() ."<br>";
echo "Nama Pelatih      : ".$tim1->getPelatih() ."<br>";
echo "Pemain            : ".$tim1->getPemain() ."<br>";

echo "<br>";
echo "TIM 2"."<br>";
echo "<br>";

echo "Nama Tim          : ".$tim2->getNamaTim() ."<br>";
echo "Negara            : ".$tim2->getNegara() ."<br>";
echo "Tahun             : ".$tim2->getTahun() ."<br>";
echo "Nama Pelatih      : ".$tim2->getPelatih() ."<br>";
echo "Pemain            : ".$tim2->getPemain() ."<br>";