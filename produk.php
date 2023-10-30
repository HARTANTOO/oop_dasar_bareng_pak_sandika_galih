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

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

//$produk1 = new Produk();
//$produk1->judul = "naruto";
//var_dump($produk1);

//$produk2 = new Produk();
//$produk2->judul = "pokemon";
//$produk2->tambahProperty = "kiyasi";
//var_dump($produk2);

//buat instansiasi dan isi manual properti satu persatu
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Game : " . $produk4->getLabel();
echo "<br>";
