<?php 
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
        return "$this->judul, $this->penerbit,  $this->penulis, $this->harga";
    }
}

$produk1 = new produk("naruto","masashi kishimoto","shonen jump",20000);
$produk4 = new produk("free fire","jonin","garena",250000);

echo "<br>";
echo "komik : ". $produk1->getLabel();
echo "<br>";
echo "<hr>";
echo "game : ". $produk4->getLabel();

