<?php

use cetakinfoproduk as GlobalCetakinfoproduk;
use produk as GlobalProduk;

class produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga ,
            $halaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = 0, $halaman="halaman")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman; 
    }
    public function getLabel() { 
        return "$this->penerbit, $this->penulis";
    }
}
class game extends GlobalProduk{
    public $lama;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $lama = "lama")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->lama = $lama;
    }
}
//berfungsi sebagai objeck type
class cetakinfoproduk{
    public function cetakproduk(produk $produk){
        $str = "komik : {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) (halaman . {$produk->halaman}) ";
        return $str;
    }
    public function cetakgame(game $produk){
        $str = "game : {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) (jam . {$produk->lama}) ";
        return $str;
    }
    

}


$produk1 = new produk("naruto","masashi kishimoto","shonen jump",20000,"100 - halaman");
$produk2 = new game("free fire","jonin","garena",250000, "50 jam");

$produk3 = new GlobalCetakinfoproduk();
$produk4 = new GlobalCetakinfoproduk();

echo $produk3->cetakproduk($produk1);
echo "<br>";
echo $produk4->cetakgame($produk2);


