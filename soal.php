<?php

// 1. Pemasukan kaki langit bulan feb 2019
// SELECT SUM(nominal) FROM pemasukan_paket pp JOIN paket p ON pp.paket_id = p.id JOIN wisata w ON p.wisata_id = w.id WHERE w.nama = 'seribu batu' and pp.tgl like '2019-02%';

// 2. Berapa pemasukan flying fox di seribu batu bulan feb 2019

// 3. tampilkan pemasukan harian (semua wisata dijumlah)
//      contoh:     tgl     |  pemasukan
    //         2019-02-01   |   500.000
    //         2019-02-10   |   300.000
    //         2019-03-15   |   400.000
    // SELECT SUM(nominal), tgl FROM pemasukan_paket GROUP BY tgl

// 4. Tampilkan pemasukan harian seribu batu

// 5. berapa tiket yang terjual bulan feb 2019 seribu batu
// 6. Tampilkan tgl pemasukan tertinggi di seribu batu
function tes(){ //jadikan looping function scope agar block scope
for($i = 0; $i < 10; $i++) {
    echo $i;
    // php sekarang tidak block scope
    }
}
tes();
echo($i);

function coba() {
    $z = 12;
    echo($z);
}
coba();
echo($z);
