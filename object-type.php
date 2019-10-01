<?php 
class Produk {
	public 	$judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul, $penulis, $penerbit, $harga){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit =$penerbit;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

class CetakInfoProduk {
	public function cetak( $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga})"
	}
}

$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 25000);
$produk2 = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
 ?>
