<?php 
class Produk {
	public 	$judul,
			$penulis,
			$penerbit,
			$harga;
}

$produk1 = new produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 25000; 
var_dump($produk1);

// $produk2 = new produk();
// $produk-> judul = "Code Vein";
// $produk2-> tambahProperty = "hahaha";
// var_dump($produk2);
 ?>}
