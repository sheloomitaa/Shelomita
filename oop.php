<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Merk Mobil</title>
</head>
<?php

class Kendaraan {
    // Properti
    private $merk;
    private $tahun;
    private $warna;


    public function __construct($merk, $tahun, $warna) {
        $this->merk = $merk;
        $this->tahun = $tahun;
        $this->warna = $warna;
    }


    public function tampilkanInfo() {
        return "Merk: " . $this->merk . ", Tahun: " . $this->tahun . ", Warna: " . $this->warna;
    }

    public function ubahWarna($warnaBaru) {
        $this->warna = $warnaBaru;
    }
}


    class Mobil extends Kendaraan {
        private $jumlahPintu;


    public function __construct($merk, $tahun, $warna, $jumlahPintu) {
        parent::__construct($merk, $tahun, $warna);
        $this->jumlahPintu = $jumlahPintu;
    }


    public function tampilkanInfo() {
        return parent::tampilkanInfo() . ", Jumlah Pintu: " . $this->jumlahPintu;
    }
}


        $mobil1 = new Mobil("Toyota", 2020, "Merah", 4);
        $mobil2 = new Mobil("Honda", 2021, "Biru", 2);
        $mobil3 = new Mobil("Daihatsu", 2022, "Putih", 4);
        $mobil4 = new Mobil("Suzuki", 2019, "hijau", 4);


echo $mobil1->tampilkanInfo(); // Output: Merk: Toyota, Tahun: 2020, Warna: Merah, Jumlah Pintu: 4
echo "\n",'<br>';
echo $mobil2->tampilkanInfo(); // Output: Merk: Honda, Tahun: 2021, Warna: Biru, Jumlah Pintu: 2
echo "\n",'<br>';
echo $mobil3->tampilkanInfo(); // Output: Merk: Daihatsu, Tahun: 2022, Warna: Putih, Jumlah Pintu: 4
echo "\n",'<br>';
echo $mobil4->tampilkanInfo(); // Output: Merk: Suzuki, Tahun: 2019, Warna: Hijau, Jumlah Pintu: 4
echo "\n",'<br>';
