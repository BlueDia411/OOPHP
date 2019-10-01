<?php 
class Produk {
	public 	$judul,
			$penulis,
			$penerbit,
			$harga,
			$waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit =$penerbit;
		$this->harga = $harga;
		$this->waktuMain = $waktuMain;
	}


	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}


	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
}

class Game extends produk{
	public $jmlHalaman;
	public function getInfoProduk(){
		$str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}


class Komik extends Produk{
	public function getInfoProduk(){
		$str = "Komik : " . parent::getInfoProduk() . "  - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}



class CetakInfoProduk {
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga})";
		return $str;
	}
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 25000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
 ?>