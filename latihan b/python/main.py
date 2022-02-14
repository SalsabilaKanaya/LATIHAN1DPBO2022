from TimSepakbola import TimSepakbola

#menggunakan constructor
tim1 = TimSepakbola("EXO", "Korea Selatan", 2012, "Lee Sooman", "Suho, DO, Kai, Chanyeol, Lay, Xiumin, Chen, Baekhyun, Sehun")

tim2 = TimSepakbola("Zombi", "Korea Selatan", 2022, "Lee Jaekyu", "Cheongsan, Onjo, Suhyeok, Namra")

#menampilkan output tim1
print("*************************************************************************************")
print("Nama Tim             : " + str(tim1.getNamaTim()))
print("Negara Asal          : " + str(tim1.getNegara()))
print("Tahun Berdiri Tim    : " + str(tim1.getTahun()))
print("Nama Pelatih         : " + str(tim1.getPelatih()))
print("Pemain               : " + str(tim1.getPemain()))

#menampilkan output tim2
print("*************************************************************************************")
print("Nama Tim             : " + str(tim2.getNamaTim()))
print("Negara Asal          : " + str(tim2.getNegara()))
print("Tahun Berdiri Tim    : " + str(tim2.getTahun()))
print("Nama Pelatih         : " + str(tim2.getPelatih()))
print("Pemain               : " + str(tim2.getPemain()))