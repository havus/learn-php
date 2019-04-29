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
}

class cetakInfoProduk {
    // biar gak bisa diisi sembarangan, kita spesifikasikan dari class Produk
    public function cetak( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Conan", "Edogawa", "Gramed", 25000);
// $produk2 = new Produk;
$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);
// var_dump($produk1);