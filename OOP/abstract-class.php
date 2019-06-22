<?php 
abstract class Produk {
    private $judul, 
           $penulis,
           $penerbit,
           $harga;

    private $diskon = 0;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
// private tidak bisa diakses child
// protected bisa diakses child
    private function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();
    
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga})";
        return $str;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman = 0 ) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : ". $this->getInfo() ." ~ {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;
    
    public function __construct( $judul, $penulis, $penerbit, $harga, $waktuMain = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->waktuMain = $waktuMain;
    }
    
    public function getInfoProduk() {
        $str = "Game : ". $this->getInfo() ." ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        // $str = "{$produk->judul} | {$produk->getLabel()} (Rp {$produk->harga})";
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}


$produk1 = new Komik("Conan", "Edogawa", "Gramed", 25000, 100);
$produk2 = new Game("Outlast", "Sopo Ngono", "Gem Senter", 12500, 15);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();