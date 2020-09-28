<?php

//jualan produk
//komik
//game
class Produk {
	//property
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;

	//constructor
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {

		//memanggil
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}


	//method function yang ada didalam kelas
	//this utk mengambil property yang ada diluar 
	//agar sama, jika tidak menggunakan this
	//maka malah akan membuat property baru
	public function getLabel() {
		return "$this->penulis, $this->penerbit"; 

	}

}


//membuat kelas baru
class CetakInfoProduk { //kelas ini hanya untuk mencetak info lengkap dri object yg dipunya
	public function cetak( Produk $produk ) {
		$str = "{$produk ->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Masahi Kishimoto", "Shonen", "ShonenJump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 2500000);


echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel(); 
echo "<br>";


$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1-> cetak($produk1);






?>