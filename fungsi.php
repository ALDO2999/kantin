<?php
class Produk {
    public $bakwan; 
    public $bakso;
    // public $kopi;



    public $jmlBakwan;
    public $jmlBakso;
    // public $jmlKopi;



    public $hargaBakwan;
    public $hargaBakso;
    // public $hargaKopi;



    public $totalSeluruh;
    public $totalHargaBakwan;
    public $totalHargaBakso;
    // public $totalHargaKopi;

    

    public function __construct($hargaBakso, $hargaBakwan) {
        $this->hargaBakwan = $hargaBakwan;
        $this->hargaBakso = $hargaBakso;
        // $this->hargaKopi = $hargaKopi;
    }
}










class Jumlah extends Produk {
    public function getJumlah($jmlBakwan, $jmlBakso){
        $this->jmlBakwan = $jmlBakwan;
        $this->jmlBakso = $jmlBakso;

    }

    public function setHarga() {
        $this->totalHargaBakso = $this->hargaBakso * $this->jmlBakso;
        $this->totalHargaBakwan = $this->hargaBakwan * $this->jmlBakwan;
        


        $this->totalSeluruh = $this->totalHargaBakwan + $this->totalHargaBakso;
    }

    public function cetakStruk() {
        echo "*** <b>$ iKantin Wikrama $</b> ***";
        echo "<br>";
        echo "Bakso : $this->jmlBakso x Rp. $this->hargaBakso: <b>$this->totalHargaBakso</b>";
        echo "<br>";
        echo "Bakwan: $this->jmlBakwan x Rp. $this->hargaBakwan: <b>$this->totalHargaBakwan</b>";
        echo "<br><br>";
       
        echo "<br><br>";
        echo "Total Bayar Rp. <b>$this->totalSeluruh</b>";

        echo "<br>";
        echo "<br>";    

 

        echo "Kami mengucapkan terima kasih atas kunjungan Anda ke Kantin Wikrama Bogor. Dukungan Anda sangat kami hargai dan kami berkomitmen untuk terus memberikan pelayanan terbaik.";


        echo "<br>";
        echo "<br>";

        echo "TERIMAKASIH "  ;


        echo "<br>";
    }
}