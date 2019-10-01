<?php 
class Produk {
	public 	$judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain,
			$tipe;

	public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit =$penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}


	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}


	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if ($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman."
		} else if ($this->tipe == "Game") {
			$str .= " - {$this->waktuMain} Jam."
		}
		return $str;
	}
}



class CetakInfoProduk {
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga})";
		return $str;
	}
}



$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 25000, 100, "Komik");
$produk2 = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50, "Game");

// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
 ?>
