<?php 
class Produk {
	public 	$judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct(){
		
	}
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 25000; 
var_dump($produk3);

$produk4 = new Produk();
$produk4->judul = "Uncherted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$harga->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
 ?>}
