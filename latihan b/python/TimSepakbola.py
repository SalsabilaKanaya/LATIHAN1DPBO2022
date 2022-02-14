class TimSepakbola():
    #private atribut 
    __namatim = ""
    __negara = ""
    __tahun = 0
    __pelatih = ""
    __pemain = ""

    #constructor
    def __init__(self, namatim = "", negara = "", tahun = 0, pelatih = "", pemain = ""):
        self.__namatim = namatim
        self.__negara = negara
        self.__tahun = tahun
        self.__pelatih = pelatih
        self.__pemain = pemain
    
    def setNamaTim(self, namatim):
        self.__namatim = namatim
    
    def getNamaTim(self):
        return self.__namatim
    
    def setNegara(self, negara):
        self.__negara = negara
    
    def getNegara(self):
        return self.__negara

    def setTahun(self, tahun):
        self.__tahun = tahun
    
    def getTahun(self):
        return self.__tahun

    def setPelatih(self, pelatih):
        self.__pelatih = pelatih
    
    def getPelatih(self):
        return self.__pelatih
    
    def setPemain(self, pemain):
        self.__pemain = pemain
    
    def getPemain(self):
        return self.__pemain
    
    #untuk menampilkan output
    def keluaran(self):
        print("*************************************************************************************")
        print("Nama Tim            : %s" % (self.__namatim))
        print("Negara Asal         : %s" % (self.__negara))
        print("Tahun Berdiri Tim   : %s" % (self.__tahun))
        print("Nama Pelatih        : %s" % (self.__pelatih))
        print("Pemain              : %s" % (self.__pemain))