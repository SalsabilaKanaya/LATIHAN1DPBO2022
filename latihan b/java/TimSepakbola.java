public class TimSepakbola{

    //atribut
    private String nama;
    private String negara;
    private String tahun;
    private String pelatih;
    private String pemain;

    TimSepakbola(){
    }

    //prosedur dan fungsi getter setter
    public void setNamaTim(String nama){
        this.nama = nama;
    }

    public String getNamaTim(){
        return this.nama;
    }

    public void setNegara(String negara){
        this.negara = negara;
    }

    public String getNegara(){
        return this.negara;
    }

    public void setTahun(String tahun){
        this.tahun = tahun;
    }

    public String getTahun(){
        return this.tahun;
    }    

    public void setPelatih(String pelatih){
        this.pelatih = pelatih;
    }

    public String getPelatih(){
        return this.pelatih;
    }

    public void setPemain(String pemain){
        this.pemain = pemain;
    }

    public String getPemain(){
        return this.pemain;
    }
}