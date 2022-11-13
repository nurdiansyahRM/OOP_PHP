<?php 
class Komik extends Produk implements InfoProduk{
    public $jmlhalaman;
        public function __construct($judul = "judul", $penulis ="penulis",$penerbit ="penerbit", $harga =0, $jmlhalaman = 0)
        {
            parent::__construct($judul , $penulis ,$penerbit , $harga );
            $this->jmlhalaman = $jmlhalaman;
        }
        public function getinfo(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }
        public function getinfoproduk(){
            $str = "Komik : ". $this->getinfo() ." ({$this->jmlhalaman} : Halaman)";
            return $str;
        }
}
