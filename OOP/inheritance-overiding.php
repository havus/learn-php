<?php 

// $a = [1,2,3];
// var_dump($a);

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman = 0 ) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : ". parent::getInfoProduk() ." ~ {$this->jmlHalaman} Halaman.";
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
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


$produk1 = new Komik("Conan", "Edogawa", "Gramed", 25000, 100);
$produk2 = new Game("Outlast", "Sopo Ngono", "Gem Senter", 12500, 15);

echo $produk1->getInfoProduk();
echo "<br></br>";
echo $produk2->getInfoProduk();
