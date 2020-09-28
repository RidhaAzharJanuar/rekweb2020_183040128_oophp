<?php

//jualan produk
//komik
//game
class Produk {
	//property
	public $judul, 
		   $penulis,
		   $penerbit; 
		   
	protected $diskon = 0;

	private $harga;
		 

	//constructor
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {

		//memanggil
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon / 100);
	} //visibility private


	//method function yang ada didalam kelas
	//this utk mengambil property yang ada diluar 
	//agar sama, jika tidak menggunakan this
	//maka malah akan membuat property baru
	public function getLabel() {
		return "$this->penulis, $this->penerbit"; 

	}

	public function getInfoProduk(){

		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}

}



class Komik extends Produk {
	public $jmlHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

		parent::__construct( $judul , $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;


	}

	public function getInfoProduk() {
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman."; //overriding
		return $str;
	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct ( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {

		parent::__construct($judul, $penulis, $penerbit , $harga );

		$this->waktuMain = $waktuMain;
	}

	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	}//visibility protected

	public function getInfoProduk() {
		$str = "Game: ". parent::getInfoProduk() . " ~ {$this->waktuMain} Jam."; //overriding
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

$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();







?>