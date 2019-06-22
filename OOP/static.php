<?php 
class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo.";
    }
}

// static bisa langsung di panggil tanpa inisiasi objek
echo ContohStatic::halo();
// static ketika inisiasi objek baru, apapun yg didalamnya tidak di reset karena member terikat dengan kelas bukan object

?>