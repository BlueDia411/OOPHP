<?php 

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 25000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetaProduk = new CetakInfoProduk();
$cetaProduk->tambahProduk($produk1);
$cetaProduk->tambahProduk($produk2);
echo $cetaProduk->cetak();