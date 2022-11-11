<?php

use cetakinfoproduk as GlobalCetakinfoproduk;
use produk as GlobalProduk;

class produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga ,
            $jmlhalaman,
            $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = 0, $jmlhalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktuMain = $waktuMain;
    }
    public function getLabel() { 
        return "$this->penerbit, $this->penulis";
    }
    public function getinfoproduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    }
}
class komik extends produk{
    public function getinfokomik(){
        $str = "Komik : {$this->getinfoproduk()} ({$this->jmlhalaman} : Halaman)";
        
        return $str;
    }
}
class game extends produk{
    public function getinfogame()
    {
        $str = "game : {$this->getinfoproduk()} ({$this->waktuMain} : jam)";
        
        return $str;
    }
}
// class game extends GlobalProduk{
//     public $lama;
//     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $lama = "lama")
//     {
//         $this->judul = $judul;
//         $this->penulis = $penulis;
//         $this->penerbit = $penerbit;
//         $this->harga = $harga;
//         $this->lama = $lama;
//     }
// }
//berfungsi sebagai objeck type
// class cetakinfoproduk{
//     public function cetakproduk(produk $produk){
//         $str = "komik : {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) (halaman . {$produk->halaman}) ";
//         return $str;
//     }
//     public function cetakgame(game $produk){
//         $str = "game : {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) (jam . {$produk->lama}) ";
//         return $str;
//     }
    

// }


$produk1 = new komik("naruto","masashi kishimoto","shonen jump",20000,100,0);
$produk2 = new game("Free fire "," sea grup"," garena ",250000,0,59);
echo $produk1->getinfokomik();
echo "<hr>";
echo $produk2->getinfogame();


// $produk3 = new GlobalCetakinfoproduk();
// $produk4 = new GlobalCetakinfoproduk();

// echo $produk3->cetakproduk($produk1);
// echo "<br>";
// echo $produk4->cetakgame($produk2);


