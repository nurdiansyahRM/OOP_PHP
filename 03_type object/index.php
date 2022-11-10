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
        return "$this->penerbit, $this->penulis";
    }
}
class cetakinfoproduk{
    public function cetak($produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new produk("naruto","masashi kishimoto","shonen jump",20000);
$produk4 = new produk("free fire","jonin","garena",250000);

echo "<br>";
echo "komik : ". $produk1->getLabel();
echo "<br>";
echo "<hr>";
echo "game : ". $produk4->getLabel();

$infoproduk1 = new cetakinfoproduk();
echo "<br>";
echo  $infoproduk1->cetak($produk1);