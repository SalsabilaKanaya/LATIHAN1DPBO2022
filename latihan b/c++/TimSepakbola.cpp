class TimSepakbola{
    private:

        //atribut private
        string namatim;
        string negara;
        string tahun;
        string pelatih;
        string pemain;


    public:

        TimSepakbola(){
        }

        //prosedur dan fungsi getter setter
        void setNamaTim(string namatim){
            this->namatim = namatim;
        }

        string getNamaTim(){
            return this->namatim;
        }

        void setNegara(string negara){
            this->negara = negara;
        }

        string getNegara(){
            return this->negara;
        }

        void setTahun(string tahun){
            this->tahun = tahun;
        }

        string getTahun(){
            return this->tahun;
        }

        void setPelatih(string pelatih){
            this->pelatih = pelatih;
        }

        string getPelatih(){
            return this->pelatih;
        }

        void setPemain(string pemain){
            this->pemain = pemain;
        }

        string getPemain(){
            return this->pemain;
        }

        ~TimSepakbola(){}
    

};