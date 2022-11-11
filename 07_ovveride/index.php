<?php

use cetakinfoproduk as GlobalCetakinfoproduk;
use produk as GlobalProduk;

class produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga ;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
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
    public $jmlhalaman;
        public function __construct($judul = "judul", $penulis ="penulis",$penerbit ="penerbit", $harga =0, $jmlhalaman = 0)
        {
            parent::__construct($judul , $penulis ,$penerbit , $harga );
            $this->jmlhalaman = $jmlhalaman;
        }
        public function getinfoproduk(){
            $str = "Komik : ".parent::getinfoproduk() ." ({$this->jmlhalaman} : Halaman)";
            return $str;
        }
}
class game extends produk{
    public $waktuMain;
        public function __construct($judul = "judul", $penulis ="penulis",$penerbit ="penerbit", $harga = 0, $waktuMain = 0)
        {
            parent::__construct($judul, $penulis,$penerbit, $harga);
            $this->waktuMain = $waktuMain;
        }
        public function getinfoproduk()
        {
            $str = "game : ". parent :: getinfoproduk() ."({$this->waktuMain} : jam)";
            return $str;
        }
}

$produk1 = new komik("naruto","masashi kishimoto","shonen jump",20000,100);
$produk2 = new game("Free fire "," sea grup"," garena ",250000,59);
echo $produk1->getinfoproduk();
echo "<hr>";
echo $produk2->getinfoproduk();