<?php 
class Produk {
	public 	$judul,
			$penulis,
			$penerbit,
			$harga;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 25000; 
var_dump($produk1);

$produk4 = new Produk();
$produk4->judul = "Uncherted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$harga->harga = 250000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
 ?>}
