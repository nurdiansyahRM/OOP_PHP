<?php 
abstract class Produk{
    protected $judul,
            $penulis,
            $penerbit,
            $harga ,
            $diskon = 0;
    //protected $harga ; //kalo visibility ya protected bisa diakses di parent ya sama child ya
 //kalo visibility ya private bisa diakses hanya di parent ya saja
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    abstract function getinfo();
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
