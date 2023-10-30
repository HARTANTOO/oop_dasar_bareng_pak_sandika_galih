<?php

//membuat produk $this berguna untuk memanggil property diluat dr method
class Produk
{
  //property
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;
  //method

  //constracor method
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->$harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("uncharted", "Neil Durkman", "Sony Computer", 25000);


//cara kerjanya ambil dari fungsi get label isi dari instansiasi klo tdk ada akan diisi dari difault
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
