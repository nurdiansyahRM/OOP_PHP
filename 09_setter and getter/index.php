<?php

use cetakinfoproduk as GlobalCetakinfoproduk;
use produk as GlobalProduk;

class produk{
    private $judul,
            $penulis,
            $penerbit,
            $harga ;
    //protected $harga ; //kalo visibility ya protected bisa diakses di parent ya sama child ya
 //kalo visibility ya private bisa diakses hanya di parent ya saja
    protected $diskon;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function setJudul($judul){
        $this->judul = $judul;
    }
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }
    public function setPenertbit($penertbit){
        $this->penertbit = $penertbit;
    }
    public function setharga($harga){
        $this->harga = $harga;
    }
    public function setdiskon($diskon){
        $this->diskon = $diskon; 
    }
    public function getLabel() { 
        return "$this->penerbit, $this->penulis";
    }
    public function getinfoproduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
    
    public function getharga(){
        return $this->harga - ($this->harga * $this->diskon /100);
    }
    public function getjudul(){
        return $this->judul;
    }
    public function getpenulis(){
        return $this->penulis;
    }
    public function getpenerbit(){
        return $this->penerbit;
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
$produk3 = new produk("mobil"," ferrari"," ferrari ",25000000);
echo $produk1->getinfoproduk();
echo "<hr>";
echo $produk2->getinfoproduk();
echo "<br>";
$produk2->setdiskon(50);
echo $produk2->getharga();
echo "<hr>";
$produk3->setjudul('nano');
echo $produk3->getjudul();