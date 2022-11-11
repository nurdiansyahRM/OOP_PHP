<?php

use cetakinfoproduk as GlobalCetakinfoproduk;
use produk as GlobalProduk;

class produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga ,
            $jmlhalaman,
            $waktuMain,
            $tipe;
            
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = 0, $jmlhalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe; 
    }
    public function getLabel() { 
        return "$this->penerbit, $this->penulis";
    }
    public function infolengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "komik"){
            $str .= "{$this->jmlhalaman} halaman";
        }else if($this->tipe == "game"){
            $str .= " ~ {$this->waktuMain} jam. ";
        }
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


$produk1 = new produk("naruto","masashi kishimoto","shonen jump",20000,100,0,"komik");
$produk2 = new produk("Free fire "," sea grup"," garena ",250000,0,59,"game");
echo $produk1->infolengkap();
echo "<hr>";
echo $produk2->infolengkap();


// $produk3 = new GlobalCetakinfoproduk();
// $produk4 = new GlobalCetakinfoproduk();

// echo $produk3->cetakproduk($produk1);
// echo "<br>";
// echo $produk4->cetakgame($produk2);


