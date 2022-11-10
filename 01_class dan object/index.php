<?php 
class produk{
    public  $judul = 'judul',
            $penulis = 'penulis',
            $penerbit = 'penerbit',
            $harga = 0;

    public function getLabel() {
        return "$this->judul, $this->penerbit,  $this->penulis, $this->harga";
    }
}

$produk1 = new produk();
$produk1->judul = 'naruto';
$produk1->penulis = 'masashi kishimoto';
$produk1->penerbit = 'shonen jump';
$produk1->harga = 20000;

$produk4 = new produk();
$produk4->judul = 'free fire';
$produk4->penulis = 'jonin';
$produk4->penerbit = 'garena';
$produk4->harga = 2500000;


echo "<br>";
echo $produk1->getLabel();
echo "<br>";
echo "<hr>";
echo $produk4->getLabel();

