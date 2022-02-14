#include<bits/stdc++.h>
#include<string>
#include<iostream>

using namespace std;
#include "TimSepakbola.cpp"

int main(){

    //intansiasi menggunakan setter
    TimSepakbola tim1;
    tim1.setNamaTim("EXO");
    tim1.setNegara("Korea Selatan");
    tim1.setTahun("2012");
    tim1.setPelatih("Lee Sooman");
    tim1.setPemain("Suho, DO, Kai, Chanyeol, Lay, Xiumin, Chen, Baekhyun, Sehun");
    
    TimSepakbola tim2;
    tim2.setNamaTim("Zombi");
    tim2.setNegara("Korea Selatan");
    tim2.setTahun("2022");
    tim2.setPelatih("Lee Jaekyu");
    tim2.setPemain("Cheongsan, Onjo, Suhyeok, Namra");


    //menampilkan output
    cout<<"**************************************************************************************"<<endl;
    cout <<"                                    Daftar Tim Sepakbola"<<endl;

    cout<<endl;

    cout<<"TIM 1:"<<endl;
    cout<<"Nama Tim             :"<<tim1.getNamaTim() <<endl;
    cout<<"Negara Asal          :"<<tim1.getNegara() <<endl;
    cout<<"Tahun Berdiri Tim    :"<<tim1.getTahun() <<endl;
    cout<<"Nama Pelatih         :"<<tim1.getPelatih() <<endl;
    cout<<"Nama Pemain          :"<<tim1.getPemain() <<endl;

    cout<<endl;

    cout<<"TIM 2:"<<endl;
    cout<<"Nama Tim             :"<<tim2.getNamaTim() <<endl;
    cout<<"Negara Asal          :"<<tim2.getNegara() <<endl;
    cout<<"Tahun Berdiri Tim    :"<<tim2.getTahun() <<endl;
    cout<<"Nama Pelatih         :"<<tim2.getPelatih() <<endl;
    cout<<"Nama Pemain          :"<<tim2.getPemain() <<endl;
    cout<<"**************************************************************************************"<<endl;

    return 0;

}