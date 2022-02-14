import java.util.*;

public class main{
    public static void main(String[] args){

        //intansiasi setter tim 1
        TimSepakbola tim1 = new TimSepakbola();
        tim1.setNamaTim("EXO");
        tim1.setNegara("Korea Selatan");
        tim1.setTahun("2012");
        tim1.setPelatih("Lee Soonam");
        tim1.setPemain("Suho, DO, Kai, Chanyeol, Lay, Xiumin, Chen, Baekhyun, Sehun");

        //output tim 1
        System.out.println("TIM 1:");
        System.out.println("Nama Tim             :" +tim1.getNamaTim());
        System.out.println("Negara Asal          :" +tim1.getNegara());
        System.out.println("Tahun Berdiri Tim    :" +tim1.getTahun());
        System.out.println("Nama Pelatih         :" +tim1.getPelatih());
        System.out.println("Nama Pemain          :" +tim1.getPemain());

        //intansiasi setter tim 2
        TimSepakbola tim2 = new TimSepakbola();
        tim2.setNamaTim("Zombi");
        tim2.setNegara("Korea Selatan");
        tim2.setTahun("2022");
        tim2.setPelatih("Lee Jaekyu");
        tim2.setPemain("Cheongsan, Onjo, Suhyeok, Namra");

        //output tim 2
        System.out.println("TIM 2:");
        System.out.println("Nama Tim             :" +tim2.getNamaTim());
        System.out.println("Negara Asal          :" +tim2.getNegara());
        System.out.println("Tahun Berdiri Tim    :" +tim2.getTahun());
        System.out.println("Nama Pelatih         :" +tim2.getPelatih());
        System.out.println("Nama Pemain          :" +tim2.getPemain());

    }
}