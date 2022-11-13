<?php 
require_once 'App/init.php';

// $produk1 = new Komik("naruto","masashi kishimoto","shonen jump",20000,100);
// $produk2 = new Game("Free fire "," sea grup"," garena ",250000,59);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";
use App\Produk\User as ProdukUser;// menggunakan alias untuk memanggil class
use App\Service\User as ServiceUser;// menggunakan alias untuk memanggil class
new ServiceUser();
echo "<br>";
new ProdukUser();