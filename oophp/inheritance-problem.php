<?php

//jualan produk
//komik
//game
class Produk {
	//property
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;

	//constructor
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {

		//memanggil
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}


	//method function yang ada didalam kelas
	//this utk mengambil property yang ada diluar 
	//agar sama, jika tidak menggunakan this
	//maka malah akan membuat property baru
	public function getLabel() {
		return "$this->penulis, $this->penerbit"; 

	}

	public function getInfoLengkap(){

		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		if( $this->tipe == "Komik"){
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if($this->tipe == "Game") {
			$str .= " ~ {$this->waktuMain} Jam.";
		}

		return $str;
	}

}


//membuat kelas baru
class CetakInfoProduk { //kelas ini hanya untuk mencetak info lengkap dri object yg dipunya
	public function cetak( Produk $produk ) {
		$str = "{$produk ->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 2500000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();







?>