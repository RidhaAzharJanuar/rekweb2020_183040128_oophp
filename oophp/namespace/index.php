<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\user as ServiceUser;
use App\Produk\user as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();


?>